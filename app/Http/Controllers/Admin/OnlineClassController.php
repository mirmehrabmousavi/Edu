<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\MeetingZoomTrait;
use App\Models\OnlineClass;
use Illuminate\Http\Request;
use MacsiDigital\Zoom\Facades\Zoom;

class OnlineClassController extends Controller
{
    use MeetingZoomTrait;

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
        $meeting = $this->createMeeting($request);
    dd($meeting);
      /*  OnlineClass::create([
            'user_id' => auth()->user()->id,
            'meeting_id' => $meeting->id,
            'topic' => $request->topic,
            'start_at' => $request->start_time,
            'duration' => $meeting->duration,
            'password' => $meeting->password,
            'start_url' => $meeting->start_url,
            'join_url' => $meeting->join_url,
        ]);
        $notification = [
            'message' => 'با موفقیت ساخته شد',
            'alert-type' => 'success'
        ];
        return redirect()->route('onlineClasses.index')->with($notification);*/
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        try {
            $meeting = Zoom::meeting()->find($request->id);
            $meeting->delete();
            OnlineClass::where('meeting_id', $request->id)->delete();
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
