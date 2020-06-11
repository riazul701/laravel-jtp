@extends('layout.master')
@section('content')
    <h1> Student </h1>
    <form action="{{ route('student.store') }}" method="Post">
        @csrf
        <div><input type="text" name="name"></div>
        <br/>
        <div>{{$errors->first('name')}}</div>
        <br/>
        <div><button type="submit">Add Students </div>
    </form>
    <ul>
        @foreach($student_all as $students)
            <li>{{$students->name}}</li>
        @endforeach
        <ul>
@endsection
