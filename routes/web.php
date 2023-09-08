<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Client\HomeController;

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

Route::get('/', function () {
   return redirect()->route('client_home');
});
Route::get('trang-chu', function () {
    return view('client.home');
})->name('client_home');

Route::match(['GET', 'POST'],'dang-nhap', [LoginController::class, 'login'])->name('auth_login');
Route::match(['GET', 'POST'],'dang-ky', [LoginController::class, 'register'])->name('auth_register');
Route::match(['GET', 'POST'],'quen-mat-khau', [LoginController::class, 'forgot'])->name('auth_forgot');
Route::get('dang-xuat', [LoginController::class, 'logout'])->name('logout');

Route::prefix('customer')->middleware(['auth'])->group(function (){
    Route::get('dashboard', [HomeController::class, 'index'])->name('cus_home');
    Route::match(['GET', 'POST'],'thay-doi-mat-khau', [LoginController::class, 'changePass'])->name('cus_pass');
    Route::match(['GET', 'POST'],'thong-tin-ca-nhan', [HomeController::class, 'thong_tin_ca_nhan'])->name('cus_info');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function (){
    Route::get('dashboard', [HomeAdminController::class, 'index'])->name('admin_home');
    Route::get('all-customer', [HomeAdminController::class, 'customerAll'])->name('admin_customer_all');
});


