@extends('layouts.layout')
@section('title', 'add data')

@section('content')

<h2>ini adalah halaman untuk menambahkan data Extracurricular {{ $ekskul['name'] }}</h2>

<div class="mt-5 col-8 m-auto">
    <form action="/extracurricular-add/{{ $ekskul['id'] }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Nama Extracurricular</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Extracurricular" value="{{ $ekskul['name'] }}">
        </div>
        <div class="mb-3 d-grid gap-2 d-md-block">
            <button class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection
