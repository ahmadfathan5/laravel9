@extends('layouts.layout')
@section('title', 'add data')

@section('content')

<h2>ini adalah halaman untuk mengedit data class {{$class['name']}}</h2>

<div class="mt-5 col-8 m-auto">
    <form action="/class-edit/{{$class['id']}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Nama Kelas</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kelas" value="{{$class['name']}}">
        </div>
        <div class="mb-3">
            <label for="teacher">Wali Kelas</label>
            <select name="teacher_id" id="teacher" class="form-control">
                <option value="{{$class->teacher['id']}}">{{ $class->teacher['name'] }}</option>
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
