<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\Auth\LoginController;
use App\Http\Controllers\company\JobController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\job\JobTypeController;
use App\Http\Controllers\admin\Auth\VerificationController;
use App\Http\Controllers\admin\job\IndustryController;
use App\Http\Controllers\admin\Auth\ResetPasswordController;
use App\Http\Controllers\admin\job\SeniorityController;
use App\Http\Controllers\admin\Auth\ForgotPasswordController;
use App\Http\Controllers\company\CompanyAuthController;
use App\Http\Controllers\admin\job\JobExperieneController;
use App\Http\Controllers\frontend\JobController as FrontJobController;
use App\Http\Controllers\admin\job\JobController as AdminJobController;
// Web Routes
Route::name('front.')->group(function () {
    Route::get('/', function () {
        return view('frontend.homepage');
    })->name('home');

    Route::get('jobs', [FrontJobController::class, 'index'])->name('jobs');
    Route::get('jobs/apply/{id}', [FrontJobController::class, 'show'])->name('jobs.show');
});

// ->middleware("auth")
// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.dashboard');
    })->name('dashboard');

    Route::resource('permissions', PermissionController::class);
    Route::get('permissions/{id}/delete', [PermissionController::class, 'destroy']);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{id}/delete', [RoleController::class, 'destroy']);
    Route::resource('industry', IndustryController::class);
    Route::get('industry/{id}/delete', [IndustryController::class, 'destroy']);
    Route::resource('users', UserController::class);
    Route::get('users/{id}/delete', [UserController::class, 'destroy']);
    Route::resource('job_seniorities', SeniorityController::class);
    Route::get('job_seniorities/{id}/delete', [SeniorityController::class, 'destroy']);
    Route::resource('job_experiences', JobExperieneController::class);
    Route::get('job_experiences/{id}/delete', [JobExperieneController::class, 'destroy']);
    Route::resource('job_types', JobTypeController::class);
    Route::get('job_types/{id}/delete', [JobTypeController::class, 'destroy']);

    Route::get('jobs/getJobsData', [AdminJobController::class, 'getJobsData'])->name('jobs.data');
    Route::resource('jobs', AdminJobController::class)->names('jobs');
});

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login')->middleware(["RedirectIfAdminAuthenticated", "prevent.multiple.logins"]);
    Route::post('login', [LoginController::class, 'login'])->middleware(["RedirectIfAdminAuthenticated", "prevent.multiple.logins"]);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset']);

    Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
});


// Company Auth Routes
Route::prefix('company')->name('company.')->group(function () {

    Route::get('login', [CompanyAuthController::class, 'showLoginForm'])->name('login')->middleware(["RedirectIfCompanyAuthenticated", "prevent.multiple.logins"]);
    Route::post('login', [CompanyAuthController::class, 'login'])->middleware(["RedirectIfCompanyAuthenticated", "prevent.multiple.logins"]);
    Route::post('logout', [CompanyAuthController::class, 'logout'])->name('logout');


    Route::get('register', [CompanyAuthController::class, 'showRegisterForm'])->name('register')->middleware(["RedirectIfCompanyAuthenticated", "prevent.multiple.logins"]);
    Route::post('register', [CompanyAuthController::class, 'register'])->middleware(["RedirectIfCompanyAuthenticated", "prevent.multiple.logins"]);


    Route::middleware(['company'])->group(function () {
        Route::get('dashboard', function () {
            return view('company.dashboard.dashboard');
        })->name('dashboard');

        Route::get('jobs/getJobsData', [JobController::class, 'getJobsData'])->name('jobs.data');
        Route::resource('jobs', JobController::class)->names('jobs');
        Route::get('jobs/{id}/delete', [JobController::class, 'destroy']);
        Route::get('get-cities/{id}', [JobController::class, 'get_cities']);
    });


});
