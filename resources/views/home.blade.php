@extends('layouts.layout')
@section('title', 'Home')

@section('content')

<h1>ini adalah halaman home</h1>
<h2>selamat datang {{ $name }}, anda adalah {{ $role }}</h2>

<table class="table">
    <tr>
        <th>No.</th>
        <th>Nama</th>
    </tr>
    @foreach ($buah as $data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $data }}</td>
    </tr>
    @endforeach
</table>

@endsection
