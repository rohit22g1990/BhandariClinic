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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/doctors', 'DoctorsController@index')->name('doctors');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/department', function () {
    return view('department');
})->name('department');
Route::get('/admin', 'Admin\IndexController@index')->name('admin-home');
Route::get('/setting', 'Admin\SettingController@index')->name('setting');
Route::post('/setting', 'Admin\SettingController@create')->name('createSetting');
