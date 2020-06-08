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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('student/details/example', array(
    'as' => 'student.details', function() {
        $url = route('student.details');
        return "The url is : ".$url;
    }
));

Route::get('user/{id}/profile', function($id) {
    $url = route('profile', ['id' => 100]);
    return $url;
})->name('profile');

Route::get('/', function() {
    return view('student');
});

Route::get('student/details', function() {
    $url = route('student.details');
    return $url;
})->name('student.details');


