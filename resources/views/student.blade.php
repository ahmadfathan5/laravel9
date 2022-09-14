@extends('layouts.layout')
@section('title', 'Students')

@section('content')


<h1>ini adalah halaman students</h1>

@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
</div>
@endif

<div class="my-5">
    <a href="/addstudent" class="btn btn-primary">Add Data</a>
</div>

<h3>Student List</h3>

<ol>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>gender</th>
                <th>NIS</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $data['name'] }}
                </td>
                <td>
                    {{ $data['gender'] }}
                </td>
                <td>
                    {{ $data['nis'] }}
                </td>
                <td>
                    <a href="/student/{{$data['id']}}" class="btn btn-sm btn-outline-primary">detail</a>
                    <a href="/editstudent/{{$data['id']}}" class="btn btn-sm btn-outline-warning">edit</a>
                    <a href="/deletestudent/{{$data['id']}}" class="btn btn-sm btn-outline-danger">delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</ol>

@endsection
