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

//Route::get('/details', 'StudentController@display');

//Route::get('/details/{id}', 'StudentController@display');

//Route::get('/details/{name}', 'StudentController@display');

Route::get('/details/{id}/{name}/{password}', 'StudentController@display');
