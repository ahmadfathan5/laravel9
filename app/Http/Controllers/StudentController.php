<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::get();

        return view('student', ['studentList' => $student]);
    }

    public function show($id)
    {
        $student = Student::with(['class.teacher', 'extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create()
    {
        dd('berhasil');
    }
}
