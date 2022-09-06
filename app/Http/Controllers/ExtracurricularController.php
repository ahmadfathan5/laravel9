<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;

class ExtracurricularController extends Controller
{

    public function index()
    {
        $ekskul = Extracurricular::with('students')->get();
        return view('extracurricular', ['ekskulList' => $ekskul]);
    }
}
