<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'Acura',
            'Alfa Romeo',
            'Asia Motors',
            'Aston Martin',
            'Audi',
            'Baby',
            'BMW',
            'BRM',
            'Bugre',
            'BYD',
            'Cadillac',
            'Caoa Chery',
            'Chana',
            'Changan',
            'Chrysler',
            'Chevrolet',
            'Citroën',
            'Daewoo',
            'Daihatsu',
            'Dodge',
            'EFFA',
            'Engesa',
            'Envemo',
            'Ferrari',
            'Fiat',
            'Fibravan',
            'Ford',
            'Fyber',
            'GEELY',
            'Genesis',
            'GMC',
            'Great Wall',
            'Gurgel',
            'Hafei',
            'Hitech Eletric',
            'Honda',
            'Hyundai',
            'Isuzu',
            'JAC',
            'Jaguar',
            'Jeep',
            'Jinbei',
            'Kia Motors',
            'Lada',
            'Lamborghini',
            'Land Rover',
            'Lexus',
            'Lifan',
            'Lobini',
            'Lotus',
            'Maserati',
            'Mazda',
            'McLaren',
            'Mercedes-Benz',
            'Mercury',
            'MG',
            'Mini',
            'Mitsubishi',
            'Nissan',
            'Peugeot',
            'Plymouth',
            'Pontiac',
            'Porsche',
            'RAM',
            'Relly',
            'Renault',
            'Rolls-Royce',
            'Rover',
            'Saab',
            'Saturn',
            'Seat',
            'Shineray',
            'Smart',
            'Ssangyong',
            'Subaru',
            'Suzuki',
            'Toyota',
            'Troller',
            'Volvo',
            'Volkswagen',
            'Wake',
            'Walk',
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand,
            ]);
        }
    }
}
