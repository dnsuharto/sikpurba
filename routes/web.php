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

Route::get('/staf_tu/dashboard', 'StafTu\DashboardController@index');
Route::get('/staf_tu/dashboard/pegawai', 'StafTu\DashboardController@pegawai');
Route::get('/staf_tu/dashboard/pengunjung', 'StafTu\DashboardController@pengunjung');

Route::get('/staf_peraga/dashboard', 'StafPeraga\DashboardController@index');
Route::get('/staf_peraga/dashboard/pengajuan', 'StafPeraga\DashboardController@pengajuan');

Route::get('/staf_dokumen/dashboard', 'StafDokumen\DashboardController@index');
Route::get('/staf_dokumen/dashboard/koleksi', 'StafDokumen\DashboardController@koleksi');

Route::get('/kepala_museum/dashboard', 'KepalaMuseum\DashboardController@index');

Route::get('/logout', 'LoginController@logout');

