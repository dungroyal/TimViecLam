<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/job', 'JobController@index');
Route::get('/nha-tuyen-dung', 'HomeController@landingPageEmployer')->name('employer.landingPage');


Route::prefix('job-seeker')->group(function() {
    Route::get('/', 'JobSeeker\HomeController@index')->name('job-seeker.dashboard');
});

Route::prefix('employer')->group(function() {
    Route::get('/', 'Employer\EmployerController@index')->name('employer.dashboard');
    Route::get('/company-information', 'Employer\EmployerController@company')->name('employer.company_info');

    Route::get('/create-job-post', 'Employer\JobController@showCreateJobPostForm')->name('employer.showCreateJobPostForm');
    Route::post('/create_job_post', 'Employer\JobController@store')->name('employer.createJobPost');

    // Login Logout Routes
    Route::get('/login', 'Auth\Employer\LoginController@showLoginForm')->name('employer.login');
    Route::post('/login', 'Auth\Employer\LoginController@login')->name('employer.login.submit');
    Route::get('/logout', 'Auth\Employer\LoginController@logout')->name('employer.logout');
    Route::get('/register', 'Auth\Employer\RegisterController@showRegistrationForm')->name('employer.register');
    Route::post('/register', 'Auth\Employer\RegisterController@register')->name('employer.register.submit');
    // Password Resets Routes
    Route::post('password/email', 'Auth\Employer\ForgotPasswordController@sendResetLinkEmail')->name('employer.password.email');
    Route::get('password/reset', 'Auth\Employer\ForgotPasswordController@showLinkRequestForm')->name('employer.password.request');
    Route::post('password/reset', 'Auth\Employer\ResetPasswordController@reset')->name('employer.password.update');
    Route::get('/password/reset/{token}', 'Auth\Employer\ResetPasswordController@showResetForm')->name('employer.password.reset');
});

// Route::prefix('admin')->group(function() {
//     Route::get('/', 'admin\HomeController@index')->name('admin.dashboard');

//     // Login Logout Routes
//     Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
//     Route::post('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');

//     // Password Resets Routes
//     Route::post('password/email', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//     Route::get('password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//     Route::post('password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.update');
//     Route::get('/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
// });
