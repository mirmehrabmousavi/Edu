<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $cat = Category::where('parent_id',null)->get();
        $courses = Course::all();
        $user = User::where('is_seller',1)->get();
        return view('welcome',compact('cat','courses','user'));
    }

    public function courses()
    {
        return view('courses');
    }

    public function courseShow($id)
    {
        $course = Course::findOrFail($id);
        return view('course.show',compact('course'));
    }

    public function teachers()
    {
        return view('teachers');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        return view('contactus');
    }
}
