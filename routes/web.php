<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatagoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['middleware' => 'admin_auth'])->group(function () {
    Route::get('/admin/manage_category', [CatagoryController::class, 'manage_category']);
    Route::get('/admin/catagory', [CatagoryController::class, 'category']);
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', function(){
    session()->forget('ADMIN_LOGIN');
    session()->forget('ADMIN_ID');
    session()->flash('error','Logout Sucessfully');
    return redirect('login');

    });
});

Route::post('/admin/auth',[AdminController::class,'auth'])->name('admin.auth');
Route::get('/login',[AdminController::class,'index'])->name('admin.login');

Route::any('users/{id}', function ($id) {
    
});