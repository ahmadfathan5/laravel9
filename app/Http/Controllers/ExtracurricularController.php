<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtracurricularController extends Controller
{

    public function index()
    {
        $ekskul = Extracurricular::get();
        return view('extracurricular', ['ekskulList' => $ekskul]);
    }

    public function show($id)
    {
        $ekskul = Extracurricular::with('students')->findOrFail($id);
        return view('ekskul-detail', ['ekskul' => $ekskul]);
    }

    public function create()
    {
        return view('ekskul-add');
    }

    public function createanggota()
    {
        $ekskul = Extracurricular::get(['id', 'name']);
        $student = Student::get(['id', 'name']);
        return view('add-anggota', ['ekskul' => $ekskul, 'student' => $student]);
    }

    public function store(Request $request)
    {
        $ekskul = Extracurricular::create($request->all());
        return redirect('/extracurricular');
    }

    public function storeanggota(Request $request)
    {
        // $exstudent = Exstudent::create(['student_id' => $request['student_id'], 'extracurricular_id' => $request['extracurricular_id']]);
        $exstudent = DB::table('student_extracurricular')->insert([
            'student_id' => $request->student_id,
            'extracurricular_id' => $request->extracurricular_id,
        ]);
        return redirect('/extracurricular');
    }
}
