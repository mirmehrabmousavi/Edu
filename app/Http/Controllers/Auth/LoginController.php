<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $notification = array(
            'message' => 'با موفقیت وارد شدید :)',
            'alert-type' => 'success'
        );

        $notificationDanger = array(
            'message' => 'ایمیل یا گذرواژه اشتباه می باشد',
            'alert-type' => 'danger'
        );

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('admin.home')->with($notification);
            }else if(auth()->user()->is_seller == 1) {
                return redirect()->route('home')->with($notification);
            }else{
                return redirect()->route('home')->with($notification);
            }
        }else{
            return redirect()->route('login')
                ->with($notificationDanger);
        }

    }
}
