@extends('layout.master')
@section('content')
    <table border="1px">
        <thead>
        <tr>
            <td>
                ID </td>
            <td>
                First Name </td>
            <td>
                Last Name </td>
            <td>
                Gender </td>
            <td>
                Qualifications </td>
        </tr>
        </thead>
        <tbody>
        @foreach($cruds as $crud)
            <tr border="none">
                <td>{{$crud->id}}</td>
                <td>{{$crud->first_name}}</td>
                <td>{{$crud->last_name}}</td>
                <td>{{$crud->gender}}</td>
                <td>{{$crud->qualifications}}</td>
                <td >
                    <form action="{{ route('users.destroy', $crud->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td >
                    <form action="{{ route('users.edit', $crud->id)}}" method="GET">
                        @csrf

                        <button class="btn btn-danger" type="submit">Edit</button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
