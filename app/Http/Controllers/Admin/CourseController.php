<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
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

    public function indexCourse()
    {
        $courses = Course::all();
        return view('admin.courses.index',compact('courses'));
    }

    public function createCourse()
    {
        $cat = Category::all();
        return view('admin.courses.create',compact('cat'));
    }

    public function storeFirstCourse(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'b_desc' => 'required',
        ]);

        Course::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'b_desc' => $request->b_desc,
            'price' => $request->price,
            'price_off' => $request->price_off,
            'seo_title' => $request->seo_title,
            'seo_desc' => $request->seo_desc,
            'c_poster' => $request->c_poster,
            'c_file' => $request->c_file,
            'c_demo' => $request->c_demo,
            'c_slider_img' => $request->c_slider_img,
            'c_alt_img' => $request->c_alt_img,
            'time' => $request->time,
            'status' => $request->status,
            'status_upload' => $request->status_upload,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->email
        ]);

        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function editCourse($id)
    {
        $course = Course::findOrFail($id);
        $cat = Category::all();
        $category = Category::findOrFail($id);
        return view('admin.courses.edit',compact('course','cat','category'));
    }

    public function updateCourse($id,Request $request)
    {
        $course = Course::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'b_desc' => 'required',
        ]);

        $course->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'b_desc' => $request->b_desc,
            'price' => $request->price,
            'price_off' => $request->price_off,
            'seo_title' => $request->seo_title,
            'seo_desc' => $request->seo_desc,
            'c_poster' => $request->c_poster,
            'c_file' => $request->c_file,
            'c_demo' => $request->c_demo,
            'c_slider_img' => $request->c_slider_img,
            'c_alt_img' => $request->c_alt_img,
            'time' => $request->time,
            'status' => $request->status,
            'status_upload' => $request->status_upload,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->email
        ]);

        $notification = array(
            'message' => 'با موفقیت بروزرسانی شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        $notification = array(
            'message' => 'با موفقیت حذف شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
