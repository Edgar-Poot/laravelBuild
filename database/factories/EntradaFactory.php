<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Entrada;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entrada>
 */
class EntradaFactory extends Factory
{
    protected $model = Entrada::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->lexify(str_repeat('?', 50)), //Generar un título con 50 caracteres aleatorios
            'tag' => $this->faker->word, //Generar una sola palabra para el Tag
            'imagen' => $this->faker->word,
            'contenido' => $this->faker->paragraph, //Generar un parrafo de contenido
            'user_id' => User::inRandomOrder()->first()->id, //Obtener un user_id aleatorio
        ];
    }
}
