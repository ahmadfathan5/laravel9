<?php

namespace App\Models;

use App\Models\ClassRoom;
use App\Models\Extracurricular;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    function class ()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extracurriculars()
    {
        return $this->belongsToMany(Extracurricular::class, 'student_extracurricular', 'student_id', 'extracurricular_id');
    }
}
