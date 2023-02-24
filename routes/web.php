<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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
Route::get('/getStateWelcome', [App\Http\Controllers\Controller::class, 'getState']);
Route::get('/getCityWelcome', [App\Http\Controllers\Controller::class, 'getCity']);
Route::get('/getAddPost', [App\Http\Controllers\Controller::class, 'getAddPost']);
Route::get('/viewPostDataWelcome', [App\Http\Controllers\InnerPannel\Post\PostController::class, 'viewPostData']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\InnerPannel\Dashboard\DashboardController::class, 'index']);
    Route::get('/getProfileData', [App\Http\Controllers\InnerPannel\Dashboard\DashboardController::class, 'getProfileData']);
    Route::get('/viewPost', [App\Http\Controllers\InnerPannel\Post\PostController::class, 'index']);
    Route::get('/viewPostData', [App\Http\Controllers\InnerPannel\Post\PostController::class, 'viewPostData']);
    
    Route::get('/deleteAdd', [App\Http\Controllers\InnerPannel\Post\PostController::class, 'deleteAdd']);
    Route::get('/actionPost', [App\Http\Controllers\InnerPannel\Post\PostController::class, 'actionPost']);
    Route::match(['GET', 'POST'], '/AddPost', [App\Http\Controllers\InnerPannel\Post\PostController::class, 'addPost']);
    Route::match(['GET', 'POST'], '/uploadData', [App\Http\Controllers\InnerPannel\Post\PostController::class, 'uploadData']);
    Route::get('/getState', [App\Http\Controllers\Controller::class, 'getState']);
    Route::get('/getCity', [App\Http\Controllers\Controller::class, 'getCity']);
    Route::get('storage/{filename}', function ($filename) {
        dd($filename);
        $path = storage_path('public/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    });
});
