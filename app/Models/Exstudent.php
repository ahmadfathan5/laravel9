<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exstudent extends Model
{
    use HasFactory;
    protected $table = 'student_extracurricular';
    protected $fillable = ['student_id->enabled', 'extracurricular_id->enabled', 'updated_at->disabled', 'created_at->disabled'];
}
