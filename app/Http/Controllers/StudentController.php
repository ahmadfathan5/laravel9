<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        return view('student', ['studentList' => $student]);
    }
}
