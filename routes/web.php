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
    DB::insert('insert into posts(title,body) values(?,?)',['software developer','himanshu is a software developer']);
});

Route::get('/select', function() {
    $results = DB::select('select * from posts where id=?',[1]);
    foreach ($results as $posts) {
        echo "title is : ".$posts->title;
        echo "<br>";
        echo "body is : ".$posts->body;
    }
});

Route::get('/update', function() {
    $updated = DB::update('update posts set title="software tester" where id=?',[1]);
    return $updated;
});

Route::get('/delete', function() {
    $deleted = DB::delete('delete from posts where id=?',[1]);
    return $deleted;
});
