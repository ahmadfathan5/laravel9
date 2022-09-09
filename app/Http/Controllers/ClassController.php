<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::get();

        return view('classroom', ['classList' => $class]);
    }

    public function show($id)
    {
        $class = ClassRoom::with(['teacher', 'students'])->findOrFail($id);
        return view('class-detail', ['class' => $class]);
    }

    public function create()
    {
        $teacher = Teacher::select('id', 'name')->get();
        return view('class-add', ['teacher' => $teacher]);
    }

    public function store(Request $request)
    {
        $class = ClassRoom::create($request->all());
        return redirect('/class');
    }

    public function edit(Request $request, $id)
    {
        $class = ClassRoom::with('teacher')->findOrFail($id);
        $teacher = Teacher::where('id', '!=', $class->teacher_id)->get(['id', 'name']);
        return view('class-edit', ['class' => $class, 'teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $class = ClassRoom::findOrFail($id);
        $class->update($request->all());
        return redirect('/class');
    }
}
