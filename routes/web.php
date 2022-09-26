<?php

use App\Http\Controllers\AuthController;
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
    return view('home');
})->middleware('auth');

//halaman login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'otentikasi'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

//student
Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'show'])->middleware(['auth', 'only-admin-teacher']);
Route::get('/addstudent', [StudentController::class, 'create'])->middleware(['auth', 'only-admin-teacher']);
Route::post('/student', [StudentController::class, 'store'])->middleware(['auth', 'only-admin-teacher']);
Route::get('/editstudent/{id}', [StudentController::class, 'edit'])->middleware(['auth', 'only-admin-teacher']);
Route::put('/student-edit/{id}', [StudentController::class, 'update'])->middleware(['auth', 'only-admin-teacher']);
Route::get('/deletestudent/{id}', [StudentController::class, 'delete'])->middleware(['auth', 'only-admin']);
Route::delete('/student-remove/{id}', [StudentController::class, 'remove'])->middleware(['auth', 'only-admin']);
Route::get('/student-restore', [StudentController::class, 'restoreStudent'])->middleware(['auth', 'only-admin']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware(['auth', 'only-admin']);

//class
Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class/{id}', [ClassController::class, 'show'])->middleware('auth');
Route::get('/addclass', [ClassController::class, 'create'])->middleware('auth');
Route::post('/class-add', [ClassController::class, 'store'])->middleware('auth');
Route::get('/editclass/{id}', [ClassController::class, 'edit'])->middleware('auth');
Route::put('/class-edit/{id}', [ClassController::class, 'update'])->middleware('auth');

//ekskul
Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');
Route::get('/addextracurricular', [ExtracurricularController::class, 'create'])->middleware('auth');
Route::post('/extracurricular-add', [ExtracurricularController::class, 'store'])->middleware('auth');
Route::get('/editextracurricular/{id}', [ExtracurricularController::class, 'edit'])->middleware('auth');
Route::put('/extracurricular-add/{id}', [ExtracurricularController::class, 'update'])->middleware('auth');

//anggota ekskul
Route::get('/addanggota', [ExtracurricularController::class, 'createanggota'])->middleware('auth');
Route::post('/anggota-add', [ExtracurricularController::class, 'storeanggota'])->middleware('auth');
Route::get('/editanggota/{id}', [ExtracurricularController::class, 'editanggota'])->middleware('auth');
Route::put('/anggota-edit/{id}', [ExtracurricularController::class, 'updateanggota'])->middleware('auth');

//teacher
Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth')->middleware('auth');
Route::get('/teacher/{id}', [TeacherController::class, 'show'])->middleware('auth');
Route::get('/addteacher', [TeacherController::class, 'create'])->middleware('auth');
Route::post('/teacher-add', [TeacherController::class, 'store'])->middleware('auth');
Route::get('/editteacher/{id}', [TeacherController::class, 'edit'])->middleware('auth');
Route::put('/teacher-add/{id}', [TeacherController::class, 'update'])->middleware('auth');
