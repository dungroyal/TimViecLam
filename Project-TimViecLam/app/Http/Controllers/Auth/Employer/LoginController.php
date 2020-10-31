<?php

namespace App\Http\Controllers\Auth\Employer;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::EMPLOYER_HOME;

    public function __construct()
    {
    $this->middleware('guest:employer', ['except' => ['logout']]);
    }
    
    public function showLoginForm()
    {
        return view('auth.employer.login');
    }

    protected function guard()
    {
        return Auth::guard('employer');
    }

    
    
    // public function __construct()
    // {
    //     $this->middleware('guest:employer')->except('logout');
    // }

    // protected function guard()
    // {
    //     return Auth::guard('employer');
    // }

    // public function showLoginForm()
    // {
    //     return view('auth.employer.login');
    // }

    // public function login(Request $request)
    // {
    //     $this->validateLogin($request, [
    //         'email'   => 'required|email',
    //         'password' => 'required|min:6'
    //     ]);

    //     $credentials = ['email' => $request->email, 'password' => $request->password];
    //     $remember_token = $request->get('remember');

    //     if ($res = $this->guard()->attempt($credentials, $remember_token)) {
    //             return redirect()->intended('/nha-tuyen-dung');
    //     }

    //     return back()->withInput($request->only('email', 'remember'));
    // }

    // public function logout()
    // {
    //     Auth::guard('employer')->logout();
    //     return redirect('/');
    // }
}
