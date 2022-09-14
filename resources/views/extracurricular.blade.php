@extends('layouts.layout')
@section('title', 'Extracurricular')

@section('content')

<h1>ini adalah halaman Extracurricular</h1>

@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
</div>
@endif

<div class="col-md-6 my-5">
    <a href="/addextracurricular" class="btn btn-primary">Add Data</a>
    <a href="/addanggota" class="btn btn-primary mx-2">Add Anggota</a>
</div>

<h3>Extracurricular List</h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Ekstracurricular</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ekskulList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    <a href="/extracurricular/{{$data->id}}" class="btn btn-sm btn-outline-primary">detail</a>
                    <a href="/editextracurricular/{{$data->id}}" class="btn btn-sm btn-outline-warning">edit</a>
                    <a href="" class="btn btn-sm btn-outline-danger">delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
