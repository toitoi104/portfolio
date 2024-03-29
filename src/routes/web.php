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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('app')->namespace('App')->group(function () {
    Route::prefix('js-trick')->namespace('JsTrick')->group(function () {
        Route::get('/', 'IndexController@index');
        Route::get('/change-show', 'IndexController@changeShow');
    });
});
