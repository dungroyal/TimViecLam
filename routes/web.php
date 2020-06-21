<?php

use Illuminate\Support\Facades\Route;

// ====================== HOME ======================

Route::get('/', 'homeController@index');
Route::get('/blog', 'blogController@index');
Route::get('/job', 'jobController@index');
Route::get('/contact', 'homeController@contact');
Route::get('/about', 'homeController@about');
Route::get('/product/{id}', 'productController@detail');
Route::get('/category/{id}', 'productController@product_by_id');
Route::post('/login', 'homeController@login');
Route::post('/search', 'productController@search');


Route::get('/cong-ty', 'homeController@cong_ty');

// ====================== AUTH ======================
Route::get('/dang-nhap', 'homeController@dang_nhap');
Route::get('/dang-nhap/ntd', 'homeController@dang_nhap_ntd');
Route::get('/dang-nhap/uv', 'homeController@dang_nhap_uv');

Route::get('/dang-ky', 'homeController@dang_ky');
Route::get('/dang-ky/ntd', 'homeController@dang_ky_ntd');
Route::get('/dang-ky/uv', 'homeController@dang_ky_uv');

// ====================== Nhà tuyển dụng ======================
Route::group(['prefix' => '/nha-tuyen-dung'], function () {
    Route::get('/', 'ntdController@index');
    
});
Route::get('/dangtuyendung', 'ntdController@tuyendungmoi');
Route::get('/alltin', 'ntdController@alltintuyendung');
Route::get('/searchungvien', 'ntdController@searchvien');
Route::get('/hsdaluu', 'ntdController@hsdaluu');
Route::get('/hsdaxem', 'ntdController@hsdaxem');
Route::get('/hsungtuyen', 'ntdController@hsungtuyen');
Route::get('/thongtin', 'ntdController@thongtin');
Route::get('/doimatkhau', 'ntdController@matkhau');

// ====================== Ứng viên ======================
Route::group(['prefix' => '/ung-vien'], function () {
    Route::get('/', 'uvController@index');
});
Route::get('/quan-ly-ho-so', 'uvController@quanlyhs');
Route::get('/viec-lam-da-ung-tuyen', 'uvController@ungtuyen');
Route::get('/viec-lam-da-luu', 'uvController@daluu');
Route::get('/viec-lam-da-xem', 'uvController@daxem');
Route::get('/cap-nhat-thong-tin', 'uvController@thongtin');
Route::get('/doi-mat-khau', 'uvController@doimatkhau');

// hhvh