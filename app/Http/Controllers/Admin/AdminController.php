<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Placement;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $teachers = User::where('is_seller',1)->get();
        $courses = Course::all();
        $tickets = Ticket::all();
        $categories = Category::all();
        $lessons = Lesson::all();
        return view('admin.home',compact('users','teachers','courses','tickets','categories','lessons'));
    }

    public function settings()
    {
        $admin = Auth::user();
        return view('admin.settings',compact('admin'));
    }

    public function settingsUpdate(Request $request)
    {
        $data = Auth::user();
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->postcode = $request->postcode;
        $data->address = $request->address;
        $data->job = $request->job;
        $data->bio = $request->bio;


        if ($request->file('profile')) {
            $file = $request->file('profile');
            @unlink(public_path('upload/admin/settings/'.$data->profile));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'تنظیمات با موفقیت بروزرسانی شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.settings')->with($notification);
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $admin = User::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();

            $notification = array(
                'message' => 'گذرواژه با موفقیت بروزرسانی شد.',
                'alert-type' => 'success'
            );
            return redirect()->route('logout')->with($notification);
        }else{
            return redirect()->back();
        }
    }

    public function createSocial(Request $request)
    {
        $request->validate([
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',
            'instagram' => 'required',
        ]);

        $data = Auth::user();
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->linkedin = $request->linkedin;
        $data->instagram = $request->instagram;
        $data->save();

        $notification = array(
            'message' => 'تنظیمات با موفقیت ذخیره شد.',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.settings')->with($notification);
    }


    public function showPlacement()
    {
        $placement = Placement::all();
        return view('admin.placement.index',compact('placement'));
    }

    public function singlePlacement($id)
    {
        $val = Placement::findOrFail($id);
        return view('admin.placement.show',compact('val'));
    }

    public function deletePlacement($id)
    {
        $placement = Placement::findOrFail($id);
        $placement->delete();

        $notification = array(
            'message' => 'با موفقیت حذف شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function pays()
    {
        $transaction = Transaction::latest()->paginate(15);
        return view('admin.pays',compact('transaction'));
    }

    public function fileManager()
    {
        return view('admin.file-manager');
    }
}
