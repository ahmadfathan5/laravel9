@extends('layouts.layout')
@section('title', 'Students')

@section('content')


<h1>ini adalah halaman students</h1>

@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{Session::get('message')}}
</div>
@endif

@if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 )
<div class="my-5 d-flex justify-content-between">
    <a href="/addstudent" class="btn btn-primary">Add Data</a>
    <a href="/student-restore" class="btn btn-success">Restore Data</a>
</div>
@endif

<h3>Student List</h3>

<div class="mt-5">
    <div class="my-5">
        <form action="" method="get">
            <div class="input-group mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="keyword" placeholder="Keyword">
                    <label for="floatingInputGroup1">Search</label>
                </div>
                <button class="input-group-text btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>gender</th>
                <th>NIS</th>
                <th>Class</th>
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
                    {{ $data->class['name'] }}
                </td>
                
                <td>
                    @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2 )
                        <a href="#" class="btn btn-sm btn-outline-primary disabled">no action</a>
                    @else
                        <a href="/student/{{$data['id']}}" class="btn btn-sm btn-outline-primary">detail</a>
                        <a href="/editstudent/{{$data['id']}}" class="btn btn-sm btn-outline-warning">edit</a>
                    @endif

                    @if (Auth::user()->role_id == 1 )
                        <a href="/deletestudent/{{$data['id']}}" class="btn btn-sm btn-outline-danger">delete</a>
                    @endif
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="my-5">
        {{$studentList->withQueryString()->links()}}
    </div>
</div>



@endsection
