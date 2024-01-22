<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idioma>
 */
class IdiomaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->randomElement(['Español', 'Inglés', 'Francés', 'Alemán', 'Italiano', 'Portugués', 'Ruso', 'Chino', 'Japonés', 'Coreano', 'Árabe']),
        ];
    }
}
