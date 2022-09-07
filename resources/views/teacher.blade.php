@extends('layouts.layout')
@section('title', 'Teacher')

@section('content')

<h1>ini adalah halaman Teacher</h1>
<h3>Teacher List</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            {{-- <th>Jumlah Anggota</th>
            <th>Detail Anggota</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($teacherList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                {{-- <td>{{ count($data->students) }}</td>
                <td>
                    <ul>
                        @foreach ($data->students as $anggota)
                            <li>{{ $anggota['name'] }}</li>
                        @endforeach
                    </ul>
                </td> --}}
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
