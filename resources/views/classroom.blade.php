@extends('layouts.layout')
@section('title', 'Class')

@section('content')

<h1>ini adalah halaman class</h1>

@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
</div>
@endif

<div class="my-5">
    <a href="/addclass" class="btn btn-primary">Add Data</a>
</div>

<h3>Class List</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['name'] }}</td>
                <td>
                    <a href="class/{{$data['id']}}" class="btn btn-sm btn-outline-primary">detail</a>
                    <a href="/editclass/{{$data['id']}}" class="btn btn-sm btn-outline-warning">edit</a>
                    <a href="" class="btn btn-sm btn-outline-danger">delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
