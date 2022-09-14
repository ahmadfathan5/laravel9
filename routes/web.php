<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('home', [
        'name' => 'mamad',
        'role' => 'admin',
        'buah' => ['nanas', 'jambu', 'rujak'],
    ]);
});
//student
Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/addstudent', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/editstudent/{id}', [StudentController::class, 'edit']);
Route::put('/student-edit/{id}', [StudentController::class, 'update']);
Route::get('/deletestudent/{id}', [StudentController::class, 'delete']);
Route::delete('/student-remove/{id}', [StudentController::class, 'remove']);

//class
Route::get('/class', [ClassController::class, 'index']);
Route::get('/class/{id}', [ClassController::class, 'show']);
Route::get('/addclass', [ClassController::class, 'create']);
Route::post('/class-add', [ClassController::class, 'store']);
Route::get('/editclass/{id}', [ClassController::class, 'edit']);
Route::put('/class-edit/{id}', [ClassController::class, 'update']);

//ekskul
Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show']);
Route::get('/addextracurricular', [ExtracurricularController::class, 'create']);
Route::post('/extracurricular-add', [ExtracurricularController::class, 'store']);
Route::get('/editextracurricular/{id}', [ExtracurricularController::class, 'edit']);
Route::put('/extracurricular-add/{id}', [ExtracurricularController::class, 'update']);

//anggota ekskul
Route::get('/addanggota', [ExtracurricularController::class, 'createanggota']);
Route::post('/anggota-add', [ExtracurricularController::class, 'storeanggota']);
Route::get('/editanggota/{id}', [ExtracurricularController::class, 'editanggota']);
Route::put('/anggota-edit/{id}', [ExtracurricularController::class, 'updateanggota']);

//teacher
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher/{id}', [TeacherController::class, 'show']);
Route::get('/addteacher', [TeacherController::class, 'create']);
Route::post('/teacher-add', [TeacherController::class, 'store']);
Route::get('/editteacher/{id}', [TeacherController::class, 'edit']);
Route::put('/teacher-add/{id}', [TeacherController::class, 'update']);
