@extends('layouts.layout')
@section('title', 'detail '.$student->name)

@section('content')

<div class="mt-5">
    <h2>apa kamu yakin ingin menghapus student {{ $student['name'] }} ({{ $student['nis'] }})?</h2>
    
    
    <div class="mb-3 d-grid gap-2 d-md-block">
        <form  class="d-grid" action="/student-remove/{{$student['id']}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>
</div>


@endsection
