<?php

namespace Database\Factories;

use App\Models\Actor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personaje>
 */
class PersonajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'descripcion' => $this->faker->text(250),
            'actor_id' => Actor::all()->random()->id
        ];
    }
}
