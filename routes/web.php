<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CompanyAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard.dashboard');
});



// <--------- Admin Routes ---------->

Route::resource('permissions',PermissionController::class);
Route::get('permissions/{id}/delete',[PermissionController::class,'destroy']);

Route::resource('roles',RoleController::class);
Route::get('roles/{id}/delete',[RoleController::class,'destroy']);

Route::resource('users',UserController::class);
Route::get('users/{id}/delete',[UserController::class,'destroy']);



// <--------- Company Auth Routes ---------->

Route::get('company/login', [CompanyAuthController::class, 'showLoginForm'])->name('company.login');
Route::post('company/login', [CompanyAuthController::class, 'login']);
Route::post('company/logout', [CompanyAuthController::class, 'logout'])->name('company.logout');

Route::get('company/register', [CompanyAuthController::class, 'showRegisterForm'])->name('company.register');
Route::post('company/register', [CompanyAuthController::class, 'register']);

Route::middleware(['company'])->group(function () {
   
    Route::get('/company/dashboard', function () {
        return view('company.dashboard.dashboard');
    });
     
  
     
});