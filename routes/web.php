<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Docentes;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Materias;



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

Route::get('/dashboard', [HomeController::class,'index']
)->middleware(['auth', 'verified'])->name('dashboard');

//Rutas Facultades
Route::get('/facultades/listado', [Facultades::class,'index']
)->middleware(['auth', 'verified'])->name('facultades_listado');

//Rutas Programas
Route::get('/programas/listado', [Programas::class,'index']
)->middleware(['auth', 'verified'])->name('programas_listado');

//Rutas Docentes
Route::get('/docentes/listado', [Docentes::class,'index']
)->middleware(['auth', 'verified'])->name('docentes_listado');

//Rutas Estudiantes
Route::get('/estudiantes/listado', [Estudiantes::class,'index']
)->middleware(['auth', 'verified'])->name('estudiantes_listado');

//Rutas Materias
Route::get('/materias/listado', [Materias::class,'index']
)->middleware(['auth', 'verified'])->name('materias_listado');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
