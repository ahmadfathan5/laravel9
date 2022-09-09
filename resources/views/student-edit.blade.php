@extends('layouts.layout')
@section('title', 'add data')

@section('content')

<h2>ini adalah halaman untuk menambahkan data student</h2>

<div class="mt-5 col-8 m-auto">
    <form action="/student-edit/{{$student['id']}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Input Nama" value="{{$student['name']}}" required>
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="{{$student['gender']}}">
                    @if ($student['gender'] == 'L')
                        Pria
                    @else
                        Wanita
                    @endif 
                </option>
                @if ($student['gender'] == 'L')
                    <option value="P">Wanita</option>
                @else
                    <option value="L">Pria</option>
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" name="nis" id="nis" placeholder="Input NIS" value="{{$student['nis']}}">
        </div>
        <div class="mb-3">
            <label for="class">Kelas</label>
            <select name="class_id" id="class" class="form-control">
                <option value="{{$student->class['id']}}">{{$student->class['name']}}</option>
                
                @foreach ($class as $item)
                    <option value="{{$item['id']}}">{{ $item['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 d-grid gap-2 d-md-block">
            <button class="btn btn-warning">Update</button>
        </div>
    </form>
</div>
@endsection
