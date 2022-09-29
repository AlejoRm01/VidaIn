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

    //CRUD ALIMENTS
    Route::get('/admin/aliments', 'App\Http\Controllers\Admin\AdminAlimentController@index')->name("admin.aliment.index");
    Route::post('/admin/aliments/store', 'App\Http\Controllers\Admin\AdminAlimentController@store')->name("admin.aliment.store");
    Route::delete('/admin/aliments/{id}/delete', 'App\Http\Controllers\Admin\AdminAlimentController@delete')->name("admin.aliment.delete");
    Route::get('/admin/aliments/{id}/edit', 'App\Http\Controllers\Admin\AdminAlimentController@edit')->name("admin.aliment.edit");
    Route::put('/admin/aliments/{id}/update', 'App\Http\Controllers\Admin\AdminAlimentController@update')->name("admin.aliment.update");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
