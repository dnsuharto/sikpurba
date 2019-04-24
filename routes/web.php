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
Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'guest'],function(){
	Route::get('/login', 'LoginController@login');
});

Route::post('/login/do', 'LoginController@loginDo');

Route::group(['prefix' => '/staff_tu'], function(){
	Route::get('/dashboard', 'StaffTu\DashboardController@index');	
	Route::resource('/staff', 'StaffTu\StaffController');
	Route::resource('/pengunjung', 'StaffTu\PengunjungController');
});

Route::get('/staff_peraga/dashboard', 'StaffPeraga\DashboardController@index');
Route::get('/staff_peraga/dashboard/pengajuan', 'StaffPeraga\DashboardController@pengajuan');

Route::group(['prefix' => 'staff_dokumen'], function(){
	Route::get('/dashboard', 'StaffDokumen\DashboardController@index');
	Route::resource('/koleksi', 'StaffDokumen\KoleksiController');
});
Route::get('/kepala_museum/dashboard', 'KepalaMuseum\DashboardController@index');

Route::get('/logout', 'LoginController@logout');

