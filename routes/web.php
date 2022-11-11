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
Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');;

Route::middleware('auth')->group(function () {
    //User section
    //Homem
    Route::get('/menu', 'App\Http\Controllers\HomeController@index')->name('home.index');
    Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');
    Route::get('/seleccion', 'App\Http\Controllers\HomeController@select')->name('home.select');
    Route::get('/seleccion/{tipo}', 'App\Http\Controllers\HomeController@type')->name('home.type');
    //Aliment
    Route::get('/alimentos', 'App\Http\Controllers\AlimentController@index')->name('aliment.index');
    Route::get('/alimentos/buscar', 'App\Http\Controllers\AlimentController@search')->name('aliment.search');
    Route::get('/alimentos/{id}', 'App\Http\Controllers\AlimentController@show')->name('aliment.show');

    //Dish House
    Route::get('/recetas', 'App\Http\Controllers\DishHouseController@index')->name('dishHouse.index');
    Route::get('/recetas/buscar', 'App\Http\Controllers\DishHouseController@search')->name('dishHouse.search');
    Route::get('/recetas/{id}', 'App\Http\Controllers\DishHouseController@show')->name('dishHouse.show');
    

});

Route::middleware('admin')->group(function () {
    //Admin section
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');

    //CRUD ALIMENTS
    Route::get('/admin/aliments', 'App\Http\Controllers\Admin\AdminAlimentController@index')->name('admin.aliment.index');
    Route::post('/admin/aliments/store', 'App\Http\Controllers\Admin\AdminAlimentController@store')->name('admin.aliment.store');
    Route::delete('/admin/aliments/{id}/delete', 'App\Http\Controllers\Admin\AdminAlimentController@delete')->name('admin.aliment.delete');
    Route::get('/admin/aliments/{id}/edit', 'App\Http\Controllers\Admin\AdminAlimentController@edit')->name('admin.aliment.edit');
    Route::put('/admin/aliments/{id}/update', 'App\Http\Controllers\Admin\AdminAlimentController@update')->name('admin.aliment.update');

    //CRUD DISH HOUSE
    Route::get('/admin/dishHouse', 'App\Http\Controllers\Admin\AdminDishHouseController@index')->name('admin.dishHouse.index');
    Route::post('/admin/dishHouse/store', 'App\Http\Controllers\Admin\AdminDishHouseController@store')->name('admin.dishHouse.store');
    Route::delete('/admin/dishHouse/{id}/delete', 'App\Http\Controllers\Admin\AdminDishHouseController@delete')->name('admin.dishHouse.delete');
    Route::get('/admin/dishHouse/{id}/edit', 'App\Http\Controllers\Admin\AdminDishHouseController@edit')->name('admin.dishHouse.edit');
    Route::put('/admin/dishHouse/{id}/update', 'App\Http\Controllers\Admin\AdminDishHouseController@update')->name('admin.dishHouse.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
