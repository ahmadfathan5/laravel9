@extends('layouts.layout')
@section('title', 'detail '.$student->name)

@section('content')

<h2>ini adalah halaman detail students {{ $student['name'] }}</h2>

<div class="my-3 d-flex justify-content-center">
    @if ($student['image'] != '')
        <img src="{{asset('storage/profil/'.$student['image'])}}" alt="" width="200px">
    @else
        <img src="{{asset('/images/defult.png')}}" alt="" width="200px">
    @endif
</div>

<div class="mt-5">
    <table class="table">
        <tr>
            <th>NAMA</th>
            <th>:</th>
            <td>{{ $student['name'] }}</td>
        </tr>
        <tr>
            <th>NIS</th>
            <th>:</th>
            <td>{{ $student['nis'] }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <th>:</th>
            <td>
                @if ($student['gender'] == 'L')
                    Laki-laki
                @else
                    Perempuan
                @endif
            </td>
        </tr>
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <td>{{ $student->class['name'] }}</td>
        </tr>
        <tr>
            <th>Wali Kelas</th>
            <th>:</th>
            <td>{{ $student->class->teacher['name'] }}</td>
        </tr>
        <tr>
            <th>Extracurricular</th>
            <th>:</th>
            <td>
                <ul>
                    @foreach ($student->extracurriculars as $data)
                    <li>{{ $data->name }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    </table>
</div>
@endsection
