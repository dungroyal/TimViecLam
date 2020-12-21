<?php

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response as FacadesResponse;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes(['verify' => true]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/job', 'JobController@index')->name('job');
Route::get('/searchJobView/{val}', 'HomeController@searchJobView')->name('searchJobView');
Route::get('/all-job', 'JobController@allJob')->name('all-job');
Route::get('/search-job', 'JobController@searchJob')->name('search-job');
Route::get('/job-detail/{id}', 'JobController@job_detail')->name('job-detail');
Route::get('/job-detail-ajax/{id}', 'JobController@job_detail_ajax');
Route::get('/nha-tuyen-dung', 'HomeController@landingPageEmployer')->name('employer.landingPage');
Route::get('/company/{id}', 'HomeController@company')->name('company');
Route::match(['get', 'post'],'/profile', 'HomeController@profiles')->name('all-profile');
Route::get('/profile/{id}', 'HomeController@profileDetail')->name('profile-detail');


Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/blog-detail', 'HomeController@blogDetail')->name('blog.detail');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/privacy', 'HomeController@privacy')->name('privacy');
Route::get('/terms-of-use', 'HomeController@TermsOfUse')->name('termsOfUse');
Route::get('/security', 'HomeController@security')->name('security');

// Người tìm việc
Route::prefix('job-seeker')->group(function() {
    Route::get('/', 'JobSeeker\HomeController@index')->name('job-seeker.dashboard');
    Route::get('/job-suitable','JobSeeker\JobController@jobSuitable')->name('job-seeker.job-suitable');
    Route::post('/applications/{id}','JobSeeker\JobController@applyJob')->name('applyJob');
    Route::get('/saveJob/{id}','JobSeeker\JobController@saveJob')->name('saveJob');
    Route::get('/list-apply-job','JobSeeker\JobController@listApplyJob')->name('listApplyJob');
    Route::match(['get', 'post'],'/list-save-job','JobSeeker\JobController@listSaveJob')->name('listSaveJob');
    Route::get('/list-apply-job-data','JobSeeker\JobController@listApplyJobData')->name('listApplyJobData');
    Route::get('/account', 'JobSeeker\HomeController@account')->name('job-seeker.account');
    Route::get('/profile-manager', 'JobSeeker\ProfileController@index')->name('job-seeker.profile_manager');
    Route::post('/getProfileById', 'JobSeeker\ProfileController@getProfileById')->name('job-seeker.getProfileById');
    Route::post('/getExperienceById', 'JobSeeker\ProfileController@getExperienceById')->name('job-seeker.getExperienceById');
    Route::get('/profile-attached', 'JobSeeker\ProfileController@profileAttached')->name('job-seeker.profile_attached');
    Route::match(['get', 'post'],'/upload-attached-profile', 'JobSeeker\ProfileController@attachedProfile')->name('job-seeker.profile_attached_upload');
    Route::get('/download-attached-profile', 'JobSeeker\ProfileController@attachedProfileDownload')->name('job-seeker.profile_attached_download');
    Route::get('/delete-attached-profile', 'JobSeeker\ProfileController@attachedProfileDelete')->name('job-seeker.profile_attached_delete');
    Route::match(['get', 'post'],'/complete-profile/step/1', 'JobSeeker\ProfileController@complete_profile1')->name('job-seeker.profile.step1');
    Route::match(['get', 'post'],'/complete-profile/step/2', 'JobSeeker\ProfileController@complete_profile2')->name('job-seeker.profile.step2');
    Route::match(['get', 'post'],'/complete-profile/step/3', 'JobSeeker\ProfileController@complete_profile3')->name('job-seeker.profile.step3');
    Route::match(['get', 'post'],'/complete-profile/step/3/delete', 'JobSeeker\ProfileController@complete_profile3_delete')->name('job-seeker.profile.step3.delete');
    Route::match(['get', 'post'],'/complete-profile/step/4', 'JobSeeker\ProfileController@complete_profile4')->name('job-seeker.profile.step4');
    Route::match(['get', 'post'],'/complete-profile/step/4/delete', 'JobSeeker\ProfileController@complete_profile4_delete')->name('job-seeker.profile.step4.delete');
    Route::match(['get', 'post'],'/complete-profile/step/5', 'JobSeeker\ProfileController@complete_profile5')->name('job-seeker.profile.step5');
    Route::get('/complete-profile/public', 'JobSeeker\ProfileController@complete_profile_public')->name('job-seeker.profile.public');
    Route::post('/complete-profile/uploadAvatar', 'JobSeeker\ProfileController@uploadAvatars')->name('job-seeker.profile.uploadAvatars');
});

