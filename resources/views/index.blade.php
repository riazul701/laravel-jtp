@extends('layout.master')
@section('content')
    @foreach($forms as $form)
        <div>
            <img src="{{ $form->path}}">
        </div>
    @endforeach
@endsection
