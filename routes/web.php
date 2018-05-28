<?php

Route::view('/', 'welcome')->middleware('auth');

// RUTAS PARA EL LOGUEO DE USUARIO
Route::get('login', 'Usuario\LoginController@showLoginForm')->name('login');
Route::post('login', 'Usuario\LoginController@login');
Route::post('logout', 'Usuario\LoginController@logout')->name('logout');