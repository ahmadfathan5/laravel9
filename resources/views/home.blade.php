@extends('layouts.layout')
@section('title', 'Home')

@section('content')

<h1>ini adalah halaman home</h1>
<h2>selamat datang {{ Auth::user()->name }}, anda adalah {{ Auth::user()->role['name']}}</h2>
@endsection
