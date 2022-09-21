<?php

namespace Database\Factories;

use App\Models\Contenido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plataformalink>
 */
class PlataformalinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'plataforma' => $this->faker->randomElement(['Netflix', 'Cuevana', 'Disney+', 'HBO']),
            'link' => '#',
            'contenido_id' => Contenido::all()->random()->id
        ];
    }
}