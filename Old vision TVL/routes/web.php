<?php
use Illuminate\Support\Facades\Route;

// ====================== API ======================

Route::get('/api', 'api\listAPI@index');

// ====================== HOME ======================

Route::get('/', 'homeController@index');
Route::get('/blog','blogController@index');
Route::get('/blogdetail', 'blogController@detail');
Route::get('/job', 'jobController@index');
Route::get('/job/{id}', 'jobController@job_detail');
Route::get('/job/cong-viec/{id}', 'jobController@job_by_congviec');
Route::get('/job/location/{id}', 'jobController@job_by_location');
Route::get('/contact', 'homeController@contact');
Route::get('/about', 'homeController@about');
Route::get('/cong-ty/{id}', 'homeController@cong_ty');

// ====================== Search ======================
Route::post('/search_CongViec', 'jobController@search_CongViec');


// ====================== AUTH ======================
Route::get('/dang-nhap', 'homeController@dang_nhap');
Route::get('/dang-nhap/ntd', 'homeController@dang_nhap_ntd');
Route::get('/dang-nhap/uv', 'homeController@dang_nhap_uv');
Route::post('/uv_login', 'loginController@checklogin_uv');
Route::post('/ntd_login', 'loginController@checklogin_ntd');

Route::get('/dang-ky', 'homeController@dang_ky');
Route::get('/dang-ky/ntd', 'homeController@dang_ky_ntd');
Route::get('/dang-ky/uv', 'homeController@dang_ky_uv');
Route::get('/logout_uv', 'loginController@logout_uv');
Route::get('/logout_ntd', 'loginController@logout_ntd');

// ====================== Nhà tuyển dụng ======================
Route::group(['prefix' => '/nha-tuyen-dung'], function () {
    Route::get('/', 'ntdController@index')->name("nhatuyendung");
    Route::get('/ho-so-cong-viec', 'ntdController@hs_cong_viec')->name("HoSoCongViec");
    Route::get('/ung-tuyen/{id}', 'ntdController@hs_ung_tuyen')->name("HoSoUngTuyen");
    Route::get('/ung-vien/{id}', 'ntdController@ung_vien');
    Route::get('/tin-tuyen-dung', 'ntdController@tin_tuyen_dung');
    Route::get('/add-tuyen-dung', 'ntdController@add_tuyen_dung');
});

// ====================== Ứng viên ======================
Route::group(['prefix' => '/ung-vien'], function () {
    Route::get('/', 'uvController@index');
    Route::get('/ung-tuyen/{id}', 'uvController@ung_tuyen');
    Route::get('/ho-so-ung-vien', 'uvController@ho_so_ung_vien');
});

// ====================== Super Admin TimViecLam ======================
Route::group(['prefix' => '/admin'], function () {
    Route::get('/login', 'adminController@login');
    Route::post('/admin_login', 'loginController@checklogin_admin');
    Route::get('/', 'adminController@index');
});