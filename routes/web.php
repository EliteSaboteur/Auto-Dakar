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
Route::view('/components', 'admin.pages.components');


Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/pdf', 'Admin\PdfController@index');
    Route::view('/dashboard', 'admin.pages.dashboard');
    Route::get('/statistics', 'Admin\AdminController@statistics')->name('statistics');
    Route::resources([
        'estimativ' => 'Admin\EstimativController',
        'deviz' => 'Admin\DevizController',
        'factura' => 'Admin\FacturaController',
        'chitanta' => 'Admin\ChitantaController',
        'intervention' => 'Admin\InterventionController'
    ]);
});



