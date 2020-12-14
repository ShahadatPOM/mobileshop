<?php

use Illuminate\Support\Facades\Route;

// Auth
Auth::routes();

// Front
Route::get('/', 'Front\FrontController@index')->name('front.index');
