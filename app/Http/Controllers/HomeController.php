<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.home');
    }

    public function myCourse()
    {
        return view('dashboard.my-course');
    }

    public function addCourse()
    {
        $cat = Category::all();
        return view('dashboard.add-course',compact('cat'));
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'b_desc' => 'required',
        ]);

        if ($request->file('c_poster')) {
            $file = $request->file('c_poster');
            @unlink(public_path('upload/course/'.$request->file('c_poster')));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course'),$filename);
            $c_poster = $filename;
        }

        if ($request->file('c_demo')) {
            $file = $request->file('c_demo');
            @unlink(public_path('upload/course/'.$request->file('c_demo')));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course'),$filename);
            $c_demo = $filename;
        }

        Course::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'b_desc' => $request->b_desc,
            'price' => $request->price,
            'price_off' => $request->price_off,
            'd_price' => $request->d_price,
            'd_price_off' => $request->d_price_off,
            'c_poster' => $c_poster,
            'c_demo' => $c_demo,
            'time' => $request->time,
            'status' => $request->status,
            'status_upload' => $request->status_upload,
            'language' => $request->language,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->email
        ]);

        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('myCourse'))->with($notification);
    }

    public function myClass()
    {
        return view('dashboard.my-class');
    }

    public function addClass()
    {
        return view('dashboard.add-class');
    }

    public function savedCourse()
    {
        return view('dashboard.saved-course');
    }

    public function myPays()
    {
        return view('dashboard.pays');
    }

    public function myAccount()
    {
        return view('dashboard.my-account');
    }
}
