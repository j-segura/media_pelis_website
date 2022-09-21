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
        $productor->slug = 'Marvel';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Paramount';
        $productor->slug = 'Paramount';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Netflix';
        $productor->slug = 'Netflix';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Universal';
        $productor->slug = 'Universal';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Columbia';
        $productor->slug = 'Columbia';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Warner Bros Pictures';
        $productor->slug = 'Warner Bros Pictures';
        $productor->save();

        $productor = new Productor();
        $productor->name = 'Pixar';
        $productor->slug = 'Pixar';
        $productor->save();
    }
}
