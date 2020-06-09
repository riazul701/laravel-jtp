<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
//    public function display() {
//        return view('student', ['name1' => 'Anisha', 'name2' => 'Nishka', 'name3' => 'Sumit']);
//    }

//    public function display($id) {
//        return view('student')->with('id', $id);
//    }

//    public function display($name) {
//        return view('student', compact('name'));
//    }

    public function display($id, $name, $password) {
        return view('student', compact('id', 'name', 'password'));
    }
}
