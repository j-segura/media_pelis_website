<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\ProductorController;
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

    /* Categorias routes ---------*/

    Route::get('admin/categorias', [CategoriaController::class, 'index'])->name('categorias_index');
    Route::get('admin/categorias/create', [CategoriaController::class, 'create'])->name('categoria_crear');
    Route::post('admin/categorias', [CategoriaController::class, 'store'])->name('categoria_store');
    Route::get('admin/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categoria_edit');
    Route::put('admin/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categoria_update');
    Route::delete('admin/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categoria_destroy');

    /* Generos routes ---------*/

    Route::get('admin/generos', [GeneroController::class, 'index'])->name('generos_index');
    Route::get('admin/generos/create', [GeneroController::class, 'create'])->name('genero_crear');
    Route::post('admin/generos', [GeneroController::class, 'store'])->name('genero_store');
    Route::get('admin/generos/{genero}/edit', [GeneroController::class, 'edit'])->name('genero_edit');
    Route::put('admin/generos/{genero}', [GeneroController::class, 'update'])->name('genero_update');
    Route::delete('admin/generos/{genero}', [GeneroController::class, 'destroy'])->name('genero_destroy');

    /* Productores routes---------*/

    Route::get('admin/productores', [ProductorController::class, 'index'])->name('productores_index');
    Route::get('admin/productores/create', [ProductorController::class, 'create'])->name('productor_crear');
    Route::post('admin/productores', [ProductorController::class, 'store'])->name('productor_store');
    Route::get('admin/productores/{productor}/edit', [ProductorController::class, 'edit'])->name('productor_edit');
    Route::put('admin/productores/{productor}', [ProductorController::class, 'update'])->name('productor_update');
    Route::delete('admin/productores/{productor}', [ProductorController::class, 'destroy'])->name('productor_destroy');


});
