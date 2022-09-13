@extends('layouts.layout')
@section('title', 'Teacher')

@section('content')

<h1>ini adalah halaman Teacher</h1>

<div class="my-5">
    <a href="/addteacher" class="btn btn-primary">Add Data</a>
</div>

<h3>Teacher List</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teacherList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    <a href="/teacher/{{$data->id}}" class="btn btn-sm btn-outline-primary">detail</a>
                    <a href="/editteacher/{{$data->id}}" class="btn btn-sm btn-outline-warning">edit</a>
                    <a href="" class="btn btn-sm btn-outline-danger">delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
