<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\EstudiantesController;
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
    return view('welcome');
});

Route::get('/cursos', [CursosController::class, 'index'])->name('curso.index');
Route::post('/cursos', [CursosController::class, 'store'])->name('curso.store');
Route::get('/cursos/create', [CursosController::class, 'create'])->name('curso.create');
Route::delete('/cursos/{curso}', [CursosController::class, 'destroy'])->name('curso.destroy');
Route::put('/cursos/{curso}', [CursosController::class, 'update'])->name('curso.update');
Route::get('/cursos/{curso}/edit', [CursosController::class, 'edit'])->name('curso.edit');

Route::get('/instructores', [InstructoresController::class, 'index'])->name('instructor.index');
Route::post('/instructores', [InstructoresController::class, 'store'])->name('instructor.store');
Route::get('/instructores/create', [InstructoresController::class, 'create'])->name('instructor.create');
Route::delete('/instructores/{instructor}', [InstructoresController::class, 'destroy'])->name('instructor.destroy');
Route::put('/instructores/{instructor}', [InstructoresController::class, 'update'])->name('instructor.update');
Route::get('/instructores/{instructor}/edit', [InstructoresController::class, 'edit'])->name('instructor.edit');

Route::get('/estudiantes', [EstudiantesController::class, 'index'])->name('estudiante.index');
Route::post('/estudiantes', [EstudiantesController::class, 'store'])->name('estudiante.store');
Route::get('/estudiantes/create', [EstudiantesController::class, 'create'])->name('estudiante.create');
Route::delete('/estudiantes/{estudiante}', [EstudiantesController::class, 'destroy'])->name('estudiante.destroy');
Route::put('/estudiantes/{estudiante}', [EstudiantesController::class, 'update'])->name('estudiante.update');
Route::get('/estudiantes/{estudiante}/edit', [EstudiantesController::class, 'edit'])->name('estudiante.edit');