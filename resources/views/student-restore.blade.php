@extends('layouts.layout')
@section('title', 'Students')

@section('content')


<h1>ini adalah halaman students yang terhapus</h1>

<div class="my-5 ">
    <a href="/students" class="btn btn-primary">back</a>
    
</div>

<h3>Student List</h3>

<div class="mt-5">
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
            @foreach ($student as $data)
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
                    <a href="/student/{{$data['id']}}/restore" class="btn btn-sm btn-outline-primary">restore</a>
                    {{-- <a href="/deletestudent/{{$data['id']}}" class="btn btn-sm btn-outline-danger">delete</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
