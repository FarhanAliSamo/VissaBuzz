<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;

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