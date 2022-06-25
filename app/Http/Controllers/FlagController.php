<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;

class FlagController extends Controller
{
    public function courseEnglish()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','english')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
    public function courseSpanish()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','spanish')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
    public function courseFrench()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','french')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
    public function courseRussian()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','russian')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
    public function courseTurkish()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','turkish')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
    public function courseChinese()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','chinese')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
    public function courseItaly()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','italy')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
    public function courseGermany()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','germany')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
    public function courseArabic()
    {
        $courses = Course::where('status_upload','منتشر شده')->where('language','arabic')->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('course-flag',compact('courses','users','cat','teachers'));
    }
}
