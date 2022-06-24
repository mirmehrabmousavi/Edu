<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notification = [
            'message' => 'خوش آمدید',
            'alert-type' => 'success'
        ];
        return view('dashboard.home')->with($notification);
    }

    public function myCourse()
    {
        $courses = \App\Models\Course::where('user_id', auth()->user()->email)->paginate(5);
        return view('dashboard.my-course', compact('courses'));
    }

    public function addCourse()
    {
        $cat = Category::all();
        return view('dashboard.add-course', compact('cat'));
    }

    public function storeCourse(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'b_desc' => 'required',
        ]);

        if ($request->file('c_poster') && !empty($request->file('c_poster'))) {
            $file = $request->file('c_poster');
            @unlink(public_path('upload/course/' . $request->file('c_poster')));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/course'), $filename);
            $c_poster = '/upload/course/'.$filename;
        }

        if ($request->file('c_demo') && !empty($request->file('c_demo'))) {
            $file = $request->file('c_demo');
            @unlink(public_path('upload/course/' . $request->file('c_demo')));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/course'), $filename);
            $c_demo = '/upload/course/'.$filename;
        }

        Course::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'b_desc' => $request->b_desc,
            'price' => $request->price,
            'price_off' => $request->price_off,
            'd_price' => $request->d_price,
            'd_price_off' => $request->d_price_off,
            'c_poster' => ($c_poster == null) ? '' : $c_poster,
            'c_demo' => ($c_demo == null) ? '' : $c_demo,
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

    public function editCourse($id)
    {
        $course = Course::findOrFail($id);
        $cat = Category::all();
        return view('dashboard.edit-course', compact('course', 'cat'));
    }

    public function updateCourse($id, Request $request)
    {
        $course = Course::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'b_desc' => 'required',
        ]);

        $course->title = $request->title;
        $course->desc = $request->desc;
        $course->b_desc = $request->b_desc;
        $course->price = $request->price;
        $course->price_off = $request->price_off;
        $course->d_price = $request->d_price;
        $course->d_price_off = $request->d_price_off;

        if ($request->file('c_poster') && !empty($request->file('c_poster'))) {
            $file = $request->file('c_poster');
            @unlink(public_path('upload/course/' . $request->file('c_poster')));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/course'), $filename);
            $course['c_poster'] = '/upload/course/'.$filename;
        }

        if ($request->file('c_demo') && !empty($request->file('c_demo'))) {
            $file = $request->file('c_demo');
            @unlink(public_path('upload/course/' . $request->file('c_demo')));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/course'), $filename);
            $course['c_demo'] = '/upload/course/'.$filename;
        }

        $course->time = $request->time;
        $course->status = $request->status;
        $course->status_upload = $request->status_upload;
        $course->language = $request->language;
        $course->category_id = $request->category_id;
        $course->user_id = auth()->user()->email;
        $course->save();

        $notification = array(
            'message' => 'با موفقیت بروزرسانی شدید :)',
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
        $courses = Course::where('user_id',auth()->user()->email)->where('saved',1)->paginate(5);
        return view('dashboard.saved-course',compact('courses'));
    }

    public function addToSavedCourse($id)
    {
        $course = Course::findOrFAil($id);
        $course->update([
           'saved' => 1,
        ]);

        $notification = array(
            'message' => 'به دروه های مورد علاقه افزوده شد',
            'alert-type' => 'success'
        );

        return redirect(route('savedCourse'))->with($notification);
    }

    public function myPays()
    {
        return view('dashboard.pays');
    }

    public function myAccount()
    {
        $user = Auth::user();
        return view('dashboard.my-account',compact('user'));
    }
}
