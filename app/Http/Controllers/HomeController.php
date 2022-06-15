<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.home');
    }

    public function myCourse()
    {
        return view('dashboard.my-course');
    }

    public function addCourse()
    {
        return view('dashboard.add-course');
    }

    public function myClass()
    {
        return view('dashboard.my-class');
    }

    public function addClass()
    {
        return view('dashboard.add-class');
    }

    public function savedCourse()
    {
        return view('dashboard.saved-course');
    }

    public function myPays()
    {
        return view('dashboard.pays');
    }

    public function myAccount()
    {
        return view('dashboard.my-account');
    }
}
