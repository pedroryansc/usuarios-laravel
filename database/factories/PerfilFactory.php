<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perfil>
 */
class PerfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "usuario_id"=>$this->faker->unique()->randomElement(Usuario::pluck("id")),
            "descricao"=>$this->faker->words(2, true)
        ];
    }
}
