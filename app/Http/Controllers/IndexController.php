<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $cat = Category::where('parent_id',null)->get();
        return view('welcome',compact('cat'));
    }

    public function courses()
    {
        return view('courses');
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
