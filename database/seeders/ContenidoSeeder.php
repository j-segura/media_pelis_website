<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Contenido;

class ContenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contenidos = Contenido::factory(100)->create();

        foreach($contenidos as $contenido){
            $contenido->personajes()->attach([
                rand(1,10),
                rand(11,20),
                rand(21,30),
                rand(31,40),
                rand(41,50),
                rand(51,60),
            ]);

            $contenido->productors()->attach([
                rand(1,10),
                rand(11,20)
            ]);

            $contenido->generos()->attach([
                rand(1,3),
                rand(4,6)
            ]);


        }
        
    }
}
