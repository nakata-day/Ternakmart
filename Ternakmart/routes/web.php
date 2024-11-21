<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterUserController;

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

// Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing_page');

// Login User
Route::get('/login-user', [LoginUserController::class, 'index'])->name('login_user');
Route::post('/login-user', [LoginUserController::class, 'login']);

// Login Admin
Route::get('/login-admin', [LoginAdminController::class, 'index'])->name('login_admin');
Route::post('/login-admin', [LoginAdminController::class, 'login']);

// Register User
Route::get('/register-user', [RegisterUserController::class, 'index'])->name('register_user');
Route::post('/register-user', [RegisterUserController::class, 'store']);
