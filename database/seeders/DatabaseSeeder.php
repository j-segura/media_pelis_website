<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use App\Models\Contenido;
use App\Models\Genero;
use App\Models\Personaje;
use App\Models\Plataformalink;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ProductorSeeder::class);
        $this->call(ActorSeeder::class);
        Personaje::factory(60)->create();
        $this->call(ContenidoSeeder::class);
        Plataformalink::factory(60)->create();
    }
}

