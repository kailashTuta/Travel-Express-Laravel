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

Route::get('/', 'App\Http\Controllers\IndexController@index');
Route::get('/gallery', function () {
    return view('layouts.gallery');
});
Route::get('/tour', 'App\Http\Controllers\TourController@index');
Route::resource('/booking', 'App\Http\Controllers\BookingController');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::view('admin', 'layouts.admin.adminDashboard');
    Route::resource('/admin/user', 'App\Http\Controllers\UserController');
    Route::resource('/admin/tour', 'App\Http\Controllers\AdminTourController');
    Route::resource('/admin/package', 'App\Http\Controllers\AdminPackageController');

    Route::get('/search', 'App\Http\Controllers\UserController@search');
    Route::get('/toursearch', 'App\Http\Controllers\AdminTourController@search');

    Route::get('/admin/profile', 'App\Http\Controllers\AdminProfileController@myProfile');
    Route::post('/admin/profile-update', 'App\Http\Controllers\AdminProfileController@profileUpdate');
    Route::redirect('/admin', '/admin/user');
});
