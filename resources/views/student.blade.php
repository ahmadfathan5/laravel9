@extends('layouts.layout')
@section('title', 'Students')

@section('content')

<h1>ini adalah halaman students</h1>
<h3>Student List</h3>
<ol>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>gender</th>
                <th>NIS</th>
                <th>Class</th>
                <th>Extracurricular</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    {{ $data->name }}
                </td>
                <td>
                    {{ $data->gender }}
                </td>
                <td>
                    {{ $data->nis }}
                </td>
                <td>{{ $data->class['name'] }}</td>
                <td>
                    <ul>
                        @foreach ($data->extracurriculars as $ekskul)
                            <li>{{ $ekskul['name'] }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</ol>

@endsection
