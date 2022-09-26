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
        $titulo = $this->faker->sentence(4);

        return [
            'titulo' => $titulo,
            'slug' => Str::slug($titulo),
            'portada' => $this->faker->randomElement(['l-1.jpg', 'l-2.jpg', 'l-3.jpg', 'l-4.jpg', 'l-5.jpg', 'l-6.jpg', 'l-7.jpg', 'l-8.jpg', 'm-1.jpg', 'm-2.jpg', 'm-3.jpg', 'm-4.jpg']),
            'banner' => $this->faker->randomElement(['s-1.jpg', 's-2.jpg', 's-3.jpg', 's-4.jpg', 's-5.jpg', 's-6.jpg']),
            'duracion' => $this->faker->time(),
            'sinopsis' => $this->faker->text(500),
            'trailer_link' => 'https://www.youtube.com/',
            'año' => $this->faker->year(),
            'status' => $this->faker->randomElement([1,2,3]), //1: normal, 2:estrenos 3: recomendadas
            'subcategoria' => $this->faker->randomElement([1,2,3]),//1: destacadas 2:pupulares 3: nuevas
            'categoria_id' => Categoria::all()->random()->id,
        ];
    }
}
