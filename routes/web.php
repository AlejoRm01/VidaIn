<?php

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
*/
Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::get('/index', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');

Route::middleware('auth')->group(function () {
    Route::get('/aliments', 'App\Http\Controllers\AlimentController@index')->name('aliment.index');
    Route::get('/search', 'App\Http\Controllers\AlimentController@search')->name('aliment.search');
    Route::get('/aliments/{id}', 'App\Http\Controllers\AlimentController@show')->name('aliment.show');
});

Route::middleware('admin')->group(function () {
    //Admin section
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
