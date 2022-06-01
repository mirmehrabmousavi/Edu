<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function indexUser()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
}
