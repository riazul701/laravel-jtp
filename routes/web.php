<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Post;
use App\Country;
use App\Photo;
use App\Audio;
use App\Tag;

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

Route::get('/user', function() {
    return User::find(1)->post;
});

Route::get('/post/user', function() {
    return Post::find(1)->user->name;
});

Route::get('/posts', function() {
    $user = User::find(1);
    foreach($user->posts as $post) {
        echo $post->title."<br>";
    }
});

Route::get('/roles/{id}', function($id) {
    $user = User::find($id);
    foreach($user->role as $role) {
        return $role->name;
    }
});

//Route::get('/pivot', function() {
//    $user = User::find(1);
//    foreach($user->role as $role) {
//        return $role->pivot;
//    }
//});

Route::get('/pivot', function() {
    $user = User::find(1);
    foreach($user->role as $role) {
        return $role->pivot->created_at;
    }
});

Route::get('/user/country', function() {
    $country = Country::find(1);
    foreach($country->posts as $post) {
        return $post->title;
    }
});

// Route for the users.
Route::get('/user/photo', function() {
    $user = User::find(1);
    foreach($user->photos as $photo) {
        return $photo;
    }
});

// Route defined for the posts.
Route::get('/post/photo', function() {
    $post = Post::find(1);
    foreach($post->photos as $photo) {
        return $photo;
    }
});


Route::get('/photo/{id}', function($id) {
    $photo = Photo::findOrFail($id);
    return $photo->imageable;
});

// Route for getting the tags from the Post model
Route::get('/post/tags', function() {
    $post = Post::find(1);
    foreach($post->tags as $tag) {
        return $tag->name;
    }
});

// Route for getting the tags from the Audio model
Route::get('audio/tags', function() {
    $audio = Audio::find(1);
    foreach($audio->tags as $tag) {
        return $tag->name;
    }
});

// Route for getting all the posts of a tag.
Route::get('/tag/post/{id}', function($id) {
    $tag = Tag::find($id);
    foreach($tag->posts as $post) {
        return $post->title;
    }
});

// Route for getting all the audios of a tag.
Route::get('/tag/audio/{id}', function($id) {
    $tag = Tag::find($id);
    foreach($tag->audios as $audio) {
        return $audio->name;
    }
});
