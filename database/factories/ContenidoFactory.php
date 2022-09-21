<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contenido>
 */
class ContenidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $titulo = $this->faker->sentence();

        return [
            'titulo' => $titulo,
            'slug' => Str::slug($titulo),
            'portada' => $this->faker->randomElement(['portada', 'portada2']),
            'banner' => $this->faker->randomElement(['banner.jpg', 'banner2.jpg']),
            'duracion' => $this->faker->time(),
            'sinopsis' => $this->faker->text(500),
            'trailer_link' => 'https://www.youtube.com/',
            'año' => $this->faker->year(),
            'status' => $this->faker->randomElement([1,2,3]), //1: normal, 2:nuevo 3: recomendadas
            'subcategoria' => $this->faker->randomElement([1,2,3]),//1: destacadas 2:pupulares 3: nuevas
            'categoria_id' => Categoria::all()->random()->id,
        ];
    }
}
