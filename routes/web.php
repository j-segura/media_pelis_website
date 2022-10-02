<?php

use App\Http\Controllers\ContenidoController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ContenidoController::class, 'index'])->name('contenidos.index');
Route::get('contenido/{contenido}', [ContenidoController::class, 'show'])->name('contenidos.show');
Route::get('categoria/{categoria}', [ContenidoController::class, 'categoria'])->name('contenidos.categoria');
Route::get('genero/{genero}', [ContenidoController::class, 'genero'])->name('contenidos.genero');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
});
