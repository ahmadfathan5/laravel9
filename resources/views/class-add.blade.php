@extends('layouts.layout')
@section('title', 'add data')

@section('content')

<h2>ini adalah halaman untuk menambahkan data class</h2>

<div class="mt-5 col-8 m-auto">
    <form action="class-add" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Nama Kelas</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kelas">
        </div>
        <div class="mb-3">
            <label for="teacher">Wali Kelas</label>
            <select name="teacher_id" id="teacher" class="form-control">
                <option value="">Pilih Wali Kelas</option>
                @foreach ($teacher as $item)
                    <option value="{{$item->id}}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 d-grid gap-2 d-md-block">
            <button class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection
