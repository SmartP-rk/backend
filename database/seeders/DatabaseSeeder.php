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
            ->hasPark()
            ->create();
        Driver::factory(10)->create();
        Vehicle::factory(10)->create();
    }
}
