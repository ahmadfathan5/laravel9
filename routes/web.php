<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
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
        'role' => 'tamu',
        'buah' => ['nanas', 'jambu', 'rujak']
    ]);
});

Route::get('/students',[StudentController::class, 'index']);
Route::get('/class',[ClassController::class, 'index']);

