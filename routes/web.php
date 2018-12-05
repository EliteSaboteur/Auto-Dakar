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

Route::view('/dashboard', 'admin.pages.dashboard');
Route::get('/admin', 'Admin\AdminController@index')->name('admin');

Auth::routes();
//
//Route::get('/dashboard', '')->name('dashboard');
//Route::get('/add', '')->name('add');
//Route::get('/interventions', '')->name('interventions');
//Route::get('/statistics', '')->name('statistics');
//
//Route::get('/intervention', '')->name('intervention');
//Route::get('/estimativ', '')->name('estimativ');
//Route::get('/estimativ-view', '')->name('estimativ-view');
//Route::get('/deviz', '')->name('deviz');
//Route::get('/factura', '')->name('factura');
//Route::get('/chitanta', '')->name('chitanta');



