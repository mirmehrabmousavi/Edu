<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

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
        return view('admin.home');
    }

    public function settings()
    {
        $admin = User::where('is_admin',1)->first();
        return view('admin.settings',compact('admin'));
    }

    public function settingsUpdate(Request $request)
    {
        $data = User::find(1);
        $data->fname = $request->fname;
        $data->lname = $request->lname;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->postcode = $request->postcode;
        $data->address = $request->address;

        if ($request->file('profile')) {
            $file = $request->file('profile');
            @unlink(public_path('upload/admin_images/'.$data->profile));
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
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = User::find(1)->password;
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
}
