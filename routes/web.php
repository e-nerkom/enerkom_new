<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'create']);
Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'postLogin']);
Route::get('/admin/register', [AuthController::class, 'register']);
Route::post('/admin/register', [AuthController::class, 'postRegister']);
Route::get('/admin/logout', [AuthController::class, 'logout']);
Route::get('/reset-password', [AuthController::class, 'resetPassword']);
Route::post('/reset-password', [AuthController::class, 'postResetPassword']);
Route::get('email-view', function() {
	return view('mail.contact');
});

Route::group(['middleware'=>'auth','prefix' => 'admin'], function(){
	Route::get('/dashboard', function() {
		return view('admin/dashboard');
	});
	Route::get('/content', 'App\Http\Controllers\AdminContentController@index');
	Route::get('/content/{content_id}', 'App\Http\Controllers\AdminContentController@edit');
	Route::post('/content/{content_id}', 'App\Http\Controllers\AdminContentController@update');

});
