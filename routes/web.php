<?php

Route::view('/', 'welcome');

Route::get('login', 'Usuario\LoginController@showLoginForm');

Route::post('login', 'Usuario\LoginController@login')->name('login');