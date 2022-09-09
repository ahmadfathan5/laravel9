@extends('layouts.layout')
@section('title', 'add data')

@section('content')

<h2>ini adalah halaman untuk menambahkan data Teacher</h2>

<div class="mt-5 col-8 m-auto">
    <form action="teacher-add" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Nama Kelas</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kelas">
        </div>
        <div class="mb-3 d-grid gap-2 d-md-block">
            <button class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection
