<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\InscripcionesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){

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

Route::get('/inscripciones', [InscripcionesController::class, 'index'])->name('inscripcion.index');
Route::post('/inscripciones', [InscripcionesController::class, 'store'])->name('inscripcion.store');
Route::get('/inscripciones/create', [InscripcionesController::class, 'create'])->name('inscripcion.create');
Route::delete('/inscripciones/{inscripcion}', [InscripcionesController::class, 'destroy'])->name('inscripcion.destroy');
Route::put('/inscripciones/{inscripcion}', [InscripcionesController::class, 'update'])->name('inscripcion.update');
Route::get('/inscripciones/{inscripcion}/edit', [InscripcionesController::class, 'edit'])->name('inscripcion.edit');


});

require __DIR__.'/auth.php';