// Nhà tuyển dụng
Route::prefix('employer')->group(function() {
    Route::get('/', 'Employer\EmployerController@index')->name('employer.dashboard');
    Route::post('/uploadLogo', 'Employer\EmployerController@uploadLogo')->name('employer.uploadLogo');
    Route::post('/UploadBusinessLicense', 'Employer\EmployerController@uploadBusinessLicense')->name('employer.UploadBusinessLicense');
    Route::get('/downloadBusinessLicense', 'Employer\EmployerController@downloadBusinessLicense')->name('employer.downloadBusinessLicense');
    Route::get('/deleteBusinessLicense', 'Employer\EmployerController@deleteBusinessLicense')->name('employer.deleteBusinessLicense');
    Route::match(['get', 'post'],'/company-information', 'Employer\EmployerController@company')->name('employer.company_info');
    Route::get('/list-job-post', 'Employer\JobController@listJobPost')->name('employer.listJobPost');
    Route::get('/edit-job-post/{id}', 'Employer\JobController@editJobPostForm')->name('employer.editJobPost');
    Route::post('/del-job-post', 'Employer\JobController@delJobPost')->name('employer.delJobPost');
    Route::get('/anyData', 'Employer\JobController@anyData')->name('jobs.anyData');
    Route::get('/create-job-post', 'Employer\JobController@showCreateJobPostForm')->name('employer.showCreateJobPostForm');
    Route::post('/create_job_post', 'Employer\JobController@store')->name('employer.createJobPost');
    Route::get('/job-seeker-by-id/{id}', 'Employer\EmployerController@jobSeekerById');
    Route::get('/list-profile-apply', 'Employer\EmployerController@listProfileApply')->name('employer.listProfileApply');
    Route::get('/list-profile-apply-data', 'Employer\EmployerController@listProfileApplyData')->name('employer.listProfileApply.data');
    Route::get('/login', 'Auth\Employer\LoginController@showLoginForm')->name('employer.login');
    Route::post('/login', 'Auth\Employer\LoginController@login')->name('employer.login.submit');
    Route::get('/logout', 'Auth\Employer\LoginController@logout')->name('employer.logout');
    Route::get('/register', 'Auth\Employer\RegisterController@showRegistrationForm')->name('employer.register');
    Route::post('/register', 'Auth\Employer\RegisterController@register')->name('employer.register.submit');
    Route::post('password/email', 'Auth\Employer\ForgotPasswordController@sendResetLinkEmail')->name('employer.password.email');
    Route::get('password/reset', 'Auth\Employer\ForgotPasswordController@showLinkRequestForm')->name('employer.password.request');
    Route::post('password/reset', 'Auth\Employer\ResetPasswordController@reset')->name('employer.password.update');
    Route::get('/password/reset/{token}', 'Auth\Employer\ResetPasswordController@showResetForm')->name('employer.password.reset');
});

// Quản trị TimViecLam
Route::prefix('tvl')->group(function() {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::match(['get', 'post'],'/system', 'Admin\AdminController@system')->name('admin.system');
    Route::match(['get', 'post'],'/category/type-job', 'Admin\AdminController@categoryTypeJob')->name('admin.category.type_job');
    Route::match(['get', 'post'],'/category/career', 'Admin\AdminController@categoryCareer')->name('admin.category.career');
    Route::get('/all-job-post', 'Admin\AdminController@allJobPost')->name('admin.all.job_post');
    Route::get('/new-job-post', 'Admin\AdminController@newJobPost')->name('admin.new.job_post');
    Route::get('/check-job-post/{id}', 'Admin\AdminController@checkJobPost')->name('admin.check.job_post');
    Route::get('/accept-job-post/{id}', 'Admin\AdminController@acceptJobPost')->name('admin.accept.job_post');
    Route::post('/not-accept-job-post', 'Admin\AdminController@notAcceptJobPost')->name('admin.notAccept.job_post');
    Route::get('/all-company', 'Admin\AdminController@allCompany')->name('admin.all.company');
    Route::get('/all-company-data', 'Admin\AdminController@allCompanyData')->name('admin.all.company.data');
    Route::get('/new-company-data', 'Admin\AdminController@newCompanyData')->name('admin.new.company.data');
    Route::get('/check-company/{id}', 'Admin\AdminController@checkCompany')->name('admin.check.company');
    Route::get('/accept-company/{id}', 'Admin\AdminController@acceptCompany')->name('admin.accept.company');
    Route::post('/not-accept-company', 'Admin\AdminController@notAcceptCompany')->name('admin.notAccept.company');
    Route::get('/new-company', 'Admin\AdminController@NewCompany')->name('admin.new.company');
    Route::get('/new-company-data', 'Admin\AdminController@NewCompanyData')->name('admin.new.company.data');
    Route::get('/all-job-profile', 'Admin\AdminController@allJobSeeker')->name('admin.all.job_seeker');
    Route::get('/all-job-seeker-data', 'Admin\AdminController@allJobSeekerData')->name('admin.all.job_seeker.data');
    Route::get('/new-job-profile', 'Admin\AdminController@NewJobSeeker')->name('admin.new.job_seeker');
    Route::get('/new-job-seeker-data', 'Admin\AdminController@NewJobSeekerData')->name('admin.new.job_seeker.data');
    Route::get('/check-job-seeker/{id}', 'Admin\AdminController@checkJobSeeker')->name('admin.check.job_seeker');
    Route::get('/accept-profile/{id}', 'Admin\AdminController@acceptProfile')->name('admin.accept.profile');
    Route::post('/not-accept-profile', 'Admin\AdminController@notAcceptProfile')->name('admin.notAccept.profile');
    Route::get('/account-employer', 'Admin\AccountController@AccountEmployer')->name('admin.account.employer');
    Route::get('/account-employer-data', 'Admin\AccountController@AccountEmployerData')->name('admin.account.employer.data');
    Route::get('/account-job-seeker', 'Admin\AccountController@AccountJobSeeker')->name('admin.account.job_seeker');
    Route::get('/account-job-seeker-data', 'Admin\AccountController@AccountJobSeekerData')->name('admin.account.job_seeker.data');
    Route::get('/account-admin', 'Admin\AccountController@AccountAdmin')->name('admin.account.admin');
    Route::get('/account-admin-data', 'Admin\AccountController@AccountAdminData')->name('admin.account.admin.data');
    Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::get('/forgot-password', 'Auth\Admin\LoginController@showResetForm')->name('admin.forgot_password');
    Route::post('/login', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\Admin\LoginController@logout')->name('admin.logout');
});
