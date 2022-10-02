<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = new Categoria();
        $genero->name = 'Peliculas';
        $genero->slug = 'peliculas';
        $genero->save();

        $genero = new Categoria();
        $genero->name = 'Series';
        $genero->slug = 'series';
        $genero->save();

        $genero = new Categoria();
        $genero->name = 'Documentales';
        $genero->slug = 'documentales';
        $genero->save();
    }
}
