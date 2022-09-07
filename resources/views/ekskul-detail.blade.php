@extends('layouts.layout')
@section('title', 'detail '.$ekskul->name)

@section('content')

<h2>ini adalah halaman detail class {{ $ekskul['name'] }}</h2>

<div class="mt-5">
    <table class="table">
        <tr>
            <th>Extracurricular</th>
            <th>:</th>
            <td>{{ $ekskul['name'] }}</td>
        </tr>
        <tr>
            <th>Jumlah Siswa</th>
            <th>:</th>
            <td>{{ count($ekskul->students) }}</td>
        </tr>
        <tr>
            <th>Detail Siswa</th>
            <th>:</th>
            <td>
                <ol>
                    @foreach ($ekskul->students as $student)
                        <li>{{ $student['name'] }}</li>
                    @endforeach
                </ol>
            </td>
        </tr>
    </table>
</div>
@endsection
