<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;


Route::view('peliculas', 'peliculas')->name('peliculas');

Route::view('/', 'inicio')->name('inicio');
Route::view('/show', 'show')->name('show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('admin/categorias', [CategoriaController::class, 'index'])->name('categorias_index');
    Route::get('admin/categorias/create', [CategoriaController::class, 'create'])->name('categoria_crear');
    Route::post('admin/categorias', [CategoriaController::class, 'store'])->name('categoria_store');
    Route::get('admin/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categoria_edit');
    Route::put('admin/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categoria_update');
    Route::delete('admin/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria_destroy');

    Route::view('admin/generos', 'genero.index')->name('generos_index');


});
