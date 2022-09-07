@extends('layouts.layout')
@section('title', 'detail '.$teacher->name)

@section('content')

<h2>ini adalah halaman detail Teacher {{ $teacher['name'] }}</h2>

<div class="mt-5">
    <table class="table">
        <tr>
            <th>NAMA</th>
            <th>:</th>
            <td>{{ $teacher['name'] }}</td>
        </tr>
        <tr>
            <th>Wali Kelas dari kelas</th>
            <th>:</th>
            <td>
                @if ($teacher->class)
                    {{ $teacher->class['name'] }}
                @else
                    Tidak Menjadi Wali Kelas
                @endif
            </td>
        </tr>
        <tr>
            <th>Detail Siswa</th>
            <th>:</th>
            <td>
                @if ($teacher->class)
                    <ol>
                        @foreach ($teacher->class->students as $student)
                            <li>{{ $student['name'] }}</li>
                        @endforeach
                    </ol>
                @else
                    Tidak ada murid dalam naungan
                @endif
            </td>
        </tr>
    </table>
</div>
@endsection
