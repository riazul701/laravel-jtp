<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        print_r($request->input('username'));

//        $request->session()->put('user', $request->input('username'));
//        echo $request->session()->get('user');

//        session(['user'=>$request->input('username')]);
//        $data = session('user');
//        echo $data;

//        session(['user1'=>'akshita']);
//        session(['user2'=>'anvi']);
//        return $request->session()->all();

//        session(['user1'=>'akshita']);
//        session(['user2'=>'anvi']);
//        $request->session()->forget('user1');
//        return $request->session()->all();

//        session(['user1'=>'akshita']);
//        session(['user2'=>'anvi']);
//        $request->session()->flush();
//        return $request->session()->all();

//        session()->flush('post', 'post has been updated');
//        return $request->session()->get('post');

        return $request->session()->get('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
