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
    return "This is a home page";
});

//Route::get('/about', function() {
//    return "This is a about us page";
//});
//
//Route::get('/contact', function() {
//    return "This is a contact us page";
//});
//
//Route::get('/post/{id}', function($id) {
//    return "id number is : ".$id;
//});
//
//// We can also pass the multiple parameters.
//Route::get('/post/{id}/{name}', function($id,$name) {
//    return "id number is : ".$id." ".$name;
//});
//
//Route::get('user/{name?}', function($name=null) {
//    return $name;
//});
//
//Route::get('user/{name?}', function($name = 'himani') {
//    return $name;
//});
//
//Route::get('user/{name?}', function($name=null) {
//    return $name;
//})->where('name', '[a-zA-Z]+');
//
//Route::get('user/{id}', function($id = null) {
//    return 'id is : '.$id;
//})->where('id', '[0-9]+');
//
//Route::get('user/{id}/{name}', function($id, $name) {
//    return "id is : ".$id.","."Name is : ".$name;
//})->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);

Route::get('user/{id}', function($id) {
    return $id;
});

Route::get('post/{id}', function($id) {
    return $id;
});

