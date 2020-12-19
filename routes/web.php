<?php

use Illuminate\Support\Facades\Route;

// Auth
Auth::routes();

//back
Route::get('/admin', 'Back\BackController@dashboard')->name('back.dashboard');

// Front
Route::get('/', 'Front\FrontController@index')->name('front.index');
