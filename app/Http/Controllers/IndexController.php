<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $user = User::where('is_seller',1)->paginate(4);
        $blogs = Blog::latest()->paginate(3);
        return view('welcome',compact('cat','courses','user','blogs'));
    }

    public function courses()
    {
        $courses = Course::all();
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('courses',compact('courses','users','cat','teachers'));
    }

    public function courseShow($id)
    {
        $course = Course::findOrFail($id);
        return view('course.show',compact('course'));
    }

    public function teachers()
    {
        $cat = Category::all();
        $courses = Course::all();
        $users = User::where('is_seller',1)->get();
        return view('teachers',compact('users','cat','courses'));
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function contactus()
    {
        $admin = User::find(1);
        return view('contactus',compact('admin'));
    }
}
