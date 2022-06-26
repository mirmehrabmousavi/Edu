<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index()
    {
        $seasons = Season::all();
        return view('admin.season.index',compact('seasons'));
    }

    public function create()
    {
        return view('admin.season.create');
    }

    public function store(Request $request)
    {
        $request->validate([
           'title' => 'required'
        ]);

        Season::create([
           'title' => $request->title,
           'course' => $request->course,
           'user_id' => auth()->user()->email,
        ]);

        $notification = [
          'message' => 'با موفقیت ذخیره شد',
            'alert-type' => 'success'
        ];

        return redirect(route('admin.indexSeason'))->with($notification);
    }

    /*public function show($id)
    {
        $season = Season::findOrFail($id);
        return view('',compact('season'));
    }*/

    public function edit($id)
    {
        $season = Season::findOrFail($id);
        return view('admin.season.edit',compact('season'));
    }

    public function update($id,Request $request)
    {
        $season = Season::findOrFail($id);

        $request->validate([
            'title' => 'required'
        ]);

        $season->update([
            'title' => $request->title,
            'course' => $request->course,
            'user_id' => auth()->user()->email,
        ]);

        $notification = [
            'message' => 'با موفقیت بروزرسانی شد',
            'alert-type' => 'success'
        ];

        return redirect(route('admin.indexSeason'))->with($notification);
    }

    public function delete($id)
    {
        $season = Season::findOrFail($id);
        $season->delete();
        $notification = [
            'message' => 'با موفقیت حذف شد',
            'alert-type' => 'success',
        ];
        return redirect(route('admin.indexSeason'))->with($notification);
    }
}
