<?php

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

Route::get('/', 'Main\HomeController@index');
Route::get('/about', 'Main\AboutController@index');
Route::get('/services', 'Main\ServicesController@index');
Route::get('/contact', 'Main\ContactController@index');
Route::get('/pdf', 'Admin\PdfController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
