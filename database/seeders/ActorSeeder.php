<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actor::factory(50)->create();
        
        $actor = new Actor();
        $actor->name = 'Dwayne Johnson';
        $actor->slug = 'dwayne-johnson';
        $actor->foto = 'cast1.jpg';
        $actor->link = 'https://es.wikipedia.org/wiki/Dwayne_Johnson';
        $actor->save();

        $actor = new Actor();
        $actor->name = 'Keren Gillan';
        $actor->slug = 'keren-gillan';
        $actor->foto = 'cast2.jpg';
        $actor->link = 'https://es.wikipedia.org/wiki/Karen_Gillan';
        $actor->save();

        $actor = new Actor();
        $actor->name = 'Kevin Hart';
        $actor->slug = 'kevin-hart';
        $actor->foto = 'cast3.jpg';
        $actor->link = 'https://es.wikipedia.org/wiki/Kevin_Hart';
        $actor->save();

        $actor = new Actor();
        $actor->name = 'Jack Black';
        $actor->slug = 'jack-black';
        $actor->foto = 'cast4.jpg';
        $actor->link = 'https://es.wikipedia.org/wiki/Jack_Black';
        $actor->save();

        $actor = new Actor();
        $actor->name = 'Nick Jonas';
        $actor->slug = 'nick-jonas';
        $actor->foto = 'cast5.jpg';
        $actor->link = 'https://es.wikipedia.org/wiki/Nick_Jonas';
        $actor->save();

        $actor = new Actor();
        $actor->name = 'Madison Iseman';
        $actor->slug = 'madison-iseman';
        $actor->foto = 'cast6.jpg';
        $actor->link = 'https://es.wikipedia.org/wiki/Madison_Iseman';
        $actor->save();
    }
}
