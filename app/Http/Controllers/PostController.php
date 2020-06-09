<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
//    public function display() {
//        return view('for_loop');
//    }

//    public function display() {
//        return view('foreach_loop', ['students' => ['anisha', 'tanisha', 'akshita', 'jyotika']]);
//    }

    public function display($i) {
        return view('while_loop', ['i' => $i]);
    }
}
