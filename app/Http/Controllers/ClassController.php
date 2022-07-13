<?php

namespace App\Http\Controllers;

use App\Models\OnlineClass;
use Illuminate\Http\Request;

class ClassController
{
    public function myClass()
    {
        $onlineClasses = OnlineClass::where('user_id',auth()->user()->id)->get();
        return view('dashboard.class.my-class', compact('onlineClasses'));
    }

    public function addClass()
    {
        return view('dashboard.class.add-class');
    }

    public function storeClass(Request $request)
    {
        OnlineClass::create([
            'user_id' => $request->user()->id,
            'topic' => $request->topic,
            'start_time' => $request->start_time,
            'duration' => $request->duration,
            'join_url' => $request->join_url,
            'password' => $request->password,
        ]);

        $notification = [
            'message' => 'با موفقیت ذخیره شد',
            'alert-type' => 'success'
        ];
        return redirect()->route('myClass')->with($notification);
    }

    public function showClass($id)
    {
        //
    }

    public function editClass($id)
    {
        $class = OnlineClass::findOrFail($id);
        return view('dashboard.class.edit-class',compact('class'));
    }

    public function updateClass(Request $request, $id)
    {
        try {
            $onlineClass = OnlineClass::findOrFail($id);
            $onlineClass->update([
                'user_id' => $request->user()->id,
                'topic' => $request->topic,
                'start_time' => $request->start_time,
                'duration' => $request->duration,
                'join_url' => $request->join_url,
                'password' => $request->password,
            ]);

            $notification = [
                'message' => 'با موفقیت بروزرسانی شد',
                'alert-type' => 'success'
            ];
            return redirect()->route('myClass')->with($notification);
        }catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function deleteClass($id)
    {
        try {
            $onlineClass = OnlineClass::findOrFail($id);
            $onlineClass->delete();
            $notification = [
                'message' => 'با موفقیت حذف شد',
                'alert-type' => 'success'
            ];
            return redirect()->route('myClass')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
