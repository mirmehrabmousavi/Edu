<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\PurchasedCourse;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;

class PaymentController extends Controller
{
    public function redirectZarin($id)
    {
        try {
            $course = Course::findOrFail($id);
            $invoice = new Invoice();
            $invoice->amount($course->price_off);

            $user = Auth::user();
            $paymentId = md5(uniqid());
            $transaction = $user->transactions()->create([
                'course_id' => $course->id,
                'paid' => $invoice->getAmount(),
                'invoice_detail' => $invoice,
                'payment_id' => $paymentId
            ]);

            $callbackUrl = route('purchase.result',[$course->id,'payment_id' => $paymentId]);

            $payment = Payment::callbackUrl($callbackUrl);

            $payment->config('description','خرید دوره '.$course->title);

            $payment->purchase($invoice,function($driver,$transactionId) use ($transaction) {
                $transaction->transaction_id = $transactionId;
                $transaction->save();
            });
            return $payment->pay()->render();
        }catch (PurchaseFailedException $e) {
            $transaction->transaction_result = $e;
            $transaction->status = Transaction::STATUS_FAILED;
            $transaction->save();
        }
    }

    public function zarinResult(Request $request,$id)
    {
        $course = Course::findOrFail($id);
        if ($request->missing('payment_id')) {
            return view('purchase_result')->with('danger', 'اطلاعات ناقص است');
        }

        $transaction = Transaction::where('payment_id',$request->payment_id)->first();
        if (empty($transaction)) {
            return view('purchase_result')->with('success','');
        }

        if ($transaction->user_id <> Auth::id()) {
            return view('purchase_result')->with('danger', 'failed');
        }

        if ($transaction->course_id <> $course->id) {
            return view('purchase_result')->with('danger','failed');
        }

        if ($transaction->status <> Transaction::STATUS_PENDING) {
            return view('purchase_result')->with('danger','failed');
        }

       try{
           $receipt = Payment::amount($course->price_off)
               ->transactionId($request->Authority)
               ->verify();

           $transaction->transaction_result = $receipt;
           $transaction->status = Transaction::STATUS_SUCCESS;
           $transaction->save();

           PurchasedCourse::create([
               'user_id' => Auth::user()->email,
               'course_id' => $course->id
           ]);

           return view('purchase_result')->with([
               'status' => 1,
               'reference_id' => $receipt->getReferenceId(),
               'course' => $course
           ]);
       }catch (InvalidPaymentException $e) {
            if($e->getCode() < 0) {
                $transaction->status = Transaction::STATUS_FAILED;
                $transaction->transaction_result = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode()
                ];

                $transaction->save();
                return view('purchase_result')->with('danger','failed');
            }
       }

    }
}
