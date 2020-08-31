<?php

namespace App\Http\Controllers\Api\UngVien\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UngVien;

class RegisterController extends Controller
{
    public function register(Request $request) {
        //Kiểm tra tính hợp lệ
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:ung_vien',
            'password' => 'required|string|confirmed|min:6',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        //Tạo tài khoản
        $user = UngVien::create(array_merge(
                    $validator->validated(),
                    ['password' => bcrypt($request->password)]
                ));
                
        return response()->json([
            'message' => 'Đăng kí ứng viên thành công',
            'user' => $user,
        ], 201);
    }
}
