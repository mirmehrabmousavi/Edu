<?php

namespace App\Http\Controllers;

use App\Models\Collaborate;
use Illuminate\Http\Request;

class CollaborateController extends Controller
{
    public function createCollaborate()
    {
        return view('collaborate');
    }

    public function storeCollaborate(Request $request)
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

        Collaborate::create([
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

    public function showCollaborate()
    {
        $collaborate = Collaborate::all();
        return view('admin.collaborate.index',compact('collaborate'));
    }

    public function singleCollaborate($id)
    {
        $coll = Collaborate::findOrFail($id);
        return view('admin.collaborate.show',compact('coll'));
    }

    public function deleteCollaborate($id)
    {
        $collaborate = Collaborate::findOrFail($id);
        $collaborate->delete();

        $notification = array(
            'message' => 'با موفقیت حذف شدید :)',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
