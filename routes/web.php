<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
