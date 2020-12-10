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


Auth::routes();
Route::group(['middleware' => 'auth'], function(){
	Route::get('/', 'dashboardController@index')->name('dashboard');
	Route::get('/profile','maincontroller@profile')->name('profile');
	Route::patch('/profile', 'userController@update')->name('actionupdateprofile');
	Route::get('/sayurmasuk','sayurmasukController@index');
	Route::get('/sayurmasuk/{datasayurmasuk}/detail', 'sayurmasukController@show')->name('detailtransaksimasuk');
	Route::get('/sayurkeluar','sayurkeluarController@index');
	Route::get('/sayurkeluar/{datasayurkeluar}/detail', 'sayurkeluarController@show')->name('detailtransaksikeluar');
	Route::post('/prediksi', 'dashboardController@store')->name('prediksi');
	Route::get('/keuangan','keuanganController@keuangan')->name('keuangan');
	Route::get('/keuangan/rangebulan','keuanganController@cetakpdf')->name('rangekeuangan');
});
	Route::group(['middleware' => ['auth','checkrole:pegawai']], function(){
	Route::get('/kelolahargabeli','hargabeliController@index')->name('hargabeli');
	Route::get('/kelolahargabeli/tambah','hargabeliController@create')->name('formtambahhargabeli');
	Route::get('/kelolahargabeli/{hargabeli}/edit','hargabeliController@edit')->name('formedithargabeli');
	Route::patch('/kelolahargabeli/{hargabeli}', 'hargabeliController@update')->name('actionupdatehargabeli');
	Route::delete('/kelolahargabeli/{hargabeli}','hargabeliController@destroy')->name('hapushargabeli');
	Route::post('/kelolahargabeli','hargabeliController@store')->name('actiontambahhargabeli');
	Route::get('/carihargabeli','sayurmasukController@getharga');
	Route::get('/carihargajual','sayurkeluarController@getharga');
	Route::get('/kelolahargajual','hargajualController@index')->name('hargajual');
	Route::get('/kelolahargajual/tambah','hargajualController@create')->name('formtambahhargajual');
	Route::get('/kelolahargajual/{hargajual}/edit','hargajualController@edit')->name('formedithargajual');
	Route::patch('/kelolahargajual/{hargajual}', 'hargajualController@update')->name('actionupdatehargajual');
	Route::delete('/kelolahargajual/{hargajual}','hargajualController@destroy')->name('hapushargajual');
	Route::post('/kelolahargajual','hargajualController@store')->name('actiontambahhargajual');
	Route::get('/sayurmasuk/tambah','sayurmasukController@create')->name('formtambahsayurmasuk');
	Route::post('/sayurmasuk','sayurmasukController@store')->name('actiontambahsayurmasuk');
	Route::get('/sayurmasuk/{datasayurmasuk}/edit','sayurmasukController@edit')->name('edittransaksimasuk');
	Route::patch('/sayurmasuk/{datasayurmasuk}','sayurmasukController@update')->name('actionedittransaksimasuk');
	Route::delete('/sayurmasuk/{datasayurmasuk}', 'sayurmasukController@destroy')->name('hapustransaksimasuk');
	Route::get('/sayurkeluar/tambah','sayurkeluarController@create')->name('formtambahsayurkeluar');
	Route::post('/sayurkeluar','sayurkeluarController@store')->name('actiontambahsayurkeluar');
	Route::get('/sayurkeluar/{datasayurkeluar}/edit','sayurkeluarController@edit')->name('edittransaksikeluar');
	Route::patch('/sayurkeluar/{datasayurkeluar}','sayurkeluarController@update')->name('actionedittransaksikeluar');
});
