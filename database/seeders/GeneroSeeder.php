<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = new Genero();
        $genero->name = 'Accion';
        $genero->slug = 'accion';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Comedia';
        $genero->slug = 'comedia';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Fantasia';
        $genero->slug = 'fantasia';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Aventura';
        $genero->slug = 'aventura';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Horror';
        $genero->slug = 'horror';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Drama';
        $genero->slug = 'drama';
        $genero->save();
    }
}
