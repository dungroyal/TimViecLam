<?php

namespace App\Http\Controllers\Auth\Employer;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Employer;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.employer.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name_company' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employer'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'name_contact' => ['required', 'string', 'min:8', 'max:255'],
            'phone' => ['required'],
            'name_contact' => ['required', 'string', 'min:8'],
            'personnel_size' => ['required'],
            'career' => ['required'],
            'address' => ['required', 'string'],
            'city' => ['required'],
        ]);
    }

    protected function create(array $data)
    {
        return Employer::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'name_company' => $data['name_company'],
            'name_contact' => $data['name_contact'],
            'phone' => $data['phone'],
            'career' => $data['career'],
            'address' => $data['address'],
            'city' => $data['city'],
            'personnel_size' => $data['personnel_size'],
            'address' => $data['address'],
        ]);
    }

    protected function registered(Request $request, $user)
    {
        return "Tạo bảng công ty";
    }

    protected function guard()
    {
        return Auth::guard('employer');
    }

}
