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
Route::group(['prefix' => 'staff_peragaan'], function(){
	Route::get('/staff_peragaan/dashboard', 'StaffPeragaan\DashboardController@index');
	Route::resource('/molusca', 'StaffPeragaan\MoluscaController');
	Route::resource('/vetebrata', 'StaffPeragaan\VetebrataController');
	Route::resource('/artefak', 'StaffPeragaan\ArtefakController');
	Route::resource('/batuan', 'StaffPeragaan\BatuanController');
});

Route::group(['prefix' => 'staff_dokumentasi'], function(){
	Route::get('/dashboard', 'StaffDokumentasi\DashboardController@index');
	Route::resource('/koleksi', 'StaffDokumentasi\KoleksiController');
	Route::resource('/pengajuan', 'StaffDokumentasi\PengajuanController');
	Route::resource('/molusca', 'StaffOkumentasi\MoluscaController');
	Route::resource('/vetebrata', 'StaffOkumentasi\VetebrataController');
	Route::resource('/artefak', 'StaffOkumentasi\ArtefakController');
	Route::resource('/batuan', 'StaffOkumentasi\BatuanController');

});

Route::group(['prefix' => 'kepala_museum'], function(){
	Route::get('/dashboard', 'KepalaMuseum\DashboardController@index');
	Route::resource('/koleksi', 'KepalaMuseum\KoleksiController');
	Route::resource('/pengajuan', 'KepalaMuseum\PengajuanController');
});

Route::get('/logout', 'LoginController@logout');

