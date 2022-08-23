<?php

use Illuminate\Support\Facades\Route;


Route::view('peliculas', 'peliculas')->name('peliculas');

Route::view('/', 'inicio')->name('inicio');
Route::view('/show', 'show')->name('show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
