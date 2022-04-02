<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitanteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();
//Rutas del visitante
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [VisitanteController::class, 'showIndex'])->name('index');
Route::get('/acerca', [VisitanteController::class, 'showAcerca'])->name('acerca');
Route::get('/cita', [VisitanteController::class, 'showCita'])->name('cita');
Route::get('/galeria', [VisitanteController::class, 'showGaleria'])->name('galeria');
Route::get('/horario', [VisitanteController::class, 'showHorario'])->name('horario');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

//Rutas del administrador
Route::group(['prefix' => 'Admin',  'middleware' => 'admin'], function() {
    //Gestion citas
    Route::get('gestionCitas', [CitaController::class, 'index'])->name('Admin.gestionCitas');
    Route::delete('gestionCitas/delete/{id}', [CitaController::class, 'destroy'])->name('gestionCitas.delete');
    Route::post('gestionCitas', [CitaController::class, 'store'])->name('gestionCitas.store');
    Route::get('gestionCitas/{id}/edit', [CitaController::class, 'edit'])->name('gestionCitas.edit');

    //Gestion Productos
    Route::get('gestionProductos', [ProductoController::class, 'index'])->name('Admin.gestionProductos');
    Route::post('gestionProductos', [ProductoController::class, 'store'])->name('gestionProductos.store');
    Route::delete('gestionProductos/delete/{id}', [ProductoController::class, 'destroy'])->name('gestionProductos.delete');
});
