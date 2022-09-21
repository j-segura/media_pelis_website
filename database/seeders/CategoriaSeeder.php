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
        $genero->name = 'Pelicula';
        $genero->slug = 'Pelicula';
        $genero->save();

        $genero = new Categoria();
        $genero->name = 'Serie';
        $genero->slug = 'Serie';
        $genero->save();

        $genero = new Categoria();
        $genero->name = 'Documental';
        $genero->slug = 'Documental';
        $genero->save();
    }
}
