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
        $genero->save();

        $genero = new Categoria();
        $genero->name = 'Series';
        $genero->save();

        $genero = new Categoria();
        $genero->name = 'Documentales';
        $genero->save();
    }
}
