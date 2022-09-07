@extends('layouts.layout')
@section('title', 'Extracurricular')

@section('content')

<h1>ini adalah halaman Extracurricular</h1>

<div class="my-5">
    <a href="" class="btn btn-primary">Add Data</a>
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
                <td>{{ count($data->students) }}</td>
                <td>
                    <a href="/extracurricular/{{$data->id}}">detail</a>
                    <a href="">edit</a>
                    <a href="">delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
