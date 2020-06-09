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

// Blade template control statements
Route::get('/control-statements/{id}', function($id) {
    return view('control_statements', ['id' => $id]);
});

// Blade template unless
Route::get('/unless/{id}', function($id) {
    return view('unless', ['id' => $id]);
});

// Blade hasSection directive
Route::get('/has-section', function() {
    return view('has_section');
});

// Blade Loops
//Route::get('/details', 'PostController@display');

Route::get('/details/{i}', 'PostController@display');
