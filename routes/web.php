<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('order-index');
Route::get('/show/{id}', 'GuestController@show') -> name('order-show');

Route::get('/destroy/{id}', 'LoggedController@destroy') -> name('order-destroy');
Route::get('/edit/{id}', 'LoggedController@edit') -> name('order-edit');
Route::post('/update/{id}', 'LoggedController@update') -> name('order-update');
Route::get('/create', 'LoggedController@create') -> name('order-create');
Route::post('/store', 'LoggedController@store') -> name('order-store');
