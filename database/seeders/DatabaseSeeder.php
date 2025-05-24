<?php

namespace Database\Seeders;

use App\Models\{
    User,
    Vehicle,
    Park
};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)
            ->has(
                Park::factory()
            )
            ->create();
        User::factory(5)
            ->has(
                Vehicle::factory(2), // Adiciona 2 veículos por motorista
                'vehicles'
            )->create([
                'user_type' => 3, // Motorista
            ]);
        $this->call([
            BrandSeeder::class,
        ]);
    }
}
