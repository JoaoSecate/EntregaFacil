<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<s\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Gera os valores da tabela
            'nome' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'senha' => fake()->unique()->password(),
            'tipo' => fake()->randomElement(['Cliente', 'Entregador']),
        ];
    }


}
