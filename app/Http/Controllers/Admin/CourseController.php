<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function indexCourse()
    {
        $courses = Course::all();
        return view('admin.courses.index',compact('courses'));
    }

    public function createCourse()
    {
        return view('admin.courses.create');
    }

    public function storeCourse(Request $request)
    {

    }

    public function editCourse()
    {

    }

    public function updateCourse(Request $request)
    {

    }

    public function deleteCourse(Request $request)
    {

    }
}
