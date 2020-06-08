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

//Route::resource('posts', 'PostController');
//
//Route::resource('student', 'StudentController');

//Route::resource('student', 'StudentController', [
//    'only' => ['create', 'show']
//]);

//Route::resource('student', 'StudentController', [
//    'names' => ['create' => 'student.build']
//]);

Route::resource('student', 'StudentController', [
    'parameters' => ['student' => 'admin_student']
]);
