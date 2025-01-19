<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;

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
Route::get('/user', function () {
    return view('admin.user.index');
})->name('user.index');


// <--------- Admin Routes ---------->

Route::resource('permissions',PermissionController::class);
Route::get('permissions/{id}/delete',[PermissionController::class,'destroy']);

Route::resource('roles',RoleController::class);
Route::get('roles/{id}/delete',[RoleController::class,'destroy']);