@extends('layouts.layout')
@section('title', 'Home')

@section('content')

<h1>ini adalah halaman home</h1>
<h2>selamat datang {{ $name }}, anda adalah {{ $role }}</h2>

@endsection
