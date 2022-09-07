@extends('layouts.layout')
@section('title', 'Class')

@section('content')

<h1>ini adalah halaman class</h1>
<h3>Class List</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Kelas</th>
            <th>Jumlah Siswa</th>
            <th>Detail Siswa</th>
            <th>Wali Kelas</th>
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
                <td>{{ $data->teacher['name'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
