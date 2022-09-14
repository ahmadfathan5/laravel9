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

    public function store(Request $request)
    {
        $ekskul = Extracurricular::create($request->all());

        if ($ekskul) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil ditambahkan');
        }

        return redirect('/extracurricular');
    }

    public function edit(Request $request, $id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        return view('ekskul-edit', ['ekskul' => $ekskul]);
    }

    public function update(Request $request, $id)
    {
        $ekskul = Extracurricular::findOrFail($id);
        $ekskul->update($request->all());
        return redirect('/extracurricular');
    }

    public function createanggota()
    {
        $ekskul = Extracurricular::get(['id', 'name']);
        $student = Student::get(['id', 'name']);
        return view('add-anggota', ['ekskul' => $ekskul, 'student' => $student]);
    }

    public function storeanggota(Request $request)
    {
        // $exstudent = Exstudent::create(['student_id' => $request['student_id'], 'extracurricular_id' => $request['extracurricular_id']]);
        $exstudent = DB::table('student_extracurricular')->insert([
            'student_id' => $request->student_id,
            'extracurricular_id' => $request->extracurricular_id,
        ]);

        if ($exstudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'Anggota berhasil ditambahkan');
        }

        return redirect('/extracurricular');
    }

    public function editanggota(Request $request, $id)
    {
        return view('edit-anggota');
    }
}
