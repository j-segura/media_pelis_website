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
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Comedia';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Fantasia';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'aventura';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'horror';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Drama';
        $genero->save();
    }
}
