@extends('layouts.layout')
@section('title', 'add data')

@section('content')

<h2>ini adalah halaman untuk menambahkan data Extracurricular</h2>

<div class="mt-5 col-8 m-auto">
    <form action="anggota-add" method="post">
        @csrf
        <div class="mb-3">
            <label for="extracurricular">pilih anggota yang akan dihapus</label>
            <select name="student_id" id="extracurricular_id" class="form-control">
                <option value="">Pilih Anggota</option>
                {{-- @foreach ($ekskul as $item)
                    <option value="{{$item->id}}">{{ $item->name }}</option>
                @endforeach --}}
            </select>
        </div>
        <div class="mb-3 d-grid gap-2 d-md-block">
            <button class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection
