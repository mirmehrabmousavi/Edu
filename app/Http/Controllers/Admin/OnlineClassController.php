<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OnlineClass;
use Illuminate\Http\Request;

class OnlineClassController extends Controller
{

    public function index()
    {
        $onlineClasses = OnlineClass::all();
        return view('admin.onlineClass.index', compact('onlineClasses'));
    }

    public function create()
    {
        return view('admin.onlineClass.create');
    }

    public function store(Request $request)
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
            return redirect()->route('onlineClass.index')->with($notification);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $onlineClass = OnlineClass::findOrFail($id);
        return view('onlineClasses.edit',compact('onlineClass'));
    }

    public function update(Request $request, $id)
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
            return redirect()->route('online_classes.index')->with($notification);
        }catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $onlineClass = OnlineClass::findOrFail($id);
            $onlineClass->delete();
            $notification = [
                'message' => 'با موفقیت حذف شد',
                'alert-type' => 'success'
            ];
            return redirect()->route('online_classes.index')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
