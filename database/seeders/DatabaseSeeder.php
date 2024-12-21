<?php

namespace Database\Seeders;

use App\Models\{
    User,
    Driver,
    Vehicle,
    Park
};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                ->has(
                    Driver::factory(10)
                        ->has(Vehicle::factory(2), 'vehicles'), // Adiciona 2 veículos por motorista
                    'drivers'
                )
        )
        ->create();
    }
}
