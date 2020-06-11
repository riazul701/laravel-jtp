<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function() {
    return view('create');
});

Route::get('/show', 'CrudsController@index');

Route::post('users/store', 'CrudsController@store')->name('users.store');

Route::get('users/edit/{id}', 'CrudsController@edit')->name('users.edit');

Route::patch('users/update/{id}', 'CrudsController@update')->name('users.update');

Route::delete('/users/destroy/{id}', 'CrudsController@destroy')->name('users.destroy');
