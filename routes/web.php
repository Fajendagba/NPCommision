<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',        [HomeController::class, 'home'])  ->name('/');

// Authentication 
Route::get('/login',        [LoginController::class, 'index'])  ->name('login');
Route::post('/login',       [LoginController::class, 'store']);

Route::get('/logout',      [LogoutController::class, 'logout']) ->name('logout');

Route::get('/register',     [RegisterController::class, 'index'])->name('register');
Route::post('/register',    [RegisterController::class, 'store']);
Route::post('/checkname',    [RegisterController::class, 'check_name_exist'])->name('checkname');
Route::post('/check_email_exist',    [RegisterController::class, 'check_email_exist'])->name('check_email_exist');


// Policy and Terms Routes
Route::get('/terms', function () {
    return view('policy.terms');
})->name('terms');
Route::get('/policy', function () {
    return view('policy.policy');
})->name('policy');


