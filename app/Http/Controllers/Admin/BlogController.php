<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
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

    public function indexBlog()
    {
        $blog = Blog::all();
        return view('admin.blog.index',compact('blog'));
    }

    public function createBlog()
    {
        return view('admin.blog.create');
    }

    public function storeBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        Blog::create([
           'title' => $request->title,
           'desc' => $request->desc,
           'user_id' => auth()->user()->name
        ]);

        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('blog'));
    }

    public function updateBlog($id,Request $request)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $blog->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'user_id' => auth()->user()->name
        ]);

        $notification = array(
            'message' => 'با موفقیت بروزرسانی شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        $notification = array(
            'message' => 'با موفقیت حذف شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
