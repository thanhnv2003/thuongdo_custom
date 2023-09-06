<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\LoginController;

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
    return view('client.home');
})->name('client_home');

Route::match(['GET', 'POST'],'dang-nhap', [LoginController::class, 'login'])->name('auth_login');
Route::match(['GET', 'POST'],'dang-ky', [LoginController::class, 'register'])->name('auth_register');
Route::match(['GET', 'POST'],'quen-mat-khau', [LoginController::class, 'forgot'])->name('auth_forgot');


