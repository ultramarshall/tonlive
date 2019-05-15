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

Route::prefix('eproc')->group(function() {
    Route::get('/list-procurement', 'EporcModuleController@index');
    Route::get('/detail-procurement/{procno}', 'EporcDetailController@index');
    Route::get('/participant/{procno}', 'EporcModuleController@participant');
});
