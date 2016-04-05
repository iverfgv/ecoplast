<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index');

Route::get('ventas','CobrarController@index');
Route::get('Admin','AdminController@index');


Route::get('Admin/CrearImagen','AdminController@CrearImagen');
Route::get("Admin/AdminImagen","AdminController@AdminImagen");
Route::post('Admin/GuardarImagen', 'AdminController@GuardarImagen');
Route::resource('admin/destroy','AdminController');
Route::resource('imagenes','AdminController');

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

