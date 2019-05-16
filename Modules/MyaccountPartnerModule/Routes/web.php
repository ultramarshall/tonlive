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

Route::prefix('/partner')->group(function() {
	Route::group(['middleware'=>['vendor']], function(){
	    Route::get('/myaccount', 'MyaccountPartnerModuleController@index');
	    Route::get('/mydocument', 'MyaccountPartnerModuleController@mydocument');
	    Route::post('/pages', 'MyaccountPartnerModuleController@get_pages');

	    Route::post('/save-identity', 'MyaccountPartnerModuleController@set_identity');
	    Route::post('/save-akta', 'MyaccountPartnerModuleController@set_akta');
	    Route::post('/save-pemilik', 'MyaccountPartnerModuleController@set_pemilik');
	    Route::post('/save-peralatan', 'MyaccountPartnerModuleController@set_peralatan');
	});
});
