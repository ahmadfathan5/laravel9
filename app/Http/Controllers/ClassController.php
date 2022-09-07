<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;

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
}
