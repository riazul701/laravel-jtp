<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    public function display() {
//        return view('about');

//        return view('admin.details');

        if(View::exists('admin.details')) {
            echo "The view of the admin.details exists";
        } else {
            echo "View does not exist";
        }
    }
}
