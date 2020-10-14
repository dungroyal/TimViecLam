<?php

namespace App\Http\Controllers\Api\NhaTuyenDung\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTFactory;
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
		$credentials = $request->only('email', 'password');
		$token = null;
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'status' => false,
                    'message' => 'Sai thông tin đăng nhập',
                ], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Không thể tạo mã'], 500);
        }

        return response()->json([
		    'response' => 'success',
		    'result' => [
                'msg'=>"Đăng nhập thành công",
                'permission'=>"Nhà tuyển dụng",
                'status' => true,
                'token' => $token,
                'info' => Auth::user(),
            ],
		]);
    }

    public function logout(Request $request)
    {
        try {
            JWTAuth::invalidate($request->token);
            return response()->json([
                'status' => true,
                'message' => 'Đăng xuất nhà tuyển dụng thành công!'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'status' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    }


}