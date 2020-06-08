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

Route::group([], function() {
    Route::get('/first', function() {
        echo "first route";
    });

    Route::get('/second', function() {
        echo "second route";
    });

    Route::get('/third', function() {
        echo "third route";
    });
});

Route::group(['prefix' => 'tutorial'], function() {
    Route::get('/aws', function() {
        echo "aws tutorial";
    });

    Route::get('/jira', function() {
        echo "jira tutorial";
    });

    Route::get('/testing', function() {
        echo "testing tutorial";
    });
});

Route::middleware(['age'])->group(function() {
    Route::get('/aws', function() {
       echo "aws tutorial";
    });

    Route::get('/jira', function() {
        echo "jira tutorial";
    });

    Route::get('/testing', function() {
        echo "testing tutorial";
    });
});

Route::name('admin.')->group(function() {
    Route::get('users', function() {
        return "admin.users";
    })->name('users');
});
