<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Arrays de opções para mark, model e category
        $marks = ['Fiat', 'Chevrolet', 'Volkswagen', 'Toyota', 'Ford'];
        $models = ['Uno', 'Onix', 'Gol', 'Corolla', 'Fiesta'];
        $categories = ['Hatch', 'Sedan', 'SUV', 'Pickup', 'Coupe'];

        return [
            'driver_id' => Driver::factory(),
            'color' => fake()->colorName(),
            'year' => fake()->date(),
            'mark' => fake()->randomElement($marks),
            'model' => fake()->randomElement($models),
            'category' => fake()->randomElement($categories),
            'plate' => $this->generatePlate()
        ];
    }

    // Método para gerar placas de veículo
    private function generatePlate(): string
    {
        // Probabilidade de gerar no formato Mercosul (AAA1A11)
        $isMercosul = fake()->boolean(50);
        if ($isMercosul) {
            return strtoupper(fake()->regexify('[A-Z]{3}[0-9][A-Z][0-9]{2}'));
        }
        // Formato antigo (AAA-1234)
        return strtoupper(fake()->regexify('[A-Z]{3}-[0-9]{4}'));
    }
}
