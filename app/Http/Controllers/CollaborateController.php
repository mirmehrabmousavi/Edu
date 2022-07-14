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

            $data = new Collaborate();
           $data->name = $request->name;
           $data->family = $request->family;
           $data->email = $request->email;
           $data->number = $request->number;
           $data->address = $request->address;
           $data->title = $request->title;
           $data->desc = $request->desc;
           $data->resume = $request->resume;
        if ($request->file('file')) {
            $file = $request->file('file');
            @unlink(public_path('upload/collaborate'.$data->file));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/collaborate'),$filename);
            $data['file'] = $filename;
        }
        $data->save();

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
