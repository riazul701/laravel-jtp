<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show_post($id, $password, $name) {
        return view('post', compact('id', 'password', 'name'));
    }
}
