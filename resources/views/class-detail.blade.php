@extends('layouts.layout')
@section('title', 'detail '.$class->name)

@section('content')

<h2>ini adalah halaman detail class {{ $class['name'] }}</h2>

<div class="mt-5">
    <table class="table">
        <tr>
            <th>KELAS</th>
            <th>:</th>
            <td>{{ $class['name'] }}</td>
        </tr>
        <tr>
            <th>Wali Kelas</th>
            <th>:</th>
            <td>{{ $class->teacher['name'] }}</td>
        </tr>
        <tr>
            <th>Jumlah Siswa</th>
            <th>:</th>
            <td>{{ count($class->students) }}</td>
        </tr>
        <tr>
            <th>Detail Siswa</th>
            <th>:</th>
            <td>
                <ol>
                    @foreach ($class->students as $student)
                        <li>{{ $student['name'] }}</li>
                    @endforeach
                </ol>
            </td>
        </tr>
    </table>
</div>
@endsection
