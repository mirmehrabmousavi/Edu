<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.courses.create');
    }

    public function storeFirstCourse(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'desc' => 'required',
            'b_desc' => 'required',
        ]);

        $data = new Course();
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->desc = $request->desc;
        $data->b_desc = $request->b_desc;
        $data->price = $request->price;
        $data->price_off = $request->price_off;
        $data->seo_title = $request->seo_title;
        $data->seo_desc = $request->seo_desc;
        $data->time = $request->time;
        $data->status = $request->status;
        $data->status_upload = $request->status_upload;


        if ($request->file('c_poster')) {
            $file = $request->file('c_poster');
            @unlink(public_path('upload/course/'.$request->id.$data->c_poster));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course/'.$request->id),$filename);
            $data['c_poster'] = $filename;
        }
        if ($request->file('c_file')) {
            $file = $request->file('c_file');
            @unlink(public_path('upload/course/'.$request->id.$data->c_file));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course/'.$request->id),$filename);
            $data['c_file'] = $filename;
        }
        if ($request->file('c_demo')) {
            $file = $request->file('c_demo');
            @unlink(public_path('upload/course/'.$request->id.$data->c_demo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course/'.$request->id),$filename);
            $data['c_demo'] = $filename;
        }
        if ($request->file('c_slider_img')) {
            $file = $request->file('c_slider_img');
            @unlink(public_path('upload/course/'.$request->id.$data->c_slider_img));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course/'.$request->id),$filename);
            $data['c_slider_img'] = $filename;
        }
        if ($request->file('c_alt_img')) {
            $file = $request->file('c_alt_img');
            @unlink(public_path('upload/course/'.$request->id.$data->c_alt_img));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/course/'.$request->id),$filename);
            $data['c_alt_img'] = $filename;
        }


        $data->save();

        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function editCourse($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.courses.edit',compact('course'));
    }

    public function updateCourse(Request $request)
    {

    }

    public function deleteCourse(Request $request)
    {

    }
}
