<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Route đăng nhập
Route::post('admin/login', 'Api\Admin\Auth\LoginController@login');
Route::post('ung-vien/login', 'Api\UngVien\Auth\LoginController@login');
Route::post('nha-tuyen-dung/login', 'Api\NhaTuyenDung\Auth\LoginController@login');

// Route đăng kí


// Admin
Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admin', 'jwt.auth']], function () {
    Route::get('/me', function () {
        return response()->json([
		    'guard' => 'Admin',
		    'me' => Auth::user(),
		]);
    });
});

// Route dành cho ứng viên
Route::group(['prefix' => 'ung-vien', 'middleware' => ['assign.guard:ungvien', 'jwt.auth']], function () {
    Route::get('/me', function () {
        return response()->json([
		    'guard' => 'Ứng viên',
		    'me' => Auth::user(),
		]);
    });
});

// Route dành Nhà tuyển dụng
Route::group(['prefix' => 'nha-tuyen-dung', 'middleware' => ['assign.guard:nhatuyendung', 'jwt.auth']], function () {
    Route::get('/me', function () {
        return response()->json([
		    'guard' => 'Nhà tuyển dụng',
		    'me' => Auth::user(),
		]);
    });
});
