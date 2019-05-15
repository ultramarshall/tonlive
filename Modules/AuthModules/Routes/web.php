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
Route::prefix('auth')->group(function() {
    Route::get('/login', 'LoginController@index');
    Route::post('/loginCheck','LoginController@loginCheck');
    Route::get('/forgotpass','ForgotpassController@index');
    Route::post('/forgotpass','ForgotpassController@forgot_password');
    Route::get('/logout','LoginController@logout');
});
