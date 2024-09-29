<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Setor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
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
            "nome"=>$this->faker->words(2, true),
            "email"=>$this->faker->unique()->words(1, true),
            "senha"=>$this->faker->words(1, true),
            "dataNascimento"=>$this->faker->date(),
            "setor_id"=>$this->faker->randomElement(Setor::pluck("id"))
        ];
    }
}
