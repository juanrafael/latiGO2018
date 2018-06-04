<?php

Route::get('/', 'MenuController@index')->name('menu');

//ROUTAS PARA EL LOGIN - LOGOUT
Route::get('login', 'Usuario\LoginController@showLoginForm')->name('login');
Route::post('login', 'Usuario\LoginController@login');
Route::post('logout', 'Usuario\LoginController@logout')->name('logout');

Route::get('personal', 'Usuario\RegisterController@index')->name('mostrarVistaPersonal');

/*
	MODULO DE LAS UNIDADES
*/
Route::get('unidad', 'Unidad\UnidadController@index')->name('mostrarVistaUnidad');
Route::post('registroUnidad', 'Unidad\UnidadController@store')->name('registroUnidad');