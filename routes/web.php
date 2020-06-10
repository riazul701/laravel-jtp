<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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

Route::get('/read', function() {
    $posts = Post::all();
    foreach($posts as $post) {
        echo $post->body;
        echo '<br>';
    }
});

//Route::get('/find', function() {
//    $posts = Post::find(2);
//    return $posts->title;
//});

//Route::get('/find', function() {
//    $posts = Post::where('id',2)->first();
//    return $posts;
//});

//Route::get('/find', function() {
//    $posts = Post::where('id',1)->value('title');
//    return $posts;
//});

Route::get('/insert', function() {
    $post = new Post;
    $post->title = 'QA Analyst';
    $post->body = 'Nishka is a QA Analyst';
    $post->save();
});

Route::get('/basicupdate', function() {
    $post = Post::find(2);
    $post->title = 'Graphic Designer';
    $post->body = 'Tanisha is a graphic designer';
    $post->save();
});

Route::get('/create', function() {
    Post::create(['title' => 'Technical Content Writer', 'body' => 'Anusha is a technical content writer']);
});

Route::get('/update', function() {
    Post::where('id',1)->update(['title' => 'Technical Content Writer 2', 'body' => 'Charu is a technical content writer']);
});

Route::get('/delete', function() {
    $post = Post::find(1);
    $post->delete();
});

//Route::get('/destroy', function() {
//    Post::destroy(2);
//});

Route::get('/destroy', function() {
    Post::destroy([3,4]);
});

Route::get('/delete1', function() {
    Post::where('id', 5)->delete();
});

Route::get('/softdelete', function() {
    Post::find(1)->delete();
});

Route::get('/readsofdelete', function() {
    $post = Post::withTrashed()->where('id',1)->get();
    return $post;
});

Route::get('/restore', function() {
    Post::withTrashed()->where('id',1)->restore();
});

Route::get('/forcedelete', function() {
    Post::onlyTrashed()->forceDelete();
});
