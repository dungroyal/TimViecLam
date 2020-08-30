<?php

namespace App\Http\Controllers\Api\NhaTuyenDung\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use JWTFactory;
use JWTAuth;
use JWTAuthException;
use App\Models\NhaTuyenDung;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
        public function __construct()
    {
        Auth::shouldUse('nhatuyendung');
        $this->nhatuyendung = new NhaTuyenDung;
    }
    
    public function login(Request $request)
    {
       
        config()->set( 'auth.defaults.guard', 'nhatuyendung' );
        \Config::set('jwt.user', 'App\Models\NhaTuyenDung'); 
		\Config::set('auth.providers.users.model', \App\Models\NhaTuyenDung::class);
		$credentials = $request->only('email', 'password');
		$token = null;
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Sai thông tin đăng nhập'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Không thể tạo mã'], 500);
        }

        $user = Auth::user();
        return response()->json([
		    'response' => 'success',
		    'result' => [
                'msg'=>"Đăng nhập thành công",
                'permission'=>"Nhà tuyển dụng",
                'status' => true,
                'token' => $token,
                'info' => $user,
            ],
		]);
    }


}