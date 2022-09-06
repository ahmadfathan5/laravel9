@extends('layouts.layout')
@section('title', 'Students')

@section('content')

<h1>ini adalah halaman class</h1>
<h3>Class List</h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jumlah Siswa</th>
            <th>Detail Siswa</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ count($data->students) }}</td>
                <td>
                    <ul>
                        @foreach ($data->students as $student)
                            <li>{{ $student['name'] }}</li>
                        @endforeach
                    </ul>
                    </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
