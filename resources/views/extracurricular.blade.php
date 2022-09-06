@extends('layouts.layout')
@section('title', 'Extracurricular')

@section('content')

<h1>ini adalah halaman Extracurricular</h1>
<h3>Extracurricular List</h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Ekstracurricular</th>
            <th>Jumlah Anggota</th>
            <th>Detail Anggota</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ekskulList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ count($data->students) }}</td>
                <td>
                    <ul>
                        @foreach ($data->students as $anggota)
                            <li>{{ $anggota['name'] }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
