<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advice;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function indexComment()
    {
        $comments = Advice::all();
        return view('admin.comment.index',compact('comments'));
    }
    public function createComment()
    {
        return view('admin.comment.create');
    }
    public function storeComment(Request $request)
    {
        $request->validate([
            'profile' => 'required',
            'name' => 'required',
            'group' => 'required',
            'message' => 'required',
        ]);
        Advice::create([
            'profile' => $request->profile,
            'name' => $request->name,
            'group' => $request->group,
            'message' => $request->message,
        ]);
        $notification = [
            'message' => 'با موفقیت ذخیره شد',
            'alert-type' => 'success'
        ];
        return redirect(route('admin.indexComment'))->with($notification);
    }
    public function editComment($id)
    {
        $comment = Advice::findOrFail($id);
        return view('admin.comment.edit',compact('comment'));
    }
    public function updateComment(Request $request,$id)
    {
        $comment = Advice::findOrFail($id);
        $comment->update([
            'profile' => $request->profile,
            'name' => $request->name,
            'group' => $request->group,
            'message' => $request->message,
        ]);
        $notification = [
            'message' => 'با موفقیت بروزرسانی شد',
            'alert-type' => 'success'
        ];
        return redirect(route('admin.indexComment'))->with($notification);
    }
    public function deleteComment($id)
    {
        $comment = Advice::findOrFail($id);
        $comment->delete();
        $notification = [
            'message' => 'با موفقیت حذف شد',
            'alert-type' => 'success'
        ];
        return redirect(route('admin.indexComment'))->with($notification);
    }
}
