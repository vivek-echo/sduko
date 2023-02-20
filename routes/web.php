<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registerUser', [App\Http\Controllers\Auth\RegisterController::class, 'registerUser']);
Route::get('/changePassword', [App\Http\Controllers\Auth\RegisterController::class, 'changePassword']);
Route::get('/updatePassword', [App\Http\Controllers\Auth\RegisterController::class, 'updatePassword']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\InnerPannel\Dashboard\DashboardController::class, 'index']);
    Route::get('/getProfileData', [App\Http\Controllers\InnerPannel\Dashboard\DashboardController::class, 'getProfileData']);
});
