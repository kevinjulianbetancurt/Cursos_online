<?php

use App\Http\Controllers\CursosController;
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


