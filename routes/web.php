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
	Route::get('/', 'HomeController@index')->name('dashboard');
	Route::get('/logout','HomeController@logout')->name('logout');
	Route::get('/profile','maincontroller@profile')->name('profile');
	Route::get('/kelolaharga','hargaController@index')->name('harga');
	Route::get('/kelolaharga/tambah','hargaController@create')->name('lihat');
	Route::post('/kelolaharga','hargaController@store')->name('actiontambah');
	Route::get('/produkmasuk','prodmasukController@index')->name('produkmasuk');

});
