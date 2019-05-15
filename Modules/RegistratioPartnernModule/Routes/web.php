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

Route::prefix('/register')->group(function() {
    Route::get('/', 'RegistratioPartnernModuleController@index');
    Route::post('/store', 'RegistratioPartnernModuleController@store');
    Route::post('/get-regencies', 'RegistratioPartnernModuleController@get_regencies');
    Route::post('/get-districts', 'RegistratioPartnernModuleController@get_districts');
    Route::get('/success', 'RegistratioPartnernModuleController@success');
});
