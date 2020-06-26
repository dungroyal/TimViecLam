<?php
use Illuminate\Support\Facades\Route;

// ====================== HOME ======================

Route::get('/', 'homeController@index');
Route::get('/blog', 'blogController@index');
Route::get('/job', 'jobController@index');
Route::get('/job/{id}', 'jobController@job_detail');
Route::get('/contact', 'homeController@contact');
Route::get('/about', 'homeController@about');
Route::get('/cong-ty/{id}', 'homeController@cong_ty');

// ====================== AUTH ======================
Route::get('/dang-nhap', 'homeController@dang_nhap');
Route::get('/dang-nhap/ntd', 'homeController@dang_nhap_ntd');
Route::get('/dang-nhap/uv', 'homeController@dang_nhap_uv');
Route::post('/uv_login', 'loginController@checklogin_uv');
Route::post('/ntd_login', 'loginController@checklogin_ntd');

Route::get('/dang-ky', 'homeController@dang_ky');
Route::get('/dang-ky/ntd', 'homeController@dang_ky_ntd');
Route::get('/dang-ky/uv', 'homeController@dang_ky_uv');

// ====================== Nhà tuyển dụng ======================
Route::group(['prefix' => '/nha-tuyen-dung'], function () {
    Route::get('/', 'ntdController@index')->name("nhatuyendung");
    Route::get('/ho-so-cong-viec', 'ntdController@hs_cong_viec')->name("HoSoCongViec");
    Route::get('/ung-tuyen/{id}', 'ntdController@hs_ung_tuyen')->name("HoSoUngTuyen");
});

// ====================== Ứng viên ======================
Route::group(['prefix' => '/ung-vien'], function () {
    Route::get('/', 'uvController@index');
    Route::get('/ung-tuyen/{id}', 'uvController@ung_tuyen');
});

// ====================== Super Admin TimViecLam ======================
Route::group(['prefix' => '/admin'], function () {
    Route::get('/login', 'adminController@login');
    Route::post('/admin_login', 'loginController@checklogin_admin');
    Route::get('/', 'adminController@index');
});




// Route::get('/getPassword', function () {
//     return Hash::make('matkhau');
// });

Route::get('/logout_uv', 'loginController@logout_uv');
Route::get('/logout_ntd', 'loginController@logout_ntd');