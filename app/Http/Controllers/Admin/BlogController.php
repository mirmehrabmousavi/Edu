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

        if ($request->file('image')) {
            $file = $request->file('image');
            //@unlink(public_path('upload/admin_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin/blog'),$filename);
        }

        Blog::create([
           'title' => $request->title,
           'image' => $filename,
           'desc' => $request->desc,
           'tags' => $request->tags,
           'user_id' => auth()->user()->email
        ]);

        $notification = array(
            'message' => 'با موفقیت ذخیره شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexBlog'))->with($notification);
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

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/admin/blog/'.$blog->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin/blog'),$filename);
        }

        $blog->update([
            'title' => $request->title,
            'image' => $filename,
            'desc' => $request->desc,
            'tags' => $request->tags,
            'user_id' => auth()->user()->email
        ]);

        $notification = array(
            'message' => 'با موفقیت بروزرسانی شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexBlog'))->with($notification);
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);
        @unlink(public_path('upload/admin/blog/'.$blog->image));
        $blog->delete();

        $notification = array(
            'message' => 'با موفقیت حذف شدید :)',
            'alert-type' => 'success'
        );

        return redirect(route('admin.indexBlog'))->with($notification);
    }


}
