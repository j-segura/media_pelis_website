<?php

namespace Database\Seeders;

use App\Models\Productor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productor::factory(13)->create();

        $productor = new Productor();
        $productor->name = 'Marvel';
        $productor->slug = 'marvel';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Paramount';
        $productor->slug = 'paramount';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Netflix';
        $productor->slug = 'netflix';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Universal';
        $productor->slug = 'universal';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Columbia';
        $productor->slug = 'columbia';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Warner Bros Pictures';
        $productor->slug = 'warner-bros-pictures';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Pixar';
        $productor->slug = 'pixar';
        $productor->save();
    }
}
