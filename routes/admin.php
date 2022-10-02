<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


/* use App\Http\Controllers\GeneroController;
use App\Http\Controllers\ProductorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\PersonajeController;
 */

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\GeneroController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

/* Categorias routes ---------*/
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');

/* Genero routes -------------*/
Route::resource('generos', GeneroController::class)->names('admin.generos');