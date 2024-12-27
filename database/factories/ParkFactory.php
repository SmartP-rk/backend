<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Park>
 */
class ParkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'proprietor' => User::factory(),
            'cnpj' => fake()->unique()->numerify('##.###.###/####-##'),
            'name' => fake()->company(),
            'phone' => fake()->phoneNumber(),
            'zcode' => fake()->postcode(),
            'state' => fake()->stateAbbr(),
            'city' => fake()->city(),
            'neighborhood' => fake()->streetName(),
            'street' => fake()->streetName(),
            'number' => fake()->buildingNumber(),
            'complement' => fake()->optional()->secondaryAddress(),
            'vacancy_count' => fake()->numberBetween(10, 50),
            'image' => fake()->imageUrl(640, 480, 'parking lot', true, 'Estacionamento'),
        ];
    }
}
