<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Collaborate;
use App\Models\Course;
use App\Models\OnlineClass;
use App\Models\Option;
use App\Models\Placement;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $cat = Category::where('parent_id',null)->get();
        $courses = Course::where('status_upload','منتشر شده')->paginate(5);
        $users = User::where('is_seller',1)->paginate(3);
        $blogs = Blog::latest()->paginate(3);
        $option = Option::where('id',1)->get();
        $classes = OnlineClass::latest()->paginate(5);
        return view('welcome',compact('cat','courses','users','blogs','option','classes'));
    }

    public function courses()
    {
        $courses = Course::latest()->paginate(8);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        return view('courses',compact('courses','users','cat','teachers'));
    }

    public function coursesCat($id)
    {
        $category = Category::findOrFail($id);
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        $courses = Course::where('status_upload','منتشر شده')->where('category_id',$category->category_name)->paginate(8);
        return view('courses-cat',compact('courses','cat','teachers','users'));
    }

    public function courseShow($id)
    {
        $course = Course::findOrFail($id);
        return view('course.show',compact('course'));
    }

    public function teachers()
    {
        $cat = Category::all();
        $courses = Course::where('status_upload','منتشر شده')->paginate(5);
        $users = User::where('is_seller',1)->paginate(6);
        return view('teachers',compact('users','cat','courses'));
    }

    public function createPlacement()
    {
        return view('placement');
    }

    public function storePlacement(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'family' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'title' => 'required',
            'desc' => 'required',
        ]);

        Placement::create([
            'name' => $request->name,
            'family' => $request->family,
            'email' => $request->email,
            'number' => $request->number,
            'address' => $request->address,
            'title' => $request->title,
            'desc' => $request->desc,
        ]);

        $notification = array(
            'message' => 'با موفقیت ارسال شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
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

    public function allBlog()
    {
        $blogs = Blog::all();
        return view('blog.list',compact('blogs'));
    }

    public function showBlog($id)
    {
        $blogs = Blog::latest()->paginate(5);
        $blog = Blog::findOrFail($id);
        return view('blog.show',compact('blog','blogs'));
    }

    public function classes()
    {
        $users = User::all();
        $cat = Category::where('parent_id',null)->get();
        $teachers = User::where('is_seller',1)->get();
        $classes = OnlineClass::latest()->paginate(10);
        return view('classes',compact('classes','cat','teachers','users'));
    }

    public function classShow($id)
    {
        $class = OnlineClass::findOrFail($id);
        return view('class.show',compact('class'));
    }
}
