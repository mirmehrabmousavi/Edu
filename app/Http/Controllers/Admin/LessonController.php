<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonController extends Controller
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

    public function indexLesson()
    {

    }

    public function createLesson()
    {

    }

    public function storeLesson(Request $request)
    {

    }

    public function editLesson()
    {

    }

    public function updateLesson(Request $request)
    {

    }

    public function deleteLesson(Request $request)
    {

    }
}
