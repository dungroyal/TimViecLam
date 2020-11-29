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
Route::get('/jobData', 'JobController@AllJobs')->name('job-data');
Route::get('/job-detail/{id}', 'JobController@job_detail')->name('job-detail');
Route::get('/job-detail-ajax/{id}', 'JobController@job_detail_ajax');
Route::get('/nha-tuyen-dung', 'HomeController@landingPageEmployer')->name('employer.landingPage');

Route::prefix('job-seeker')->group(function() {
    Route::get('/', 'JobSeeker\HomeController@index')->name('job-seeker.dashboard');
    Route::get('/account', 'JobSeeker\HomeController@account')->name('job-seeker.account');
    Route::get('/profile-manager', 'JobSeeker\ProfileController@index')->name('job-seeker.profile_manager');
    Route::get('/profile-attached', 'JobSeeker\ProfileController@profileAttached')->name('job-seeker.profile_attached');
    Route::get('/complete-profile/step/1', 'JobSeeker\ProfileController@complete_profile1')->name('job-seeker.profile.step1');
    Route::get('/complete-profile/step/2', 'JobSeeker\ProfileController@complete_profile2')->name('job-seeker.profile.step2');
    Route::get('/complete-profile/step/3', 'JobSeeker\ProfileController@complete_profile3')->name('job-seeker.profile.step3');
    Route::get('/complete-profile/step/4', 'JobSeeker\ProfileController@complete_profile4')->name('job-seeker.profile.step4');
    Route::get('/complete-profile/step/5', 'JobSeeker\ProfileController@complete_profile5')->name('job-seeker.profile.step5');
});

Route::prefix('employer')->group(function() {
    Route::get('/', 'Employer\EmployerController@index')->name('employer.dashboard');
    Route::get('/company-information', 'Employer\EmployerController@company')->name('employer.company_info');
    Route::get('/list-job-post', 'Employer\JobController@listJobPost')->name('employer.listJobPost');
    Route::get('/edit-job-post/{id}', 'Employer\JobController@editJobPostForm')->name('employer.editJobPost');
    Route::post('/del-job-post', 'Employer\JobController@delJobPost')->name('employer.delJobPost');
    Route::get('/anyData', 'Employer\JobController@anyData')->name('jobs.anyData');
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

Route::prefix('tvl')->group(function() {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/all-company', 'Admin\AdminController@allCompany')->name('admin.all.company');
    Route::get('/all-company-data', 'Admin\AdminController@allCompanyData')->name('admin.all.company.data');
    Route::get('/new-company', 'Admin\AdminController@NewCompany')->name('admin.new.company');
    Route::get('/new-company-data', 'Admin\AdminController@NewCompanyData')->name('admin.new.company.data');

    Route::get('/all-job-seeker', 'Admin\AdminController@allJobSeeker')->name('admin.all.job_seeker');
    Route::get('/all-job-seeker-data', 'Admin\AdminController@allJobSeekerData')->name('admin.all.job_seeker.data');
    Route::get('/new-job-seeker', 'Admin\AdminController@NewJobSeeker')->name('admin.new.job_seeker');
    Route::get('/new-job-seeker-data', 'Admin\AdminController@NewJobSeekerData')->name('admin.new.job_seeker.data');
    
    Route::get('/account-employer', 'Admin\AccountController@AccountEmployer')->name('admin.account.employer');
    Route::get('/account-employer-data', 'Admin\AccountController@AccountEmployerData')->name('admin.account.employer.data');
    Route::get('/account-job-seeker', 'Admin\AccountController@AccountJobSeeker')->name('admin.account.job_seeker');
    Route::get('/account-job-seeker-data', 'Admin\AccountController@AccountJobSeekerData')->name('admin.account.job_seeker.data');
    Route::get('/account-admin', 'Admin\AccountController@AccountAdmin')->name('admin.account.admin');
    Route::get('/account-admin-data', 'Admin\AccountController@AccountAdminData')->name('admin.account.admin.data');

    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
});



Route::get('/searchJobView/{val}', 'HomeController@searchJobView')->name('searchJobView');