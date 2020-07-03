<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', 'LoginController@index')
    ->name('login');

Route::get('/login/social', 'LoginController@social')
    ->name('login.social');

Route::get('/login/callback/{driver}', 'LoginController@callback')
    ->name('login.callback');

Route::get('/logout', 'LoginController@logout')
    ->name('logout');

Route::get('/', 'HomeController')
    ->middleware('auth')
    ->name('home');
