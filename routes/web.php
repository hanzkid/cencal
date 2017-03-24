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

Route::group(['middleware' => ['web']], function() {
	Route::get('/', function () {
    	return view('welcome');
	});

	Route::get('/admin', 'AdminController@Index');
	Route::get('/admin/acara', 'AdminController@acara');
	Route::get('/admin/acara/tambah', 'AdminController@tambahacara');
	Route::get('/admin/acara/delete/{id}', 'AdminController@deleteacara');
	Route::post('/admin/acara/tambah', 'AdminController@posttambahacara');
	Route::get('/admin/acara/edit/{id}', 'AdminController@editacara');
	Route::get('/admin/user', 'AdminController@user');
	Route::get('/admin/panitia', 'AdminController@panitia');
});

