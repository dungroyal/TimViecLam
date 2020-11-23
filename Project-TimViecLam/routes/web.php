<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/job', 'JobController@index');
Route::get('/job-detail', 'JobController@job_detail');
Route::get('/nha-tuyen-dung', 'HomeController@landingPageEmployer')->name('employer.landingPage');

Route::prefix('job-seeker')->group(function() {
    Route::get('/', 'JobSeeker\HomeController@index')->name('job-seeker.dashboard');
});

Route::prefix('employer')->group(function() {
    Route::get('/', 'Employer\EmployerController@index')->name('employer.dashboard');
    Route::get('/company-information', 'Employer\EmployerController@company')->name('employer.company_info');
    Route::get('/list-job-post', 'Employer\EmployerController@listJobPost')->name('employer.listJobPost');

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