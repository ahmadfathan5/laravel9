<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();

        return view('teacher', ['teacherList' => $teacher]);
    }

    public function show($id)
    {
        $teacher = Teacher::with('class.students')->findOrFail($id);
        return view('teacher-detail', ['teacher' => $teacher]);
    }

    public function create()
    {
        return view('teacher-add');
    }

    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());

        if ($teacher) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil ditambahkan');
        }

        return redirect('/teacher');
    }

    public function edit(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher-edit', ['teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect('/teacher');
    }
}
