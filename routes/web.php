<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PasswordController;

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
    return view('newest');
});

Route::view('/newest', 'newest')->name('newest');

Route::get('/signup', [UserController::class, 'create'])->name('signup');

Route::resource('users',  UserController::class);

Route::get('login', [SessionsController::class, 'create'])->name('login');
Route::post('login', [SessionsController::class, 'store'])->name('login');
Route::delete('logout', [SessionsController::class, 'destroy'])->name('logout');

Route::get('signup/confirm/{token}', [UserController::class, 'confirmEmail'])->name('confirm_email');

Route::get('password/reset',  [PasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email',  [PasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}',  [PasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset',  [PasswordController::class, 'reset'])->name('password.update');
