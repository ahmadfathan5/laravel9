<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

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
        return redirect('/extracurricular');
    }
}
