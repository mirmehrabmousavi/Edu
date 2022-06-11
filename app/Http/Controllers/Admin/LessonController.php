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
