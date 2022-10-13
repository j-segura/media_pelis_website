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
use App\Http\Controllers\Admin\ProductorController;
use App\Http\Controllers\Admin\ActorController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

/* Categorias routes ---------*/
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');

/* Generos routes ------------*/
Route::resource('generos', GeneroController::class)->names('admin.generos');

/* Productors routes ---------*/
Route::resource('productors', ProductorController::class)->names('admin.productors');

/* Actors routes -------------*/
Route::resource('actors', ActorController::class)->names('admin.actors');