<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
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

    public function indexLesson()
    {
        $lessons = Lesson::all();
        return view('admin.lessons.index',compact('lessons'));
    }

    public function createLesson()
    {
        return view('admin.lessons.create');
    }

    public function storeLesson(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'number' => 'required|numeric',
        ]);

        Lesson::create([
            'title' => $request->title,
            'number' => $request->number,
            'desc' => $request->desc,
            'seo_title' => $request->seo_title,
            'seo_desc' => $request->seo_desc,
            'l_file' => $request->l_file,
            'l_video' => $request->l_video,
            'time' => $request->time,
            'status' => $request->status,
            'season' => $request->season,
            'l_course' => $request->l_course,
            'l_free' => $request->l_free == 'true' ? 1 : 0,
            'user_id' => auth()->user()->email
        ]);

        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexLesson'))->with($notification);
    }

    public function editLesson()
    {

    }

    public function updateLesson(Request $request)
    {

    }

    public function deleteLesson(Request $request)
    {

    }
}
