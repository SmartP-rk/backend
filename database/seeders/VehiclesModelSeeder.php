<?php

namespace Database\Seeders;

use App\Models\VehiclesModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiclesModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*----------Acura----------*/
        VehiclesModel::create([
            'name' => 'Integra GS 1.8',
            'year' => '1992',
            'brand_id' => 1,
        ]);
        VehiclesModel::create([
            'name' => 'Legend 3.2/3.5',
            'year' => '1998',
            'brand_id' => 1,
        ]);
        VehiclesModel::create([
            'name' => 'NSX 3.0',
            'year' => '1995',
            'brand_id' => 1,
        ]);
        /*----------Alfa Romeo----------*/
        VehiclesModel::create([
            'name' => '155',
            'year' => '1997',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '145 Elegant 1.7/1.8 16V',
            'year' => '1999',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '145 Elegant 2.0 16V',
            'year' => '1998',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '145 Quadrifoglio 2.0',
            'year' => '1999',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '145 QV',
            'year' => '1998',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '147 2.0 16V 148cv 4p Semi-Aut.',
            'year' => '2005',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '155 Super',
            'year' => '1997',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '156 2.5 V6 24V 190cv 4p Aut.',
            'year' => '2003',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '156 Sport Wagon 2.0 16V',
            'year' => '2002',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '156 Sport Wagon 2.5 V6 24V 4p Aut.',
            'year' => '2004',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '156 TS\/Sport\/Elegant 2.0 16V',
            'year' => '2002',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '164 3.0 V6',
            'year' => '1996',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '164 Super V6 24V',
            'year' => '1996',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '166 3.0 V6 24V',
            'year' => '2003',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => '2300 TI/TI-4',
            'year' => '1986',
            'brand_id' => 2,
        ]);
        VehiclesModel::create([
            'name' => 'Spider 2.0/3.0',
            'year' => '1997',
            'brand_id' => 2,
        ]);
        /*----------Asia Motors----------*/
        VehiclesModel::create([
            'name' => 'Towner Coach Full',
            'year' => '1998',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner Furgão',
            'year' => '1999',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner Glass Van',
            'year' => '1998',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner Luxo',
            'year' => '1999',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner Multiuso 5p',
            'year' => '1999',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner Panel Van',
            'year' => '1998',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner Pick-Up',
            'year' => '1999',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner SDX/DLX/STD',
            'year' => '1998',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner Super Luxo',
            'year' => '1999',
            'brand_id' => 3,
        ]);
        VehiclesModel::create([
            'name' => 'Towner Truck',
            'year' => '1998',
            'brand_id' => 3,
        ]);
        /*----------Aston Martin----------*/
        VehiclesModel::create([
            'name' => 'DB9 Coupe 6.0 V12 510cv',
            'year' => '2016',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'DB9 Volante 6.0 V12 470cv',
            'year' => '2011',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Rapide 6.0 V12 477cv',
            'year' => '2012',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Rapide S 6.0 V12 550cv',
            'year' => '2016',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Vanquish V12 6.0 565cv',
            'year' => '2016',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Vantage 6.0 V12 510cv',
            'year' => '2012',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Vantage Coupe 4.7 V8 425cv',
            'year' => '2016',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Vantage Roadster 4.7 V8 420cv',
            'year' => '2011',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Vantage S 6.0 V12 565cv',
            'year' => '2016',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Vantage S Coupe 4.7 V8 430cv',
            'year' => '2012',
            'brand_id' => 4,
        ]);
        VehiclesModel::create([
            'name' => 'Virage Coupe 6.0 V12 490cv',
            'year' => '2012',
            'brand_id' => 4,
        ]);
        /*----------Audi----------*/
        VehiclesModel::create([
            'name' => '100 2.8 V6',
            'year' => '1995',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => '100 2.8 V6 Avant',
            'year' => '1995',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => '100 S-4 2.2 Avant Turbo',
            'year' => '1995',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => '80 2.0',
            'year' => '1995',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => '80 2.0 Avant',
            'year' => '1995',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => '80 2.6/ 2.8',
            'year' => '1995',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => '80 2.6/2.8 Avant',
            'year' => '1996',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => '80 2.8 Cabriolet',
            'year' => '1999',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => '80 S2 Avant',
            'year' => '1995',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A1 1.4 TFSI 122cv S-tronic 3p',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A1 2.0 TFSI Quattro 256cv 3p',
            'year' => '2013',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A1 Sport 1.4 TFSI 185cv 3p S-tronic',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A1 Sport. S Edition 1.4 TFSI 5p S-tronic',
            'year' => '2017',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A1 Sportback 1.4 TFSI 185cv 5p S-tronic',
            'year' => '2015',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A1 Sportback 1.4 TFSI 5p S-tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A1 Sportback 1.8 TFSI 192cv 5p S-tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.6 3p',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.6 3p Aut.',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.6 5p',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.6 5p Aut.',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.6 8V 102cv 3p',
            'year' => '2007',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 3p',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 3p Aut.',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 5p Aut.',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 5p Mec.',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 Turbo 180cv 3p Aut./ Tip.',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 Turbo 180cv 3p Mec.',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 Turbo 180cv 5p Aut./ Tip.',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 Turbo 180cv 5p Mec.',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 Turbo 3p Aut.',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 Turbo 3p Mec.',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 Turbo 5p Aut.',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 1.8 Turbo 5p Mec.',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Cabriolet 1.8 16V TFSI 180cv S-tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Cabriolet Ambition 2.0 TFSI S-tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Cabriolet Perfor. 2.0 TFSI S-tronic',
            'year' => '2019',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sed. Ambition 2.0 TSFI 220cv S-tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sed. P. Plus Tech 1.4 Flex TFSI Tip.',
            'year' => '2021',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sed. P.Plus 1.4 25Anos Flex TFSI Tip.',
            'year' => '2019',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sed. Perform. Black 2.0 TFSI S-tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sed.1.8/1.8 Ambit.16V TB FSI S-tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sedan 1.4 TFSI Flex Tiptronic 4p',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sedan 1.4/ Attra. 16V TB FSI S-tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sedan Performance 2.0 TFSI S-tronic',
            'year' => '2020',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sedan Prestige 1.4 TFSI Flex Tip.',
            'year' => '2021',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sedan Prestige Plus 1.4 TFSI Flex Tip',
            'year' => '2021',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sedan S-Line 2.0 TFSI  S-Tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sedan S-Line Limited 1.4 TFSI Tiptro.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sport 1.8 16V TFSI S-tronic 3p',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sport 2.0 16V TFSI S- tronic',
            'year' => '2013',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportb. Perf. Black 2.0 S-tron./Hib.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportb. Prestige Plus 1.4 TFSI S-tron',
            'year' => '2020',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportb. S-Line Limited 1.4 TFSI Tip.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportback 1.4 TFSI S-tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportback 1.6 8V 102cv 5p',
            'year' => '2010',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportback 1.8 16V TFSI S-tronic 5p',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportback 2.0 16V TFSI Mec.',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportback 2.0 16V TFSI S-tronic',
            'year' => '2013',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A3 Sportback S-Line 2.0 TFSI S-Tro./Hib.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 1.8  Aut.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 1.8  Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 1.8 Avant Aut.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 1.8 Avant Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 1.8 Avant Turbo Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 1.8 Avant Turbo Tip./ Multitronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 1.8 Tip./ Multitronic Turbo',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 1.8 Turbo',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.0 16V TFSI 183/180cv Multitronic',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.0 16V TFSI 200/ 214cv Multitronic',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.0 16V TFSI Quattro Stronic',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.0 20V 130cv Multitronic 4p',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.0 Avant 16V TFSI Quattro Stronic',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.0 Avant Ambie. 2.0 16V TFSi S tron.',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.0 Avant TFSI 183/180cv Multitroni',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.0 Avant TFSI 200/214cv Multitron.',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.4 30V Avant Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.4 30V Avant Tip./Multitronic',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.4 30V Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.4 30V Tip./Multitronic',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.4 Avant V6 30V Quattro Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.4 Avant V6 30V Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.4 V6 30V Quattro Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.4 V6 30V Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8',
            'year' => '1997',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 30V  Tiptronic/ Aut.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 30V Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 Avant V6 12V',
            'year' => '1997',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 Avant V6 30V Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 Avant V6 30V Quattro Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 Avant V6 30V Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 Avant V6 30V Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 V6 30V  Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 2.8 V6 30V Quattro Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.0 30V 218cv Multitronic 4p',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.0 30V 218cv Quattro Tiptron./Aut 4p',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.0 Avant 30V 218cv Multitronic 5p',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.0 Avant 30V 218cv Quattro Tiptronic',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.0 Cabriolet 30V 218cv Multitronic',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.2 FSI 24V 255cv Multitronic',
            'year' => '2008',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.2 FSI 24V 269cv Quattro Tiptronic',
            'year' => '2012',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.2 FSI Avant 24V 255cv Multitronic',
            'year' => '2008',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.2 FSI Avant 24V Quattro S Tronic',
            'year' => '2012',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 3.2 FSI Cabriolet 24V 255cv Multitron',
            'year' => '2007',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Ambiente 2.0 TFSI 190cv S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Ambition 2.0 TFSI Quattro S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Attraction 2.0 TFSI 190cv S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Avant Lim. Ed. 2.0 TFSI S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Avant Prest. Plus 2.0 TFSI S-tronic',
            'year' => '2019',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Launch Edition 2.0 TFSI 190cv S troni',
            'year' => '2017',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Limited Edition 2.0 TFSI S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Perfor. Black 2.0 TFSI Quat. S tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Prestige 2.0 TFSI 190cv S-tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 Prestige Plus 2.0 TFSI 190cv S tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A4 S Line 2.0  TFSI 204cv S Tonic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 3.2 FSI 24V 269cv Multitronic',
            'year' => '2009',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 3.2 FSI V6 24V 269cv Quattro Tiptroni',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Ambiente Sportb. 2.0 TFSI S tonic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Ambit. Plus Sport. 2.0 TFSI S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Ambit. Sport. 2.0 TFSI S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Attraction Sportb. 2.0 TFSI S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Cabriolet 2.0 TFSI Quattro Stronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Coupê 2.0 TFSI Quattro Stronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportb. 2.0 16V TFSI Quat. S-tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportb. Perf. 2.0 TFSI Quat. S-tronic',
            'year' => '2019',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportb. Prestige 2.0 16V TFSI S-troni',
            'year' => '2019',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportb.Perf.B. 2.0 TFSI Quat. S-troni',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportb.Prestige Plus 2.0 TFSI S-tronc',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportback 1.8 TFSI 170cv Multi.',
            'year' => '2017',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportback 2.0 16V TFSI 180cv Multi.',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportback 2.0 16V TFSI 211cv Multi.',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A5 Sportback S-Line 2.0 TFSI S-tronic',
            'year' => '2019',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.0 TFSI 252cv S tronic 4p',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.4 30V Mec',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.4 30V Tip./Multitronic',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.4 Avant 30V Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.4 Avant 30V Tip./ Multitronic',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.4 Avant V6 30V Quattro Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.4 Avant V6 30V Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.4 V6 30V Quattro Mec',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.4 V6 30V Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.7 30V Avant Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.7 30V Mec.',
            'year' => '2000',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.7 Avant Quattro Tiptronic',
            'year' => '2002',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.7 Quattro Tiptronic',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8',
            'year' => '1997',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 30V Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 30V Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 Avant',
            'year' => '1997',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 Avant 30V Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 Avant 30V Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 Avant V6 30V Quattro Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 Avant V6 30V Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 V6 30V Quattro Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 2.8 V6 30V Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 3.0 Avant V6 30V 218cv Multitronic 5p',
            'year' => '2007',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 3.0 Avant. TB FSI V6 Quattro Tip. 5p',
            'year' => '2012',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 3.0 Avant.TFSI V6 Quattro S tronic 5p',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 3.0 TB FSI V6 Quattro Tiptronic',
            'year' => '2012',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 3.0 TFSI V6 Quattro S tronic 4p',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 3.0 V6 30V 218cv Multitronic 4p',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 3.2 FSI 24V 255cv Multitronic',
            'year' => '2008',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 4.2 Avant Quattro Tiptronic',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 4.2 Quattro Tiptronic',
            'year' => '2008',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 Allroad 3.0 TFSI V6 Quattro S tronic',
            'year' => '2017',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 Perf. Black 3.0 TFSI Quattro S-tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 Performance 3.0 TFSI Quattro S.tronic',
            'year' => '2020',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A6 Prestige Plus 2.0 TFSI Quattro S-tro.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A7 SP.b. Perf. Bla. 3.0 TFSI Quat. S-tro',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A7 Sportback 2.0 TFSI S Tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A7 Sportback 3.0 TFSI Quattro S Tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A7 Sportback Perf. 3.0 TFSI S-tron Quat.',
            'year' => '2020',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A8 3.0 TFSI 310cv Quattro Tiptronic 4p',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A8 4.0 TFSI Quattro Tiptronic',
            'year' => '2017',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A8 4.2 Quattro Tiptronic',
            'year' => '2013',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A8 4.2 V8 32V Tiptronic',
            'year' => '2000',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A8 6.0 W12 48V 450cv Quattro Tiptronic',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'A8 6.3 W12 48V Quattro Tiptronic',
            'year' => '2017',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Allroad 2.7 30V Quattro Turbo Tiptronic',
            'year' => '2005',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Avant RS2',
            'year' => '1995',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'E-TRON Performa. Black Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'E-TRON Performace Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'E-TRON S Sportback Quat. Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'E-TRON Sportb. Perf.Black Aut.(Elétrico)',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'E-TRON Sportback Perf. Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 1.4 TFSI/TFSI Flex S-tronic 5p',
            'year' => '2019',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 2.0 TFSI Quat. 170/180cv S-tronic 5p',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 2.0 TFSI Quat. 211/220cv S-tronic 5p',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 Black Ed. 1.4 TFSI Flex/Black S-tron.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 Black S Line 1.4 TFSI S-tronic',
            'year' => '2021',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 P. Plus 1.4 TFSI Flex/P.Plus S-tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 Perf. Black 2.0 TFSI Tiptr. Quattro',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 Performance 2.0 TFSI Tiptr. Quattro',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 Prest. 1.4 TFSI Flex/Prest. S-tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 SPB Perf. Black 2.0 TFSI Tipt. Quat.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q3 SPB Performance 2.0 TFSI Tipt. Quatt.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 2.0 16V TFSI 225cv Quattro Tiptronic',
            'year' => '2017',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 2.0 16V TFSI Quattro S Tronic',
            'year' => '2013',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 2.0 TFSI Quattro S tronic (Blindado)',
            'year' => '2020',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 3.0 V6 TFSI 272cv Quattro Tiptronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 3.2 FSI V6 Quattro S Tronic',
            'year' => '2012',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 Ambiente 2.0 TFSI Quattro S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 Ambition 2.0 TFSI Quattro S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 Attraction 2.0 TFSI Quattro S tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 Black 2.0 TFSI Quattro S tronic',
            'year' => '2020',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 Prestige 2.0 TFSI Quattro S tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 Prestige Plus 2.0 TFSI Quat. S tronic',
            'year' => '2020',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 S-Line 2.0 TFSI Quattro S-tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 S-Line Black 2.0 TFSI Quat. S-Tronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 SPB. S-Line Black 2.0 TFSI Qua.S-Tron',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q5 Sportback S-Line 2.0 TFSI Quat.S-Tron',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q7 3.0 V6 TFSI  Quat.Tip.5p/ Perf./Hib.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q7 3.6 V6 284cv Quattro Tiptronic',
            'year' => '2010',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q7 4.2 V8 40V 350cv Quattro Tiptronic',
            'year' => '2010',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q7 Perf. Black 3.0 TFSI Quat.Tip./Hib.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q7 S-Line 3.0 V6 TFSI Quattro Tiptronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q8 Perf.Bl. 3.0 TFSI Coupe Quat. S-tron.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'Q8 Perfo. 3.0 TFSI Quattro S-tronic/Hib.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'R8 4.2 V8 426cv Quattro R-tronic',
            'year' => '2012',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'R8 5.2 V10 Quattro R-tronic/S-tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'R8 GT 5.2 V10 560cv Quattro R-tronic',
            'year' => '2012',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'R8 Spyder 5.2 Quattro R-tronic/S-tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS E-TRON GT Quattro Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS Q3 2.5 TFSI Quattro S-tronic 5p',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS Q3 Sportback 2.5 TFSI Quattro S-tron.',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS Q8 4.0 Bi-TB V8 FSI Quattro Tiptronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS3 Sedan 2.5 TFSI Quattro S-tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS3 Sportback 2.5 TFSI Quattro S-tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS4 2.7 Avant V6 30V BI-TB Quattro 380cv',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS4 2.9 Avant V6 TFSI Quattro Tiptronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS4 4.2 Avant 32V FSI Quattro S-tronic',
            'year' => '2015',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS5 2.9 V6 TFSI Quattro Tiptronic',
            'year' => '2022',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS5 4.2 FSI V8 450cv Quattro S-Tron. 2p',
            'year' => '2015',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS5 Coupê 2.9 V6 TFSI Quattro Tiptronic',
            'year' => '2019',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS6 4.0 Avant TFSI BI-TB Quattro Tip. 5p',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS6 4.2 450cv BI-TB Quattro Tiptronic 4p',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS6 4.2 Avant  BI-TB Quattro Tiptron. 5p',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS6 5.0 Avant.FSI V10 Bi-TB Quattro Tip.',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS6 5.0 FSI V10 Bi-TB Quattro Tip.',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'RS7 Sportback 4.0 TFSI Quattro Tiptronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S Q5 3.0 V6 TFSI 354cv Quattro Tiptronic',
            'year' => '2020',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S3 1.8 225cv Turbo Quattro',
            'year' => '2003',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S3 Sedan 2.0 TFSI Quattro 286cv S-tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S3 Sportback 2.0 TFSI Quattro S Tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S4 2.7 Avant Turbo Quattro',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S4 2.7 Turbo Quattro Mec.',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S4 3.0 Avant TFSI V6 24V Quattro Stronic',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S4 3.0 TFSI V6 24V Quattro Stronic',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S4 4.2 Avant V8 40V 344cv Quattro Tipt.',
            'year' => '2005',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S4 4.2 V8 40V 344cv Quattro Tiptronic',
            'year' => '2005',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S5 Cabriolet 3.0 TFSI Quattro Stronic',
            'year' => '2013',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S5 Coupê 3.0 TFSI Quattro Stronic',
            'year' => '2013',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S5 Sportback 3.0 TFSI Quattro Stronic',
            'year' => '2015',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 2.2 20V TB',
            'year' => '1997',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 2.2 Avant 20V TB',
            'year' => '1997',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 4.0 TFSI Quattro S-Tronic 4p',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 4.2 Avant V8 40V Quattro Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 4.2 V8 40V Quattro Mec',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 4.2 V8 40V Quattro Tiptronic',
            'year' => '2004',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 5.2 Avant FSI V10 435cv Quattro Tiptr',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 5.2 FSI V10 435cv Quattro Tiptronic',
            'year' => '2011',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 Plus 4.2 Avant V8 32V',
            'year' => '1998',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S6 Plus 4.2 V8 32V',
            'year' => '1998',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S7 4.0 TFSI 420/450cv Quattro S-tronic',
            'year' => '2016',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S8 4.0 TFSI Quattro Tiptronic 4p',
            'year' => '2017',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S8 4.2 Mec',
            'year' => '1998',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S8 4.2 Quattro Mec.',
            'year' => '2000',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S8 4.2 Quattro Tiptronic',
            'year' => '2000',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'S8 4.2 Tiptronic',
            'year' => '2001',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TT 1.8 TB 180cv',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TT 1.8 TB Quattro 225cv',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TT 2.0 16v TFSI S-Tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TT Roadster 1.8 TB Quattro 225cv (Conv.)',
            'year' => '2006',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TT Roadster 2.0 16v TFSI S-Tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TTRS 2.5 TFSI QUATTRO S Tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TTRS Roadster 2.5 TB FSI Quat. S Tronic',
            'year' => '2014',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TTS 2.0 TFSI QUATTRO S Tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        VehiclesModel::create([
            'name' => 'TTS Roadster 2.0 TB FSI Quattro S Tronic',
            'year' => '2018',
            'brand_id' => 5
        ]);
        /*----------Baby----------*/
        VehiclesModel::create([
            'name' => 'Buggy 1.6 2-Lug.',
            'year' => '1997',
            'brand_id' => 6
        ]);
        VehiclesModel::create([
            'name' => 'Buggy 1.6/ TST/ RS 1.6 4-Lug.',
            'year' => '2022',
            'brand_id' => 6
        ]);
        VehiclesModel::create([
            'name' => 'Buggy RS Evolution 1.8 8V',
            'year' => '2022',
            'brand_id' => 6
        ]);
        /*----------BMW----------*/
        VehiclesModel::create([
            'name' => '116iA 1.6 TB 16V 136cv 5p',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '118i Sport 1.5 TB 12V Aut. 5p',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '118iA 2.0 16V 136cv 3p',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '118iA 2.0 16V 136cv 5p',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '118iA Full 1.6 TB 16V 170cv 5p',
            'year' => '2014',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '118iA/ Urban/Sport 1.6 TB 16V 170cv 5p',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '120i 2.0 16V 150cv/ 156cv 5p',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '120iA 2.0 16V 150cv/ 156cv 5p',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '120iA 2.0 16V 156cv 3p',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '120iA Cabrio 2.0 16V 156cv 2p',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '120iA Sport 2.0/ActiveFlex 16V Aut.',
            'year' => '2019',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '125i M Sport/Active Flex 2.0 TB Aut. 5p',
            'year' => '2019',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '130i 3.0 24V 265cv 5p',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '130iA 3.0 24V 265cv 3p',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '130iA 3.0 24V 265cv 5p',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '135iA Coupé 3.0 24V 306cv',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '218i Gran Coupe Sport GP 1.5 Bi-Turbo',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '220i Tourer Active Flex 2.0 TB Aut.',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '225i Active Tourer Sport 2.0 TB Aut.',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '316 (todas)',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '316i 1.6 TB 16V 136cv 4p',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '318i Cabrio 1.8 16V',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '318i/iA 1.8 16V',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '318i/iA Compact 1.8 16V',
            'year' => '1997',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '318iA 2.0 16V 136cv 5p',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '318iS/ISA 1.9 16V',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '318Ti Compact Mec',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '318Ti/TiA Compact 1.9 16V',
            'year' => '1999',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '320i',
            'year' => '2007',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '320iA',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '320iA 2.0 TB M Sport A.Flex/M.Sport 4p',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '320iA 2.0 Turbo/ActiveFlex 16V/GP  4p',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '320iA GT Sport 2.0 Turbo 16V 184cv 5p',
            'year' => '2017',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '320iA Modern/Sport TB 2.0/A.Flex/GP 4p',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323Ci Coupê',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323CiA Coupê',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323i 2.5 24V',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323i Confort',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323i Sport',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323i Touring',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323i/iA Exclusive',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323iA 2.5 24V',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323iA Confort',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323iA Entry Sedan',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323iA Sport',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323iA Top Sedan',
            'year' => '2002',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323iA Touring',
            'year' => '1999',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323Ti Compact',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323Ti Compact Sport',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '323TiA Compact Top',
            'year' => '1999',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '325i',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '325i/iA Cabrio',
            'year' => '1996',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '325iA',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '325iA 2.5 24V Protection',
            'year' => '2003',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '325iA Coupé 2.5 24V 2p',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '325iA Touring',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328i Exclusive 2.8 24V',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328i Touring/Sport',
            'year' => '1999',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328i/iA (modelo antigo)',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328i/iA (novo modelo)',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328i/iA Cabrio',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328iA 2.0 TB/2.0 TB Flex 16V 4p',
            'year' => '2014',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328iA Exclusive 2.8 24V',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328iA GT M Sport 2.0 Turbo 16V 245cv 5p',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328iA Luxury/Modern 2.0 TB 16V 4p',
            'year' => '2013',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328iA M Sport 2.0 16V Flex 4p',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328iA Plus 2.0 TB 16V 245cv 4p',
            'year' => '2013',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328iA Sport 2.0 16V/2.0 16V Flex 4p',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '328iA Touring/Sport',
            'year' => '1999',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330Ci Cabriolet',
            'year' => '2004',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330CiA Cabriolet',
            'year' => '2006',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330e M Sport 2.0 Turbo Híbrido Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330i M Sport 2.0 TB 16V 4p',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330i MotorSport 3.0 24V 4p',
            'year' => '2003',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330i Sport 2.0 TB 16V 4p',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330iA Exclusive 3.0 24V 4p',
            'year' => '2006',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330iA MotorSport 4p',
            'year' => '2007',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '330iA Top 4p',
            'year' => '2007',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '335i 3.0 ActiveHybrid 3',
            'year' => '2014',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '335iA 3.0 24V 306cv',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '335iA Cabriolet 3.0 24V 306cv',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '335iA M Sport 3.0 24V 306cv 4p',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '335iA Sport 3.0 24V 306cv 4p',
            'year' => '2013',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '420i Cabriolet M Sport 2.0 TB 16V 2p.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '420i Cabriolet Sport 2.0 TB 184cv 2p',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '428i Cabriolet Sport 2.0 TB 245cv 2p',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '428i Gran Coupe M Sport 2.0 TB 245cv',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '428i Gran Coupe Sport 2.0 TB 245cv',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '430i Cab. Sport Limited Ed.2.0 TB 2p',
            'year' => '2017',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '430i Cabriolet M Sport 2.0 TB 258cv 2p',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '430i Cabriolet Sport 2.0 TB 252cv 2p',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '430i Gran Coupé M Sport TB 5p',
            'year' => '2017',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '435iA M Sport Coupe 3.0 24V 306cv 2p',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '520i 2.0 16V',
            'year' => '1993',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '525i/iA',
            'year' => '2003',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '525i/iA Touring',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '528i/iA',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '528iA 2.0 Turbo 16V 245cv 4p',
            'year' => '2014',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '528iA High',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '528iA M Sport 2.0 Turbo 16V 245cv 4p',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '528iA Touring',
            'year' => '1999',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '530e M Sport 2.0 Turbo Híbrido Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '530i M Sport 2.0 Turbo 252cv Aut.',
            'year' => '2019',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '530i Security',
            'year' => '2008',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '530i/iA',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '530i/iA Touring',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '535i/iA 3.5 24V',
            'year' => '1993',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '535iA 3.0 24V 306cv Bi-Turbo',
            'year' => '2013',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '535iA GT 3.0 306cv Bi-Turbo',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '535iA M Sport 3.0 24V 306cv Bi-Turbo',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '540i',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '540i M Sport 3.0 Turbo 340cv Aut.',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '540i/iA Touring',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '540iA',
            'year' => '2003',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '540iA MotorSport',
            'year' => '2003',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '540iA Protection',
            'year' => '2003',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '540iTA',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '545iA 4.4 32V V8 333cv',
            'year' => '2006',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '550iA 4.4 32V 407cv Bi-Turbo',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '550iA 4.8 32V',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '550iA Limited Sport Edition 4.8 32V',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '550iA Security 4.8 32V',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '640i Gran Coupe 3.0 320cv 4p',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '645Ci Cabriolet 4.4 V8 32V 333cv',
            'year' => '2005',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '645iA 4.4 V8 32V 333cv',
            'year' => '2005',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '650Ci Cabriolet 4.4 407cv Bi-Turbo',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '650Ci Cabriolet 4.8 V8 32V 360cv',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '650i Gran Coupe 4.4 V8 450cv 4p',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '650iA 4.4 407cv Bi-Turbo',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '650iA 4.8 V8 32V 360cv',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '650iA Limited Sport  Edition 4.8 32V',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '730i 3.0 32V',
            'year' => '1992',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '730iA 3.0 32V',
            'year' => '1992',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '735i/iA 3.5 32V',
            'year' => '1992',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '740i',
            'year' => '1997',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '740iA',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '740iL/iLA Highline 4.4 32V',
            'year' => '1996',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '740iLA Protection',
            'year' => '2001',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '745iA 4.4 V8 32V 333cv',
            'year' => '2005',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '745Le M Sport Sedan 3.0 V6 Híbrido Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '750i',
            'year' => '1996',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '750i M Sport Sedan 4.4 V8 450cv Aut.',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '750iA',
            'year' => '2014',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '750iL Highline 5.4 24V',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '750iL M Sport Sedan 4.4 V8 450cv Aut.',
            'year' => '2019',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '750iL Pure Excellence Sedan 4.4 V8 Aut.',
            'year' => '2019',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '750iLA 4.4 ActiveHybrid 7',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '760iL 6.0 V12 445cv/544cv',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '840Ci',
            'year' => '1997',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '840CiA',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '850Ci/CiA 5.0 24V',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '850Ci/CiA 5.4 24V',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '850CSi 5.6 24V',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => '850i 5.0 24V',
            'year' => '1996',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i3 Bev 170cv Aut. (Elétrico)',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i3 Bev Connected 170cv Aut. (Elétrico)',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i3 Bev Full 170cv Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i3 Bev Un. Forever 170cv Aut. (Életrico)',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i3 Rex E Drive 170cv Aut.(Elétrico)',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i3 Rex E Drive Connected Aut. (Elétrico)',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i3 Rex E Drive Full 170cv Aut.(Elétrico)',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i8 e-Drive 1.5 TB 12V  Aut.',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'i8 Roadster e-Drive 1.5 TB 12V Aut.',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'iX 3 M Sport Aut.(Elétrico)',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'iX XDrive 40 Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'iX XDrive 50 Sport Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M 135i 3.0 24V 320cv',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M 135i XDRIVE 2.0 306cv Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M 235i Coupe 3.0 24V 326cv',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M Roadster',
            'year' => '2000',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M1 Coupe 3.0 24V 340cv',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M140i 3.0  24V 340cv 5p',
            'year' => '2019',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M2 Competition 3.0 Bi-Turbo 410cv Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M2 Competition Ed. Espe. 3.0 Bi-TB Mec.',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M2 Coupe 3.0 Bi-Turbo 24V 370cv',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M2 CS Coupe 3.0 Bi-Turbo 450cv',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M235i XDRIVE Gran Coupé 2.0 Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M240i Coupe 3.0 24V 340cv 2p',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 3.2 24V',
            'year' => '2006',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Cabrio 3.0 24V',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Cabrio 4.0 32V',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Competition M 3.0 Bi-TB 510cv',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Competition M Track 3.0 Bi-TB',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Coupê 3.0 24V 255cv',
            'year' => '1998',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Coupê 3.0 V6 24V 282cv',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Coupê 4.0 32V',
            'year' => '2013',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 CS Sedan 3.0 Bi-Turbo 460cv 4p',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Sedan 3.0 Bi-Turbo 24V 4p',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M3 Sedan 4.0 32V',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M340i XDRIVE 3.0 Turbo Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M340i XDRIVE First Ed. 3.0 Turbo Aut.',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M4 Cabriolet 3.0 Bi-Turbo 24V 431cv 2p',
            'year' => '2016',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M4 Coupe 3.0 Bi-Turbo 24V 431cv 2p',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M4 CS Coupe 3.0 Bi-Turbo 460cv 2p',
            'year' => '2019',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M440i Coupe 3.0 TB Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M5 3.8/Touring 3.8 24V',
            'year' => '1995',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M5 4.4 560cv Bi-Turbo Aut.',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M5 5.0 32V/ 40V',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M5 Competition M XDRIVE 4.4 Bi-TB V8',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M5 M XDRIVE 4.4 Bi-TB V8',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M5 Perform. Pack M XDRIVE 4.4 Bi-TB V8',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M6 5.0 V10 40V 507cv',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M6 Coupe 4.4 Bi-Turbo V8 32V',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M6 Gran Coupe 4.4 Bi-Turbo V8 32V 560cv',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M760Li xDrive 6.6 V12 585cv Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M8 Gran Coupé Comp.First ED. 4.4 V8 32V',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M8 Gran Coupé Competition 4.4 V8 32V',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'M850i XDrive Coupé 4.4 V8 530cv Aut.',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 SDRIVE 18i 2.0 16V 4x2 Aut.',
            'year' => '2014',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 SDRIVE 20i 2.0/2.0 TB Acti.Flex Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 SDRIVE 20i M S. 2.0 25 Anos TB Flex',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 SDRIVE 20i M Sport 2.0 TB Flex Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 SDRIVE 20i X-Line 2.0 TB Active Flex',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 XDRIVE 25i Sport 2.0/2.0 Flex Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 XDRIVE 28i 2.0 Turbo 16V 4x4 Aut.',
            'year' => '2014',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 XDRIVE 28i 3.0 24V 4x4 Aut.',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X1 XDRIVE 28i Sport 2.0 ActiveFlex Aut.',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X2 M35i 2.0 Turbo 306cv Aut.',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X2 SDRIVE  20i M Sp/M Sp 2.0 TB Flex Aut',
            'year' => '2020',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X2 SDRIVE 18i 1.5 ActiveFlex 136cv Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X2 SDRIVE 20i 2.0/2.0 TB A. Flex 16V Aut',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 Family 2.5 24V 192cv/ 218cv',
            'year' => '2009',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 Family 3.0 24V 231cv',
            'year' => '2006',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 M Competition 3.0 Bi-TB 510cv Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 M40i 3.0 M Sport Edit. V6 Turbo Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 M40i 3.0 Turbo V6  Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 Sport 2.5 24V 192cv/ 218cv',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 Sport 3.0 24V 231cv',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 20i 2.0/X-Line Bi-TB Flex Aut.',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 28i 2.0 Turbo 245cv Aut.',
            'year' => '2015',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 28i 3.0 258cv',
            'year' => '2012',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 30e M SP Launch Ed. TB Híbrido',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 30e M Sport Turbo Híbrido Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 30e Turbo Híbrido Aut.',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 30e X-Line Turbo Híbrido Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 30i X-Line 2.0 Turbo 252cv Aut',
            'year' => '2021',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X3 XDRIVE 35i/M-Sport 3.0 306cv Bi-Turbo',
            'year' => '2017',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X4 M Competition 3.0 Bi-TB 510cv Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X4 M40i 3.0 M Sport Edit V6 Turbo Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X4 M40i 3.0 Turbo 388cv Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X4 XDRIVE 28i X-Line 2.0 Turbo 245cv Aut',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X4 XDRIVE 30i M-Sport 2.0 Tb. 252cv Aut',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X4 XDRIVE 35i M-Sport 3.0 TB 306cv Aut.',
            'year' => '2017',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 3.0 4x4',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 4.4 4x4',
            'year' => '2003',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 4.8 4x4 V8 32V 360cv',
            'year' => '2008',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 Endurance 4.8is 4x4 V8 32V 355cv Aut.',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 M 4.4 4x4 V8 32V Bi-Turbo Aut.',
            'year' => '2018',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 M Competition 4.4 V8 Bi-TB Aut.',
            'year' => '2022',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 Security 4.4 4x4 V8 32V',
            'year' => '2006',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 Security 4.8is 4x4 V8 32V 355cv Aut.',
            'year' => '2010',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 Sport 4.4 4x4 V8 32V',
            'year' => '2006',
            'brand_id' => 7
        ]);
        VehiclesModel::create([
            'name' => 'X5 Sport 4.8 4x4 V8 32V 355cv',
            'year' => '2010',
            'brand_id' => 7
        ]);
        /*----------BRM----------*/
        VehiclesModel::create([
            'name' => 'Buggy W. Turing/Luxo/M-11 Absolut 1.6 8V',
            'year' => '2019',
            'brand_id' => 8
        ]);
        VehiclesModel::create([
            'name' => 'Buggy/M-8/M-8 Long 1.6',
            'year' => '2019',
            'brand_id' => 8
        ]);
        /*----------Bugre----------*/
        VehiclesModel::create([
            'name' => 'Buggy IV e V',
            'year' => '2008',
            'brand_id' => 9
        ]);
        VehiclesModel::create([
            'name' => 'Buggy VII/VII BIG/VII Flex',
            'year' => '2022',
            'brand_id' => 9
        ]);
        /*----------BYD----------*/
        VehiclesModel::create([
            'name' => 'D1 EV',
            'year' => '2022',
            'brand_id' => 10
        ]);
        VehiclesModel::create([
            'name' => 'eT3',
            'year' => '2022',
            'brand_id' => 10
        ]);
        VehiclesModel::create([
            'name' => 'Han EV',
            'year' => '2022',
            'brand_id' => 10
        ]);
        VehiclesModel::create([
            'name' => 'TAN EV 4x4',
            'year' => '2022',
            'brand_id' => 10
        ]);
        /*----------CADILLAC----------*/
        VehiclesModel::create([
            'name' => 'Deville/Eldorado 4.9',
            'year' => '1995',
            'brand_id' => 11
        ]);
        VehiclesModel::create([
            'name' => 'Seville 4.6',
            'year' => '1996',
            'brand_id' => 11
        ]);
        /*----------Caoa Chery----------*/
        VehiclesModel::create([
            'name' => 'ARRIZO 5 RT 1.5 Turbo Flex Aut.',
            'year' => '2021',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'ARRIZO 5 RTS 1.5 Turbo Flex Aut.',
            'year' => '2021',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'ARRIZO 5 RX 1.5 16V Turbo Flex Aut.',
            'year' => '2020',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'ARRIZO 5 RXS 1.5 Turbo Flex Aut.',
            'year' => '2021',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'ARRIZO 5 RXT 1.5 16V Turbo Flex Aut.',
            'year' => '2020',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'ARRIZO 5e (Elétrico)',
            'year' => '2019',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'ARRIZO 6  PRO 1.5 Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'ARRIZO 6 GSX 1.5 Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Celer Hatch 1.5 16V Flex 5p',
            'year' => '2017',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Celer Hatch ACT 1.5 16V Flex 5p',
            'year' => '2018',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Celer Sedan 1.5 16V Flex 5p',
            'year' => '2018',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Celer Sedan ACT 1.5 16V Flex 5p',
            'year' => '2018',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'CIELO 1.6 16V 119cv  5p',
            'year' => '2012',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'CIELO Sedan 1.6 16V 119cv  4p',
            'year' => '2012',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Face 1.3 16V/1.3 16V Flex.Mec.',
            'year' => '2015',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'iCar EQ1 TECH (Elétrico)',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'QQ 1.0  ACT FL 12V/1.0 12V Flex  5p',
            'year' => '2020',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'QQ 1.0 ACT 12V 69cv 5p',
            'year' => '2015',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'QQ 1.0 Look FL 12V/1.0 12V Flex 5p',
            'year' => '2020',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'QQ 1.0 SMILE 12V Flex 5p',
            'year' => '2019',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'QQ 1.1/1.0 12V 69cv 5p',
            'year' => '2015',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'S-18 1.3 16V Flex Mec. 5p',
            'year' => '2012',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 2 ACT 1.5 16V Flex Aut.5p',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 2 ACT 1.5 16V Flex Mec. 5p',
            'year' => '2019',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 2 EX 1.5 16V Flex Aut. 5p',
            'year' => '2021',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 2 Look 1.5 16V Flex Aut.5p',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 2 Look 1.5 16V Flex Mec. 5p',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 2 SMILE 1.5 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 2.0 16V Aut. 5p',
            'year' => '2015',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 2.0 16V Mec. 5p',
            'year' => '2015',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 3X Plus 1.0 Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 3X Pro 1.0 Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 5X PRO 1.5 Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 5X PRO 1.5 Turbo HÍbrido',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 5X T 1.5 16V Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 5X TXS 1.5 16V Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 7 PRO 1.5 Turbo Híbrido',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 7 Pro 1.6 Turbo 16V Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 7 T 1.5 16V Turbo Flex Aut.',
            'year' => '2021',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 7 TXS 1.5 16V Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 8 FOUNDER S EDITION 1.6 TGDi Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 8 PRO 1.5 Turbo (Híbrido)',
            'year' => '2022',
            'brand_id' => 12
        ]);
        VehiclesModel::create([
            'name' => 'Tiggo 8 TXS 1.6 16V TGDi Aut.',
            'year' => '2022',
            'brand_id' => 12
        ]);
        /*----------Chana----------*/
        VehiclesModel::create([
            'name' => 'Cargo 1.0 8V 53cv (Pick-Up)',
            'year' => '2012',
            'brand_id' => 13
        ]);
        VehiclesModel::create([
            'name' => 'Cargo CD 1.0 8V 53cv (Pick-Up)',
            'year' => '2012',
            'brand_id' => 13
        ]);
        VehiclesModel::create([
            'name' => 'Cargo CE 1.0 8V 53cv (Pick-Up)',
            'year' => '2012',
            'brand_id' => 13
        ]);
        VehiclesModel::create([
            'name' => 'Family 1.0 8V 53cv (Perua)',
            'year' => '2009',
            'brand_id' => 13
        ]);
        VehiclesModel::create([
            'name' => 'Utility 1.0 8V 53cv  (Furgão)',
            'year' => '2009',
            'brand_id' => 13
        ]);
        /*----------Changan----------*/
        VehiclesModel::create([
            'name' => 'MINI STAR CD 1.0 8V 53cv (Pick-Up)',
            'year' => '2012',
            'brand_id' => 14
        ]);
        VehiclesModel::create([
            'name' => 'MINI STAR CE 1.0 8V 53cv (Pick-Up)',
            'year' => '2012',
            'brand_id' => 14
        ]);
        VehiclesModel::create([
            'name' => 'MINI STAR CS 1.0 8V 53cv (Pick-Up)',
            'year' => '2012',
            'brand_id' => 14
        ]);
        VehiclesModel::create([
            'name' => 'MINI STAR CSB 1.0 8V 53cv (Pick-Up Báu)',
            'year' => '2012',
            'brand_id' => 14
        ]);
        VehiclesModel::create([
            'name' => 'MINI STAR Family 1.0 8V 53cv (MiniVan)',
            'year' => '2012',
            'brand_id' => 14
        ]);
        VehiclesModel::create([
            'name' => 'MINI STAR Utility 1.0 8V 53cv (Furgão)',
            'year' => '2012',
            'brand_id' => 14
        ]);
        /*----------Chrysler----------*/
        VehiclesModel::create([
            'name' => '300 C 3.5 V6 249cv',
            'year' => '2009',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => '300 C 3.6 V6 Aut.',
            'year' => '2016',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => '300 C 5.7 V8 16V 340cv Aut.',
            'year' => '2009',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => '300 C SRT8 6.1 V8 16V 431cv Aut',
            'year' => '2010',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => '300 C Touring 5.7 V8 16V 340cv Aut.',
            'year' => '2009',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => '300 M 3.5',
            'year' => '2001',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Caravan LE  3.3',
            'year' => '2000',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Caravan LX 3.3 V6 182cv',
            'year' => '2007',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Caravan LX 3.8',
            'year' => '1999',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Caravan SE 2.4/3.3',
            'year' => '2001',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Cirrus LXi 2.5 V6 24V',
            'year' => '1995',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Grand Caravan LE 3.3 Aut',
            'year' => '2001',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Grand Caravan Limited 3.3 V6 12V 182cv',
            'year' => '2007',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Grand Caravan LX 3.8',
            'year' => '2001',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Grand Caravan SE 3.3 V6',
            'year' => '2006',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'LE Baron 3.0 V6',
            'year' => '1993',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'LE Baron 3.0 V6 Conv.',
            'year' => '1995',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Neon LE 1.8',
            'year' => '1999',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Neon LE/Highline 2.0',
            'year' => '2001',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Neon Sport 1.8/2.0',
            'year' => '1999',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'PT Cruiser Cabrio 2.4 16V 143cv 2p',
            'year' => '2007',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'PT Cruiser Classic 2.4 16V 143cv 4p',
            'year' => '2009',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'PT Cruiser Limited 2.0 16V 4p',
            'year' => '2004',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'PT Cruiser Limited 2.4 16V 143cv 4p',
            'year' => '2009',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'PT Cruiser Touring DEC. EDITION 2.4 16V',
            'year' => '2010',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Sebring LX 2.7 V6 24V 204cv',
            'year' => '2003',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Stratus LE 2.0',
            'year' => '2001',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Stratus LX 2.0 Mec',
            'year' => '1998',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Stratus LX 2.5 Aut',
            'year' => '2000',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Stratus LX 2.5 Conversível Aut',
            'year' => '1999',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'TOWN & COUNTRY Limited 3.8 /3.6 V6 Aut.',
            'year' => '2015',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'TOWN & COUNTRY Touring 3.6 V6 Aut.',
            'year' => '2014',
            'brand_id' => 15
        ]);
        VehiclesModel::create([
            'name' => 'Vision 3.5 24V',
            'year' => '1995',
            'brand_id' => 15
        ]);
        /*----------Chevrolet----------*/
        VehiclesModel::create([
            'name' => 'A-10 2.5/4.1',
            'year' => '1989',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'A-10 De Luxe 2.5/4.1',
            'year' => '1989',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'A-20 Custom Std. CD/ De Luxe CD',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'A-20 Custom/ C-20 Luxe 4.1',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'A-20 Custom/ C-20 S 4.1',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'AGILE LT 1.4 MPFI 8V FlexPower 5p',
            'year' => '2013',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'AGILE LTZ 1.4 MPFI 8V FlexPower 5p',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'AGILE LTZ EASYTRONIC 1.4 8V FlexPower 5p',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'AGILE LTZ EFFECT 1.4 8V FlexPower 5p Mec',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'AGILE LTZ EFFECT EASYTR.1.4 8V FlexP. 5p',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'AGILE LTZ WI-FI 1.4 8V FlexPower 5p',
            'year' => '2012',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra 2.0 8V/ CD 2.0 8V Hatchback 5p Aut',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra 2.0 8V/ CD 2.0 8V Hatchback 5p Mec',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra 2.0/ CD 2.0 8V 3p Aut.',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra 2.0/ CD/ GLS 2.0 MPFI 16V 3p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra 2.0/ CD/ Sunny/ GLS 2.0 8V 3p',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra 500 Sedan 2.0 MPFI 16V 4p',
            'year' => '2000',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Advant. 2.0 MPFI 8V FlexP. 5p Aut.',
            'year' => '2011',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Advantage 2.0 MPFI 8V FlexPower 5p',
            'year' => '2011',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Advantage 2.0 MPFI FlexPower 8V 3p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Comfort 2.0 MPFI FlexPower 8V 3p',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Comfort 2.0 MPFI FlexPower 8V 5p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Eleg. 2.0 MPFI FlexPower 8V 5p Aut',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Elegance 2.0 MPFI FlexPower 8V 3p',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Elegance 2.0 MPFI FlexPower 8V 5p',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Elite 2.0 MPFI Flex Pow. 8V 5p Aut',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Elite 2.0 MPFI FlexPower 8V 5p Mec',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra GL 1.8 MPFI 3p',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra GL Milenium 1.8 MPFI 4p',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra GLS 2.0 MPFI',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra GLS 2.0 MPFI SW',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra GSi 2.0 16V 136cv Hatchback 5p',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra S.Sport 2.0 F.Pow. 5p/Sport 2.0 3p',
            'year' => '2008',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed. Advant. 2.0 8V MPFI FlexP. 4p',
            'year' => '2011',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed.Advan. 2.0 8V MPFI FlexP. Aut.',
            'year' => '2011',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed.Comf. 2.0 MPFI FlexPower 8V 4p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed.Comf.2.0 MPFI MultiPower 8V 4p',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed.Eleg. 2.0 MPFI FlexP.8V Aut.',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed.Eleg.2.0 MPFI FlexPower 8V 4p',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed.Eleg.2.0 MPFI MultiPower 8V 4p',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed.Elite 2.0 MPFI FlexP.8V Aut.',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sed.Elite 2.0 MPFI FlexPower 8V 4p',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sedan 2.0/ CD 2.0 MPFI 8V 4p Aut.',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sedan 2.0/CD/ Expres.GLS 2.0 8V 4p',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Astra Sedan 2.0/CD/ GLS/ Adv. 2.0 16V 4p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Blazer Jimmy 4.3 V6',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Blazer S-10 4.3 V6',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Blazer SS-10 4.3 V6',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'BOLT EV Premier 203cv (Elétrico)',
            'year' => '2022',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Bonanza S / Luxe 4.1',
            'year' => '1994',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Brasinca Blazer CD 4.1',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'C-10 2.5/4.1',
            'year' => '1989',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'C-10 CD 2.5/ 4.1',
            'year' => '1989',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'C-10 De Luxe 2.5/4.1',
            'year' => '1989',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'C-10 De Luxe CD 2.5/ 4.1',
            'year' => '1989',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'C-20 Custom De Luxe 4.1',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'C-20 Custom De Luxe CD 4.1',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'C-20 Custom Std. 4.1',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'C-20 Custom Std. CD 4.1',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Calibra 16V',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CAMARO FIFTY 6.2 V8 16V 461cv',
            'year' => '2017',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Camaro RS 5.0 V8',
            'year' => '1994',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Camaro Sport 5.0 Conv.',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Camaro SS 6.2 V8 16V',
            'year' => '2022',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Camaro SS Conversível 6.2 V8 16V',
            'year' => '2022',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Camaro Z-28 Targa/Conv. 5.7',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Caprice 4.3 V8',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Caprice SW 4.3 V8',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Caprice Victoria',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CAPTIVA SPORT AWD 3.0 V6 24V 268cv',
            'year' => '2013',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CAPTIVA SPORT AWD 3.6 V6 24V 261cv 4x4',
            'year' => '2010',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CAPTIVA SPORT FWD 2.4 16V 171/185cv',
            'year' => '2017',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CAPTIVA SPORT FWD 3.0 V6 24V 268cv 4x2',
            'year' => '2012',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CAPTIVA SPORT FWD 3.6 V6 24V 261cv 4x2',
            'year' => '2010',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Caravan Comodoro 4.1/2.5',
            'year' => '1992',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Caravan Diplomata 4.1/2.5',
            'year' => '1992',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Caravan L/SL/S/SS 2.5/4.1/4.2',
            'year' => '1992',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Cavalier 3.1 Conv.',
            'year' => '1994',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Cavalier L 2.0',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta 1.0/ Super 1.0 MPFI VHC 8v 5p',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta 1.0/Super/N.Piq.1.0 MPFi VHC 8V 3p',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta 1.4/ Super/ Energy 1.4 8V 85cv 3p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta 1.4/ Super/ Energy 1.4 8V 85cv 5p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta ADVANTAGE 1.0 8v FlexPower 5p',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Life 1.0 MPFI VHC 8V 3p',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Life 1.0 MPFI VHC 8V 5p',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Life 1.4 MPFI 8V 85cv 3p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Life 1.4 MPFI 8V 85cv 5p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Life/ LS 1.0 MPFI 8V FlexPower 3p',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Life/ LS 1.0 MPFI 8V FlexPower 5p',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Spirit 1.0 MPFI 8V FlexPower 3p',
            'year' => '2011',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Spirit 1.0 MPFI VHC 8V 3p',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Spirit 1.0 MPFI VHC 8V 5p',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Spirit 1.4 MPFI 8V 85cv 3p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Spirit 1.4 MPFI 8V 85cv 5p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Spirit/ LT 1.0 MPFI 8V FlexP. 5p',
            'year' => '2016',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Super 1.0 MPFI 8V FlexPower 3p',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Celta Super 1.0 MPFI 8V FlexPower 5p',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Chevette Junior 1.0',
            'year' => '1993',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Chevette L / SL / SL/e / DL / SE 1.6',
            'year' => '1993',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Chevy 500 DL / SL / SE/ Furgão 1.6',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Cheynne 4.3 V6',
            'year' => '1995',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Classic ADVANTAGE 1.0 VHC FlexPower 4p',
            'year' => '2015',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Classic Life/LS 1.0 VHC FlexP. 4p',
            'year' => '2016',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT 1.8 8V Econo.Flex 4p Aut.',
            'year' => '2020',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT ADVANTAGE 1.4 MPFI 8V F.Power 4p',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT ADVANTAGE 1.8 8V Eco.Flex 4p Aut.',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT ELITE 1.8 8V Econo.Flex 4p Aut.',
            'year' => '2019',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT Graphite 1.8 8V Econo.Flex 4p Aut',
            'year' => '2015',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT Graphite 1.8 8V Econo.Flex 4p Mec',
            'year' => '2015',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT LS 1.4 8V FlexPower 4p',
            'year' => '2015',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT LT 1.4 8V FlexPower/EconoFlex 4p',
            'year' => '2020',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT LT 1.8 8V Econo.Flex 4p Aut.',
            'year' => '2015',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT LT 1.8 8V Econo.Flex 4p Mec.',
            'year' => '2015',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT LTZ 1.4 8V FlexPower/EconoFlex 4p',
            'year' => '2020',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT LTZ 1.8 8V Econo.Flex 4p Aut.',
            'year' => '2020',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'COBALT LTZ 1.8 8V Econo.Flex 4p Mec.',
            'year' => '2020',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Furgão 1.6 MPFi Powertech 92cv',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa GL 1.6 MPFI / 1.4 EFI 2p e 4p',
            'year' => '2000',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa GLS 1.6 MPFI 5p',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa GSi 16V',
            'year' => '1996',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat. Joy 1.0/ 1.0 FlexPower 8V 5p',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat. Joy 1.8 MPFI 8V FlexPower 5p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat. Maxx 1.0/ 1.0 FlexPower 8V 5p',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat. Maxx 1.4 8V ECONOFLEX 5p',
            'year' => '2012',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat. Maxx 1.8 MPFI 8V FlexPower 5p',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat. Prem. 1.0/1.0 FlexPower 8V 5p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat. Premium 1.4 8V ECONOFLEX 5p',
            'year' => '2010',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat. SS 1.8 MPFI 8V FlexPower 5p',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hat.Premium 1.8 MPFI 8V F.Power 5p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hatchback 1.0 MPFI 8V 71cv 5p',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hatchback 1.8 MPFI 8V 102cv 5p',
            'year' => '2003',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Hatchback 1.8 MPFI FlexPower 8V 5p',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Pick-Up GL/ Champ 1.6 MPFI / EFI',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Pick-Up Sport 1.6 MPFI',
            'year' => '2003',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Pick-Up STD/ Rodeio 1.6 MPFI',
            'year' => '2003',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed Clas.Spirit 1.6MPFI VHC 8V Aut',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed Clas.Super 1.6MPFI VHC 8V Aut',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed Class.Life 1.0/1.0 FlexPower',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed Class.Spirit 1.0/1.0 FlexPower',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed Class.Super 1.0/1.0 FlexPower',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed Classic Life 1.6 MPFI VHC 8V',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed Classic Spirit 1.6 MPFI VHC 8V',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed Classic Super 1.6 MPFI VHC 8V',
            'year' => '2006',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed. Joy 1.0/ 1.0 FlexPower 8V 4p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed. Joy 1.8 MPFI 8V FlexPower',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed. Maxx 1.0/ 1.0 FlexPower 8V 4p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed. Maxx 1.4 8V ECONOFLEX 4p',
            'year' => '2011',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed. Maxx 1.8 MPFI 8V FlexPower',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed. Premium 1.4 8V ECONOFLEX 4p',
            'year' => '2012',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed. Premium 1.8 MPFI 8V FlexPower',
            'year' => '2009',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed.Prem. 1.0/ 1.0 FlexPower 8V 4p',
            'year' => '2007',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sed.Wind 1.0/Millenium/Classic VHC',
            'year' => '2005',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan 1.0 MPFI 8V 71cv 4p',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan 1.8 MPFI 8V  102cv 4p',
            'year' => '2003',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan 1.8 MPFI FlexPower 8V 4p',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan GL 1.6  MPFI 4p',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan GLS 1.6 16V MPFI 4p',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan GLS 1.6 MPFI 4p',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan Sup./Classic 1.6 8v Aut/Mec',
            'year' => '2004',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan Super 1.0 MPFI 16V 4p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan Super 1.0 MPFI 4p',
            'year' => '1999',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Sedan Super Milenium 1.0 MPFI 16V',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Super 1.0 MPFI / 2p e 4p',
            'year' => '1999',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Super 1.0 MPFI 16V 3p',
            'year' => '2000',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Super 1.0 MPFI 16V 5p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Super 1.6 MPFI 8v 5p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wagon GL 1.6 MPFI 4p',
            'year' => '1999',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wagon GLS 1.6 16V MPFI 4p',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wagon GLS 1.6 8V 4p',
            'year' => '2001',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wagon Super 1.0 MPFI 16V',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wagon Super 1.6 MPFI 8v',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wind 1.0 MPF/MilleniumI/ EFI 4p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wind 1.0 MPFI / EFI  2p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wind 1.6 MPFi 2p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wind 1.6 MPFi 4p',
            'year' => '2002',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corsa Wind Piquet/ Champ 1.0 MPFI 2p',
            'year' => '1999',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corvette 5.7/ 6.0, 6.2 Conv./Stingray',
            'year' => '2015',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'Corvette 5.7/ 6.0, 6.2 Targa/Stingray',
            'year' => '2015',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE Black Bow Tie 1.4 TB Flex 4p Aut',
            'year' => '2019',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE HB Black Bow Tie 1.4 TB Flex Aut.',
            'year' => '2019',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE HB Sport LT 1.8 16V FlexP. 5p Aut',
            'year' => '2016',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE HB Sport LT 1.8 16V FlexP. 5p Mec',
            'year' => '2016',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE HB Sport LTZ 1.8 16V FlexP. 5p Aut',
            'year' => '2016',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE HB Sport LTZ 1.8 16V FlexP. 5p Mec',
            'year' => '2014',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE LT 1.4 16V Turbo Flex 4p Aut.',
            'year' => '2022',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE LT 1.8 16V FlexPower 4p Aut.',
            'year' => '2016',
            'brand_id' => 16
        ]);
        VehiclesModel::create([
            'name' => 'CRUZE LT 1.8 16V FlexPower 4p Mec.',
            'year' => '2016',
            'brand_id' => 16
        ]);
        /*----------Citroën----------*/
        VehiclesModel::create([
            'name' => 'AIRCROSS 100 Anos 1.6 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS BUSINESS 1.6 Flex 16V 5p Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Exc. ATACA. 1.6 Flex 16V 5p Aut',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Exc. ATACA. 1.6 Flex 16V 5p Mec',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Exclusive 1.6 Flex 16V 5p Aut.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Exclusive 1.6 Flex 16V 5p Mec.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Feel 1.6 Flex 16V 5p Aut.',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Feel 1.6 Flex 16V 5p Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS GL 1.6 Flex 16V 5p Mec.',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS GLX 1.6 Flex 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS GLX 1.6 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS GLX ATACAMA 1.6 Flex 16V 5p Aut',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS GLX ATACAMA 1.6 Flex 16V 5p Mec',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Live 1.5 Flex 8V 5p Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Live 1.6 Flex 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Live 1.6 Flex 16V 5p Mec.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Live Bus. 1.6 Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS SALOMON 1.5 Flex 8V 5p Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS SALOMON 1.6 Flex 16V 5p Aut.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS SALOMON EXCLUSIVE 1.6 Flex Aut.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS SALOMON EXCLUSIVE 1.6 Flex Mec.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS SALOMON TENDANCE 1.6 Flex Aut.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS SALOMON TENDANCE 1.6 Flex Mec.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Shine 1.6 Flex 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Start 1.5 Flex 8V 5p Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS Start 1.6 Flex 16V 5p Mec.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS TENDANCE 1.6 Flex 16V 5p Aut.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AIRCROSS TENDANCE 1.6 Flex 16V 5p Mec.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'AX GTi',
            'year' => '1995',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Berlingo Furgão 1.6 16V Flex 5P',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Berlingo MultSpace GLX 1.6 16V 110cv 4p',
            'year' => '2007',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Berlingo MultSpace GLX 1.8i 3p',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Berlingo MultSpace GLX 1.8i 4p',
            'year' => '2002',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'BX 1.6S 16V',
            'year' => '1993',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'BX GTi 1.9',
            'year' => '1993',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 100 Anos 1.6 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Attra/Origine Pack 1.5 Flex 8V 5p Mec',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Attraction 1.6 Flex 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Attraction Pure Tech 1.2 Flex 12V Mec',
            'year' => '2021',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Excl. 1.6 VTi Flex Start 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Excl. 1.6 VTi Flex Start 16V 5p Mec.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Excl./Excl.Solar./Sonora 1.6 Flex Aut',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Exclus./Excl.Solaris 1.6 Flex 16V Mec',
            'year' => '2011',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Exclusive 1.4 Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Exclusive 1.5 Flex 8V 5p Mec.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Exclusive Bus. 1.6 Flex 5p Aut.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 GLX 1.4/ GLX Sonora 1.4 Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 GLX 1.6 Flex 16V 5p  Aut.',
            'year' => '2010',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 GLX 1.6/ 1.6 Flex 16V 5p',
            'year' => '2010',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Ocimar Versolato 1.6 16V 110cv 5p',
            'year' => '2005',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Origine 1.5 Flex 8V 5p Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Origine Pure Tech 1.2 Flex 12V Mec',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso Excl. 1.6 Flex 16V 5p Aut.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso Exclusive 1.6 Flex 16V 5p Mec',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso GL 1.5 Flex 8V Mec.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso GL 1.6 Flex 16V 5p Mec.',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso GLX 1.5 Flex 8V 5p Mec.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso GLX 1.6 Flex 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso GLX 1.6 Flex 16V 5p Mec.',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso Origine 1.5 Flex 8V Mec.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso Tendance 1.5 Flex 8V 5p Mec.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Picasso Tendance 1.6 Flex 16V 5p Aut.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Start 1.2 Flex 12V 5p',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Style Ed. Pure Tech 1.2 Flex 12V Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Style Edition 1.6 Flex 16V Aut.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Tendance 1.5 Flex 8V 5p Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Tendance 1.6 VTi Flex Start 16V Aut.',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Tendance Pure Tech 1.2 Flex 12V Mec.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Urban Trail 1.6 Flex 16V 5p Aut.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 Urban Trail P.Tech 1.2 Flex 12V Mec.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 X-BOX ONE 1.6 VTi Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 XTR 1.4 Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C3 XTR 1.6 Flex 16V 5p',
            'year' => '2011',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS 100 Anos 1.6 TB 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS C-SERIES 1.6 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS FEEL 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS FEEL 1.6 16V Flex Mec.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS FEEL Bus. 1.6 Flex Aut.',
            'year' => '2021',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS FEEL Pack 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS LIVE 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS LIVE 1.6 16V Flex Mec.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS Rip Curl 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS SHINE 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS SHINE 1.6 Turbo Flex Aut.',
            'year' => '2021',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS SHINE Pack 1.6 Turbo Flex Aut.',
            'year' => '2022',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 CACTUS X-Series 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Competition 1.6 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Competition 2.0 Flex 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Excl./Excl. Solar. 2.0 Flex 16V Mec.',
            'year' => '2013',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Excl.2.0/2.0 Solaris Flex 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 GLX 1.6 Flex 16V 5p Mec.',
            'year' => '2013',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 GLX 2.0 Flex 16V 5p Aut.',
            'year' => '2013',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 GLX 2.0 Flex 16V 5p Mec.',
            'year' => '2010',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE 100 Anos 1.6 16V TB Flex Aut.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Exclusive 1.6 Turbo 4p Aut.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Exclusive 1.6 Turbo Flex Aut.',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Exclusive 2.0 Flex 4p Aut.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Feel 1.6 Turbo Flex Aut.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Live 1.6 Turbo Flex Aut.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Live Bus. 1.6 Flex Aut.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Orig.Business 1.6 TB Flex Aut.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Origine 1.6 Turbo Flex  Aut.',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Origine 1.6 Turbo Flex Mec.',
            'year' => '2017',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Origine 2.0 Flex 4p Aut.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Origine 2.0 Flex 4p Mec.',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE S 1.6 Turbo Flex Aut.',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Shine 1.6 Turbo Flex Aut.',
            'year' => '2020',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Tendance 1.6 Turbo 4p Aut',
            'year' => '2015',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Tendance 1.6 Turbo Flex Aut.',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Tendance 2.0 Flex 4p Aut.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 LOUNGE Tendance 2.0 Flex 4p Mec.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 PAL.Excl/Excl(Tech.) 2.0/2.0 Flex Aut',
            'year' => '2013',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 PALLAS Exclusive 2.0/2.0 Flex 16V Mec',
            'year' => '2010',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 PALLAS GLX 2.0/ 2.0 Flex Aut.',
            'year' => '2013',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 PALLAS GLX 2.0/2.0 Flex 16V Mec.',
            'year' => '2013',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Picasso Grand 2.0 16V 143cv Aut',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Picasso Intensive 1.6 Turbo 16V Aut.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Picasso Seduction 1.6 Turbo 16V Aut.',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Picasso/Pic. La Luna 2.0 16V  Aut.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Rock You 1.6 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Tendance 1.6 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 Tendance 2.0 Flex 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C4 VTR 2.0 16V 143cv',
            'year' => '2009',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C5 3.0 24V 210cv 4p Aut.',
            'year' => '2008',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C5 Exclusive 2.0 16V 138cv 4p Mec.',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C5 Exclusive 2.0 16V 4p Aut.',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C5 Exclusive Break 2.0 16V 138cv 5p Mec.',
            'year' => '2002',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C5 Exclusive Break 2.0 16V Aut.',
            'year' => '2008',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C5 Tourer Exclusive 2.0 16V 5p Aut.',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C6 Exclusive 3.0 V6 24V 215cv Aut.',
            'year' => '2008',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'C8 Exclusive 2.0 16V 138cv 5p Aut.',
            'year' => '2005',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'DS3 1.6 Turbo 16V 3p Mec.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'DS3 Sport Chic 1.6 TB 16V 3p Mec.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'DS4 1.6 Chic Turbo 16V 5p Aut.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'DS4 1.6 So Chic Turbo 16V 5p Aut.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'DS4 1.6 Turbo 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'DS5 1.6 Be Chic Turbo 16V 5p Aut.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'DS5 1.6 So Chic Turbo 16V 5p Aut.',
            'year' => '2016',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'DS5 1.6 Turbo 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Ë-Jumpy Cargo 136cv (Elétrico)',
            'year' => '2022',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Evasion  GLX 2.0 16V',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Evasion VSX Turbo',
            'year' => '1997',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Grand C4 Picasso Intensive 1.6 TB Aut.',
            'year' => '2019',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Grand C4 Picasso Seduction 1.6 TB Aut.',
            'year' => '2018',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia 2.0  16V',
            'year' => '1997',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia Activa 2.0',
            'year' => '1997',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia Activa 2.0 TB',
            'year' => '1997',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia Activa 3.0 V6 Mec',
            'year' => '1999',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia Break 2.0 8V/GLX 2.0 16V Aut',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia Break GLX 2.0 16V Mec.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia Exclusive 2.0 16V',
            'year' => '2000',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia Exclusive 3.0 V6',
            'year' => '2000',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia GLX 2.0 16V Aut.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia GLX 2.0 16V Mec.',
            'year' => '2002',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia SX 1.8',
            'year' => '1999',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia SX 2.0 8V/16V Mec./Aut.',
            'year' => '1998',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia VSX 2.0',
            'year' => '1998',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xantia VSX 2.0 16V',
            'year' => '1998',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'XM Exclusive 12v',
            'year' => '1997',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'XM Exclusive 24V',
            'year' => '2000',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'XM Exclusive Break',
            'year' => '1995',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'XM Sensation 2.0 TB',
            'year' => '1995',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Break Exclusive 1.6 16V 5p Aut.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Break Exclusive 1.6 16V 5p Mec.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Break Exclusive 1.8 16V',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Break Exclusive 2.0 16V',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Break GLX 1.6 16V 5p Aut.',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Break GLX 1.6 16V 5p Mec.',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Break GLX 1.8 16V',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Break GLX/ Paris 2.0 16V',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Exclusive 1.6 16V 5p Aut.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Exclusive 1.6 16V 5p Mec.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Exclusive 1.8 8V/16V 5p Aut.',
            'year' => '2000',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Exclusive 1.8 8V/16V 5p Mec.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Exclusive 2.0 16V',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara GLX 1.6 16V 3p',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara GLX 1.6 16V 5p Aut.',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara GLX 1.6 16V 5p Mec.',
            'year' => '2003',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara GLX 1.8 16V 5p Mec.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara GLX 1.8 16V Cupê Mec.',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara GLX 1.8 8V 5p Aut.',
            'year' => '1999',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara GLX 1.8 8V Cupê Aut.',
            'year' => '1999',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara GLX/ Paris 2.0 16V',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Picasso Exc./Etoile 2.0 16V Mec.',
            'year' => '2010',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Picasso Exclus. 1.6/ 1.6 Flex 16V',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Picasso Exclusive 2.0 16V Aut.',
            'year' => '2011',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Picasso GLX 1.6/ 1.6 Flex 16V',
            'year' => '2012',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Picasso GLX 2.0 16V  Aut.',
            'year' => '2010',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara Picasso GLX/Brasil/Etoile 2.0 Mec.',
            'year' => '2010',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara VTS 1.6 16V 3p',
            'year' => '2002',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara VTS 1.8 16V',
            'year' => '2001',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'Xsara VTS 2.0  16V Cupê Mec.',
            'year' => '2002',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'ZX Cupê 16V',
            'year' => '1998',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'ZX Dakar 2.0 16V',
            'year' => '1997',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'ZX Furio',
            'year' => '1998',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'ZX Paris 1.8',
            'year' => '1998',
            'brand_id' => 17
        ]);
        VehiclesModel::create([
            'name' => 'ZX Volcane 3p e 5p',
            'year' => '1998',
            'brand_id' => 17
        ]);
        /*----------Daewoo----------*/
        VehiclesModel::create([
            'name' => 'Espero 2.0',
            'year' => '1995',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Espero CD / DLX 2.0',
            'year' => '1997',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Lanos Hatch SX 1.6 16V',
            'year' => '1999',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Lanos SX 1.6 16V',
            'year' => '1999',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Lanos SX 1.6 16V Aut.',
            'year' => '2001',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Leganza CDX 2.0 16V Aut.',
            'year' => '1999',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Leganza CDX 2.0 16V Mec.',
            'year' => '1999',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Nubira CDX 2.0 16V Aut.',
            'year' => '1999',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Nubira CDX 2.0 16V Mec.',
            'year' => '1999',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Nubira SW CDX 2.0 16V Aut.',
            'year' => '1999',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Nubira SW CDX 2.0 16V Mec.',
            'year' => '1999',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Prince Ace 2.0',
            'year' => '1995',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Racer GTi 1.5 16V',
            'year' => '1995',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Super Salon Ace',
            'year' => '1995',
            'brand_id' => 18
        ]);
        VehiclesModel::create([
            'name' => 'Tico',
            'year' => '1995',
            'brand_id' => 18
        ]);
        /*----------Daihatsu----------*/
        VehiclesModel::create([
            'name' => 'Applause 1.6 16V',
            'year' => '1995',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Applause DLX 1.6 16V',
            'year' => '1995',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Charade CX/TS 1.0',
            'year' => '1995',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Charade Sedan 1.3i 16V',
            'year' => '1995',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Charade Sedan 1.5/DLX 1.3',
            'year' => '1995',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Charade TS/TSi 1.3/LSi 1.5 16V',
            'year' => '1995',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Charade TX 1.3 16V',
            'year' => '1995',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Cuore 0/TS0 85i',
            'year' => '1999',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Cuore CS/CSL',
            'year' => '1998',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Cuore TS/TSL',
            'year' => '1997',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Feroza DX 1.6 16V',
            'year' => '1995',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Feroza SX 1.6i 16V',
            'year' => '1997',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Gran Move 1.5/1.6 16V',
            'year' => '1999',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Move Van',
            'year' => '1997',
            'brand_id' => 19
        ]);
        VehiclesModel::create([
            'name' => 'Terios 1.3 16V',
            'year' => '1999',
            'brand_id' => 19
        ]);
        /*----------Dodge----------*/
        VehiclesModel::create([
            'name' => 'Avenger ES 2.0/2.5 16V',
            'year' => '1995',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota 2.5',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Club 2.5',
            'year' => '1995',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Durango 5.9 4x4 V8',
            'year' => '2000',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Durango SLT 5.2 4x4 V8',
            'year' => '2000',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota RT 5.2 Aut.',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota RT 5.2 CE Aut.',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Sport 2.5 4x4',
            'year' => '1995',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Sport 3.9 V6',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Sport 3.9 V6 CD Aut.',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Sport 3.9 V6 CD Mec.',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Sport 5.2 V8',
            'year' => '2000',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Sport 5.2 V8 CD Aut.',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Dakota Sport CE 3.9 V6',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Durango Citadel 3.6 24V 4x4 Aut.',
            'year' => '2013',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Durango Crew 3.6 24V 4x4 Aut.',
            'year' => '2013',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Durango Limited 3.6 24V 4x4 Aut.',
            'year' => '2015',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Intrepid 3.3 V6',
            'year' => '1993',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'JOURNEY Crossroad 3.6 V6 Aut.',
            'year' => '2015',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'JOURNEY RT  3.6 V6 Aut.',
            'year' => '2018',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'JOURNEY RT 2.7 V6 185cv Aut.',
            'year' => '2011',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'JOURNEY RT 3.6 AWD V6 Aut.',
            'year' => '2016',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'JOURNEY SE 2.7 V6 185cv Aut.',
            'year' => '2010',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'JOURNEY SXT 2.7 V6 185cv Aut.',
            'year' => '2011',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'JOURNEY SXT 3.6 V6 Aut.',
            'year' => '2015',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Ram Laramie 5.9 V8',
            'year' => '1995',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Ram Laramie/SLT 5.2 V8',
            'year' => '1996',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Ram Sport 5.9 V8',
            'year' => '2001',
            'brand_id' => 20
        ]);
        VehiclesModel::create([
            'name' => 'Stealth 3.0 MPI',
            'year' => '1994',
            'brand_id' => 20
        ]);
        /*----------EFFA----------*/
        VehiclesModel::create([
            'name' => 'K01 Pick-up CS 1.0 8V 2p',
            'year' => '2019',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'K02 Pick-up CD 1.0 8V 4p',
            'year' => '2019',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'M-100 1.0 8V 5p',
            'year' => '2012',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'Start Picape CD 1.0 8V 5p',
            'year' => '2014',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'Start Picape L 1.0 8V 2p',
            'year' => '2014',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'Start Van 1.0 8V 4p',
            'year' => '2012',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'ULC FURGÃO 1.0 8V 5p',
            'year' => '2011',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'ULC PICAPE 1.0 8V 2p',
            'year' => '2012',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'ULC PICAPE CD 1.0 8V 4p',
            'year' => '2012',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'ULC PICAPE Longa 1.0 8V 2p',
            'year' => '2012',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'ULC PICAPE Longa Bau 1.0 8V 2p',
            'year' => '2011',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'ULC VAN 1.0 8V 5p',
            'year' => '2012',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'V21 Pick-up CS 1.3 16V 2p',
            'year' => '2022',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'V22 Pick-up CD 1.3 16V 4p',
            'year' => '2022',
            'brand_id' => 21
        ]);
        VehiclesModel::create([
            'name' => 'V25 Furgão 1.3 16V 5p',
            'year' => '2022',
            'brand_id' => 21
        ]);
        /*----------Engesa----------*/
        VehiclesModel::create([
            'name' => 'Engesa 4x4 2.5/4.1',
            'year' => '1994',
            'brand_id' => 22
        ]);
        /*----------Envemo----------*/
        VehiclesModel::create([
            'name' => 'Camper 2.5/GL/GLS/Master 4.1',
            'year' => '1996',
            'brand_id' => 23
        ]);
        /*----------Ferrari----------*/
        VehiclesModel::create([
            'name' => '348 GTS 3.4',
            'year' => '1994',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '348 Spider 3.4',
            'year' => '1994',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '348 TS/TB 3.4',
            'year' => '1994',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '355 Berlinetta',
            'year' => '1999',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '355 Berlinetta F1',
            'year' => '1999',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '355 GTS',
            'year' => '1999',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '355 GTS F1',
            'year' => '1999',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '355 GTS Spider',
            'year' => '2000',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '355 GTS Targa',
            'year' => '1999',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '355 Spider F1',
            'year' => '2000',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '360 Challenge Stradale',
            'year' => '2004',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '360 Modena',
            'year' => '2001',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '360 Modena F1',
            'year' => '2004',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '360 Spider 400cv',
            'year' => '2001',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '360 Spider F1 400cv',
            'year' => '2005',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '456 GT',
            'year' => '2001',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '456 GTA',
            'year' => '2000',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '456 M-GT 5.5 V12',
            'year' => '2001',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '458 Speciale A',
            'year' => '2015',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '488 GTB 3.9 V8 670cv',
            'year' => '2019',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '488 Pista 3.9 V8 720cv',
            'year' => '2020',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '488 Pista Spider 3.9 V8 720cv',
            'year' => '2020',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '488 Spider 3.9 V8 670cv',
            'year' => '2019',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '550 Maranello',
            'year' => '2001',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '575M Maranello F1 V12 515cv',
            'year' => '2005',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '612 Scaglietti F1 V12 540cv',
            'year' => '2011',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '812 GTS 6.5 V12 800cv',
            'year' => '2022',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => '812 SUPERFAST V12 800cv',
            'year' => '2020',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'California 3.9 Turbo F1 V8 560cv',
            'year' => '2017',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'California F1 V8 460cv/ California 30',
            'year' => '2014',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F12 Berlinetta 740cv',
            'year' => '2017',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F12 TDF 780cv',
            'year' => '2017',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F430 F1',
            'year' => '2009',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F430 SCUDERIA F1',
            'year' => '2009',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F430 Spider F1',
            'year' => '2009',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F458 Italia F1 4.5 V8 570cv',
            'year' => '2015',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F458 Speciale F1 4.5 V8',
            'year' => '2015',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F458 Spider F1 4.5 V8 570cv',
            'year' => '2015',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F599 GTB Fiorano F1 6.0 V12 620cv',
            'year' => '2012',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F8 Spider 3.9 V8 Bi-Turbo 720cv',
            'year' => '2022',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'F8 TRIBUTO 3.9 V8 720cv',
            'year' => '2022',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'FF F1 6.3 V12 660cv',
            'year' => '2016',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'GTC4 LUSSO 6.3 V12 690cv',
            'year' => '2019',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'GTC4 LUSSO T V8 610cv',
            'year' => '2020',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'PORTOFINO 3.9 V8 600cv',
            'year' => '2020',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'PORTOFINO M 3.9 V8 620cv',
            'year' => '2022',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'Roma 3.9 V8 620cv',
            'year' => '2022',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'SF 90 SPIDER 4.0 V8 Bi-Turbo',
            'year' => '2022',
            'brand_id' => 24
        ]);
        VehiclesModel::create([
            'name' => 'SF 90 STRADALE 4.0 V8 Bi-Turbo',
            'year' => '2022',
            'brand_id' => 24
        ]);
        /*----------Fiat----------*/
        VehiclesModel::create([
            'name' => '147 C/ CL',
            'year' => '1987',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '147 Furgão (todos)',
            'year' => '1987',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '147 Pick-Up (todas)',
            'year' => '1988',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 ABARTH MULTIAIR 1.4 TB 16V 3p',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 Cabrio Dualogic Flex 1.4 8V',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 Cabrio Flex 1.4 8V Mec.',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 Cabrio/500 Coupe Gucci/Flex 1.4 Aut.',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 Cult 1.4 Flex 8V EVO Dualogic',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 Cult 1.4 Flex 8V EVO Mec.',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 LOUNGE 1.4 16V 100cv  Mec.',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 LOUNGE 1.4 16V 100cv Dualogic',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 Lounge Air 1.4/ 1.4 Flex 16V Aut.',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 SPORT 1.4 16V 100cv  Dualogic',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 SPORT 1.4 16V 100cv Mec.',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 Sport Air 1.4 16V/1.4 Flex 16V Aut.',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500 Sport Air 1.4 16V/1.4 Flex Mec.',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => '500e ICON (Elétrico)',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO 1.0 6V Flex.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO DRIVE 1.0 6V Flex',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO DRIVE 1.3 8V Flex',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO DRIVE GSR 1.3 8V Flex',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO DRIVE S-DESIGN 1.3 8V Flex',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO HGT 1.8 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO HGT 1.8 16V Flex Mec.',
            'year' => '2019',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO PRECISION 1.8 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO PRECISION 1.8 16V Flex Mec.',
            'year' => '2019',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO TREKKING 1.3 8V Flex',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'ARGO TREKKING 1.8 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Brava ELX  1.6 16V 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Brava HGT 1.8 mpi 16V  4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Brava SX 1.6 16V 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo ABSOLUTE 1.8 Flex 16V 5p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo ABSOLUTE Dualogic 1.8 Flex 16V 5p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo BlackMotion 1.8 Dualogic Flex 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo BlackMotion 1.8 Flex 16v 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo ESSENCE 1.8 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo ESSENCE Dualogic 1.8 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo SPORTING 1.8 Dualogic Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo SPORTING 1.8 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo SX 1.6',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo T-JET 1.4 16V Turbo 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo WOLVERINE 1.8 Dualogic Flex 16V 5p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Bravo WOLVERINE 1.8 Flex 16V 5p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Cinquecento 0.7',
            'year' => '1995',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Coupe 16V',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'CRONOS 1.3 8V Flex',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'CRONOS 1.8 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'CRONOS DRIVE 1.3 8V Flex',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'CRONOS DRIVE 1.8 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'CRONOS DRIVE GSR 1.3 8V Flex',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'CRONOS HGT 1.8 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'CRONOS PRECISION 1.8 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'CRONOS PRECISION 1.8 16V Flex Mec.',
            'year' => '2019',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo  1.4 mpi Fire Flex  8V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo  Cargo 1.4 mpi Fire Flex 8V 3p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Adv. XINGU 1.8 Flex 16V 5p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Adv. XINGU LOCKER 1.8 Flex 16V 5p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Adv.Ext./Adv.Ext.Loc. 1.8 16V Flex',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Adv/Adv TRYON/LOCKER 1.8 Flex',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Adventure/ Adv.ER 1.8 mpi 8V 103cv',
            'year' => '2006',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo ATTRACTIVE 1.4 Fire Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Cargo 1.3 Fire 16V 4/5p',
            'year' => '2006',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Cargo 1.6 16V 4/5p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Cargo 1.8 mpi 8V 103cv',
            'year' => '2006',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo Cargo 1.8 mpi Fire Flex 8V/16V 4p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo ELX 1.4 mpi Fire Flex 8V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo ELX 1.6 16V 4/5p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo ELX 1.8 mpi 8V 103cv',
            'year' => '2006',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo ELX 1.8 mpi 8V Flex',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo ESSENCE 1.8 Flex 16V 5p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo EX 1.3 Fire 16V 80cv 4/5p',
            'year' => '2006',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Doblo HLX 1.8 mpi Flex 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Duna 1.6ie',
            'year' => '1995',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Elba 1.6i.e/Top/CSL/ 1.6i.e/1.5 2p e 4p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Elba CS 1.6 / 1.5 /1.3',
            'year' => '1992',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Elba S 1.6/ 1.5ie / 1.5 / 1.3',
            'year' => '1992',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Elba Weekend 1.5 i.e. 2p e 4p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Endurance EVO 1.4 Flex 8V 2p',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Furg.1.5/1.3/1.3 Fire/1.3 F.Flex',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Furgão 1.0',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Furgão 1.5 mpi / i.e.',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Furgão Celeb. EVO 1.4 Flex 8V 2p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Furgão EVO 1.4 Flex 8V 2p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Furgão Work. HARD 1.4 Flex 8V 2p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Pick-Up 1.0',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Pick-Up 1.5 i.e./1.3/1.5/HD',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Pick-Up LX (todas)',
            'year' => '1998',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Pick-Up Trekking 1.5 mpi / i.e.',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Pick-Up Working 1.5 mpi / i.e.',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Fiorino Working 1.4 Flex 8V 2p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'FREEMONT EMOT./PRECISION 2.4 16V 5p Aut.',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena 1.0 EVO Flex 8V 4p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena 1.4 EVO Flex 8V 4p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena ATTRAC. 1.4 EVO F.Flex 8V',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena ATTRACTIVE 1.0 Flex 8V 4p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena ESSEN. ITALIA Dual. 1.6 Flex',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena ESSEN.SUBLIME 1.6 Flex',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena ESSEN.SUBLIME Dual. 1.6 Flex',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena ESSENCE 1.6 Flex 16V',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena ESSENCE Dual. 1.6 Flex 16V',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena ESSENCE ITALIA 1.6 Flex 16V',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Grand Siena TETRAFUEL 1.4 Evo F. Flex 8V',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea A.Ext./A..Ext.Loc.Dual. 1.8 Flex 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea Adv./ Adv.LOCK.Dualogic 1.8 Flex 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea Adv.Ext./Adv.Ext. Loc. 1.8 Flex 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea Advent./ Adv.LOCKER 1.8 mpi Flex 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea ATTRACTIVE 1.4 Fire Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea ELX 1.4 mpi Fire Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea ELX 1.8 mpi Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea ESSENCE 1.6 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea ESSENCE Dualogic 1.6 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea ESSENCE SUBLIME 1.6 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea ESSENCE SUBLIME Dual.1.6 Flex16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea HLX 1.8 mpi Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea SPORTING 1.8 Flex 16V 5p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Idea SPORTING Dualogic 1.8 Flex 16V 5p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA 1.9/ HLX 1.9/ 1.8 Flex 16V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA 1.9/ HLX 1.9/1.8 Flex  Dualogic 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA ABSOLUTE 1.9/1.8 Flex Dualogic 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA ESSEN.SUBLIME 1.8 Flex 16V 4p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA ESSEN.SUBLIME Dual.1.8 Flex 16V 4p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA ESSENCE 1.8 Flex 16V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA ESSENCE Dualogic 1.8 Flex 16V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA LX 1.9/ 1.8 Flex 16V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA LX 1.9/ 1.8 Flex 16V Dualogic 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'LINEA T-JET 1.4 16V Turbo 4p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea City',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea ELX 1.8 mpi 16V 132cv 4p',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea ELX 2.0 20V 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea ELX 2.4 mpi 20V 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea HLX 2.0 20V 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea HLX 2.4 mpi 20V 4p Aut.',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea HLX 2.4 mpi 20V 4p Mec.',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea SX 1.6 mpi 16V 106cv 4p',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea SX 1.8 16V 4p',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea SX 2.0 20V 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Turbo 2.0 20V 4p',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend City 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend ELX 1.8 mpi 16V 132cv 4p',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend ELX 2.0 20V 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend ELX 2.4 mpi 20V 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend HLX 2.0 20V 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend HLX 2.4 mpi 20V 4p Aut.',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend HLX 2.4 mpi 20V 4p Mec.',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend SX 1.6 mpi 16V 106cv 4p',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend SX 1.8 16V 4p',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend SX 2.0 20V 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Marea Weekend Turbo 2.0 20V 4p',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI DRIVE 1.0 Flex 6V 5p',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI DRIVE GSR 1.0 Flex 6V 5p',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI EASY 1.0 Fire Flex 5p.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI EASY COMFORT 1.0 Flex 5p.',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI EASY on 1.0 Fire Flex 5p.',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI LIKE 1.0 Fire Flex 5p.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI LIKE ON 1.0 Fire Flex 5p.',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI TREKKING 1.0 Flex 5p.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI WAY 1.0 Fire Flex 5p.',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'MOBI WAY on 1.0 Fire Flex 5p.',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Oggi',
            'year' => '1985',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.0 Cel. ECON./ITALIA F.Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.0 Celebr. ECONOMY F.Flex 8V 2p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.0 ECONOMY Fire Flex 8V 2p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.0 ECONOMY Fire Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.0/ Trofeo 1.0 Fire/ Fire Flex 2p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.0/ Trofeo 1.0 Fire/ Fire Flex 4p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.6 mpi 16V 2p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.6 mpi 16V 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.8R mpi Flex 8V 2p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio 1.8R mpi Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ATTRA. Best Seller 1.0 EVO Flex 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ATTRA. Best Seller 1.4 EVO Flex 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ATTRA./ITÁLIA 1.4 EVO F.Flex 8V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ATTRACTIVE 1.0 EVO Fire Flex 8v 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Celebration 1.0 Fire Flex 8V 2p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Celebration 1.0 Fire Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio City 1.0 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio City 1.5/1.6 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio CityMatic 1.0 mpi',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ED 1.0 mpi 2p e 4p',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EDX 1.0 mpi 2p',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EDX 1.0 mpi 4p',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EL 1.5 mpi 2p e 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EL 1.6 spi 2p e 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.0 Fire/30 Anos F. Flex 8V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.0 mpi Fire 16v 4p (25 anos)',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.0/ 1.0 Fire Flex 8V 2p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.3 mpi  Fire 16V 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.3 mpi Flex 8V 4p',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.4 Fire/30 Anos F. Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.5 4p',
            'year' => '2001',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.6 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.6 mpi 16v 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX 1.8/ 1.8 mpi Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX Dualogic 1.8 mpi Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ELX/ 500 1.0 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ESSENCE 1.6 Flex 16V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio ESSENCE Dualogic 1.6 Flex 16V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX 1.0 mpi 2p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX 1.0 mpi 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX 1.0 mpi Fire 8v 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX 1.0 mpi Fire/ Fire Flex 8v 2p',
            'year' => '2008',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX 1.3 mpi Fire 8V 67cv 2p',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX 1.3 mpi Fire 8V 67cv 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX 1.8 mpi 8V 103cv 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX Century 1.0 mpi Fire 16v 2p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio EX Century 1.0 mpi Fire 16v 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio HLX 1.8 mpi 8V 103cv 4p',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio HLX 1.8 mpi Flex 8V 4p',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Rua 1.0 Fire Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio SPORT.INTERLAGOS 1.6 Flex 16V',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio SPORT.INTERLAGOS Dual.1.6 Flex 16V',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio SPORTING 1.6 Flex 16V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio SPORTING B.Edit. 1.6 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio SPORTING Dual. B.Edit. 1.6 Flex 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio SPORTING Dualogic 1.6 Flex 16V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Stile 1.6 mpi 16v 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio W.Adv. LOC. ITAL.Dual.1.8 Flex 16V',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio W.ADV. LOCK. ITALIA 1.8 Flex 16V',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Way 1.0 Fire Flex 8V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Way Celebration 1.0 F. Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Week. Adv. Dualogic 1.8 Flex',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Week. Adv. ITALIA 1.8 Flex 16V',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Week. Adv/Adv TRYON 1.8 mpi Flex',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Week. ATTRACTIVE 1.4 Fire Flex 8V',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Week.Adv. ITAL. Dual. 1.8 Flex 16V',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Week.Adv.LOCK.Dualogic 1.8 Flex',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend 1.0 6-marchas',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend 1.6 mpi 16V 4p',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Adv. Ext. 1.8 Dual. Flex',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Adv. Ext. 1.8 Flex',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Adv. Loc.Ext.1.8 Dual.Flex',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Adv. LOCKER Ext. 1.8 Flex',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Adventure 1.6 8V/16V',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Adventure 1.8 8V 103cv 4p',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Adventure LOCKER 1.8 Flex',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend City 1.5/ 1.6 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend ELX 1.0 mpi Fire 16V',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend ELX 1.3 mpi  Fire 16V',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend ELX 1.3 mpi Flex 8V 4p',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend ELX 1.4 mpi Fire Flex 8V',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend ELX 1.5 mpi 4p',
            'year' => '2001',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend ELX 1.6 mpi',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend EX 1.3 mpi Fire 8V 67cv 4p',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend EX 1.5 mpi',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend EX 1.8 mpi 8V 103cv 4p',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend HLX 1.8 mpi Flex 4p',
            'year' => '2008',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Sport 1.6 mpi 16V 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Stile 1.6 mpi 16V 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Stile 1.8 mpi 8V 103cv 4p',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Trekking 1.4 Fire Flex 8V',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Trekking 1.6 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Weekend Trekking 1.8 mpi Flex 8V',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Young 1.0 mpi 8v 4p',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Young 1.0 mpi Fire 8V 2p',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Palio Young 1.0 mpi Fire 8V 4p',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Panorama C/CL',
            'year' => '1986',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Premio CS 1.5 i.e. 2p/ SL 1.6/1.5/1.3 4p',
            'year' => '1994',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Premio CS 1.6/ 1.5/ 1.3 2p',
            'year' => '1994',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Premio CSL 1.6 i.e./ 1.5 4p',
            'year' => '1994',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Premio CSL 1.6/ 1.5',
            'year' => '1994',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Premio S 1.5 i.e./ 1.5 / 1.3',
            'year' => '1993',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'PULSE AUDACE 1.0 Turbo 200 Flex Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'PULSE DRIVE 1.0 Turbo 200 Flex Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'PULSE DRIVE 1.3 8V Flex Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'PULSE DRIVE 1.3 8V Flex Mec.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'PULSE IMPETUS 1.0 TURBO 200 Flex Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto  ELX 1.4 Fire Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto 1.4 Fire Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto ATTRACTIVE 1.4 Fire Flex 8V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto ATTRACTIVE ITALIA 1.4 F.Flex 8V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto BLACKMOTION 1.8 Flex 16V 5p.',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto BLACKMOTION Dual. 1.8 Flex 16v 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto Cabrio',
            'year' => '1995',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto EL/ELX',
            'year' => '1995',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto ESSENCE 1.6 Flex 16V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto ESSENCE 1.8 Flex 16V 5p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto ESSENCE Dualogic 1.6 Flex 16V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto ESSENCE Dualogic 1.8 Flex 16V 5p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto ESSENCE SP 1.6 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto ESSENCE SP Dualogic 1.6 Flex 16V',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto HLX 1.8 Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto S',
            'year' => '1995',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto Sporting 1.8 Flex 8V/16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto Sporting Dualogic 1.8 Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto SX',
            'year' => '1995',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Punto T-JET 1.4 16V Turbo 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena 1.0 mpi/ 500 1.0 mpi',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena 1.0/ EX 1.0 mpi Fire/ Fire Flex 8v',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ATTRACTIVE 1.0 Fire Flex 8V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ATTRACTIVE 1.4 Fire Flex 8V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena Celebration 1.0 Fire Flex 8V 4p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena City 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EL 1.0 mpi Fire Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EL 1.4 mpi Fire Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EL 1.6 mpi 16V',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EL 1.6 spi',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EL Celeb. 1.0 mpi Fire Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EL Celeb. 1.4 mpi Fire Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ELX 1.0 mpi Fire 16v 4p (25 anos)',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ELX 1.0 mpi Fire/Fire Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ELX 1.3 mpi Fire 16V 4p',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ELX 1.3 mpi Flex 8V 4p',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ELX 1.4 mpi Fire Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ELX 1.5 mpi 4p',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ELX 1.6 mpi 8V/16V 4p',
            'year' => '2003',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ELX 1.8 mpi 8V 103cv 4p',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ESSENCE 1.6 Flex 16V 4p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena ESSENCE Dualogic 1.6 Flex 16V 4p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EX 1.0 mpi Fire 16v 4p',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EX 1.3 mpi Fire 8V 67cv 4p',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena EX 1.8 mpi 8V 103cv 4p',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena HL 1.6 mpi 16V',
            'year' => '1998',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena HLX 1.8 mpi Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena HLX Dualogic 1.8 mpi Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena Sporting 1.6 Flex 16V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena Sporting Dualogic 1.6 Flex 16V 4p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena Stile/Sport MTV 1.6 mpi 16V',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Siena TETRAFUEL 1.4 mpi Fire Flex 8v 4p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo 1.8 ATTRACTIVE Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo 1.8 MS Lim.Edit./ MS Season 16V',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo 1.8 SP Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo 1.8 Sporting Flex 8V 5P',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo 1.8/ 1.8 Connect 8V 103cv 5p',
            'year' => '2006',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo 1.8/ 1.8 Connect Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo 1.8/ 1.8 SP/ Connect 16V 122cv 5p',
            'year' => '2007',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo 2.4 Abarth 20V 167cv 5p',
            'year' => '2009',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo Dualogic 1.8 BlackMotion Flex 8V',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo Dualogic 1.8 Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo Dualogic 1.8 SP Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo Dualogic 1.8 Sporting Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Stilo Duologic 1.8 ATTRACTIVE Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada 1.3 mpi Fire 8V 67cv CE',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada 1.3 mpi Fire 8V 67cv CS',
            'year' => '2005',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada 1.4 mpi Fire Flex 8V CE',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada 1.4 mpi Fire Flex 8V CS',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv. Ext. 1.8 LOCKER Dual.Flex CE',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv. Ext./ Ext.1.8 LOCKER Flex CE',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv. Extreme 1.8 Dual. Flex CE',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv. M. March. 1.8 Flex 16V CD',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv. M. March.1.8 Dual. Flex CD',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv.1.8 16V  LOCKER Dual. Flex CE',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv.1.8 16V Dualogic Flex CD',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv.1.8 16V Dualogic Flex CE',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv.1.8 16V LOCKER Dualo. Flex CD',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv.Ext. 1.8 LOCKER Dual. Flex CD',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv.Ext./ Ext. 1.8 LOCKER Flex CD',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adv/Adv TRYON 1.8 mpi Flex 8V CE',
            'year' => '2008',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adventure 1.6 mpi 16V CE',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adventure 1.8 mpi 8V 103cv CE',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adventure 1.8/ 1.8 LOCKER Flex CE',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adventure Ext. 1.8  Dual. Flex CD',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Adventure1.8/ 1.8 LOCKER Flex CD',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Celeb. 1.4 mpi Fire Flex 8V CE',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Celeb. 1.4 mpi Fire Flex 8V CS',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Endurance 1.4 Flex 8V CD',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Endurance 1.4 Flex 8V CS Plus',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Freedom 1.3 Flex 8V  CS Plus',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Freedom 1.3 Flex 8V CD',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Freedom 1.4 Flex 8V CD',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Freedom 1.4 Flex 8V CS',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada LX 1.6 16V CE',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada LX 1.6 mpi 16V',
            'year' => '2001',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Opening Edition 1.3 Flex 8V CD',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Ranch 1.3 Flex 8V CD Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Sporting 1.8 Flex 16V CE',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trek. M. March. 1.6 Flex 16V CE',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.4 mpi Fire Flex 8V CE',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.4 mpi Fire Flex 8V CS',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.6 16V Flex CD',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.6 16V Flex CE',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.6 16V Flex CS',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.6 16V LOCKER Flex  CD',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.6 mpi',
            'year' => '2000',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.8 mpi Flex 8V CE',
            'year' => '2010',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Trekking 1.8 mpi Flex 8V CS',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Volcano 1.3 Flex 8V CD',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Volcano 1.3 Flex 8V CD Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working 1.4 mpi Fire Flex 8V CD',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working 1.4 mpi Fire Flex 8V CE',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working 1.4 mpi Fire Flex 8V CS',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working 1.6 mpi 16V CE',
            'year' => '2001',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working 1.6 mpi 16V CS',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working 1.8 mpi 8v 103cv CE',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working 1.8 mpi 8V 103cv CS',
            'year' => '2004',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working Celeb.1.4 Fire Flex 8V CD',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working Celeb.1.4 Fire Flex 8V CE',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working Celeb.1.4 Fire Flex 8V CS',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working HARD 1.4 Fire Flex 8V CD',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working HARD 1.4 Fire Flex 8V CE',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working HARD 1.4 Fire Flex 8V CS',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Strada Working Plus 1.4 8V Flex CS',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra 2.0 i.e 16V 2p e 4p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra 2.0 i.e. 8V 2p e 4p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra 2.0 mpi 16V',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra 8V/ City 8V',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra HLX 2.0 16V 4p',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra Ouro 16V 2p e 4p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra Ouro/Prata 2.0 2p e 4p',
            'year' => '1994',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra Stile 2.0 i.e. Turbo 4p',
            'year' => '1998',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra SW SLX 2.0 i.e.',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra SX 2.0 16V 4p',
            'year' => '1998',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra SX 2.0 i.e. 8V 4p',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tempra Turbo 2.0 i.e. 2p',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tipo 1.6 i.e. 2p e 4p',
            'year' => '1995',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tipo 1.6 mpi 4p',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tipo 2.0 16V 2p/4p',
            'year' => '1995',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Tipo 2.0 SLX 4p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Blackjack 2.4 16V flex Aut',
            'year' => '2019',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Endurance 1.3 T270 4x2 Flex Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Endurance 1.8 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Endurance 1.8 16V Flex Mec.',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Freedom 1.3 T270 4x2 Flex Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Freedom 1.8 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Freedom 2.4 16V Flex Aut.',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Freedom Road 1.8 16V Flex Aut.',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Freedom Road 2.4 16V Flex Aut.',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Opening Ed. Plus 1.8 16V Flex Aut.',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Opening Edition 1.8 16V Flex Aut.',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Volcano 1.3 T270 4x2 Flex Aut.',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Toro Volcano 2.4 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno 1.6 mpi 2p e 4p',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno 1.6R mpi / 1.6R / 1.5R',
            'year' => '1994',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ATTRACTI. Celeb.1.4 EVO F.Flex 8V 2p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ATTRACTI. Celeb.1.4 EVO F.Flex 8V 4p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ATTRACTIVE 1.0 Fire Flex 8V 5p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ATTRACTIVE 1.0 Flex 6V 5p',
            'year' => '2017',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ATTRACTIVE 1.4 EVO Fire Flex 8V 2p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ATTRACTIVE 1.4 EVO Fire Flex 8V 4p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO CIAO 1.0 Fire Flex 8V 5p',
            'year' => '2022',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno City / Smart City 1.0 4p',
            'year' => '2001',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno CS/Top/Sport 1.5 i.e. / 1.5 /1.3',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno CS/Top/Sport 1.5 i.e. / 1.5 4p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno CSL 1.6 4p (Argentino)',
            'year' => '1993',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO DRIVE 1.0 Flex 6V 5p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ECONOMY 1.4 EVO Fire Flex 8V 2p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ECONOMY 1.4 EVO Fire Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ECONOMY Celeb. 1.4 EVO F. Flex 8V 2p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO ECONOMY Celeb. 1.4 EVO F. Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO EVOLUTION 1.4 Fire Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO Furgão 1.0 Fire Flex 8V 3p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Furgão 1.3 mpi Fire/ Fire Flex 8V',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Furgão 1.5 mpi/i.e.',
            'year' => '2002',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Furgão 1.5/ 1.3',
            'year' => '1993',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille  ELX  2p e 4p',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille 1.0 Electronic 4p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille 1.0 Fire/ F.Flex/ ECONOMY 2p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille 1.0 Fire/ F.Flex/ ECONOMY 4p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille 1.0/ i.e./Electronic/Brio 2p',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille Celeb. WAY ECON. 1.0 F.Flex 2p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille Celeb. WAY ECON. 1.0 F.Flex 4p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille Celeb/Celeb.ECON 1.0 F.Flex 2p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille Celeb/Celeb.ECON 1.0 F.Flex 4p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille EP 2p e 4p',
            'year' => '1997',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille Grazie 1.0 Fire Flex 8v 4p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille SX 2p e 4p',
            'year' => '1998',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille SX Young 1.0 IE',
            'year' => '1999',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO MILLE WAY ECO.XINGU 1.0 F.Flex 8v 5p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille WAY ECONOMY 1.0 F.Flex 2p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Mille WAY ECONOMY 1.0 F.Flex 4p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno S 1.5 i.e. / 1.5 / 1.3/ SX 1.3',
            'year' => '1994',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO SPORT. Dual. 1.4 B.Edit. Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO SPORT.INTERLAGOS 1.4 EVO F.Flex 8v',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO SPORTING 1.3 Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO SPORTING 1.4 B.Edit. Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO SPORTING 1.4 EVO Fire Flex 8V 2p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO SPORTING 1.4 EVO Fire Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO SPORTING Dual./GSR 1.3 Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO SPORTING Dualogic 1.4 EVO Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'Uno Turbo 1.4 i.e. 2p',
            'year' => '1996',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO VIVACE 1.0 EVO Fire Flex 8V 3p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO VIVACE Celeb. 1.0 EVO F. Flex 8V 3p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO VIVACE Celeb. 1.0 EVO F.Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO VIVACE College 1.0 EVO FireFlex 5p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO VIVACE ITALIA 1.0 EVO F. Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO VIVACE/RUA 1.0 EVO Fire Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY 1.0 EVO Fire Flex 8V 2p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY 1.0 EVO Fire Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY 1.0 Flex 6V 5p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY 1.3 Flex 8V 5p',
            'year' => '2021',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY 1.4 EVO Dualogic Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY 1.4 EVO Fire Flex 8V 2p',
            'year' => '2013',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY 1.4 EVO Fire Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY Celeb. 1.0 EVO Fire Flex 8V 2p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY Celeb. 1.0 EVO Fire Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY Celeb. 1.4 EVO Fire Flex 8V 2p',
            'year' => '2012',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY Celeb. 1.4 EVO Fire Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY Dual./GSR 1.3 Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY RIO 450 1.0 EVO Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY XINGU 1.0 EVO F.Flex 8V 5P',
            'year' => '2014',
            'brand_id' => 25
        ]);
        VehiclesModel::create([
            'name' => 'UNO WAY XINGU 1.4 EVO F.Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 25
        ]);
        /*----------Fibravan----------*/
        VehiclesModel::create([
            'name' => 'Buggy Off Road 1.8 8V',
            'year' => '2017',
            'brand_id' => 26
        ]);
        VehiclesModel::create([
            'name' => 'Buggy Plus 1.6 8V',
            'year' => '2017',
            'brand_id' => 26
        ]);
        VehiclesModel::create([
            'name' => 'Buggy Vip 1.6 8V Total Flex',
            'year' => '2015',
            'brand_id' => 26
        ]);
        VehiclesModel::create([
            'name' => 'Buggy Vip 1.8 8V',
            'year' => '2017',
            'brand_id' => 26
        ]);
        /*----------Ford----------*/
        VehiclesModel::create([
            'name' => 'Aerostar Mini-Van 3.8',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Aspire 1.3',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Belina GL 1.8 / 1.6',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Belina L 1.8/ 1.6',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Bronco Sport Wildtrak 2.0 Tb 16V AWD Aut',
            'year' => '2022',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Club Wagon V8',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Club Wagon XLT 4.9 V6',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Contour SE/ GL/ LX  2.0 16V',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Contour SE/GL/ LX 2.5 24V',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Corcel II GL/GT',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Corcel II L',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Courier 1.3i/Furgão',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Courier 1.6 L/ 1.6 Flex',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Courier CLX 1.4i 16V',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Courier Si 1.4i 16V',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Courier Sport 1.6 8v',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Courier Van 1.6/ 1.6 Flex 8V (Carga)',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Courier XL/XL-RS 1.6/ XL 1.6 Flex',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Crown Victoria LX 4.6',
            'year' => '1992',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Del Rey Belina Ghia',
            'year' => '1991',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Del Rey Belina GL',
            'year' => '1987',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Del Rey Belina GLX',
            'year' => '1991',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Del Rey Belina L',
            'year' => '1991',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Del Rey Ghia 1.8 / 1.6 2p e 4p',
            'year' => '1991',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Del Rey GLX 1.6/1.8 / GL 1.6/1.8 2p e 4p',
            'year' => '1991',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Del Rey L 1.8 / 1.6 2p e 4p',
            'year' => '1991',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport  100 Anos 1.5 Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport 4WD 2.0/ 2.0 Flex 16V 5p',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport FREESTYLE 1.5 12V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport FREESTYLE 1.5 12V Flex 5p Mec.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport FREESTYLE 1.6 16V Flex 5p',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport FREESTYLE 1.6 16V Flex 5p Aut.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport FREESTYLE 2.0 16V 4WD Flex 5p',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport FREESTYLE 2.0 16V Flex 5p',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport FREESTYLE 2.0 16V Flex 5p Aut.',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport FREESTYLE PLUS 1.5 Flex 5p Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport S 1.6 16V Flex 5p',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport SE 1.5 12V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport SE 1.5 12V Flex 5p Mec.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport SE 1.6 16V Flex 5p Aut.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport SE 1.6 16V Flex 5p Mec.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport SE 2.0 16V Flex 5p Aut.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport SE Direct 1.5 Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport SE Direct 1.6 16V Flex 5p Aut.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport STORM 2.0 4WD 16V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport TITANIUM 1.5 12V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport TITANIUM 1.6 16V Flex 5p',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport TITANIUM 2.0 16V Flex 5p',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport TITANIUM 2.0 16V Flex 5p Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XL 1.6/ 1.6 Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XL Supercharger 1.0 8V 95cv 5p',
            'year' => '2006',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XLS 1.6/ 1.6 Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XLS 2.0/2.0 Flex 16V 5p Aut.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XLS FREESTYLE 1.6 Flex 8V 5p',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XLT 1.6/ 1.6 Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XLT 2.0/ 2.0 Flex 16V 5p Aut.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XLT 2.0/ 2.0 Flex 16V 5p Mec.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XLT FREESTYLE 1.6 Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EcoSport XLT FREESTYLE 2.0 Flex 16V 5p',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EDGE LIMITED 3.5 V6 24V AWD Aut.',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EDGE LIMITED 3.5 V6 24V FWD Aut.',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EDGE SEL 3.5 V6  24V FWD Aut.',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EDGE SEL 3.5 V6 24V AWD Aut.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EDGE ST 2.7 V6 24V AWD Aut.',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'EDGE TITANIUM 3.5 V6 24V AWD Aut.',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort  Racer 2.0i',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort Ghia 1.8i / 1.8 / 1.6',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort Ghia 2.0i / 2.0',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort GL 1.6 MPI',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort GL 1.6i / 1.6',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort GL 1.8i / 1.8',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort GL 1.8i 16V 3p',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort GL 1.8i 16V 4p',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort GLX 1.6i',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort GLX 1.8i 16V 4p',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort GLX 1.8i 8v',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort Guarujá 1.8 4p',
            'year' => '1993',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort Hobby 1.0',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort Hobby 1.6',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort L 1.8i / 1.8',
            'year' => '1994',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort L/LX 1.6',
            'year' => '1994',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort RS 1.8i 16V',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort S.W GL 1.8i 16V',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort S.W. GLX 1.8i 16V',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort SW 1.9 16v',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort SW GL 1.6 MPI',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort XR3 1.8 / 1.6 Beneton/Form./Laser',
            'year' => '1992',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort XR3 1.8 / 1.6 Conversível',
            'year' => '1992',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort XR3 2.0i',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Escort XR3 2.0i Conversível',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Expedition 5.4 V8',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Explorer Limited 4.0 4x4 V6 213cv',
            'year' => '2005',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Explorer Limited 5.0 4x4 V8',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Explorer Sport 4.0 V6',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Explorer XL 4x2 4.0 V6',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Explorer XL 4x4 4.0 V6',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Explorer XLT 4x2 4.0 V6',
            'year' => '1997',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Explorer XLT 4x4 4.0 V6',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-100 2.3',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-100 Blazer 2.3',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-100 CD 2.3',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-100 Super 2.3',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-100 Super Série 2.3',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 CD/Blazer 3.6',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 Lightning/ Super 4.9i',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 Regular Cab. 4.9i',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 SR XK Deserter',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 Super 3.6 / Super Série 3.6',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 Super CE 4.9i / 3.6',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 Super Série CE 4.9/3.6',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 Tropical CD 4.9i',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 Tropical SL/ Van 4.9i',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 XL 4.9i',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 XL 4.9i CE',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 XLT CE 4.9i',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-1000 XLT/XL Lighting 4.9i',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-150 XL Triton 4.3 V6',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-150 XLT Triton 4.3',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-150 XLT Triton 4.6 V8',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-150 XLT Triton 5.8',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-250 Tropical 4.2 V6',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-250 XL 4.2 V6',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-250 XL Super Duty 4.2 V6',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'F-250 XLT 4.2 V6',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta 1.0 8V Flex/Class 1.0 8V Flex 5p',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta 1.0i 3p e 5p',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta 1.3  3p e 5p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta 1.5 16V Flex Mec. 5p',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta 1.6 16V Flex Aut. 5p',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta 1.6 16V Flex Mec. 5p',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta 1.6 8V Flex/Class 1.6 8V Flex 5p',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Class 1.0 2p',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Class 1.0 4p',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Class 1.6 8V 98cv 5p',
            'year' => '2004',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta CLX 1.3i 3p',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta CLX 1.3i 5p',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta CLX 1.4i 16V 3p e 5p',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta GL 1.0 3p',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta GL 1.0 5p',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta GL Class 1.0i 5p',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta GLX 1.6 8V 3p',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta GLX 1.6 8V 5p',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Personnalité 1.0 8V 66cv 5p',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta S 1.0 8V Flex 5p',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SE 1.0 8V Flex 5p',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SE 1.6 16V Flex 5p',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SE 1.6 8V Flex 5p',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SE Plus 1.6 16V Flex Aut. 5p',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SE Plus Direct 1.6 16V Flex Aut.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SE Style 1.6 16V Flex Mec. 5p',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sed. 1.6 8V Flex 4p',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sed. Personnalité 1.0 8V 4p',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sed. Supercharger 1.0 8V 4p',
            'year' => '2006',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sed. TI./TI.Plus1.6 16V Flex Aut.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan 1.0 8V Flex 4p',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan 1.6 16V Flex Aut.',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan 1.6 16V Flex Mec.',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan S 1.0 8V Flex 4p',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan SE 1.0 8V Flex 4p',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan SE 1.6 16V Flex 4p',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan SE 1.6 8V Flex 4p',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan SEL 1.6 16V Flex Aut.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan SEL 1.6 16V Flex Mec.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan Street 1.0 8v 4p',
            'year' => '2004',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan Street 1.6 8v 4p',
            'year' => '2004',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sedan TITANIUM 1.6 16V Flex Mec',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SEL 1.0 12V EcoBoost Aut. 5p',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SEL 1.6 16V Flex  Aut. 5p',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SEL 1.6 16V Flex Mec. 5p',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SEL Style 1.0 EcoBoost Aut . 5p',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta SEL Style 1.6 16V Flex Mec. 5p',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sport 1.0MPi 4p',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sport 1.6 16V Flex Mec.',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Sport 1.6MPi 4p',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Street 1.0 8v 3p',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Street 1.6 8v 95cv 5p',
            'year' => '2004',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Street/ Action 1.0 8v 5p',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta Supercharger 1.0 8V 95cv 5p',
            'year' => '2006',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta TIT./TIT.Plus 1.6 16V Flex Aut.',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta TIT.Plus 1.0 12V EcoBoost Aut. 5p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta TITANIUM 1.6 16V Flex Mec.',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta TRAIL 1.0 8V Flex 5p',
            'year' => '2010',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fiesta TRAIL 1.6 8V Flex 5p',
            'year' => '2010',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus 1.6 S/1.6 SE Flex 16v 5p Aut',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus 1.6 S/SE/SE Plus Flex 8V/16V  5p',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus 1.8 16V 5p',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus 2.0 16V/ 2.0 16V Flex 5p',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus 2.0 16V/SE/SE Plus Flex 5p Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Fastback SE/SE PLUS 2.0 Flex Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Fastback TIT./T.PLUS 2.0 Flex Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Ghia  2.0 16V/ 2.0 16V Flex 5p Aut',
            'year' => '2011',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Ghia Sed. 2.0 16V/ 2.0 16V Flex 4p',
            'year' => '2011',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Ghia Sed. 2.0 16V/2.0 16V Flex Aut',
            'year' => '2011',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Ghia/ XR 2.0 /Ghia 2.0 16V Flex 5p',
            'year' => '2011',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Sed. TI./TI.Plus 2.0 16V Flex  Aut',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Sedan 1.6 16V Flex 4p Aut.',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Sedan 1.6/1.6 Flex 8V/16V 4p Mec.',
            'year' => '2014',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Sedan 1.8 16V 115cv 4p',
            'year' => '2004',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Sedan 2.0 16V/2.0 16V Flex 4p',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus Sedan 2.0 16V/2.0 16V Flex 4p Aut.',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus TITA/TITA Plus 2.0  Flex 5p Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Focus TITANIUM 2.0 16V Flex 5p Mec.',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Furglaine 3.6',
            'year' => '1986',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion 2.5L I-VCT Flex Aut.',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion Hybrid 2.5 16V 193cv Aut.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion SE 2.5 I-VCT Flex 16V Aut.',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion SEL 2.0 Ecobo. 16V 248cv Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion SEL 2.3 16V  162cv Aut.',
            'year' => '2009',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion SEL 2.5 16V 173cv Aut.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion SEL 3.0 V6  24V 243cv Aut.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion SEL 3.0 V6 AWD 24V 243cv Aut.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion Titanium 2.0 GTDI Eco. Awd Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion Titanium 2.0 GTDI Eco. Fwd Aut.',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Fusion Titanium Hybrid 2.0 145cv Aut.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.0 8V/1.0 8V ST Flex 3p',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.0 FREESTYLE 12V Flex 5p Mec.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.0 S TiVCT Flex 5p',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.0 SE/SE Plus TiVCT Flex 5p',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.0 SEL TiVCT Flex 5p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.0 TECNO 12V Flex 5p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.0 TECNO 8V Flex 3p',
            'year' => '2011',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.0i 3p',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 100 Anos Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 FreeStyle 12V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 FreeStyle 12V Flex 5p Mec.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 SE 12V Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 SE 12V Flex 5p Mec.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 SE Plus 12V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 SE Plus 12V Flex 5p Mec.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 SE/SE PLUS 16V Flex 5p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 Sedan SE 12V Flex 4p Aut.',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 Sedan SE 12V Flex 4p Mec.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 Sedan SE Plus 12V Flex 4p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 Sedan SE Plus 12V Flex 4p Mec.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 Sedan SEL 12V Flex 4p Aut.',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 Sedan SEL 12V Flex 4p Mec.',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 Sedan TITANIUM 12V Flex 4p Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.5 TITANIUM 12V Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.6 8V Flex 3p',
            'year' => '2011',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka 1.6 TECNO 8V Flex 3p',
            'year' => '2011',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka Action 1.6 MPI 8V 95cv',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka Black 1.0 MPI 8v 65cv',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka Black 1.6 MPI 8v 95cv',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka CLX 1.3i 3p',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka GL 1.0i Zetec Rocam',
            'year' => '2008',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka GL Image 1.0i/ 1.0i Zetec Rocam',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka Image 1.0i',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka MP3 1.0 MPI 8V 65cv',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka MP3 1.6 MPI 8V 95cv',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka SEL 1.5 16V Flex 5p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka Sport 1.6 8V Flex 3p',
            'year' => '2013',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka Street 1.0i',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka Tecno 1.0i 8v Zetec Rocam',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka TRAIL 1.0 12V Flex Mec. 5p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka TRAIL 1.5 16V Flex Mec. 5p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka XR 1.6 MPI 8V',
            'year' => '2007',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka+ Sedan 1.0 SE/SE PLUS TiVCT Flex 4p',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka+ Sedan 1.0 SEL TiCVT Flex 4p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka+ Sedan 1.5 ADVANCED 16V Flex 4p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka+ Sedan 1.5 SE/SE PLUS 16V Flex 4p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ka+ Sedan 1.5 SEL 16V Flex 4p',
            'year' => '2018',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Maverick Lariat FX4 2.0 EcoBoost Aut.',
            'year' => '2022',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo CLX 1.8 4p e 5p',
            'year' => '1997',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo CLX 1.8i SW',
            'year' => '1997',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo CLX 2.0i 4p Aut',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo CLX 2.0i 4p Mec',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo CLX 2.0i SW Aut',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo CLX 2.0i SW Mec',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo Ghia 2.0 16V 143cv 4p Aut',
            'year' => '2006',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo Ghia 2.0 16V 143cv 4p Mec',
            'year' => '2004',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo Ghia 2.5 V6 Aut',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo Ghia 2.5 V6 Mec',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo GLX 2.0 16V 4p Aut',
            'year' => '2000',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo GLX 2.0 4p e 5p',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mondeo GLX 2.0i SW Mec./ Aut.',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mustang 3.8 V6',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mustang 3.8 V6 Conv.',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mustang Black Shadow 5.0 V8',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mustang Cobra 5.7 V8',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mustang GT Premium 5.0 V8',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mustang GT V8',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mustang GT V8 Conversível',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Mustang MACH 1 5.0 V8',
            'year' => '2022',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Pampa 4x4 Jeep GL / L 1.6',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Pampa Ghia 1.6/1.8/DUO',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Pampa GL 1.6/ 1.8',
            'year' => '1997',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Pampa L 1.6',
            'year' => '1997',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Pampa L 1.8i / 1.8',
            'year' => '1997',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Pampa S 1.8',
            'year' => '1997',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Probe 2.0/2.2',
            'year' => '1993',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Probe GT 2.5 V6',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger 2.5i CD',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger 2.5i CE',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger 2.5i CS',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger Limited 2.3 150cv CD',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger Limited 2.5 16V 4x2 CD Flex',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger Splash CE',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger Splash CS',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger SPORT 2.5 Flex 16V 4x2 CS',
            'year' => '2016',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger STX 4.0 CS/ CE',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger TROPICAB 2.5 16V 4X2 Flex',
            'year' => '2017',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger TROPIVAN 2.5 16V 4X2 Flex',
            'year' => '2020',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger TROPIVAN XLT 2.3 16V 150cv',
            'year' => '2011',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XL 2.3 16v 137cv 4x2 CD Repower.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XL 2.3 16v 137cv 4x2 CE Repower.',
            'year' => '2003',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XL 2.3 16v 137cv 4x2 CS Repower.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XL 2.3 CS',
            'year' => '1997',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XL 4.0 12v V6 210cv 4x2 CS Repow.',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XL 4.0 CS',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLS 2.3 16V 145cv/150cv 4x2 CD',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLS 2.3 16V 145cv/150cv 4x2 CS',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLS 2.5 16V 4x2 CD Flex',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLS 2.5 16V 4x2 CS Flex',
            'year' => '2015',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLS SPORT 2.3 16V 150cv CS',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 2.3 16V 150cv CD Repower.',
            'year' => '2012',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 2.3 CS',
            'year' => '1999',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 2.5 16V 4x2 CD Flex',
            'year' => '2019',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 4.0 12v V6 210cv 4x4 CD Repow',
            'year' => '2004',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 4.0 12v V6 210cv 4x4 CE Repow',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 4.0 4x2 CE',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 4.0 4x2 CS',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 4.0 4x4 CD',
            'year' => '2002',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 4.0 4x4 CE',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Ranger XLT 4.0 4x4 CS',
            'year' => '2001',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Royale Ghia 2.0/2.0i 2p e 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Royale GL 1.8/1.8i  2p e 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Royale GL 2.0/2.0i 2p e 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Taurus GL 3.0 V6',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Taurus GL SW 3.0 V6 24V',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Taurus L/LX 3.0 V6',
            'year' => '1998',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Taurus LX SW 3.0 V6 24V',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Taurus SHO 3.0 V6',
            'year' => '1993',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'TERRITORY SEL 1.5 GTDi EcoBoost Aut.',
            'year' => '2021',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'TERRITORY Titanium 1.5 GTDi EcoBo. Aut.',
            'year' => '2022',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Thunderbird SC 3.8 V6',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Verona Ghia 2.0i 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Verona GL 1.8i / LX 1.8i 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Verona GLX 1.8 (Modelo antigo)',
            'year' => '1992',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Verona GLX 1.8i / 1.8 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Verona GLX 2.0i / 2.0 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Verona LX 1.6 (Modelo antigo)',
            'year' => '1992',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Verona LX 1.8 (Modelo antigo)',
            'year' => '1992',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Verona S 2.0i 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Versailles Ghia 2.0i / 2.0 2p e 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Versailles GL 1.8i / 1.8 2p e 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Versailles GL 2.0i / 2.0 2p e 4p',
            'year' => '1996',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Windstar GL',
            'year' => '1995',
            'brand_id' => 27
        ]);
        VehiclesModel::create([
            'name' => 'Windstar LX',
            'year' => '1995',
            'brand_id' => 27
        ]);
        /*----------Fyber----------*/
        VehiclesModel::create([
            'name' => 'Buggy 2000W 1.6 8V',
            'year' => '2022',
            'brand_id' => 28
        ]);
        VehiclesModel::create([
            'name' => 'Buggy 2000W 1.8 8V/1.8 8V Flex',
            'year' => '2022',
            'brand_id' => 28
        ]);
        /*----------Geely----------*/
        VehiclesModel::create([
            'name' => 'EC7 1.8 16V 130cv 4p Mec.',
            'year' => '2014',
            'brand_id' => 29
        ]);
        VehiclesModel::create([
            'name' => 'GC2 1.0 12V 68cv 5p',
            'year' => '2015',
            'brand_id' => 29
        ]);
        /*----------Great Wall----------*/
        VehiclesModel::create([
            'name' => 'HOVER CUV 2.4 16V 4WD 5p Mec.',
            'year' => '2008',
            'brand_id' => 32
        ]);
        VehiclesModel::create([
            'name' => 'HOVER CUV 2.4 16V 5p Mec.',
            'year' => '2008',
            'brand_id' => 32
        ]);
        /*----------Gurgel----------*/
        VehiclesModel::create([
            'name' => 'BR-800 Supermini',
            'year' => '1993',
            'brand_id' => 33
        ]);
        VehiclesModel::create([
            'name' => 'Carajas/Tocantis/Xavante/Vip',
            'year' => '1994',
            'brand_id' => 33
        ]);
        /*----------Hafei----------*/
        VehiclesModel::create([
            'name' => 'Towner Furgão 1.0 8V 48cv 5p',
            'year' => '2012',
            'brand_id' => 34
        ]);
        VehiclesModel::create([
            'name' => 'Towner Jr. Pick-up 1.0 8V 48cv  CD 4p',
            'year' => '2013',
            'brand_id' => 34
        ]);
        VehiclesModel::create([
            'name' => 'Towner Jr. Pick-up 1.0 8V 48cv  CS 2p',
            'year' => '2012',
            'brand_id' => 34
        ]);
        VehiclesModel::create([
            'name' => 'Towner Jr. Pick-up Baú 1.0 8V 48cv 2p',
            'year' => '2012',
            'brand_id' => 34
        ]);
        VehiclesModel::create([
            'name' => 'Towner Jr. Pick-up Baú 1.0 8V 48cv CD 4p',
            'year' => '2012',
            'brand_id' => 34
        ]);
        VehiclesModel::create([
            'name' => 'Towner Passageiro 1.0 8V 48cv 7L 5p',
            'year' => '2012',
            'brand_id' => 34
        ]);
        VehiclesModel::create([
            'name' => 'Towner Pick-Up 1.0 8V 48cv 2p',
            'year' => '2013',
            'brand_id' => 34
        ]);
        VehiclesModel::create([
            'name' => 'Towner Pick-Up Baú 1.0 8V 48cv 2p',
            'year' => '2012',
            'brand_id' => 34
        ]);
        /*----------Hitech Eletric----------*/
        VehiclesModel::create([
            'name' => 'e.co Cargo 10kW',
            'year' => '2020',
            'brand_id' => 35
        ]);
        VehiclesModel::create([
            'name' => 'e.co Cargo 7,5kW',
            'year' => '2022',
            'brand_id' => 35
        ]);
        VehiclesModel::create([
            'name' => 'e.co Tech2 6kW',
            'year' => '2022',
            'brand_id' => 35
        ]);
        VehiclesModel::create([
            'name' => 'e.co Tech4 6kW',
            'year' => '2022',
            'brand_id' => 35
        ]);
        VehiclesModel::create([
            'name' => 'e.co Truck 10kW',
            'year' => '2020',
            'brand_id' => 35
        ]);
        VehiclesModel::create([
            'name' => 'e.co Truck 7,5kW',
            'year' => '2022',
            'brand_id' => 35
        ]);
        /*----------Honda----------*/
        VehiclesModel::create([
            'name' => 'Accord Coupe EX',
            'year' => '1998',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan 2.0 TB 16V Aut. (Híbrido)',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan EX 2.0 16V 156cv Aut.',
            'year' => '2012',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan EX 2.4/2.3/ 2.2 16V',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan EX 2.7/3.0 24V',
            'year' => '2007',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan EX 3.5 V6 24V',
            'year' => '2017',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan EXR',
            'year' => '2001',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan LX  2.2/2.4 16V',
            'year' => '2005',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan LX 2.0 16V 150/156cv Aut.',
            'year' => '2009',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord Sedan Touring 2.0 TB 16V Aut.',
            'year' => '2020',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord SW EX',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Accord SW LX',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Hatchback EXL 1.5 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Hatchback Touring 1.5 Flex 16V Aut',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan DX 1.5 Flex 16V Aut.',
            'year' => '2017',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan DX 1.5 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan EX 1.5 Flex 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan EX 1.5 Flex 16V 4p Mec.',
            'year' => '2013',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan EXL 1.5 Flex  16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan EXL 1.5 Flex 16V 4p Mec.',
            'year' => '2011',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan LX 1.5 Flex 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan LX 1.5 Flex 16V 4p Mec.',
            'year' => '2013',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan Personal 1.5 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan SPORT 1.5 FLEX 16V 4p Mec.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CITY Sedan Touring 1.5 Flex 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Coupe EX/ EXS 1.6 16V 2p',
            'year' => '1998',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Coupe Si 1.5 TB 16V 208cv Mec. 2p',
            'year' => '2019',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Coupe Si 2.4 16V 206cv Mec. 2p',
            'year' => '2015',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic CRX/ Targa VTi',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Hatch DX',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Hatch LSi',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Hatch LX Aut.',
            'year' => '1996',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Hatch Si',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Hatch VTi',
            'year' => '1998',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sed LX 1.8 Aut 4p',
            'year' => '2007',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sed. LXL/ LXL SE 1.8 Flex 16V Aut.',
            'year' => '2013',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sed. LXL/LXL SE 1.8 Flex 16V Mec.',
            'year' => '2013',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EX 1.6 16V Aut. 4p (nacion.)',
            'year' => '2000',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EX 1.6 16V Mec. 4p (nacion.)',
            'year' => '2000',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EX 1.7 16V 130cv Aut. 4p',
            'year' => '2006',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EX 1.7 16v 130cv Mec. 4p',
            'year' => '2003',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EX 2.0 Flex 16V Aut.4p',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EX/ EXS 1.6 Mec. 4p',
            'year' => '1997',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EX/ EXS Aut. 4p/ Del-Sol 2p',
            'year' => '1997',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EXL 2.0 Flex 16V Aut.4p',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EXR 2.0 Flexone 16V Aut. 4p',
            'year' => '2016',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan EXS 1.8/1.8 Flex 16V Aut. 4p',
            'year' => '2013',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LX 1.5/1.6',
            'year' => '1997',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LX 1.6 16V Aut. 4p',
            'year' => '2000',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LX 1.6 16V Mec. 4p',
            'year' => '2000',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LX 1.7 16V 115cv Mec. 4p',
            'year' => '2006',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LX 2.0 Flex 16V Aut. 4p',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LX/LXL 1.7 16V 115cv Aut. 4p',
            'year' => '2006',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LXB 1.6 16V 4p',
            'year' => '2000',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LXB 1.7 16V 115cv',
            'year' => '2001',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LXL 1.7 16V 130cv Aut 4p',
            'year' => '2006',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LXL 1.7 16V 130cv Mec 4p',
            'year' => '2006',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LXR 2.0 Flexone 16V Aut. 4p',
            'year' => '2016',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LXS 1.8/1.8 Flex 16V Aut. 4p',
            'year' => '2016',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan LXS 1.8/1.8 Flex 16V Mec. 4p',
            'year' => '2016',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan Si 2.0 16V  192cv 4p',
            'year' => '2011',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan SPORT 2.0 Flex 16V Aut.4p',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan SPORT 2.0 Flex 16V Mec.4p',
            'year' => '2019',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Civic Sedan TOURING 1.5 Turbo 16V Aut.4p',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CR-V 2.0 16V Aut.',
            'year' => '2007',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CR-V 2.0 16V Mec.',
            'year' => '2001',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CR-V 2.4 16V 156cv Aut. 4p',
            'year' => '2004',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CR-V EXL 2.0 16V 4WD/2.0 Flexone Aut.',
            'year' => '2016',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CR-V EXL 2.0 Flexone 16V 2WD Aut.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CR-V LX 2.0 16V 2WD Mec.',
            'year' => '2012',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CR-V LX 2.0 16V 2WD/2.0 Flexone Aut.',
            'year' => '2015',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'CR-V Touring 1.5 16V 4WD 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit CX 1.4 Flex 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit CX 1.4 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit DX 1.4 Flex 16V 5p Aut.',
            'year' => '2012',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit DX 1.4 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit DX 1.5 Flexone 16V 5p Aut.',
            'year' => '2017',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit DX 1.5 Flexone 16V 5p Mec.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit EX/ S 1.5/ EX 1.5 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit EX/S/EX 1.5 Flex/Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit EXL 1.5 Flex 16V 5p Mec',
            'year' => '2012',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit EXL 1.5 Flex/Flexone 16V 5p Aut',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit LX 1.4/ 1.4 Flex 8V/16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit LX 1.4/ 1.4 Flex 8V/16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit LX 1.5 Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit LX 1.5 Flexone 16V 5p Mec.',
            'year' => '2017',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit LXL 1.4/ 1.4 Flex 8V/16V 5p Aut.',
            'year' => '2012',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit LXL 1.4/ 1.4 Flex 8V/16V 5p Mec.',
            'year' => '2012',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit Personal 1.5 Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit Twist 1.5 Flex 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Fit Twist 1.5 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'HR-V EX 1.8 Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'HR-V EXL 1.8 Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'HR-V LX 1.8 Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'HR-V LX 1.8 Flexone 16V 5p Mec.',
            'year' => '2018',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'HR-V Touring 1.5 TB 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'HR-V Touring 1.8 Flexone 16V 5p Aut.',
            'year' => '2018',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Odyssey EX Van Aut (6 lug.)',
            'year' => '1997',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Odyssey Van LX Aut (6 lug.)',
            'year' => '1998',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Passport EX',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Passport LX',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Passport PIck-Up 4x2',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Prelude Coupê S 2.2',
            'year' => '1994',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'Prelude Si',
            'year' => '1995',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'WR-V EX 1.5 Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'WR-V EXL 1.5 Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        VehiclesModel::create([
            'name' => 'WR-V LX 1.5 Flexone 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 36
        ]);
        /*----------Hyundai----------*/
        VehiclesModel::create([
            'name' => 'Accent GLS 1.5 12V/16V Aut.',
            'year' => '2001',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Accent GLS 1.5 12V/16V Mec.',
            'year' => '2001',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Accent GS 3p Mec.',
            'year' => '1998',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Accent L/ LR 1.5 2/4p',
            'year' => '1997',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Accent LS 4p',
            'year' => '1995',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Atos Prime GL 1.0 Mec.',
            'year' => '2001',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Atos Prime GLS 1.0 Aut.',
            'year' => '2003',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Atos Prime GLS 1.0 Mec.',
            'year' => '2002',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Atos Prime GLS 1.0 Semi-Aut.',
            'year' => '2001',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'AZERA 3.0 V6 24V 4p Aut.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'AZERA GLS 3.3 V6 24V 4p Aut.',
            'year' => '2011',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Coupe FX 2.0 Aut.',
            'year' => '2001',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Coupe FX 2.0 Mec.',
            'year' => '2001',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Coupe FX 2.7 V6 24V 180cv Aut.',
            'year' => '2003',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Coupe FX 2.7 V6 24V 180cv Mec.',
            'year' => '2003',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta 1 Million 1.6 16V Flex Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Action 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Attitude 1.6 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Attitude 1.6 16V Flex Mec.',
            'year' => '2021',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Attitude Plus 1.6 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Comfort 1.0 TB 12V Flex Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Launch Edition 1.6 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Limited 1.0 TB 12V Flex Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Limited Edition 1.6 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta N Line 1.0 TB 12V Flex Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Platinum 1.0 TB 12V Flex Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Prestige 2.0 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Pulse 1.6 16V Flex Aut.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Pulse 1.6 16V Flex Mec.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Pulse 2.0 16V Flex Aut.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Pulse Plus 1.6 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Smart 1.6 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Smart Plus 1.6 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Sport 2.0 16V Flex Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Creta Ultimate 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Cupê 2.0',
            'year' => '1998',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra 2.0 16V Flex Aut.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra GL',
            'year' => '1995',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra GLS 1.6',
            'year' => '1997',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra GLS 1.8 16V',
            'year' => '1998',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra GLS 1.8 16V Aut.',
            'year' => '2013',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra GLS 1.8 16V Mec.',
            'year' => '2012',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra GLS 2.0 16V Aut.',
            'year' => '2004',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra GLS 2.0 16V Flex Aut.',
            'year' => '2016',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra GLS 2.0 16V Mec.',
            'year' => '2004',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra Special Edit. 2.0 16V Flex Aut.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Elantra Wagon 1.8 16V',
            'year' => '1998',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'EQUUS 4.6 V8 32V 366cv 4p Aut.',
            'year' => '2013',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Excel GLS',
            'year' => '1995',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Excel GS',
            'year' => '1995',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Excel L',
            'year' => '1995',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Excel LS/ GL',
            'year' => '1995',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Galloper 3.0 V6 Luxo',
            'year' => '1999',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Galloper 3.0 V6 Super Luxo Aut',
            'year' => '1999',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Galloper 3.0 V6 Super Luxo Mec',
            'year' => '1999',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'GENESIS 3.8 V6 24V 290cv 4p Aut.',
            'year' => '2013',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Grand Santa Fé  3.3 V6 4X4 Tiptronic',
            'year' => '2016',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'H1 Starex HSV 2.4 16V 137cv  Aut.',
            'year' => '2005',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'H1 Starex SVX 2.4 16V',
            'year' => '2009',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'H100 GS (12 lugares)',
            'year' => '1998',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 1 Million 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 5 Anos 1.0 Flex 12V Mec.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 5 Anos 1.6 Flex 16V Aut.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 C./C.Plus/C.Style 1.6 Flex 16V Mec.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 C.Style/C.Plus 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Comf./C.Plus/C.Style 1.0 Flex 12V',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Comfort 1.0 Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Comfort 1.0 TB Flex 12V Aut',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Comfort 1.0 TB Flex 12V Mec',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Comfort Plus 1.0 TB Flex 12V Mec.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Comfort Style 1.0 TB Flex 12V Mec.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Copa do Mundo 1.0 Flex 12V Mec.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Copa do Mundo 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Copa do Mundo 1.6 Flex 16V Mec.',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Diamond 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Diamond Plus 1.0 TB Flex 12V Aut.',
            'year' => '2021',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Evol. Bluelink 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Evolution 1.0 Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Evolution 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Evolution Bluelink 1.0 Flex 12V Mec',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 For You 1.0 Flex 12V 5p',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Launch Edition 1.6 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Limited 1.0 Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Ocean 1.0 Flex 12V 5p Mec.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Ocean 1.6 Flex 16V 5p Aut.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Ocean 1.6 Flex 16V 5p Mec.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Platinum 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Platinum 1.0 TB Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Platinum Plus 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Premium 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Premium 1.6 Flex 16V Mec.',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 R spec 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 R spec 1.6 Flex 16V Mec.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 R spec Limited 1.6 flex 16V Aut.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 S For You 1.0 Flex 12V 4p',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Sense 1.0 Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Spicy 1.0 Flex 12V Mec.',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Spicy 1.6 Flex 16V Aut.',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Spicy 1.6 Flex 16V Mec.',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Sport 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Unique 1.0 Flex 12V Mec.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Vision 1.0 Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Vision 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Vision 1.6 Flex 16V Aut',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Vision 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Vision Bluelink 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20 Vision Bluelink 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S  Impress 1.6 Flex 16V Aut.',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S  Impress 1.6 Flex 16v Mec.',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S 1 Million 1.6 Flex 16V Aut. 4p',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S 5 Anos 1.0 Flex 12V Mec.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S 5 Anos 1.6 Flex 16V Aut.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S C.Plus/C.Style 1.6 Flex 16V Mec.4p',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S C.Plus/C.Style1.0 Flex 12V Mec. 4P',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S C.Style/C.Plus1.6 Flex 16V Aut. 4p',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Comfort Plus 1.0 TB Flex 12V Mec.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Comfort Style 1.0 TB Flex 12V Mec.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Copa do Mundo 1.0 Flex 12V Mec.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Copa do Mundo 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Copa do Mundo 1.6 Flex 16V Mec.',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Diamond 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Diamond Plus 1.0 TB Flex 12V Aut.',
            'year' => '2021',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Evol. Bluelink 1.0 Flex 12 Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Evol. Bluelink 1.0 TB Flex 12V Aut',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Evolution 1.0 Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Evolution 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Ocean 1.6 Flex 16v 4p Aut.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Ocean 1.6 Flex 16V 4p Mec.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Platinum 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Platinum 1.0 TB Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Platinum Plus 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Premium 1.6 Flex 16V Aut. 4p',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Premium 1.6 Flex 16V Mec. 4p',
            'year' => '2016',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Style 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Unique 1.0 Flex 12V Mec.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Vision 1.0 Flex 12V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Vision 1.0 TB Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Vision 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Vision 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Vision Bluelink 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20S Vision Bluelink 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Diamond 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Diamond Plus 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Evol. Bluelink 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Evolution 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Premium 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Premium 1.6 Flex 16V Mec.',
            'year' => '2014',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Style 1.6 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Style 1.6 Flex 16v Mec.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Vision 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'HB20X Vision 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'i30 1.6 16V Flex 5p Aut.',
            'year' => '2014',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'i30 1.8 16V Aut. 5p',
            'year' => '2016',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'i30 2.0 16V 145cv 5p Aut.',
            'year' => '2012',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'i30 2.0 16V 145cv 5p Mec.',
            'year' => '2012',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'i30 Serie Limitada 1.8 16V Aut. 5p',
            'year' => '2015',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'i30cw 2.0 16V 145cv Aut. 5p',
            'year' => '2012',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'i30cw 2.0 16V 145cv Mec. 5p',
            'year' => '2012',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'ix35 2.0 16V 170cv 2WD/4WD Aut.',
            'year' => '2013',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'ix35 2.0 16V 170cv 2WD/4WD Mec.',
            'year' => '2012',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'ix35 2.0 16V 2WD Flex Aut.',
            'year' => '2021',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'ix35 2.0 16V 2WD Flex Mec.',
            'year' => '2014',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'ix35 2.0 Launching Edition 16V Flex Aut.',
            'year' => '2016',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'ix35 GL 2.0 16V 2WD Flex Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'ix35 GLS 2.0 16V 2WD Flex Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Matrix GLS 1.8 16V 123cv Aut.',
            'year' => '2004',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Matrix GLS 1.8 16V 123cv Mec.',
            'year' => '2004',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Santa Fe 3.5 V6 4X4 Aut.',
            'year' => '2020',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Santa Fe GLS 2.4 Tiptronic',
            'year' => '2012',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Santa Fe GLS 2.7 V6 4x4TipTronic',
            'year' => '2011',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Santa Fe GLS 3.5 V6 4x4 Tiptronic',
            'year' => '2013',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Santa Fe/GLS 3.3 V6 4X4 Tiptronic',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Scoupe',
            'year' => '1995',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Sonata 2.4 16V 182cv 4p Aut.',
            'year' => '2014',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Sonata GL 2.0 4p',
            'year' => '1998',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Sonata GLS 2.0 4p',
            'year' => '1995',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Sonata GLS 2.5 Aut.',
            'year' => '2001',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Sonata GLS 2.7 V6 24V 179cv 4p Aut.',
            'year' => '2003',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Sonata GLS 3.0 4p Aut.',
            'year' => '1998',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Sonata GLS 3.3 V6 24V 235cv 4p Aut.',
            'year' => '2008',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Trajet GLS 2.7 V6 24v 179cv Aut.',
            'year' => '2001',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson 2.0 16V Aut.',
            'year' => '2013',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson 2.0 16V Flex Aut.',
            'year' => '2019',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson 2.0 16V Flex Mec.',
            'year' => '2014',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson 2.0 16V Mec.',
            'year' => '2014',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson 2.7 MPFI 24V 175cv Aut.',
            'year' => '2010',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson Ed. Especial 1.6 Turbo 16V Aut.',
            'year' => '2017',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson GL 1.6 Turbo 16V Aut.',
            'year' => '2018',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson GLS 1.6 Turbo 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Tucson Limited 1.6 Turbo 16V Aut.',
            'year' => '2022',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'Veloster 1.6 16V  140cv Aut.',
            'year' => '2013',
            'brand_id' => 37
        ]);
        VehiclesModel::create([
            'name' => 'VERACRUZ GLS 3.8 4WD Aut.',
            'year' => '2012',
            'brand_id' => 37
        ]);
        /*----------Isuzu----------*/
        VehiclesModel::create([
            'name' => 'Amigo 2.3 4x2/4x4',
            'year' => '1994',
            'brand_id' => 38
        ]);
        VehiclesModel::create([
            'name' => 'Hombre 2 WD XS 2.2',
            'year' => '1998',
            'brand_id' => 38
        ]);
        VehiclesModel::create([
            'name' => 'Rodeo 3.2 V6',
            'year' => '1995',
            'brand_id' => 38
        ]);
        /*----------JAC----------*/
        VehiclesModel::create([
            'name' => 'E-J7 193cv 5p Aut. (Elético)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'e-JS1 62cv 5p Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'e-JS1 Extreme 62cv 5p Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'e-JS4 150CV 5p Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'iEV  750V 163cv 4p Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'iEV 20 68cv 5p Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'iEV 330P CD 150cv Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'iEV 350T 150cv Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'iEV 40 115cv 5p. (Elétrico)',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J2 1.4 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J2 1.4 JET Flex 16V 5p Mec',
            'year' => '2016',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J3 1.4 16V 5p Mec.',
            'year' => '2015',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J3 Brasil 1.4 16V 5p Mec.',
            'year' => '2012',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J3 S 1.5 JET Flex 16V VVT 5p',
            'year' => '2015',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J3 S turin 1.5 JET Flex 16V 4p Mec.',
            'year' => '2015',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J3 turin Sedan 1.4 16V 4p Mec.',
            'year' => '2015',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J3 turin Sedan Brasil 1.4 16V 4p Mec.',
            'year' => '2012',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J5 Sedan 1.5 16V 4p Mec.',
            'year' => '2016',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J6 2.0 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'J6 2.0 JET Flex 5p Mec.',
            'year' => '2016',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T40 1.5 JET Flex 16V 5p Mec.',
            'year' => '2020',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T40 1.6 16V 5p Aut.',
            'year' => '2020',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T40 PLUS 1.5 JET Flex 16V 5p Mec.',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T40 PLUS 1.6 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T5 1.5 JET Flex 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T5 1.5 JET Flex 16V 5p Mec.',
            'year' => '2018',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T50 1.6 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T50 PLUS 1.6 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T6 2.0 JET Flex 5p Mec.',
            'year' => '2016',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T60 1.5 Turbo 16V Aut.',
            'year' => '2021',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T60 PLUS 1.5 TURBO 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T8 2.0 16V 5p Mec.',
            'year' => '2018',
            'brand_id' => 39
        ]);
        VehiclesModel::create([
            'name' => 'T80 2.0 Turbo 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 39
        ]);
        /*----------Jaguar----------*/
        VehiclesModel::create([
            'name' => 'Daimler LWB 4.0',
            'year' => '2000',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'E-Pace 2.0 AWD 249cv Aut/Flex',
            'year' => '2020',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'E-Pace FIRST EDITION 2.0 AWD 249cv Aut.',
            'year' => '2018',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'E-Pace R-Dyn. SE 2.0 AWD 250cv Aut/Flex.',
            'year' => '2018',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'E-Pace R-Dynamic HSE 2.0 AWD 300cv Aut.',
            'year' => '2018',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'E-Pace R-Dynamic S 2.0 AWD 249cv/ Flex',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'E-Pace R-Dynamic SE 2.0 AWD 300cv Aut.',
            'year' => '2020',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'E-Pace S 2.0 AWD 249cv Flex Aut.',
            'year' => '2020',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Pace 2.0 Prestige 250cv Aut.',
            'year' => '2020',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Pace 2.0 R-Sport 250cv Aut.',
            'year' => '2020',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Pace 3.0 AWD R-Dynamic S 340cv Aut.',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Pace 3.0 FIRST EDITION 380cv Aut.',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Pace 3.0 R-Dynamic SE AWD 340cv Aut.',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Pace 3.0 R-Sport 340cv Aut.',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Pace 3.0 S 380cv Aut.',
            'year' => '2020',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Pace 3.0 S AWD 340 cv Aut.',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-PACE SVR Supercharged 5.0 V8',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type 2.0 R-Dyn.Black Cabriolet Ed.Esp.',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type 2.0 R-Dynamic Cabriolet 300cv Aut',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type 2.0 R-Dynamic Coupe 300cv Aut.',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type 3.0 R-Dynamic Cabrio. 380cv Aut.',
            'year' => '2019',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type 3.0 R-Dynamic Coupe 380cv Aut.',
            'year' => '2019',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type R AWD Supercharged Coupe 5.0 V8',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type R Supercharged Coupe 5.0 V8',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type S Supercharged Conversivel 3.0 V6',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type S Supercharged Conversivel 5.0 V8',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type S Supercharged Coupe 3.0 V6',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type Supercharged Conversivel 3.0 V6',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type Supercharged Coupe 3.0 V6',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'F-Type SVR AWD Supercharged Coupe 5.0 V8',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'I-Pace BLACK EV 400 AWD Aut.(Elétrico)',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'I-Pace SE EV400 AWD Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'S-Type 3.0/ 3.0 SE V6',
            'year' => '2008',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'S-Type 4.2/4.2 SE/4.0 V8 32V',
            'year' => '2008',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'S-Type R 4.2 V8 32V 400cv',
            'year' => '2008',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XE 2.0 R-Dynamic S 250cv Aut.',
            'year' => '2022',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XE 2.0 Turbocharged Edition Aut.',
            'year' => '2019',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XE 2.0 Turbocharged Pure 240cv Aut.',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XE 2.0 Turbocharged R-Sport Aut.',
            'year' => '2019',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XE 3.0 Supercharged S 380cv Aut.',
            'year' => '2019',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 2.0 GTDi Prestige 16V Aut.',
            'year' => '2018',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 2.0 GTDI SPORT LUXURY 240cv Aut.',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 2.0 GTDI SPORT PREMIUM TECH 240cv Aut',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 2.0 R-SPORT  Aut.',
            'year' => '2020',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 2.0 Turbo 16V 240cv Aut.',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 2.0 Turbocharged Pure 250cv Aut.',
            'year' => '2018',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 3.0 Portfolio Supercharged V6 Aut.',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 3.0 S V6 380cv Aut.',
            'year' => '2018',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 3.0 V6 24V 240cv Aut.',
            'year' => '2012',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 4.2 V8 32V 300cv Aut.',
            'year' => '2010',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF 5.0 32V V8 385cv Aut.',
            'year' => '2012',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XF SV8 4.2 V8 32V 420cv Aut.',
            'year' => '2009',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XFR Supercharged 5.0 V8 510cv Aut.',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XFR-S Supercharged 5.0 V8 550cv Aut.',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ 2.0 Turbo 16V 240cv Aut.',
            'year' => '2014',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ 3.0 Portfolio Supercharged V6 Aut.',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ 3.0 R-Sport Supercharged V6 Aut.',
            'year' => '2017',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ S.Sport Supercharged 5.0 V8 32V Aut.',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ Super 4.2 V8 32V 400cv 4p',
            'year' => '2009',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ-12',
            'year' => '1997',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ-12 Conv.',
            'year' => '1995',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ-6',
            'year' => '1997',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ-8 Daimler',
            'year' => '2000',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ-8 Executive/ Centenary 4.0',
            'year' => '2000',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ-8 Executive/ SE 4.2 V8 32V 300cv 4p',
            'year' => '2009',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJ-8 Sovereign LWB 4.0',
            'year' => '1999',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJR 4.2 V8 32V 400cv 4p',
            'year' => '2009',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJS 4.0 24V',
            'year' => '1995',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XJS-C 6.0 V12',
            'year' => '1995',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XK-8 BR Conversível / XK-8 Conversível',
            'year' => '2010',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XK-8 BR Coupe/ XK-8 Coupe',
            'year' => '2010',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XKR Conversível 4.2/5.0 32V',
            'year' => '2012',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XKR Coupe  4.2/5.0 32V',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'XKR-S Coupe Supercharged 5.0 32V',
            'year' => '2015',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'X-Type ESTATE 3.0 24V 230cv',
            'year' => '2009',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'X-Type SE 2.5 V6 194cv',
            'year' => '2009',
            'brand_id' => 40
        ]);
        VehiclesModel::create([
            'name' => 'X-Type SE 3.0 V6 231cv',
            'year' => '2009',
            'brand_id' => 40
        ]);
        /*----------Jeep----------*/
        VehiclesModel::create([
            'name' => 'Cherokee Country 4.0 V6 4x4',
            'year' => '1994',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Cherokee Limited 3.2 4x4 V6 Aut.',
            'year' => '2015',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Cherokee Limited 3.7 4x4 V6 12V Aut.',
            'year' => '2012',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Cherokee Longitude 3.2 4x4 V6 Aut.',
            'year' => '2015',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Cherokee Rubicon 4.0 V6 4x4',
            'year' => '1998',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Cherokee Sport  4.0 Mec./Aut.',
            'year' => '2001',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Cherokee Sport 3.7 4x4 V6 12V Aut.',
            'year' => '2012',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Cherokee Trailhawk 3.2 4x4 V6 Aut.',
            'year' => '2015',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Commander Limited 5.7 326cv 5p',
            'year' => '2006',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Commander Limited T270 1.3 TB Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Commander Overland T270 1.3 TB Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS LIMITED 2.0 4x2 Flex 16V Aut.',
            'year' => '2021',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS LIMITED T270 1.3 TB 4x2 Flex Aut',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS LONG. T270 1.3 TB 4x2 Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS LONGITUDE 2.0 4x2 Flex 16V Aut.',
            'year' => '2021',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS Night Eagle 2.0 4x2 Flex 16V Aut',
            'year' => '2018',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS S 1.3 TB 4XE Aut. (Hybrido)',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS S T270 1.3 TB 4x2 Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS SPORT 2.0 16V 156cv 5p',
            'year' => '2015',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS SPORT 2.0 4x2 Flex 16V Aut.',
            'year' => '2021',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS SPORT 2.0 4x4 flex 16V Aut.',
            'year' => '2018',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS SPORT T270 1.3 TB 4x2 Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'COMPASS T270 80 Anos 1.3 TB 4x2 Flex Aut',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Laredo 3.6 4x4 V6 Aut.',
            'year' => '2015',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Laredo 4.0 Aut.',
            'year' => '2001',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Lim. 75 anos 3.6 4x4 Aut.',
            'year' => '2016',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Limit.4.7 Quad.Drive Aut.',
            'year' => '2001',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Limited 3.6 4x4 V6 Aut.',
            'year' => '2018',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Limited 4.7',
            'year' => '2009',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Limited 5.2 Aut.',
            'year' => '2000',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Limited 5.7 326cv',
            'year' => '2006',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Limited LX 5.9',
            'year' => '1999',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Nova Limited 4.7',
            'year' => '2000',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee Overland 5.7 326cv',
            'year' => '2009',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Grand Cherokee SRT8 6.1 V8 16V 432cv Aut',
            'year' => '2010',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade 1.8 4x2 Flex 16V Mec.',
            'year' => '2017',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade 75 Anos 1.8 4X2 Flex 16V Aut.',
            'year' => '2017',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Custom 1.8 4x2 Flex 16V Mec.',
            'year' => '2018',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Lim. Edit. 1.8 4x2 Flex 16V Aut',
            'year' => '2017',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Limited 1.8 4x2 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Long. T270 1.3 TB 4x2 Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Longitude 1.8 4x2 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Night Eagle 1.8 4x2  Flex Aut.',
            'year' => '2018',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade S T270 1.3 TB 4x4 Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Sport 1.8 4x2 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Sport 1.8 4x2 Flex 16V Mec.',
            'year' => '2019',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Sport T270 1.3 TB 4x2 Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade STD 1.8 4x2 Flex 16v Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Trailhawk T270 1.3 TB Flex Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade Willys 2.0 4x4 TB Diesel Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Renegade1.8 4x2 Flex 16V Aut.',
            'year' => '2021',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler 4.0/Sport 4.0',
            'year' => '2001',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler RUBICON 2.0 Turbo 4x4 4p Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler SAHARA 2.0 4x4 271cv 2p Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler SAHARA 3.8 V6 199cv 2p',
            'year' => '2011',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler SAHARA Overland 2.0 4x4 4p Aut.',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Sport 3.6 V6 284cv 2p',
            'year' => '2018',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Sport 3.8 V6 199cv',
            'year' => '2011',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Unlimited 75 Anos 3.6 V6 284cv',
            'year' => '2016',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Unlimited 80 Anos 2.0 TB 4p',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Unlimited SAHARA 2.0 TB 4p Aut',
            'year' => '2022',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Unlimited SAHARA 3.6 V6 4p',
            'year' => '2018',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Unlimited SAHARA 3.8 V6  4p',
            'year' => '2011',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Unlimited Sport 3.6 V6 284cv 4p',
            'year' => '2017',
            'brand_id' => 41
        ]);
        VehiclesModel::create([
            'name' => 'Wrangler Unlimited Sport 3.8 V6 199cv',
            'year' => '2011',
            'brand_id' => 41
        ]);
        /*----------Jinbei----------*/
        VehiclesModel::create([
            'name' => 'TOPIC ESCOLAR L 2.2 8V/ 2.0 16V 4p',
            'year' => '2015',
            'brand_id' => 42
        ]);
        VehiclesModel::create([
            'name' => 'TOPIC ESCOLAR SL 2.2 8V/ 2.0 16V 4p',
            'year' => '2015',
            'brand_id' => 42
        ]);
        VehiclesModel::create([
            'name' => 'TOPIC FURGAO L 2.2 8V/ 2.0 16V 4p',
            'year' => '2012',
            'brand_id' => 42
        ]);
        VehiclesModel::create([
            'name' => 'TOPIC VAN L 2.2 8V/ 2.0 16V 4p',
            'year' => '2015',
            'brand_id' => 42
        ]);
        VehiclesModel::create([
            'name' => 'TOPIC VAN Lon./GRAN TOPIC SL',
            'year' => '2015',
            'brand_id' => 42
        ]);
        VehiclesModel::create([
            'name' => 'TOPIC VAN SL 2.2 8V/ 2.0 16V 4p',
            'year' => '2015',
            'brand_id' => 42
        ]);
        VehiclesModel::create([
            'name' => 'TOPIC VAN STD 2.0 16V 4p',
            'year' => '2015',
            'brand_id' => 42
        ]);
        VehiclesModel::create([
            'name' => 'VKN VAN 2.0 16V 4p',
            'year' => '2016',
            'brand_id' => 42
        ]);
        /*----------Kia Motors----------*/
        VehiclesModel::create([
            'name' => 'CADENZA EX 3.5 V6 24V Aut.',
            'year' => '2016',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Carens EX 2.0 16V  Aut.',
            'year' => '2013',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Carens LS 1.8 16V 130cv Aut.',
            'year' => '2001',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Carens LS 1.8 16V 130cv Mec.',
            'year' => '2001',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Carnival 2.5 V6',
            'year' => '2006',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Carnival EX 3.5 V6 24V 276cv Aut.',
            'year' => '2015',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Carnival EX 3.8 V6 24V 242cv Aut.',
            'year' => '2011',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Cerato 1.6 16 V Flex Mec.',
            'year' => '2014',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Cerato 1.6 16V  Flex  Aut.',
            'year' => '2019',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Cerato 1.6 16V Aut.',
            'year' => '2013',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Cerato 1.6 16V Mec.',
            'year' => '2013',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Cerato 2.0 16V Aut.',
            'year' => '2006',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Cerato EX 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Cerato KOUP 2.0 16V Aut.',
            'year' => '2013',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Cerato SX 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Clarus GLX 2.0 16V Aut.',
            'year' => '2000',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Clarus GLX 2.0 16V Mec',
            'year' => '2000',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Clarus Wagon GLX 2.0 16V Aut.',
            'year' => '2000',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Clarus Wagon GLX 2.0 16V Mec.',
            'year' => '2000',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Grand Carnival EX 3.3 V6 24V 270cv Aut.',
            'year' => '2021',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Magentis EX 2.0 16V Aut.',
            'year' => '2011',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Magentis LX 2.0 16V Aut',
            'year' => '2007',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'MOHAVE EX 3.8 V6 24V 275cv 4x4 Aut.',
            'year' => '2013',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'MOHAVE EX 4.6 V8 32V 340cv 4x4 Aut.',
            'year' => '2012',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Opirus GL 3.5 V6 24V 202cv Aut.',
            'year' => '2007',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Opirus GL 3.8 V6 24V 267cv Aut.',
            'year' => '2009',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'OPTIMA 2.0 16V 165cv Aut.',
            'year' => '2016',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'OPTIMA 2.4 16V 180cv Aut.',
            'year' => '2014',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Picanto EX 1.1/1.0/ 1.0 Flex Aut.',
            'year' => '2017',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Picanto EX 1.1/1.0/ 1.0 Flex Mec.',
            'year' => '2017',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Picanto GT 1.0 12V Flex Aut.',
            'year' => '2018',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'QUORIS EX 3.8 V6 24V 294cv Aut.',
            'year' => '2016',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'RIO EX 1.6 Flex Aut.',
            'year' => '2021',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'RIO LX 1.6 Flex Aut.',
            'year' => '2020',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sephia GTX 1.5 16V',
            'year' => '1998',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sephia GTX 1.6',
            'year' => '1995',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sephia LS 1.5 16V Aut.',
            'year' => '2001',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sephia LS 1.5 16V Mec.',
            'year' => '2000',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sephia SLX',
            'year' => '1995',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Shuma LS 1.5 16V Aut.',
            'year' => '2000',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Shuma LS 1.5 16V Mec.',
            'year' => '2000',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sorento 2.4 16V 4x2 Aut.',
            'year' => '2020',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sorento 2.4 16V 4x4 Aut.',
            'year' => '2020',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sorento 3.3 V6 24V 270cv 4x2 Aut.',
            'year' => '2018',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sorento 3.5 V6 24V 4x2 Aut.',
            'year' => '2019',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sorento 3.5 V6 24V 4x4 Aut.',
            'year' => '2020',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sorento EX 3.5 V6 24V 197cv 4x4 Aut.',
            'year' => '2006',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sorento EX 3.8 V6 24V 267cv 4x4 Aut.',
            'year' => '2009',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'SOUL 1.6/ 1.6 16V FLEX Aut.',
            'year' => '2019',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'SOUL 1.6/ 1.6 16V FLEX Mec.',
            'year' => '2014',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage 2.0 16V Aut.',
            'year' => '2000',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage DLX 2.0 16V Aut.',
            'year' => '2001',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage DLX 2.0 16V Mec.',
            'year' => '2001',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage EX 2.0 16V Mec.',
            'year' => '2012',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage EX 2.0 16V/ 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage EX 2.7 V6 4x4 Aut.',
            'year' => '2010',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage Exp P. 1.6 T-GDI MHEV',
            'year' => '2022',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage Grand 2.0 16V Aut.',
            'year' => '2001',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage Grand 2.0 16V Mec.',
            'year' => '2001',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage LX 2.0 16V 142cv 5p',
            'year' => '2010',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage LX 2.0 16V/ 2.0 16V Flex  Aut.',
            'year' => '2022',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage LX 2.0 16V/ 2.0 16V Flex Mec.',
            'year' => '2014',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Sportage Targa 2.0 16V',
            'year' => '1999',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'Stinger GT 3.3 V6 Bi-Turbo 370cv Aut.',
            'year' => '2022',
            'brand_id' => 43
        ]);
        VehiclesModel::create([
            'name' => 'STONIC SX 1.0 MHEV TB Aut.',
            'year' => '2022',
            'brand_id' => 43
        ]);
        /*----------Lada----------*/
        VehiclesModel::create([
            'name' => 'Laika 1.5',
            'year' => '1992',
            'brand_id' => 44
        ]);
        VehiclesModel::create([
            'name' => 'Laika 1.6',
            'year' => '1995',
            'brand_id' => 44
        ]);
        VehiclesModel::create([
            'name' => 'Laika SW 5p',
            'year' => '1995',
            'brand_id' => 44
        ]);
        VehiclesModel::create([
            'name' => 'Niva 1.6 RC/Pantanal 4x4',
            'year' => '1996',
            'brand_id' => 44
        ]);
        VehiclesModel::create([
            'name' => 'Niva 1.6/CD 4x4',
            'year' => '1995',
            'brand_id' => 44
        ]);
        VehiclesModel::create([
            'name' => 'Niva 1.7i 4x4',
            'year' => '2000',
            'brand_id' => 44
        ]);
        VehiclesModel::create([
            'name' => 'Samara 1.3/1.5',
            'year' => '1995',
            'brand_id' => 44
        ]);
        /*----------Lamborghini----------*/
        VehiclesModel::create([
            'name' => 'AVENTADOR 770-4 SVJ ROADSTER V12',
            'year' => '2021',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'AVENTADOR LP 700-4',
            'year' => '2017',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'AVENTADOR LP 700-4 ROADSTER',
            'year' => '2017',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'AVENTADOR LP 770-4 SVJ',
            'year' => '2022',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'AVENTADOR S LP 740-4',
            'year' => '2019',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'AVENTADOR S LP 740-4 ROADSTER',
            'year' => '2019',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'Gallardo Coupe LP550-2 Bicolore',
            'year' => '2013',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'Gallardo Coupe LP560-4',
            'year' => '2013',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'Gallardo Coupe LP570-4 Sup.Trof.Stradale',
            'year' => '2013',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'Gallardo Coupe Superleggera LP570-4',
            'year' => '2013',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'Gallardo Coupe Valentino Balboni LP550-2',
            'year' => '2010',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'Gallardo Spyder LP560-4',
            'year' => '2013',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'Gallardo Spyder Performante LP570-4',
            'year' => '2013',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'HURACAN Coupe LP 610-4',
            'year' => '2017',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'HURACAN Coupe Performante LP 640-4',
            'year' => '2019',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'HURACAN Coupe RWD LP 580-2',
            'year' => '2019',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'HURACAN EVO Coupe LP 640-4',
            'year' => '2022',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'HURACAN EVO Spyder LP 640-4',
            'year' => '2022',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'HURACAN Spyder LP 610-4',
            'year' => '2017',
            'brand_id' => 45
        ]);
        VehiclesModel::create([
            'name' => 'URUS LP-650-4',
            'year' => '2022',
            'brand_id' => 45
        ]);
        /*----------Land Rover----------*/
        VehiclesModel::create([
            'name' => 'Defender 110 2.0 Turbo HSE Si4 Aut.',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Defender 110 2.0 Turbo S Si4 Aut.',
            'year' => '2020',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Defender 110 2.0 Turbo SE Si4 Aut.',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Defender 90 2.0 Turbo SE Si4 Aut.',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery ES 3.9 V8',
            'year' => '2000',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery ES 4.0 V8 Aut.',
            'year' => '2004',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery HSE 3.0 V6 4x4 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery HSE Lux. 3.0 V6 4x4 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery S 3.0 V6 4x4 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery SE 3.0 V6 4x4 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery Sport HSE 2.0 4x4 Aut/ Flex',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery Sport HSE Lux. 2.0 4x4 /Flex',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery Sport S 2.0 4x4 Flex Aut.',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery Sport SE 2.0 4x4 Aut./Flex',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery Sport SE R-Dyn 2.0 Si4 Flex',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery3 HSE 4.4 V8 4x4 299cv Aut.',
            'year' => '2009',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery3 S 4.0 V6 4x4 215cv Aut.',
            'year' => '2009',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery3 SE 4.0 V6 4x4 215cv Aut.',
            'year' => '2006',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Discovery4 HSE 5.0 4x4 Aut.',
            'year' => '2013',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander 1.8 16v',
            'year' => '2000',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander HSE 2.5 V6 24V 177cv 5p',
            'year' => '2006',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander HSE3 2.5 V6 24V 177cv 3p',
            'year' => '2005',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander S/ SE 2.5 V6 24V 177cv 5p',
            'year' => '2005',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander SE3 2.5 V6 24V 177cv 3p',
            'year' => '2005',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 I6 HSE 3.2 232cv Aut. 5p',
            'year' => '2012',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 I6 LE Sport 3.2 232cv Aut. 5',
            'year' => '2011',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 I6 S 3.2 232cv Aut. 5p',
            'year' => '2012',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 I6 S Sport 3.2 232cv Aut. 5p',
            'year' => '2011',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 I6 SE 3.2 232cv Aut. 5p',
            'year' => '2012',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 Si4 Dyn. 2.0 240cv Aut. 5p',
            'year' => '2013',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 Si4 HSE 2.0 240cv Aut. 5p',
            'year' => '2014',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 Si4 S 2.0 240cv Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Freelander2 Si4 SE 2.0 240cv Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'New Range/Range Rover Vogue 3.9 V8',
            'year' => '1997',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. EVO HSE Si4 R-Dyn.2.0 300cv Aut',
            'year' => '2020',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. EVO SE Si4 R-Dyn. 2.0 Flex Aut.',
            'year' => '2021',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. Sp.SVR AWD 5.0 Carbon Ed. Aut.',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. Sport Autob. Dyn.SCHA. 5.0 V8',
            'year' => '2016',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. Sport Autob. SUPERCHAR. 5.0 V8',
            'year' => '2014',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. Sport HSE Dynamic SUPERC.5.0 V8',
            'year' => '2017',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. Sport HSE SUPERCHARGED 3.0 V6',
            'year' => '2016',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. Sport HST SUPERCHARGED 3.0 V6',
            'year' => '2016',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. Sport L. Edit. SCHARGED 3.0 V6',
            'year' => '2016',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. SV Autob. Sc. Dyn. SWB 5.0 V8',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. SV Autob. Super. LWB 5.0 V8',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. SVAutobiography SUPERC. 5.0 V8',
            'year' => '2017',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VE. R-Dyn HSE 2.0 4X4 300cv Aut',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VE. R-Dyn S 2.0 4X4 300cv Aut.',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VE. R-Dyn SE 2.0 4x4 250cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VE. R-Dyn SE 2.0 4x4 300cv Aut.',
            'year' => '2020',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VEL. R-Dyn HSE 3.0 PH6 4x4 Aut.',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VEL. R-Dyn. 2.0 4x4 250cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VEL. R-Dyn. 2.0 4x4 300cv Aut.',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VEL. R-Dyn.SE 3.0 PH6 4x4 Aut.',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR 2.0 4x4 TB 250cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR 3.0 4x4 V6 380cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR First Ed. 3.0 4x4 V6 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR HSE 2.0 4x4 TB 250cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR HSE 3.0 4x4 V6 380cv Aut',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR R-Dyn. 3.0 4x4 V6 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR R-Dyn. HSE 2.0 4x4 TB Aut',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR R-Dyn. HSE 3.0 4x4 V6 Aut',
            'year' => '2020',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR R-Dyn. S 2.0 4x4 TB Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR R-Dyn. S 3.0 4x4 V6 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR R-Dyn. SE 3.0 4x4 V6 Aut.',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR S 2.0 4x4 TB 250cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR S 2.0 4x4 TB 300cv Aut.',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR S 3.0 4x4 V6 380cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR SE 2.0 4x4 TB 250cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR SE 3.0 4x4 V6 380cv Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. VELAR SV Autob. Super.C 5.0 V8',
            'year' => '2020',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R. Vogue Autob. SUPERCHAR. 5.0 V8',
            'year' => '2017',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVO DYNAMIC. BLACK 2.0 Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVO STYLE 2.0 Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQ. HSE Dyn. Convers 2.0 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Dynamic 2.0 Aut 3p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Dynamic 2.0 Aut 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Dynamic Tech 2.0 Aut 3p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Dynamic Tech 2.0 Aut 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE LONDON 2.0 240cv Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE ONE SICILIAN 2.0 Aut. 5p',
            'year' => '2013',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Prestige 2.0 Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Prestige Tech 2.0 Aut 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Pure  2.0 Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Pure 2.0 Aut. 3p',
            'year' => '2013',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Si4 HSE Dyn. 2.0/Flex Aut',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Si4 SE 2.0 Aut.5p/Flex',
            'year' => '2019',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range R.EVOQUE Si4 SE Dynamic 2.0 Aut.',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Autobio. 2.0 Si4 (Hibrido)',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover EVOQUE Autobiography 2.0 Aut',
            'year' => '2018',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover EVOQUE Pure Tech 2.0 Aut. 3p',
            'year' => '2013',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover EVOQUE Pure Tech 2.0 Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover EVOQUE Zanzibar 2.0 Aut. 5p',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover HSE 4.4/ 4.6',
            'year' => '2005',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Sport HSE 2.0 Si4 (Híbrido)',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Sport HSE 4.4 V8 32V 295cv',
            'year' => '2007',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Sport HSE SUPERCHAR. 5.0 V8',
            'year' => '2013',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Sport SE 4.4 V8 32V 299cv',
            'year' => '2008',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Sport SE SUPERCH. 3.0  Aut.',
            'year' => '2017',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Sport SUPERCHAGED 4.2 V8',
            'year' => '2009',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Sport SVR SUPERCHA. 5.0 V8',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover SUPERCHARGED 4.2 V8 396cv',
            'year' => '2009',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Vogue SE 2.0 Si4 (Híbrido)',
            'year' => '2022',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range Rover Vogue SE SUPERCHAR. 5.0 V8',
            'year' => '2015',
            'brand_id' => 46
        ]);
        VehiclesModel::create([
            'name' => 'Range.Rover Sp.HSE Dyn.Bi. 2.0 Si4',
            'year' => '2022',
            'brand_id' => 46
        ]);
        /*----------Lexus----------*/
        VehiclesModel::create([
            'name' => 'CT200h  1.8 16V Hybrid Aut.',
            'year' => '2019',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'CT200h F-Sport 1.8 16V Hybrid Aut.',
            'year' => '2013',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'ES-300 3.0',
            'year' => '2003',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'ES300h 2.5 16V Aut. (Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'ES-330 3.3 24V 228cv',
            'year' => '2006',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'ES-350 3.5 24V 284cv',
            'year' => '2018',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'GS 300 3.0 V6 24V',
            'year' => '1996',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'IS-250 2.5 24V 208cv Aut.',
            'year' => '2016',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'IS-250 F Sport 2.5 24V 208cv Aut.',
            'year' => '2015',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'IS-300 3.0 24V 231cv Aut.',
            'year' => '2013',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'LS 400 4.0',
            'year' => '2000',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'LS 430 4.3 32V 281cv',
            'year' => '2006',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'LS 460 4.6 32V 347cv',
            'year' => '2013',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'LS 500h 3.5 V6 24v Aut.(Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'LS-460L 4.6 V8 32v 347cv Aut.',
            'year' => '2017',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-200t F-Sport 2.0 16v 238cv Aut.',
            'year' => '2017',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-200t Luxury 2.0 16V 238cv Aut.',
            'year' => '2017',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-300 Dynamic 2.0 16V 238cv Aut.',
            'year' => '2018',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-300 F-Sport 2.0 16V 238cv Aut.',
            'year' => '2018',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-300 Luxury 2.0 16V 238cv Aut.',
            'year' => '2018',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-300h Dynamic 2.5 16V Aut.(Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-300h F-Sport 2.5 16V Aut.(Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-300h Luxury 2.5 16V Aut.(Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-350h Dynamic 2.5 16V Aut. (Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-350h F-Sport 2.5 16V Aut. (Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'NX-350h Luxury 2.5 16V Aut. (Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'RX 300 3.0 V6 24V',
            'year' => '2002',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'RX-350 3.5 24V  Aut.',
            'year' => '2019',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'RX-350 F-Sport 3.5 24V Aut.',
            'year' => '2019',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'RX-450h F-Sport 3.5 24V V6 Aut.(Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'RX-450h Luxury 3.5 24V V6 Aut.(Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'SC 400 4.0 V8',
            'year' => '1995',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'UX-250h Dynamic 2.0 16V Aut.(Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'UX-250h F-Sport 2.0 16V Aut.(Hybrid)',
            'year' => '2020',
            'brand_id' => 47
        ]);
        VehiclesModel::create([
            'name' => 'UX-250h Luxury 2.0 16V Aut.(Hybrid)',
            'year' => '2022',
            'brand_id' => 47
        ]);
        /*----------Lifan----------*/
        VehiclesModel::create([
            'name' => '320 ELITE 1.3 16V 88cv 5p',
            'year' => '2012',
            'brand_id' => 48
        ]);
        VehiclesModel::create([
            'name' => '530 1.5 16V 103cv 4p',
            'year' => '2016',
            'brand_id' => 48
        ]);
        VehiclesModel::create([
            'name' => '530 TALENT 1.5 16V 103cv 4p',
            'year' => '2019',
            'brand_id' => 48
        ]);
        VehiclesModel::create([
            'name' => '620 TALENT 1.6 16V 106cv 4p',
            'year' => '2012',
            'brand_id' => 48
        ]);
        VehiclesModel::create([
            'name' => 'FOISON 1.3 16V 85cv 2p',
            'year' => '2016',
            'brand_id' => 48
        ]);
        VehiclesModel::create([
            'name' => 'X60 1.8 16V 128cv 5p Mec.',
            'year' => '2022',
            'brand_id' => 48
        ]);
        VehiclesModel::create([
            'name' => 'X60 VIP 1.8 16V 128cv 5p Aut.',
            'year' => '2019',
            'brand_id' => 48
        ]);
        VehiclesModel::create([
            'name' => 'X80 VIP 2.0 Turbo 184cv 5p Aut.',
            'year' => '2022',
            'brand_id' => 48
        ]);
        /*----------Lobini----------*/
        VehiclesModel::create([
            'name' => 'H1 1.8 20V Turbo 180cv 2p',
            'year' => '2008',
            'brand_id' => 49
        ]);
        /*----------Lotus----------*/
        VehiclesModel::create([
            'name' => 'Elan S-2 1.6 16V',
            'year' => '1995',
            'brand_id' => 50
        ]);
        VehiclesModel::create([
            'name' => 'Esprit S-4 2.2 16V',
            'year' => '1995',
            'brand_id' => 50
        ]);
        /*----------Maserati----------*/
        VehiclesModel::create([
            'name' => '228',
            'year' => '1994',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => '222 SE/SR 2.0 V6',
            'year' => '1994',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => '3200 GT Cupê',
            'year' => '2001',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => '3200 GT Cupê Aut.',
            'year' => '2002',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => '430 2.0 V6',
            'year' => '1994',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => '430 II 2.0 V6',
            'year' => '1994',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Coupé CC 4.2 V8 32V 390cv',
            'year' => '2006',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Ghibli 2.0 V6',
            'year' => '1994',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Ghibli 3.0 V6 Aut.',
            'year' => '2019',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Ghibli S Q4 3.0 V6 Aut.',
            'year' => '2019',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Gran Turismo Sport 4.7 V8 32V 460cv',
            'year' => '2019',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'GranCabrio 4.7 V8 32V 440cv',
            'year' => '2016',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'GranSport 4.2 V8 32V 400cv',
            'year' => '2007',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'GranSport Spyder 4.2 V8 32V 400cv',
            'year' => '2006',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'GranTurismo 4.2 V8 32V 405cv',
            'year' => '2011',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'GranTurismo MC Stradale 4.7 V8 32V 450cv',
            'year' => '2017',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'GranTurismo S 4.7 V8 32V/ MC Line',
            'year' => '2013',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Levante 3.0 V6 350cv Aut.',
            'year' => '2022',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Levante GT 2.0 MHEV 330cv Aut.',
            'year' => '2022',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Levante S 3.0 V6 430cv Aut.',
            'year' => '2022',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Levante Trofeo 3.8 V8 590cv Aut.',
            'year' => '2022',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Quattroporte Automatica 4.2 32V 400cv',
            'year' => '2011',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Quattroporte Evolucione Aut.',
            'year' => '2001',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Quattroporte Evolucione Mec.',
            'year' => '2001',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Quattroporte Executive 4.2 32V 400cv',
            'year' => '2008',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Quattroporte GTS 3.8 V8 32V 530cv',
            'year' => '2019',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Quattroporte S 4.7 V8 32V 430cv',
            'year' => '2013',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Quattroporte Sport 4.2 32V 400cv/430cv',
            'year' => '2012',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Quattroporte Sport GT-S 4.7 V8 32V 440cv',
            'year' => '2011',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Shamal 3.2 V8',
            'year' => '1994',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Spyder CC 4.2 V8 32V 390cv',
            'year' => '2006',
            'brand_id' => 51
        ]);
        VehiclesModel::create([
            'name' => 'Spyder IE 2.0 V6',
            'year' => '1994',
            'brand_id' => 51
        ]);
        /*----------Mazda----------*/
        VehiclesModel::create([
            'name' => '323 1.6 16V',
            'year' => '1995',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '626 GLX',
            'year' => '1999',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '626 GT',
            'year' => '1995',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '626 Sedan Aut.',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '626 Sedan High',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '626 Sedan Mec.',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '626 Sedan Top',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '626 SW',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '626 SW High',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => '929 V6 Aut',
            'year' => '1995',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'Millenia 3.0 V6 24V',
            'year' => '1997',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'MPV Minivan Aut',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'MX-3 1.6 16V',
            'year' => '1998',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'MX-3 GS 1.8 V6 24V',
            'year' => '1995',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'MX-5 Mec',
            'year' => '1995',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'Navajo LX 3.0 V6',
            'year' => '1993',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'Protegé Aut.',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'Protegé High',
            'year' => '2000',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'Protegé Mec.',
            'year' => '1998',
            'brand_id' => 52
        ]);
        VehiclesModel::create([
            'name' => 'RX 7 2.6 Turbo',
            'year' => '1994',
            'brand_id' => 52
        ]);
        /*----------McLaren----------*/
        VehiclesModel::create([
            'name' => '540C Coupe 3.8 Bi-Turbo V8',
            'year' => '2020',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => '570S Coupé 3.8 Bi-Turbo V8',
            'year' => '2019',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => '570S GT Coupé 3.8 Bi-Turbo V8',
            'year' => '2019',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => '570S Spider 3.8 Bi-Turbo V8',
            'year' => '2019',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => '600LT Coupe 3.8 Bi-Turbo V8',
            'year' => '2019',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => '600LT Spider 3.8 Bi-Turbo V8',
            'year' => '2022',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => '720S Coupe 4.0 Bi-Turbo V8 2p',
            'year' => '2022',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => '720S Spider 4.0 Bi-Turbo V8 2p',
            'year' => '2022',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => '765LT Coupe 4.0 Bi-Turbo V8',
            'year' => '2021',
            'brand_id' => 53
        ]);
        VehiclesModel::create([
            'name' => 'GT Coupé 4.0 Bi-Turbo V8 2p',
            'year' => '2022',
            'brand_id' => 53
        ]);
        /*----------Mercedes-Benz----------*/
        VehiclesModel::create([
            'name' => '190-E 2.3',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '230-E 2.3',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '260-E 2.6',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '300-E 3.0',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '300-SE 3.0/3.2',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '300-SL 3.0',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '300-TE Wagon 3.0',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '500-E 5.0',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '500-SEC/ SL',
            'year' => '1994',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '500-SEL 5.0/ 5.6',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => '560-SEL 5.6',
            'year' => '1992',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A 200 1.3 TB Advance Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A 200 1.3 TB Hatch Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A 200 1.3 TB Style Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A 250 2.0 TB Hatch',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A 250 2.0 TB Hatch Vision',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A 250 2.0 TB Launch Edition',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A-35 AMG 4MATIC 2.0 TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A35 AMG Laun. Edition 4MATIC 2.0 TB Aut',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A-35 AMG Sedan 4MATIC 2.0 TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'A-45  S AMG 4MATIC CGI 2.0 TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 1.6 Turbo 16V/Flex 16V Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Avant. 1.6/1.6 FlexTB 16V Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Classic 1.8 16V 156cv Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Coupe 1.8 16V 156cv Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Coupe Avant. 1.6 TB 16V Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Coupe Sport 1.5 TB 16V Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Coupe Sport 1.6 TB 16V Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Estate Avant. 1.6 TB 16V Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Exc. 1.6/1.6 Flex TB 16V  Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Sport 1.6 TB 16V 156cv Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Touring 1.8 16V Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 CGI Touring Sport 1.6 TB Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 Classic/Classic Plus/Elegance',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 Kompressor Classic 1.6 16V Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-180 Kompressor Classic 1.8 16V 143cv',
            'year' => '2007',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 AMG Line EQ Boost 1.5 TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 Avantgarde 2.0 TB 16V 184cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 CGI Avantgarde 1.8 16V 184cv Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 CGI Sport 1.8 TB 16V 184cv Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 CGI Touring Avantgarde 1.8 16V Aut',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 Classic/Sport',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 EQ Boost 1.5 TB 16V 183cv Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 Kompressor 2.0 V6 16v 4p Aut.',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 Kompressor Avant.1.8 16V Aut',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 Kompressor Classic 1.8 16V Aut.',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 Sportcoupé Komp. 2.0 16V 163cv Aut',
            'year' => '2003',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 Touring Komp. 2.0 16V 163cv 5p Aut',
            'year' => '2003',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-200 Touring Komp. Avant. 1.8 16V Aut.',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-220 Classic/Elegance/Sport',
            'year' => '1996',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-230 Avantgarde 2.5 V6 24V 204cv Aut',
            'year' => '2006',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-230 Komp. Sportcoupé 2.3 16V 197cv Aut',
            'year' => '2003',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-230 Kompressor Avantgarde',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-230 Sport/ Eleg./Touring Eleg.Plus 2.3',
            'year' => '1999',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-230 Touring Avant. 2.5 24V 204cv Aut.',
            'year' => '2007',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-230 Touring Kompressor',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-240 AvantGarde 2.4/ 2.6 4p',
            'year' => '2003',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-240 Classic',
            'year' => '2000',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-240 Elegance 2.4',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-240 Elegance 2.4 V6 24v 4p Aut.',
            'year' => '2003',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-250 Avantgarde 2.0 TB 211cv Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-250 CGI Sport 1.8 16V Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-250 CGI Sport Coupe 1.8 16V TB Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-250 Sport 2.0 16V 211cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-250 Sport Coupe 2.0 16V 211cv Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-280 Avantgarde 3.0 V6 231cv Aut.',
            'year' => '2009',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-280 Classic/Sport',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-280 Elegance',
            'year' => '2000',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-280 Touring',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-300 AMG Line EQ Boost 2.0 TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-300 Anniversary Lim. Edit. 2.0 Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-300 Avantgarde 3.0 V6 24V 231cv Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-300 Cabriolet 2.0 245/258cv Aut.',
            'year' => '2021',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-300 Coupé Sport 2.0 16V Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-300 Estate Avantgarde 2.0 245cv Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-300 Sport 2.0 16V Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-300 Sport 3.0 V6 231cv Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-320 AvantGarde 3.2 V6 24v 4p Aut.',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-320 Elegance 3.2 V6 24v 4p Aut.',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-320 Touring 3.2 V6 18v 4p Aut.',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-350 Avantgarde/ Elegance 3.5 V6 272cv',
            'year' => '2008',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-350 CGI Sport 3.5 306cv Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-350 Sport 3.5 V6 272cv',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-350 Sportcoupé 3.5 24V  272cv',
            'year' => '2007',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-350 Touring AvantGarde 3.5 24V 272cv',
            'year' => '2007',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-36 AMG',
            'year' => '1997',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-43 AMG',
            'year' => '2000',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-43 AMG 3.0 V6 Bi-Turbo 367cv Aut',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-43 Coupe AMG 3.0 V6 Bi-Turbo Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-450 AMG Sport 3.0 TB 362cv Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-55 AMG 24V 367cv Aut.',
            'year' => '2006',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-55 Touring AMG 24V 367cv Aut.',
            'year' => '2006',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-63 AMG 4.0 V8 Bi-Turbo Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-63 AMG 6.2 V8 Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-63 Coupe AMG 6.2 V8 Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-63 Coupe AMG Black Series 6.3 V8 Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-63 S AMG 4.0 V8  Bi-Turbo Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-63 S Coupe AMG 4.0 V8  Bi-Turbo Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'C-63 Touring AMG 6.2 V8 Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CL-500 5.0/ 5.5',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CL-600 6.0/ 5.5',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CL-63 AMG 6.2 V8 32V 525cv',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CL-65 AMG 6.0 V12 612cv Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-180 1.6 16V 122cv Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-200 1.6 TB 16V Flex Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-200 First Edition 1.6 TB 16V  Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-200 Urban 1.6 TB 16V/Flex Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-200 Vision 1.6 TB 16V Flex Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-250 2.0 16V TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-250 Sport 4MATIC 2.0 16V 211cv Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-35 AMG 4MATIC 2.0 TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-35 AMG Launch Edition 4MATIC 2.0 TB',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-45 AMG 4MATIC CGI 2.0 TB Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLA-45 S AMG 4MATIC CGI 2.0 TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 160 Classic Semi-Aut.',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 160 Classic/ Spirit Mec.',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 160 Elegance Mec.',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 160 Elegance Semi-Aut.',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 190 AvantGarde 1.9 8V 125cv Aut',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 190 AvantGarde 1.9 8V 125cv Mec',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 190 Classic 1.9 Semi-Aut.',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 190 Classic/ Spirit 1.9 Mec.',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 190 Elegance 1.9 Aut.',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 190 Elegance 1.9 Mec.',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 190 Elegance 1.9 Semi-Aut.',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 200 1.6 TB 16V Style 156cv Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 200 1.6 TB 16V Urban 156cv Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 200 1.6 TB/Flex Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 200 Elegance 2.0 136cv Aut.',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A 250 2.0 TB Sport Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe A45 AMG 4MATIC 2.0 Turbo Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe B 170 1.7 116cv Aut.',
            'year' => '2009',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe B 180 1.7 116cv Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe B 200 2.0 136cv Aut.',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe B 200 2.0 Turbo 193cv Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe B 200 CGI 1.6 TB Sport 156cv Aut',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe B 200 CGI 1.6 TB/Flex Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe R 500 5.0 V8 306cv Aut.',
            'year' => '2008',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classe R 500 L 5.5 V8 388cv Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'Classic 6.0',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLC 200 Kompressor 1.8 184cv Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-230 Cabriolet Kompressor',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-230 Kompressor',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-320 AvantGarde',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-320 AvantGarde Cabriolet',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-320 Elegance',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-320 Elegance Cabriolet',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-320 Sport',
            'year' => '2000',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-320 Sport Cabriolet',
            'year' => '2000',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-350 Avant./ Elegance 3.5 24V 272cv',
            'year' => '2009',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-350 Avant./Eleg. Cabriolet 3.5 272cv',
            'year' => '2009',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-430 Avantgard Cabriolet 4.3 V8 24v',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-430 AvantGarde 4.3',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-430 Elegance',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-430 Elegance Cabriolet 4.3 V8 24v',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-430 Sport 4.3',
            'year' => '2000',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-500 Cabriolet V8 24V 306cv',
            'year' => '2007',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-500 Elegance/ Avant. 5.0 V8 24V Aut',
            'year' => '2008',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-55 AMG Cabriolet V8 24v 367cv',
            'year' => '2006',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLK-55 AMG V8 24V 367cv',
            'year' => '2006',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-350 CGI 3.5 306cv Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-350 V6 24V 272cv',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-400 3.5 V6 Bi-Turbo 333cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-450 EQ Boost 3.0 TB 4MATIC',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-450 EQ Boost 3.0 TB 4MATIC SPORT',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-500 V8 24V',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-53 AMG 3.0 TB 4MATIC+ Hybrido',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-55 Kompressor AMG 5.5 V8 24V 476cv',
            'year' => '2006',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-63 AMG 5.5 V8 557cv Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'CLS-63 AMG 6.2 V8 32V 514cv',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-190',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-190 Classic',
            'year' => '1994',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-200 Classic 2.0',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-220 Classic/Touring 2.2',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-230 Elegance',
            'year' => '1998',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-240 Elegance',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-250 Cabriolet 2.0 TB 211CV Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-250 CGI Avantgarde 1.8 16V 204cv Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-250 CGI Avantgarde 2.0 TB 211cv Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-250 CGI Coupe 1.8 16V 204cv Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-250 CGI VR4 2.0 TB Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-250 Coupe 2.0 TB 211cv Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-250 Excl. Launch Ed. 2.0 TB 211cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-250 Exclusive 2.0 TB 211cv Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-280 Classic 2.8',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-280 Touring 2.8',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-300 AMG Line 2.0 TB 258cv Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-300 Avantgarde 2.0 TB 258cv Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-300 Avantgarde Sport 2.0 TB 258cv Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-300 Cabriolet 2.0 TB 245cv Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-300 Coupe 2.0 TB 245cv Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-300 Exclusive 2.0 TB 258cv Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-320',
            'year' => '2000',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-320 3.2 Elegance',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-320 Avantgarde',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-320 C 3.2/ CA Classic 3.2',
            'year' => '1996',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-320 Cabriolet',
            'year' => '1996',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-320 Touring Avantgarde 24V V6 5p Aut.',
            'year' => '2004',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-320 Touring Eleg./Classic',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350  Touring Avant/Eleg. 3.5 24V 272cv',
            'year' => '2007',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 Avant./Avant. Execut. 3.5 V6 272cv',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 Avantgarde/ Elegance 3.5 V6 272cv',
            'year' => '2007',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 Cabrio 3.5 V6 272cv 2p',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 CGI Avant. Sport 3.5 306cv Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 CGI Cabriolet 3.5 306cv Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 CGI Executive 3.5 306cv Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 CGI Guard VR4 3.5 306cv Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 Coupe 3.5 V6 272cv 2p',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-350 Sport 3.5 V6 272cv',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-400 Avantgarde 3.5 V6 Bi-Turbo Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-400 Cabriolet 3.5 V6 Bi-Turbo Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-420 Classic/Elegance/Avantgarde',
            'year' => '1998',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-420 Touring Avantgarde',
            'year' => '1998',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-43 AMG 4MATIC 3.0 V6 401cv Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-430 Avantgarde',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-430 Elegance',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-430 Touring Avantgarde',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 Avangarde Executive 5.5 V8 388cv',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 Avant. 5.0 V8 4p Aut. (Blindada)',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 CGI Guard VR4 4.7 V8 408cv 4p',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 CGI Guard VR4 5.5 V8 4p',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 Coupe Sport 4.7 V8 408cv Aut 2p',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 Coupe Sport 5.5 V8 388cv 2p',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 Elegance/ Avant. 5.0 V8 24V 4p Aut',
            'year' => '2007',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 Sport Avantgarde 5.0 V8 24V 4p Aut',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-500 Tour. Avant./ Eleg. 24V V8 5p Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-53 AMG 3.0 TB 24V 4MATIC+ Hybrido Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-55 AMG',
            'year' => '2006',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-55 Touring AMG 24V V8 5p Aut.',
            'year' => '2006',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-63 AMG 5.5 V8 Bi-Turbo Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-63 AMG 6.2 V8 32V',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-63 S AMG 4MATIC 4.0 V8 612cv',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-63 S AMG 4MATIC Final Ed. 4.0 V8 612cv',
            'year' => '2021',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-63 Touring AMG 5.5 V8 Bi-Turbo Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'E-63 Touring AMG 6.2 V8 Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'EQC 400 4MATIC 408CV (Elétrico)',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'EQC 400 4MATIC AMG Line (Elétrico)',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'G-55 Kompressor AMG 5.5 V8 507cv Aut.',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'G-63 AMG 4M 4.0 Bi-TB Magno Edition Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'G-63 AMG 4MATIC 4.0 V8 Bi-TB 585cv Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'G-63 AMG 5.5 Bi-Turbo 32V 4x4 Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'G-63 AMG ED1 4MATIC 4.0 V8 Bi-TB Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GL-500 4.7 Bi-Turbo V8 4x4 Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GL-500 5.5 V8 32V 4x4 388cv Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GL-63 AMG 5.5 Bi-Turbo 32V 4x4 Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 200 Advance 1.6/1.6 TB 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 200 AMG Line 1.3 16V TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 200 Enduro 1.6 TB 16V Flex Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 200 Night 1.6. TB 16V Flex Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 200 Style 1.6 TB 16V/Flex Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 200 Vis. Black Ed. 1.6 TB 16V  Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 200 Vision 1.6/1.6 TB 16V Flex Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 250 Enduro 2.0 TB 16V 211cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 250 Sport 2.0 TB 16V 4x2  211cv Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 250 Sport 2.0 TB 16V 4x4 211cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 250 Vision 2.0 TB 16V 211cv Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 35 AMG 4MATIC 2.0 Turbo Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLA 45 AMG 4MATIC 2.0 Turbo Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLB 200 Advance 1.3 TB 16V Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLB 200 Launch Edition 1.3 TB 16V Aut.',
            'year' => '2021',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLB 200 Progressive 1.3 TB 16V Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLB 35 AMG 4MATIC 2.0 Turbo Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC 250 4MATIC 2.0 TB 16V Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC 250 Coupe 4MATIC 2.0 TB 16V Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC 250 Coupe Highway 4MATIC 2.0 TB Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC 250 Highway 4MATIC 2.0 TB Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC 250 Sport 4MATIC 2.0 TB 16V Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC 300 Coupe 4MATIC 2.0 TB 16V Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC-300 AMG Line Coupe 4M 2.0 TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC-43 AMG 4MATIC 3.0 V6 Bi-Turbo Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC-43 AMG Coupe 3.0 V6 Bi-TB 367cv Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC-63 AMG 4MATIC 4.0 Bi-TB V8',
            'year' => '2021',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLC-63 S AMG 4MATIC Coupe 4.0 Bi-TB V8',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-400 Coupe 3.0 V6 333cv Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-400 Coupe High. 4MATIC 3.0 V6  Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-400 Night Coupe 3.0 V6 333cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-43 AMG 4MATIC 3.0 V6 Bi-TB Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-43 AMG 4MATIC Coupe 3.0 V6 Bi-TB Aut',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-450 AMG 3.0 V6 367cv Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-53 AMG 3.0 TB 4MATIC+ Hybrid',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-63 AMG 4MATIC Coupe 5.5 V8 Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-63 AMG 5.5 V8 557cv Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLE-63 S AMG 4M+ Coupé 4.0 Aut',
            'year' => '2021',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLK 280 3.0 V6 24V 4x4 231cv Aut.',
            'year' => '2009',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLK 300 3.0 V6 24V 4x4 231cv Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLK 300 3.5 CGI V6 4x4 252cv Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLS 450 4M EQ Boost 3.0 Bi-TB Aut.',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLS-500 4MATIC 4.7 Bi-Turbo V8 455cv',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GLS-63 AMG 4MATIC 5.5 V8 Bi-TB Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GT 43 AMG EQ BOOST 3.0 Bi-Turbo Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GT 63 S AMG 4.0 V8 Bi-Turbo',
            'year' => '2021',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GT AMG 4.0 V8 Bi-Turbo 462cv',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GT AMG BLACK SERIES 4.0 V8 Bi-Turbo',
            'year' => '2022',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GT C Roadster AMG 4.0 V8 Bi-Turbo',
            'year' => '2021',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GT R AMG 4.0 V8 Bi-Turbo 585cv',
            'year' => '2021',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'GT S AMG 4.0 V8 Bi-Turbo 510cv',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-230 4x4',
            'year' => '1999',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-320 4x4',
            'year' => '2002',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-350 3.5  4x4',
            'year' => '2010',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-350 Sport CGI 3.5 V6 306cv 4x4 Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-430',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-500 V8 24V',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-55 AMG 5.5 24v',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-63 AMG 5.5 V8 Bi-Turbo Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'ML-63 AMG 6.2 V8 32V 510cv',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-320 L Classic/Wagon Classic 3.2',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-400 Hybrid 3.5 V6 279cv Aut.',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-420 Classic 4.0',
            'year' => '1994',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-500 5.0',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-500 C Classic 5.0',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-500 L/ L Classic/ Wagon Classic 5.0',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-500 Maybach 4.7 Bi-Turbo V8 455cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-500L 4.7 Bi-Turbo V8 455cv Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-500L 5.0',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-55 AMG V8 24V 364cv/ 500cv',
            'year' => '2005',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-560L 4.0 Bi-Turbo V8 469cv Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-600 L/ L Classic/ Wagon Classic 6.0',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-600/ S-600 C Classic 6.0',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-63 AMG 5.5 V8 BI-TURBO Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-63 AMG 6.2 V8 525cv Aut',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-63 Cabriolet AMG 5.5 V8 Bi-Turbo Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-63 Coupe AMG 4MATIC 4.0 V8 Bi-TB Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-63 Coupe AMG 5.5 V8 Bi-Turbo Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-63 L AMG 6.2 V8/5.5 V8 Bi-TB Aut',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-65 AMG 6.0 V12 612cv Aut',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-65 AMG Coupe 6.0 Bi-TB V12 630cv Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'S-65 L AMG 6.0 V12 630cv Aut.',
            'year' => '2019',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SE-500',
            'year' => '1993',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-280 Classic 2.8',
            'year' => '1995',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-320 3.2/Classic 3.2',
            'year' => '1999',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-350 3.5 V6 2p',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-350 Sport 3.5 V6 316cv',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-400 3.0 Bi-Turbo V6 2p',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-500 5.0 e 5.5/ Classic 5.0',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-55 AMG V8 24V 500cv',
            'year' => '2008',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-600',
            'year' => '2000',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-63 AMG 5.5 Bi-Turbo V8 Aut.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-63 AMG 6.2 V8 525cv Aut',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SL-65 AMG 6.0 V12 612cv Aut',
            'year' => '2011',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLC-300 2.0 Turbo 245cv Aut.',
            'year' => '2020',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLC-43 AMG 3.0 V6 Aut.',
            'year' => '2018',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLK-200 Kompressor 16V/ 200 CGI 16V',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLK-230 Kompressor',
            'year' => '2004',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLK-230 Plus',
            'year' => '2001',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLK-250 CGI 1.8 16V 204cv Aut.',
            'year' => '2015',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLK-300 2.0 Turbo 245cv Aut.',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLK-320 3.2 218cv',
            'year' => '2004',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLK-350 3.5 V6/SLK-350 CGI',
            'year' => '2012',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLK-55 AMG V8 24V',
            'year' => '2016',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLS-63 AMG 6.2 8V Black Series Aut.',
            'year' => '2014',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLS-63 AMG 6.2 V8 Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'SLS-63 AMG Roadster 6.3 V8 Aut.',
            'year' => '2013',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'VITO TOURER 119 Comf.2.0 Flex 9Lug. Mec.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        VehiclesModel::create([
            'name' => 'VITO TOURER 119 Luxo 2.0 Flex 8Lug. Mec.',
            'year' => '2017',
            'brand_id' => 54
        ]);
        /*----------Mercury----------*/
        VehiclesModel::create([
            'name' => 'Mystique GS 2.5 V6 Mec.',
            'year' => '1995',
            'brand_id' => 55
        ]);
        VehiclesModel::create([
            'name' => 'Sable LS 3.0 V6',
            'year' => '1993',
            'brand_id' => 55
        ]);
        /*----------MG----------*/
        VehiclesModel::create([
            'name' => '550 1.8 16V Turbo 170cv Aut.',
            'year' => '2012',
            'brand_id' => 56
        ]);
        VehiclesModel::create([
            'name' => 'MG6 1.8 16V Turbo 170cv Aut.',
            'year' => '2012',
            'brand_id' => 56
        ]);
        /*----------Mini----------*/
        VehiclesModel::create([
            'name' => 'COOPER 1.5 Turbo 12V 3p Aut.',
            'year' => '2021',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER 1.5 Turbo 12V 5p Aut.',
            'year' => '2021',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER 1.6 Aut.',
            'year' => '2012',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER 1.6 Mec.',
            'year' => '2012',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER CABRIO 1.5 Turbo 12V Aut.',
            'year' => '2020',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER CABRIO 1.6 Aut.',
            'year' => '2012',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER CABRIO John Works 1.6  Mec.',
            'year' => '2012',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER CABRIO John Works 1.6 Aut.',
            'year' => '2014',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER CABRIO John Works 2.0 Aut.',
            'year' => '2021',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER CABRIO S 1.6 Aut.',
            'year' => '2015',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER CABRIO S 2.0 16V Aut.',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER CABRIO S HIGHGATE 1.6 Aut.',
            'year' => '2014',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Clubman 1.6 Aut.',
            'year' => '2012',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Clubman John Work ALL4 2.0 Aut.',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Coun. SE SHADOW ED. ALL4 1.5 Híb.',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Country. John Works ALL4 1.6 Aut.',
            'year' => '2016',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Country. John Works ALL4 2.0 Aut.',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Countryman 1.5 Turbo Aut.',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Countryman 1.6 Aut.',
            'year' => '2014',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Countryman S 1.6 Aut.',
            'year' => '2016',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Countryman S 2.0 Turbo Aut.',
            'year' => '2020',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Countryman S ALL4 1.6 Aut.',
            'year' => '2016',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Countryman S ALL4 2.0 Turbo Aut.',
            'year' => '2020',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER Countryman S E ALL4 1.5  Híbrido',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER COUPE 1.6 Aut.',
            'year' => '2012',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER COUPE John Works 1.6 Aut.',
            'year' => '2014',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER COUPE S 1.6 Aut.',
            'year' => '2014',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER John Works 1.6 Aut.',
            'year' => '2013',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER John Works 1.6 Mec.',
            'year' => '2013',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER John Works 2.0 Turbo 3p Aut.',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER John Works GP3 2.0 Turbo 3p Aut.',
            'year' => '2021',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER PACEMAN S 1.6 16V 184cv Aut.',
            'year' => '2015',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER PACEMAN S ALL4 1.6 16V Aut.',
            'year' => '2014',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER PACEMAN S John Works ALL4 1.6 Aut',
            'year' => '2016',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER ROADSTER 1.6 Aut.',
            'year' => '2012',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER ROADSTER John Works 1.6 Aut.',
            'year' => '2014',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER ROADSTER S 1.6 Aut.',
            'year' => '2014',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER S 1.6 Aut.',
            'year' => '2013',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER S 2.0 Turbo 16v 3p Aut.',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER S 2.0 Turbo 16V 3p Mec.',
            'year' => '2015',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER S 2.0 Turbo 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER S BAYSWATER 1.6 Aut.',
            'year' => '2013',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER S Clubman 1.6 Aut.',
            'year' => '2012',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER S Clubman 2.0 Aut.',
            'year' => '2019',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER S SEVEN 2.0 TURBO 16V 3p Aut.',
            'year' => '2018',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER SE Exclusive 3p (Elétrico)',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER SE Top 3p (Elétrico)',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'COOPER SE Top Collection 3p (Elétrico)',
            'year' => '2022',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'ONE 1.2 12V Turbo 2p Mec.',
            'year' => '2015',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'ONE 1.6  Mec.',
            'year' => '2013',
            'brand_id' => 57
        ]);
        VehiclesModel::create([
            'name' => 'ONE 1.6 Aut.',
            'year' => '2013',
            'brand_id' => 57
        ]);
        /*----------Mitsubishi----------*/
        VehiclesModel::create([
            'name' => '3000 GT SL 3.0',
            'year' => '1994',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => '3000 GT VR-4',
            'year' => '1998',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Airtrek 2.0 16V TB-IC 202cv 4x4 5p',
            'year' => '2007',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Airtrek 2.4 16V 163cv/ 136cv 4x4 5p Aut.',
            'year' => '2008',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX 2.0 16V  4x4 Aut.(By Armura-Blind.)',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX 2.0 16V 160cv Aut.',
            'year' => '2017',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX 2.0 16V 160cv Mec.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX 2.0 16V 4x2 Aut.(By Amura-Blind.)',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX 2.0 16V 4x2 Flex Aut.',
            'year' => '2019',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX 2.0 16V 4x4 160cv Aut.',
            'year' => '2017',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX 2.0 16V 4x4 Flex Aut.',
            'year' => '2019',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX GLS FWD 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX HPE AWD 2.0 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX HPE FWD 2.0 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX HPE-S AWD Flex 2.0 16V Aut.',
            'year' => '2020',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX O NEILL 2.0 16V 160cv Aut.',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX OUTDOOR 2.0 4x2 16V 160cv Aut.',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX OUTDOOR 2.0 4X4 16V 160 cv Mec.',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'ASX-S 2.0 16V 160cv Aut.',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Colt GLXi',
            'year' => '1997',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Colt GTi Mec',
            'year' => '1997',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Diamant  LS 3.0 V6',
            'year' => '1993',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse Cross GLS 1.5 16V 165cv Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse Cross HPE 1.5 16V 165cv Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse Cross HPE-S 1.5 16V 165cv Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse Cross HPE-S 1.5 AWC 165cv Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse Cross HPE-S Outdoor 1.5 AWC Aut.',
            'year' => '2020',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse Cross HPE-S Sport 1.5 16V Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse Cross HPE-S Sport 1.5 AWC Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse GS/ GS Turbo Mec',
            'year' => '1995',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse GST 2.0 16V Turbo',
            'year' => '1999',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse GSX 2.0 V6 16V Turbo',
            'year' => '1995',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse GT 3.0 V6 24V',
            'year' => '2001',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Eclipse GT 3.8 V6 267cv',
            'year' => '2011',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Expo LRV Sport 2.3 16V',
            'year' => '1994',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Expo SP Van 2.3 16V',
            'year' => '1997',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Galant 2.0',
            'year' => '2000',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Galant 2.5 V6',
            'year' => '2005',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Galant ES',
            'year' => '1996',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Galant GS 2.0 V6',
            'year' => '1996',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'GRANDIS 2.4 16V 163cv 5p Aut.',
            'year' => '2008',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'L200 Tri. Sport Outd. GLX 2.4 4x4 Diesel',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'L200 Tri.HLS Chrome Ed. 2.4 CD Flex Mec.',
            'year' => '2017',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'L200 Triton HLS 2.4 Flex 16V CD Mec.',
            'year' => '2017',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'L200 Triton HPE 3.5 CD V6 24V Flex Aut.',
            'year' => '2017',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'L200 Triton OUTDOOR 2.4 Flex 16V CD Mec.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer 2.0 16V 160cv Aut.',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer 2.0 16V 160cv Mec.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer Evol. 2.0 Turbo',
            'year' => '1999',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer Evol. VI 2.0 Turbo 4p',
            'year' => '2001',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer Evol. X J. Easton 2.0 16V TB Int.',
            'year' => '2015',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer Evolut. IX MR 2.0 290cv TB-IC',
            'year' => '2007',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer Evolut. VII/ VIII/ IX 2.0 280cv T',
            'year' => '2007',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer Evolution X 2.0 16V 295cv TB Int.',
            'year' => '2015',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer GLX',
            'year' => '2000',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer GT 2.0 16V 160cv Aut.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer GT 2.0 16V 4X4 160cv Aut.',
            'year' => '2015',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer GT 2.0 16V Aut.(By Armura-Blind.)',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer GTi Mec',
            'year' => '1997',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer HL 2.0 16V 160cv Aut.',
            'year' => '2019',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer HL 2.0 16V Aut.(By Armura-Blind.)',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer HLE 2.0 16V 160cv Aut.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer HLE 2.0 16V Aut.(By Armura-Blind)',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer HL-T 2.0 16V 160cv Aut.',
            'year' => '2019',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer LS 1.8',
            'year' => '1995',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Lancer Sport Ralliart 2.0 16V TB Int. 5p',
            'year' => '2013',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Mirage ES',
            'year' => '1994',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Mirage GS 16V/ GLSi1.6',
            'year' => '1995',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Mirage LS',
            'year' => '1994',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER 2.0 16V 160cv Aut.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER 2.4 16V 170cv Aut.',
            'year' => '2011',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER 3.0/ GT 3.0 V6 Aut.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER COMFORT 2.0 16V Aut.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER GLS 2.0 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER HPE 2.0 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER HPE-S 3.0 V6 4x4 5p Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER HPE-S BLACK ED. 3.0 4x4 Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER PHEV Hybrid 2.0 16V 4x4 Aut.',
            'year' => '2015',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER SP. HPE BL.ED 4x2 2.0 Flex Aut',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER Sp. HPE BL.ED 4x4 2.0 Flex Aut',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER Sport GLS 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER Sport HPE 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'OUTLANDER Sport HPE 4x4 2.0 16V Flex Aut',
            'year' => '2022',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero DAKAR/HPE 3.5 4x4 Flex 5p Aut.',
            'year' => '2016',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero Evolution 4x4 3.5 V6',
            'year' => '1998',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.0 V6 2p Aut.',
            'year' => '2000',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.0 V6 2p Mec.',
            'year' => '2002',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.0 V6 4p Aut.',
            'year' => '2002',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.0 V6 4p Mec.',
            'year' => '2000',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.5 V6 2p Aut',
            'year' => '2004',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.5 V6 2p Mec.',
            'year' => '2000',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.5 V6 4p Aut.',
            'year' => '2004',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.5 V6 4p Mec.',
            'year' => '2000',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.5 V6 Top 2p Aut',
            'year' => '2000',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS 3.5 V6 Top 4p Aut',
            'year' => '2000',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS Full 3.8 V6 250cv 5p Aut.',
            'year' => '2009',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS HPE/HPE Full 3.8 233cv 3p Aut',
            'year' => '2007',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLS HPE/HPE Full 3.8 233cv 5p Aut',
            'year' => '2007',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLX 3.0 V6 4p Mec',
            'year' => '1999',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero GLZ 3.0 4x4 V6',
            'year' => '1994',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero HPE 3.5 4x4 Flex 5p Aut.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero HPE Full 3.8 V6 250cv 3p Aut.',
            'year' => '2018',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero HPE Full 3.8 V6 250cv 5p Aut.',
            'year' => '2020',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero iO Aut.',
            'year' => '2002',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero iO Mec.',
            'year' => '2001',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero iO SE 1.8 16V Aut.',
            'year' => '2002',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero iO SE 1.8 16V Mec.',
            'year' => '2002',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero Sport 3.0 4x2 V6 Mec./Aut.',
            'year' => '2003',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero Sport 3.0 4x4 V6 Mec./Aut.',
            'year' => '2006',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero Sport 3.5 V6 Flex 4x4 Aut.',
            'year' => '2011',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero Sport HPE 3.5 4x4 200cv Aut.',
            'year' => '2009',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero Sport SE 3.0 4x2 V6 177cv Aut.',
            'year' => '2003',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero Sport SE/ HPE 3.0 4x4 177cv Aut.',
            'year' => '2006',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero TR4 2.0 Blind. 16V 131cv 4x4 Aut.',
            'year' => '2009',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero TR4 2.0 Blind. 16V 131cv 4x4 Mec.',
            'year' => '2007',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero TR4 2.0 Flex 16V 4X2 Aut.',
            'year' => '2015',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero TR4 2.0 Flex 16V 4X2 Mec.',
            'year' => '2015',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero TR4 2.0/ 2.0 Flex 16V 4x4 Aut.',
            'year' => '2015',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero TR4 2.0/ 2.0 Flex 16V 4x4 Mec.',
            'year' => '2015',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Pajero TR4 GLS 2.0 Flex 16V 4x4 Mec.',
            'year' => '2012',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Space Wagon GLS 2.0',
            'year' => '1995',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Space Wagon GLS 2.4',
            'year' => '1995',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Space Wagon GLXi 2.4',
            'year' => '2004',
            'brand_id' => 58
        ]);
        VehiclesModel::create([
            'name' => 'Space Wagon GLXi 2.4',
            'year' => '1999',
            'brand_id' => 58
        ]);
        /*----------Nissan----------*/
        VehiclesModel::create([
            'name' => '350Z 3.5 V6 280cv/ 312cv 2p',
            'year' => '2009',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Altima GXE 2.4 16V',
            'year' => '1994',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Altima SE 2.4 16V',
            'year' => '1995',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'ALTIMA SL 2.5 16V 4p Aut.',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'GT-R 3.8 V6 BiTurbo Aut.',
            'year' => '2019',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Infinit 3.0',
            'year' => '1992',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS Active 1.6 16V Flex 5p Aut. (PCD)',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS Advance 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS Exclusive 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS Rio 2016 1.6 16V FlexStar 5p Aut.',
            'year' => '2017',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS S 1.6 16V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS S 1.6 16V FlexStar 5p Mec.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS S Direct 1.6 16V Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS Sense 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS Sense 1.6 16V Flex Mec.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS SL 1.6 16V FlexStar 5p Aut.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS Special Ed. 1.6 16V Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS Special Ed.1.6 16V Flex 5p Mec.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS SV 1.6 16V FlexStar 5p Aut.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS SV Limited 1.6 16V Flex 5p Aut.',
            'year' => '2017',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS UCL 1.6 16V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'KICKS XPlay 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'King-Cab SE 4x4 3.0 V6',
            'year' => '1995',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LEAF Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA 1.6 16V Flex Fuel 5p',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA 1.8 16V Flex Fuel Aut.',
            'year' => '2010',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA GRAND 1.8 16V Flex Fuel Aut.',
            'year' => '2010',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA GRAND 1.8 16V Flex Fuel Mec.',
            'year' => '2010',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA GRAND S 1.8 16V Flex Fuel Aut.',
            'year' => '2011',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA GRAND S 1.8 16V Flex Fuel Mec.',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA GRAND SL 1.8 16V Flex Fuel Aut.',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA GRAND SL 1.8 16V Flex Fuel Mec',
            'year' => '2010',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA NIGHT&DAY 1.6 16V Flex Fuel Mec.',
            'year' => '2012',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA S 1.6 16V Flex Fuel Mec.',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA S 1.8 16V Flex Fuel Aut.',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA SL 1.6 16V Flex Fuel 5p',
            'year' => '2012',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA SL 1.8 16V Flex Fuel Aut.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA X-GEAR 1.6 16V Flex Fuel Mec.',
            'year' => '2010',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA X-GEAR S 1.6 16V Flex Fuel',
            'year' => '2011',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA X-GEAR SL 1.6 16V Flex Fuel Mec.',
            'year' => '2012',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'LIVINA X-GEAR SL/X-GEAR 1.8 Flex F. Aut.',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH 1.0 12V Flex 5p',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH 1.0 12V FlexStart 5p',
            'year' => '2017',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH 1.0 16V Flex Fuel 5p',
            'year' => '2015',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH Rio2016 1.0 Flex Fuel 5p',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH Rio2016 1.6 Flex Fuel 5p',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH S 1.0 12V Flex 5p',
            'year' => '2019',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH S 1.0 16V Flex Fuel 5p',
            'year' => '2015',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH S 1.6 16V Flex Fuel 5p',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH S 1.6 16V FlexStart 5p',
            'year' => '2018',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SL 1.6 16V Flex Fuel 5p',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SL 1.6 16V FlexStart 5p Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SL 1.6 16V FlexStart 5p Mec.',
            'year' => '2017',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SR 1.6 16V Flex Fuel 5p',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SV 1.0 12V Flex 5p',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SV 1.0 16V Flex Fuel 5p',
            'year' => '2015',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SV 1.6 16V Flex Fuel',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SV 1.6 16V FlexStart 5p Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MARCH SV 1.6 16V FlexStart 5p Mec.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Maxima 30G/ GLE 3.0 V6 24V',
            'year' => '2000',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Maxima 30GV  Limited 3.0 V6 24V',
            'year' => '2002',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Maxima 30GV/30GV Aero/ GV 3.0 V6 24V',
            'year' => '2002',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Maxima 30J',
            'year' => '1997',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Maxima GXE 3.0',
            'year' => '1995',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Maxima SE 3.0 V6',
            'year' => '1994',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Micra 1.0',
            'year' => '1995',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'MURANO SE 3.5 V6 24V 231cv Aut',
            'year' => '2009',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'NX 2000',
            'year' => '1994',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'NX 2000 Targa 2.0',
            'year' => '1993',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Pathfinder LE 4.0 V6 24V 266cv Aut',
            'year' => '2008',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Pathfinder SE 3.3 V6 12V',
            'year' => '2001',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Pathfinder SE 4.0 V6 24V 266cv Aut.',
            'year' => '2008',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Pathfinder SE 4x4 3.0 12V Aut./Mec.',
            'year' => '1996',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Pathfinder SE Luxo 3.3 V6 12V',
            'year' => '2001',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Pathfinder SE Luxo 3.5 V6 24V 243cv',
            'year' => '2005',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Pathfinder SE Titanium 3.3 V6 12V',
            'year' => '2000',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Pathfinder XE 4x4',
            'year' => '1995',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Primera GXE 2.0 16V',
            'year' => '2000',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Quest GXE/ GLE/ SER',
            'year' => '1996',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Quest XE 3.0 V6',
            'year' => '1995',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra 2.0/ 2.0 Flex Fuel 16V Aut.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra 2.0/ 2.0 Flex Fuel 16V Mec.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra GLE',
            'year' => '1995',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra GSX/ EX',
            'year' => '1996',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra GXE/ SER',
            'year' => '2007',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra S 2.0 FlexStart 16V Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra S 2.0/ 2.0 Flex Fuel 16V Aut.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra S 2.0/ 2.0 Flex Fuel 16V Mec.',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra SE 2.0 Flex 16V Aut.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra SL 2.0 FlexStart 16V Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra SL 2.0/ 2.0 Flex Fuel 16V Aut.',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra SR 2.0 Flex Fuel 16V Aut.',
            'year' => '2012',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra SR 2.0 Flex Fuel 16V Mec.',
            'year' => '2012',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra SV 2.0 FlexStart 16V Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Sentra UNIQUE 2.0 Flex Fuel 16V Aut.',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'Stanza XE 2.4 12V',
            'year' => '1993',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'SX 240 2.4',
            'year' => '1993',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'TIIDA S 1.8/1.8 Flex 16V  Mec.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'TIIDA S 1.8/1.8 Flex 16V Aut.',
            'year' => '2009',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'TIIDA Sedan 1.8 16V Flex Fuel 4p',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'TIIDA Sedan 1.8 16V Flex Fuel 4p Aut.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'TIIDA SL 1.8/1.8 Flex 16V  Mec.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'TIIDA SL 1.8/1.8 Flex 16V Aut.',
            'year' => '2013',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA 1.0 12V FlexStart 4p Mec.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA Advance 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA Exclusive 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA S 1.0 12V FlexStart 4p Mec.',
            'year' => '2018',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA S 1.6 16V Flex Fuel 4p Mec.',
            'year' => '2014',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA S 1.6 16V FlexStart 4p Mec.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA Sense 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA Sense 1.6 16V Flex Mec.',
            'year' => '2022',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA SL 1.6 16V Flex Fuel 4p Mec.',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA SL 1.6 16V FlexStart 4p Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA SL 1.6 16V FlexStart 4p Mec.',
            'year' => '2019',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA SL Direct 1.6 16V Flex  Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA Special Ed. 1.6 16V FlexStart Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA SV 1.6 16V Flex Fuel 4p Mec.',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA SV 1.6 16V FlexStart 4p Aut.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA SV 1.6 16V FlexStart 4p Mec.',
            'year' => '2020',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA UNIQUE 1.6 16V Flex 4p Mec.',
            'year' => '2016',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA UNIQUE 1.6 16V FlexStart 4p Aut.',
            'year' => '2018',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA V-DRIVE 1.0  12V Flex Mec.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA V-DRIVE 1.6 16V Flex Mec.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA V-DRIVE Esp.Ed. 1.6 16v Flex Aut.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA V-DRIVE PLUS 1.6 16V Flex Aut.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'VERSA V-DRIVE Premium 1.6 16v Flex Aut.',
            'year' => '2021',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'X-TRAIL GX 2.5 16V 180cv 5p',
            'year' => '2008',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'X-TRAIL LE 2.0 16V 138cv Aut.',
            'year' => '2009',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'X-TRAIL SE 2.0 16V 138cv Aut.',
            'year' => '2009',
            'brand_id' => 59
        ]);
        VehiclesModel::create([
            'name' => 'ZX 300 3.0 BI-Turbo',
            'year' => '1994',
            'brand_id' => 59
        ]);
        /*----------Peugeot----------*/
        VehiclesModel::create([
            'name' => '106 KID 1.0',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 Passion 1.0 3p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 Passion 1.0 5p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 Quiksilver 1.0 3p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 Selection 1.0 3p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 Selection 1.0 5p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 Soleil 1.0 3p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 Soleil 1.0 5p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 XN 3p e 5p',
            'year' => '1996',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '106 XT',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Allure 1.6 Flex 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Allure 1.6 Flex 16V 5p Mec.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Allure Bus. 1.6 Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Allure Essencial 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Allure Pack 1.6 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Allure Pack Bus. 1.6 Flex Aut.',
            'year' => '2020',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Crossway 1.6 Flex 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Griffe 1.6 Flex 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Griffe 1.6 Flex 16V 5p Mec.',
            'year' => '2017',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Griffe 1.6 Turbo Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Griffe 1.6 Turbo Flex 16V 5p Mec.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 SKYWALKER 1.6 Turbo Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Style 1.6 Flex 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '2008 Style 1.6 Turbo Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '205 CJ Cabriolet',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '205 CTi Cabriolet 1.4',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '205 GTi 1.4',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '205 XSi/ Junior 1.4 3p',
            'year' => '1998',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Allure 1.6 Flex 16V 3p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Allure 1.6 Flex 16V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Automatic (feline)1.6 Flex 16V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 CC 1.6 16V 2p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Feline 1.4/ 1.4 Flex 8V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Holiday 1.4 8V 75cv 3p',
            'year' => '2006',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Holiday 1.4 8V 75cv 5p',
            'year' => '2006',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Holiday 1.6 Flex 16V 3p',
            'year' => '2006',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Holiday 1.6 Flex 16V 5p',
            'year' => '2006',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Moonlight 1.4 Flex 8V 3p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Moonlight 1.4 Flex 8V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Passion 1.6',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Passion 1.6 16v 110cv 5p',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Presence 1.4/ 1.4 Flex 8V 3p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Presence 1.4/ 1.4 Flex 8V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Rallye 1.6',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Rallye 1.6/ 1.6 Flex 16v 110cv 3p',
            'year' => '2006',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Select./Presence 1.6/1.6 Flex 16V 5p',
            'year' => '2007',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Selection 1.6 16V 110cv 3p',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Selection/ Sensation 1.0 16v 3p',
            'year' => '2006',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Selection/ Sensation 1.0 16v 5p',
            'year' => '2006',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Sensation 1.4 Flex 8V 3p',
            'year' => '2010',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Sensation 1.4 Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Soleil 1.0 16v 5p',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Soleil 1.6 16v 110cv 5p',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Soleil 1.6 3p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Soleil 1.6 5p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Soleil/Quiksilver 1.0 16V 3p',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Soleil/Quiksilver 1.6 16V 110cv 3p',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 SW Automatic (feline)1.6 Flex 16V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 SW ESCAPADE 1.6 16V Flex 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 SW Feline 1.6/ 1.6 Flex 16V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 SW Moonlight 1.4 Flex 8V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 SW Presence 1.4/ 1.4 Flex 8V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 SW Presence 1.6/1.6 Flex 16V 5p',
            'year' => '2007',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Techno 1.0 16V 70cv 5p',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '206 Techno/ Feline 1.6/ 1.6 Flex 16V 5p',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 Active 1.4 Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 Blue Lion 1.4 Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 QUIKSILVER 1.4 Flex 8V 3p',
            'year' => '2011',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 QUIKSILVER 1.4 Flex 8V 5p',
            'year' => '2011',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 QUIKSILVER 1.6 Flex 16V 5p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 Sed. Passion XR Sport 1.4 Flex 8V 4p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 Sedan Active 1.4 Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 Sedan Allure 1.4 Flex 8v 4p',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 Sedan Passion XR 1.4 Flex 8V 4p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 Sedan Passion XS 1.6 Flex 16V 4p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 Sedan Passion XS 1.6 Flex 16V 4p Aut',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 SW ESCAPADE 1.6 16V Flex 5p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 SW XR 1.4 Flex 8V 5p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 SW XR Sport 1.4 Flex 8V 5p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 SW XS 1.6 Flex 16V 5p Aut.',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 X-Line 1.4 Flex 8V 3p',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 X-Line 1.4 Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 XR 1.4 Flex 8V 3p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 XR 1.4 Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 XR Sport 1.4 Flex 8V 3p',
            'year' => '2010',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 XR Sport 1.4 Flex 8V 5p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 XS 1.6 Flex 16V 3p',
            'year' => '2010',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 XS 1.6 Flex 16V 5p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '207 XS 1.6 Flex 16V 5p Aut.',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Active 1.2 Flex 12V 5p Mec.',
            'year' => '2020',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Active 1.6 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Active Pack 1.2 Flex 12V 5p Mec.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Active Pack 1.6 Flex 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Active/Active Pack 1.5 Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Allure 1.2 Flex 12V 5p Mec.',
            'year' => '2020',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Allure 1.5 Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Allure 1.6 Flex 16V 5p Aut.',
            'year' => '2018',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Allure inconcert 1.5 Flex 8V 5p Mec.',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Allure inconcert 1.6 Flex 16V 5p Aut',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Griffe 1.6 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Griffe 1.6 Flex 16V 5p Mec.',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Griffe Bus. 1.6 Flex 5p Aut.',
            'year' => '2020',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 GT 1.6 THP Flex 16V 5p Mec.',
            'year' => '2020',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Inconcert 1.6 Flex 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Like 1.0 Flex 6V 5p Mec.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Like 1.6 Flex 16V 5p Mec.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Like Essencial 1.6 Flex 16V 5p Mec.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Premier 1.6 Flex 16V 5p',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Sport 1.6 Flex 16V 5p Mec.',
            'year' => '2018',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 Style 1.0 Flex 6V 5p Mec.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '208 URBANTECH1.6 Flex 16V 5p Aut.',
            'year' => '2018',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '3008 Allure 1.6 Turbo 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '3008 Griffe 1.6 Turbo 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '3008 Griffe Pack 1.6 Turbo 16V 5p Aut.',
            'year' => '2020',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '3008 GT Pack 1.6 Turbo 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '3008 Roland Garros 1.6 Turbo 16V 5p',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Break Passion 1.8 16V',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Cabriolet 1.8/ Mi 16V',
            'year' => '1998',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Cabriolet 2.0',
            'year' => '2000',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 GTi 2.0 16V',
            'year' => '2000',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Passion 1.8 16V',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Passion Sedan 1.8 16V',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Rallye 1.8 16V',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 S16 2.0 3p',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Selection Hatch 1.8 16V',
            'year' => '2000',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Selection Sedan 1.8 16V',
            'year' => '2000',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Si/ SL 1.8',
            'year' => '1998',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Soleil 1.8 16V  4p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Soleil 1.8 16V 2p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Soleil Break 1.8 16V 5p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 Soleil Hatch 1.8 16V 5p',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 SR',
            'year' => '1997',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 XN 1.8',
            'year' => '1998',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 XR 1.8 / XR Break 1.8 16V',
            'year' => '1998',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 XS 1.6 3p/ ST 1.8i 4p',
            'year' => '1997',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '306 XSi 2.0 3/5p',
            'year' => '1996',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 CC 2.0 16V 138cv 2p Mec.',
            'year' => '2005',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 CC 2.0 16V 2p Aut.',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Feline 2.0/2.0 Flex 16V 5p Mec.',
            'year' => '2010',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Feline/Griff/Premi. 2.0 Flex 5p Aut.',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 MILLESIM200 1.6 Flex 16V 5p',
            'year' => '2011',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Passion 1.6 16V 110cv 5p',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Passion 2.0 16V 138cv 5p',
            'year' => '2003',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Presence 2.0 Flex 16V 5p Aut.',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Rallye 1.6 16V 110cv 5p',
            'year' => '2003',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Rallye 2.0 16V 138cv 5p',
            'year' => '2005',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Rallye 2.0 16V 138cv 5p Aut.',
            'year' => '2006',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Sed. Feline 2.0/2.0 Flex 16V 4p Mec.',
            'year' => '2010',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Sed. Presence 1.6 Flex 16V 4p',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Sed. Presence 2.0 Flex 16V 5p Aut.',
            'year' => '2011',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Sed.Feline/Griff 2.0/2.0 Flex 4p Aut',
            'year' => '2011',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 Soleil/ Presence 1.6/1.6 Flex 16V 5p',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 SW 2.0 16V 138cv 5p Mec.',
            'year' => '2005',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 SW 2.0 16V 5p Aut.',
            'year' => '2007',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 SW Allure 2.0 16V 5p Aut.',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 SW Allure 2.0 16V 5p Mec.',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '307 SW Feline 2.0 16V 5p Aut.',
            'year' => '2008',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Active 1.6 Flex 16V 5p mec.',
            'year' => '2015',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Allure 1.6 Flex 16V 5p Mec.',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Allure 1.6 Turbo Flex 16V 5p Aut.',
            'year' => '2017',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Allure 2.0 Flex 16V 5p Aut.',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Allure 2.0 Flex 16V 5p Mec.',
            'year' => '2015',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Bus. Pro 1.6 TB Flex 5p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Business 1.6 Turbo Flex 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 CC 1.6 Turbo 16V 2p Aut.',
            'year' => '2015',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 CC Roland Garros 1.6 Turbo16V 2p Aut',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Feline 2.0 Flex 16V 5p Aut.',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Feline/Griffe 1.6 Turbo 16V 5p Aut.',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Griffe 1.6 Turbo Flex 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 QUIKSILVER 1.6 Flex 16V 5p Mec.',
            'year' => '2015',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Roland Garros 1.6 TB Flex 16V 5p Aut',
            'year' => '2018',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '308 Roland Garros 1.6 Turbo 16V 5P',
            'year' => '2015',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '405 GLi/ GL 1.6',
            'year' => '1996',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '405 GRi 1.8',
            'year' => '1996',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '405 Mi 2.0 16V',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '405 SRi 1.8',
            'year' => '1996',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '405 SRi 2.0',
            'year' => '1999',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '405 SRi Break',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '405 STi',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Break 2.0 16V',
            'year' => '1999',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Break 3.0 V6 24V',
            'year' => '1999',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Break ST 2.0',
            'year' => '1999',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Cupê 3.0 24V Aut.',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Cupê 3.0 24V Mec.',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Familiale 2.0 16V Aut.',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Familiale 2.0 16V Mec.',
            'year' => '2003',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Sedan 2.0 Aut.',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Sedan 2.0 Mec.',
            'year' => '2003',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 Sedan 3.0 V6 24V',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 ST 2.0 16V  Mec',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 ST/ SVA 2.0 16V Aut',
            'year' => '2001',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 SV 2.0 16V',
            'year' => '2000',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 SVA 3.0 24V',
            'year' => '2000',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '406 SVE 3.0 24V',
            'year' => '1999',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 Sed. Allure 2.0 16V 4p Aut.',
            'year' => '2009',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 Sed. Feline 3.0 V6 211cv 4p Aut.',
            'year' => '2009',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 Sed. Griffe 3.0 V6 211cv 4p Aut.',
            'year' => '2009',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 Sedan 2.0 16V  138cv 4p Aut.',
            'year' => '2007',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 Sedan 3.0 V6 211cv 4p Aut.',
            'year' => '2007',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 SW 2.0 16V 5p Aut.',
            'year' => '2007',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 SW 3.0 V6 211cv 5p Aut.',
            'year' => '2007',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 SW Allure 2.0 16V 5p Aut.',
            'year' => '2009',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '407 SW Feline 3.0 V6 211cv 5p Aut.',
            'year' => '2009',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sed. Bus. Pro 1.6 TB Flex Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sed. Bus./Allure 1.6 TB Flex 16V Aut',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sed. R.Garros 1.6 TB Flex 16V 4p Aut',
            'year' => '2018',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sedan Allure 2.0 Flex 16V 4p Aut.',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sedan Allure 2.0 Flex 16V 4p Mec.',
            'year' => '2015',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sedan Feline 2.0 Flex 16V 4p Aut.',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sedan Griffe 1.6 TB Flex 16V 4p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sedan Griffe 1.6 Turbo 16V 4p Aut.',
            'year' => '2016',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sedan Griffe 2.0 Flex 16V 4p Aut.',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '408 Sedan Limited 2.0 Flex 16V 4p Aut.',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '5008 Griffe 1.6 Turbo 16V 5p Aut.',
            'year' => '2019',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '5008 Griffe Pack 1.6 Turbo 16V 5p Aut.',
            'year' => '2020',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '505 SR/ SRi/ SRX',
            'year' => '1993',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '508 THP 1.6 Turbo 16V 4p Aut.',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '605 SRi 3.0',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '605 SRi/ SLi 2.0',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '605 SV 3.0 Aut.',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '605 SV-3 3.0 V6 24V',
            'year' => '2000',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '607 Sedan 3.0 V6',
            'year' => '2005',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '806 ST Turbo',
            'year' => '2000',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '806 SV 2.0 Turbo',
            'year' => '1995',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => '807 2.0 16V 138cv 5p Aut.',
            'year' => '2004',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'e-208 GT 5p Aut. (Elétrico)',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'E-Expert Cargo 136cv (Elétrico)',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'HOGGAR Active 1.4 Flex 8V 2p',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'HOGGAR Allure 1.4 Flex 8V 2p',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'HOGGAR ESCAPADE 1.6 Flex 16V 2p',
            'year' => '2012',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'HOGGAR X-Line 1.4 Flex 8V 2p',
            'year' => '2014',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'HOGGAR XR 1.4 Flex 8V 2p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'Partner  VAN 1.6  Flex 16V  5p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'Partner  VAN ESCAPADE 1.6 Flex 16V 5p',
            'year' => '2013',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'Partner Furgão 1.6 16V/ 1.6 16V Flex 3p',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'Partner Furgão 1.8 3p',
            'year' => '2003',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'Partner Rapid Busin. Pack 1.4 Flex Mec.',
            'year' => '2022',
            'brand_id' => 60
        ]);
        VehiclesModel::create([
            'name' => 'RCZ 1.6 Turbo 16V 2p Aut.',
            'year' => '2015',
            'brand_id' => 60
        ]);
        /*----------Plymouth----------*/
        VehiclesModel::create([
            'name' => 'Gran Voyager LE 2.5',
            'year' => '1995',
            'brand_id' => 61
        ]);
        VehiclesModel::create([
            'name' => 'Sundance 2.5',
            'year' => '1993',
            'brand_id' => 61
        ]);
        /*----------Pontiac----------*/
        VehiclesModel::create([
            'name' => 'Trans-AM 5.7 V8',
            'year' => '1995',
            'brand_id' => 62
        ]);
        VehiclesModel::create([
            'name' => 'Trans-Sport SE 3.1',
            'year' => '1992',
            'brand_id' => 62
        ]);
        /*----------Porsche----------*/
        VehiclesModel::create([
            'name' => '718 Boxster 2.0 300cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Boxster 25Anos 4.0 400cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Boxster GTS 2.5 365cv',
            'year' => '2021',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Boxster GTS 4.0 400cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Boxster S 2.5 350cv',
            'year' => '2021',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Boxster Spyder 4.0 420cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Boxster T 2.0 300cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Cayman 2.0 300cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Cayman GT4 4.0 420cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Cayman GTS 2.5 365cv',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Cayman GTS 4.0 400cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Cayman S 2.5 350cv',
            'year' => '2021',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '718 Cayman T 2.0 300cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 4 GTS Targa 3.0 24V (991)',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4 Cabriolet 3.0 (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4 Coupe 3.0 (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4 GTS Cabri. 3.0 24V (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4 GTS Coupe 3.0 24V (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4 GTS Coupe 3.8 24V (991)',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4 GTS Targa 3.8 24V (991)',
            'year' => '2017',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4S Cabriolet 3.0 (991/992)',
            'year' => '2021',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4S Cabriolet-4 3.6/3.8',
            'year' => '2015',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4S Coupe 3.0 (991/992)',
            'year' => '2021',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera 4S Coupe-4 3.6/3.8',
            'year' => '2015',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Cabriolet 3.0 (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Cabriolet 3.4/ 3.6 Mec.',
            'year' => '2000',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Cabriolet 3.4/ 3.6 Tiptronic',
            'year' => '2001',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Cabriolet-4 3.4 Mec.',
            'year' => '1997',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Cabriolet-4 3.4 Tiptronic',
            'year' => '1997',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Coupe',
            'year' => '1997',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Coupe 3.0 (991/992)',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Coupe Black Edi. 3.6/3.4 24V',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Coupe GTS 3.8 24V 408cv',
            'year' => '2012',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Coupe Tiptronic',
            'year' => '1997',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Coupe-4 3.4/ 3.6',
            'year' => '2008',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Coupe-4 3.4/ 3.6 Tiptronic',
            'year' => '2009',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Evo Cabriolet',
            'year' => '2004',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Evo Cabriolet-4',
            'year' => '2004',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Evo Coupe',
            'year' => '2008',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera Evo Coupe-4',
            'year' => '2004',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera GTS Cabriolet 3.0 (991)',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera GTS Cabriolet 3.8 24V (991)',
            'year' => '2015',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera GTS Coupe 3.0 (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera GTS Coupe 3.8 24V (991)',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera S 50th Coupe 3.8 24V(991)',
            'year' => '2014',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera S Cabriolet 3.0 (991/992)',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera S Cabriolet 3.8 24V',
            'year' => '2012',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera S Cabriolet 3.8 24V (991)',
            'year' => '2015',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera S Coupe 3.0 (991/992)',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera S Coupe 3.8 24V',
            'year' => '2012',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera S Coupe 3.8 24V (991)',
            'year' => '2015',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Carrera T 3.0 370cv',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 GT2 RS 3.8 V6 700cv (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 GT3 4.0 500cv (991)',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 GT3 RS',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 GT3/ GT2 Street',
            'year' => '2015',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 SPEEDSTER 4.0 510CV',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Targa 3.6',
            'year' => '2005',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Targa 4 3.0 370cv (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Targa 4 GTS 3.0',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Targa 4S',
            'year' => '2015',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Targa 4S 3.0 420cv (991)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Turbo Cabriolet 3.6/3.8',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Turbo Coupe 3.6/3.8',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Turbo S Cabriolet 3.6/3.8 24V',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '911 Turbo S Coupe 3.6/3.8 24V (991/992)',
            'year' => '2019',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '928 GTS 5.4 32V',
            'year' => '1995',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '968 Cabriolet 3.0',
            'year' => '1995',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => '968 Coupe 3.0 16V',
            'year' => '1995',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster  2.9 255cv',
            'year' => '2013',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster 2.7 265cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster GTS 3.4 330cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster Mec.',
            'year' => '2009',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster S',
            'year' => '2009',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster S 3.4 310cv',
            'year' => '2013',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster S 3.4 315/319cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster S Tiptronic',
            'year' => '2009',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster Spyder 3.4 320cv',
            'year' => '2011',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster Spyder 3.8 375cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Boxster Tiptronic',
            'year' => '2009',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne 3.0 Turbo V6 340CV',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Coupe 3.0 TurboV6 340cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Coupe E-Hybrid 3.0 V6 462cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Coupe Turbo 4.0 V8 550cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Coupe Turbo S E-Hybrid 4.0',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne E-Hybrid 3.0 V6 462cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne GTS 3.6 Bi-Turbo 440cv',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne GTS 4.8 405/420cv',
            'year' => '2014',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Platinum Ed. 3.6',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne S 2.9 Bi-Turbo V6 440cv',
            'year' => '2021',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne S 3.6 Bi-Turbo 420cv',
            'year' => '2017',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne S 4.5/4.8',
            'year' => '2014',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne S E-Hybrid 3.0 V6 416cv',
            'year' => '2017',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne S Platinum Ed.E-Hybrid 3.0',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Turbo 4.0 V8 550cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Turbo 4.5/4.8',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Turbo GT 4.0 V8',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Turbo S 4.5/4.8 32V',
            'year' => '2017',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne Turbo S E-Hybrid 4.0 V8 680cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayenne V6 3.2/3.6 24V',
            'year' => '2017',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayman 2.7/ 2.9',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayman GT4 3.8 385cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayman GTS 3.4 340cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayman R 3.4 330cv',
            'year' => '2012',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Cayman S 3.4',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Macan 2.0 Turbo',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Macan GTS 2.9 Bi-Turbo 380cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Macan GTS 3.0 Bi-Turbo 360cv',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Macan S 2.9/3.0 Bi-Turbo',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Macan Turbo 3.6 Bi-Turbo 400cv',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'MACAN Turbo Performnce 3.6 Bi-TB V6',
            'year' => '2017',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 3.0 330cv',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 3.6 V6 300cv/310cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4 3.0 330cv',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4 E-Hybrid 2.9 462cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4 E-Hybrid Sport Tur. 2.9 462cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4 E-Hybrid. Executive 2.9 462cv',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4 Executive 3.0 330cv',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4 Sport Turismo 3.0 330cv',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4S 2.9 440cv',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4S 4.8 400cv',
            'year' => '2013',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4S E-Hybrid 2.9 560cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4S Executive 2.9 440cv',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera 4S Sport Turismo 2.9 440cv',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera Edition 3.6 v6 310cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera GT-S 4.8',
            'year' => '2015',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera S 3.0 Bi-Turbo 420cv',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera S 4.8 400cv',
            'year' => '2013',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera TB S E-Hybrid Sport Turis. 4.0',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera Turbo 4.0 550cv',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera Turbo 4.8 500cv/520cv',
            'year' => '2017',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera Turbo Executive 4.0 550cv',
            'year' => '2018',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera Turbo S 4.8',
            'year' => '2016',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera Turbo S E-Hybrid 4.0 680cv',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera Turbo S E-Hybrid Exec. 4.0',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Panamera Turbo Sport Turismo 4.0',
            'year' => '2020',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Taycan',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Taycan 4 Cross Turismo',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Taycan 4S',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Taycan GTS',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Taycan Turbo',
            'year' => '2022',
            'brand_id' => 63
        ]);
        VehiclesModel::create([
            'name' => 'Taycan Turbo S',
            'year' => '2022',
            'brand_id' => 63
        ]);
        /*----------RAM----------*/
        VehiclesModel::create([
            'name' => '1500 REBEL 5.7 HEMI CD V8 4x4 Aut.',
            'year' => '2022',
            'brand_id' => 64
        ]);
        /*----------Relly----------*/
        VehiclesModel::create([
            'name' => 'LINK 1.3 16V 5p',
            'year' => '2014',
            'brand_id' => 65
        ]);
        VehiclesModel::create([
            'name' => 'PICK-UP Q22B CS 1.0 2p',
            'year' => '2014',
            'brand_id' => 65
        ]);
        VehiclesModel::create([
            'name' => 'PICK-UP Q22D CS 1.0 2p',
            'year' => '2014',
            'brand_id' => 65
        ]);
        VehiclesModel::create([
            'name' => 'PICK-UP Q22E CD 1.0 4p',
            'year' => '2015',
            'brand_id' => 65
        ]);
        VehiclesModel::create([
            'name' => 'VAN Q22 1.0 5p',
            'year' => '2014',
            'brand_id' => 65
        ]);
        /*----------Renault----------*/
        VehiclesModel::create([
            'name' => '19 16S/ RT 16V',
            'year' => '1996',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => '19 RN',
            'year' => '1998',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => '19 RT 1.8/ 1.8i',
            'year' => '1999',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => '19 RT 1.8/ 1.8i Conv.',
            'year' => '1995',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => '21 GTX 2.0',
            'year' => '1994',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => '21 Nevada GTX 2.2',
            'year' => '1994',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => '21 Nevada TXE 2.2',
            'year' => '1994',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => '21 TXE/ TXi 2.2',
            'year' => '1994',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Iconic 1.3 TB 16V Flex 5p Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Intense 1.3 TB 16V Flex 5p Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Intense 1.6 16V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Intense 2.0 16V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Intense Bose 1.6 16V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Intense Bose 2.0 16V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Life 1.6 16V Flex 5p Aut.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Zen 1.3 TB 16V Flex 5p Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Zen 1.6 16V Flex 5p Aut.',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'CAPTUR Zen 1.6 16V Flex 5p Mec.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Auth. /AIR Hi-Flex 1.6 16V 5p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Authentique 1.0 8V 3p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Authentique 1.0/1.0 Hi-Power 16V 3p',
            'year' => '2016',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Authentique Hi-Flex 1.0 16V 3p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Authentique Hi-Flex 1.0 16V 5p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Authentique Hi-Flex 1.6 16V 3p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Campus Hi-Flex 1.0 16V 3p',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Campus Hi-Flex 1.0 16V 5p',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Dynamique 1.0/ 1.0 Hi-Power 16V 3p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Dynamique 1.6 16V 110cv 3p',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Dynamique Hi-Flex 1.6 16V 3p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Expression 1.0 8V 60cv 3p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Expression 1.0/1.0 Hi-Power 16V 3p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Expression Hi-Flex 1.0 16V 3p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Expression Hi-Flex 1.0 16V 5p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio GetUp Hi-Flex 1.0 16V 3p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio GetUp Hi-Flex 1.0 16V 5p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Hi-Flex 1.0 16V 3p',
            'year' => '2012',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Hi-Flex 1.0 16V 5p',
            'year' => '2012',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Hi-Flex 1.6 16V 3p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Hi-Flex/ Expres. Hi-Flex 1.6 16V 5p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Privilège Hi-Flex 1.0 16V 5p',
            'year' => '2007',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Privilège Hi-Flex 1.6 16V 5p',
            'year' => '2007',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RL / Yahoo/ Authent. 1.0 8V 5p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RL 1.6 3p/5p',
            'year' => '2000',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RL Alizé/ Authent. 1.6 16V 110cv 5p',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RL/ JP/Auth.1.0/1.0 Hi-Power 16V 5p',
            'year' => '2016',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RN 1.6 3p (importado)',
            'year' => '1998',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RN 1.6 5p',
            'year' => '2002',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RN/ Expression 1.0 5p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RN/ Expression 1.6 16V 5p',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RN/Alizé/Expr./1.0 Hi-Power 16V 5p',
            'year' => '2016',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RT 1.6 5p',
            'year' => '2002',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RT/ Privil. 1.0/1.0 Hi-Power 16V 5p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio RT/ Privilège 1.6 16V 5p',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed RT/ Privilège/ Botic 1.6 16V 4p',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed. Alizé 1.6/ 1.6 Hi-Flex 16v 4p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed. Authentique Hi-Flex 1.0 16V 4p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed. Authentique Hi-Flex 1.6 16V 4p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed. Expression Hi-Flex 1.0 16V 4p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed. Hi-Flex/Exp.Hi-Flex 1.6 16V 4p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed. Privilège Hi-Flex 1.0 16V 4p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed. Privilège Hi-Flex 1.6 16V 4p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed.RL/Auth.1.0/1.0 Hi-Power 16V 4p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed.RN/Alizé/Botic./Exp.1.0 Hi-Pow.',
            'year' => '2007',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sed.RT/Privil.1.0/1.0 Hi-Pow.16V 4p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sedan Authentique 1.6 16V 110cv 4p',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sedan Egeus Hi-Flex 1.0 16V 4p',
            'year' => '2007',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sedan Egeus Hi-Flex 1.6 16V 4p',
            'year' => '2007',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Sedan RN/ Expression 1.6 16V 4p',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio SI 1.6 16V 4p',
            'year' => '2003',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Clio Tech Run 1.0 16v 70cv 5p',
            'year' => '2003',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER 1.6 Hi-Flex 16V Mec.',
            'year' => '2016',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Authent. 1.6 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER DAKAR 4x2 1.6 Hi-Flex 16V Mec.',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER DAKAR 4x2 2.0 Hi-Flex 16V Aut.',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER DAKAR 4x4 2.0 Hi-Flex 16V Mec.',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Dynamique 1.6 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Dynamique 1.6 Flex 16V Mec.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Dynamique 2.0 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Dynamique 2.0 Hi-Flex 16V Mec.',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Dynamique 4x4 2.0 Hi-Flex 16V Mec',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Expression 1.6 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Expression 1.6 Hi-Flex 16V Mec.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER GoPro 1.6 16V Flex Aut.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER GoPro 4x4 2.0 Hi-Flex 16V Mec.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Iconic 1.3 TB 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Iconic 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Intense 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER OROCH Dyna. 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER OROCH Dyna. 2.0 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER OROCH Dyna. 2.0 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER OROCH Express 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER OROCH Expression 1.6 Flex 16V Mec',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER OROCH Outsider 1.3Tce Flex Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER OUTDOOR 1.6 Hi-Flex 16V Mec.',
            'year' => '2015',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER TECHROAD 1.6 Hi-Flex 16V Mec.',
            'year' => '2015',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER TECHROAD 2.0 Hi-Flex 16V Aut.',
            'year' => '2015',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER TECHROAD 2.0 Hi-Flex 16V Mec.',
            'year' => '2015',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER TECHROAD 4X4 2.0 16V Mec.',
            'year' => '2015',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Zen 1.6 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'DUSTER Zen 1.6 16V Flex Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Express 1.6/ RL 1.6',
            'year' => '2000',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'FLUENCE Sed. Dyn. Plus 2.0 16V FLEX Aut.',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'FLUENCE Sed. Dynamique 2.0 16V FLEX Aut.',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'FLUENCE Sed. Dynamique 2.0 16V FLEX Mec.',
            'year' => '2016',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'FLUENCE Sedan Expres. 1.6 16V FLEX Mec.',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'FLUENCE Sedan GT Line 2.0 Flex Aut.',
            'year' => '2016',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'FLUENCE Sedan GT SPORT',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'FLUENCE Sedan Privilège 2.0 16V FLEX Aut',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo Authentique 1.6 16V 95cv',
            'year' => '2007',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo Authentique Hi-Flex 1.6 16V',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo Expres.SPORTWAY 1.6/1.6 Hi-Flex',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo Express Hi-Flex 1.6 16V',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo Express RL/ Express 1.0 16V/8V',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo Express RL/ Express 1.6 16V/8V',
            'year' => '2007',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo Expression Hi-Flex 1.6 16V 5p',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo RL 1.0 8V',
            'year' => '2002',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo RL 1.6 8V',
            'year' => '2003',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo RL/ Yahoo 1.0 16V 70cv',
            'year' => '2004',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo RN 1.0 8V',
            'year' => '2002',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo RN/ Yahoo/ Expression 1.0 16V 5p',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo RN/Expression 1.6 16V/1.6 8V 5p',
            'year' => '2007',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo RT 1.0 16V 70cv 5p',
            'year' => '2004',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo RT 1.6 16V/ 8V 90cv 5p',
            'year' => '2004',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kangoo Z.E. Maxi Furgão (Elétrico)',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Kwid ConnecTV 1.0 Flex 12V Mec.',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'KWID Intense 1.0 Flex 12V 5p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'KWID Life 1.0 Flex 12V 5p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'KWID OUTSIDER 1.0 Flex 12V 5p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'KWID Zen 1.0 Flex 12V 5p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Laguna Grand Tour Privilège 3.0 V6 210cv',
            'year' => '2003',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Laguna Nevada RT/ RXE 2.0s 16V',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Laguna Privilège 3.0 V6 24V 210cv 5p',
            'year' => '2003',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Laguna RT 2.0',
            'year' => '1998',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Laguna RXE 2.0s 8V/16V',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Laguna V6',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Authentique Flex 1.0 12V 4p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Authentique Hi-Flex 1.0 16V 4p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Authentique Hi-Flex 1.6 8V 4p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Authentique Plus Hi-F. 1.0 16V 4p',
            'year' => '2016',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Avantage Hi-Flex 1.0 16V 4p',
            'year' => '2012',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Dyna. EasyR Hi-Flex 1.6 8V',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Dynamique EasyR Flex 1.6 16V 4p',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Dynamique Flex 1.6 16V 4p',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Dynamique Hi-Flex 1.6 8V 4p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Exclusive EasyR Hi-Flex 1.6 8V 4p',
            'year' => '2015',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Exclusive Hi-Flex 1.6 8V 4p',
            'year' => '2015',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expres. Avantage Flex 1.0 12v 4p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expres. Avantage Flex 1.6 16V 4p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expres. EasyR Hi-Flex 1.6 8V',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expres. P.Avant. Hi-Flex 1.6 8V 4p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expres./Exp. UP Hi-Flex 1.0 16V 4p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expression Easy R Flex 1.6 16V 4p',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expression Flex 1.0 12V 4p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expression Flex 1.6 16V 4p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expression Hi-Flex 1.6 16V 4p Aut',
            'year' => '2013',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Expression Hi-Flex 1.6 8V 4p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Iconic Flex 1.6 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Intense Flex 1.6 16V 4p Aut.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Life Flex 1.0 12V 4p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Privilège Hi-Flex 1.6 16V 4p',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Privilège Hi-Flex 1.6 8V 4p',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Zen Flex 1.0 12V 4p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Zen Flex 1.6 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'LOGAN Zen Flex 1.6 16V 4p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Coupé Cabriolet Dynamique 2.0 Aut',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane G. Tour EXTREME 2.0 16V Aut.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane G. Tour EXTREME 2.0 16V Mec.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane G. Tour EXTREME Hi-Flex 1.6 Mec.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Grand Tour Dynam. Hi-Flex 1.6 16V',
            'year' => '2013',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Grand Tour Dynamique 2.0 16V Aut.',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Grand Tour Dynamique 2.0 16V Mec.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Grand Tour Expres.Hi-Flex 1.6 16V',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Grand Tour Privilège 2.0 16V Aut.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Hatch RN 1.6',
            'year' => '2000',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Hatch RT 1.6/RT/Alizé/Exp 1.6 16V',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Hatch RXE 2.0',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Hatch RXE/Egeus 1.6 16V',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sed. Expression 2.0 16V Aut.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sed. Expression 2.0 16V Mec.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sed. EXTREME 2.0 16V Aut.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sed. EXTREME 2.0 16V Mec.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sed. EXTREME HI-Flex 1.6 16V Mec.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan Dynamique 2.0 16V Aut.',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan Dynamique 2.0 16V Mec.',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan Dynamique Hi-Flex 1.6 16V',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan Expression Hi-Flex 1.6 16V',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan Privilège 2.0 16V Aut',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan RT 2.0',
            'year' => '2000',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan RT/Alizé 1.6 16V',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan RXE/ Privilège 2.0 16V Mec',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Megane Sedan RXE/Egeus 2.0',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'OROCH Intense 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'OROCH Pro 1.6 Flex 16V Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Safrane RXE',
            'year' => '1995',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Auth. Plus Hi-Power 1.0 16V 5p',
            'year' => '2016',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Authentique Flex 1.0 12V 5p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Authentique Hi-Flex 1.0 16V 5p',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Authentique Hi-Flex 1.6 8V 5p',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Authentique Hi-Power 1.0 16V 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Dyna. EasyR Hi-Flex 1.6 8V',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Dynamique Easy R Flex 1.6 16V 5p',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Dynamique Flex 1.6 16V 5p',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Dynamique Hi-Power 1.6 8V 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expres EasyR Hi-Flex 1.6 8V',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expres. P.Avant. Hi.P. 1.6 8V 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expression EasyR Flex 1.6 16V 5p',
            'year' => '2018',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expression Flex 1.0 12V 5p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expression Flex 1.6 16V 5p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expression Hi-Flex 1.0 16V 5p',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expression Hi-Flex 1.6 8V 5p',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expression Hi-Power 1.0 16V 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Expression Hi-Power 1.6 8V 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO GT line Flex 1.0 12V 5p',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO GT line Flex 1.6 16V 5p',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO GT Line Flex/RLI 1.6.16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO GT line Hi-Flex 1.6 16V 4p',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO GT line Hi-Flex 1.6 8V 5p',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO GT line Hi-Power 1.6 8V 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Intense Flex 1.6 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Life Flex 1.0 12V 5p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO NOKIA Hi-Flex 1.6 16V 5p',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Privilège Hi-Flex 1.6 16V 5p',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Privilège Hi-Flex 1.6 16V 5p Aut',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Privilège Hi-Flex 1.6 8V 5p',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO RS Racing Spirit Flex 2.0 16V 5p',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO S Edition Flex 1.0 12V 5p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO SPORT RS 2.0 Flex 16V 5p',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEP. Easy R Dyn. Flex 1.6 16V',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEP. Easy R H-Power 1.6 8V',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEP. Easy R R.CURL H.P. 1.6 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEP. R. CURL Hi-Power 1.6 8V 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Dynamiq. Flex 1.6 16V 5p',
            'year' => '2020',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Easy R Flex 1.6 16V 5p',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY EXP. Flex 1.6 16V 5p',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Flex 1.6 16V 5p',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Hi-F. R. CURL 1.6 16V 5p',
            'year' => '2013',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Hi-Flex 1.6 16V 5p',
            'year' => '2013',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Hi-Flex 1.6 16V 5p Aut.',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Hi-Power 1.6 8V 5p',
            'year' => '2017',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Tweed HFlex 1.6 16V Aut',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO STEPWAY Tweed HFlex 1.6 8V 5p',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO TechRun Hi-Flex 1.0 16V 5p',
            'year' => '2014',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO vibe Flex 1.0 12V 5p',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO vibe Hi-Flex 1.6 8V 5p',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Zen Flex 1.0 12V 5p Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Zen Flex 1.6 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SANDERO Zen Flex 1.6 16V 5p Mec.',
            'year' => '2021',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic Alizé/ Expression 1.6 16V Mec.',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic Alizé/ Expression 2.0 16V 5p',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic Expression 1.6 16V Aut.',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic Grand Dynamique 2.0 16V 5p Aut.',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic Hi-Flex/Express. Hi-Flex 1.6 16V',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic Privilège Hi-Flex 1.6 16V',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic Privillège 1.6 16V Aut.',
            'year' => '2006',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic Privillège 2.0 Plus 16V 5p Aut',
            'year' => '2008',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RT 2.0',
            'year' => '2000',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RT 2.0 16V 5p Aut.',
            'year' => '2003',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RT 2.0 16V 5p Mec.',
            'year' => '2003',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RT/Auth/Auth/Kids Hi-Flex 1.6 16V',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RXE 2.0 8V',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RXE Egeus 2.0',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RXE/ Privilège 1.6 16V Mec.',
            'year' => '2005',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RXE/ Privilège 2.0 16V 5p Aut.',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic RXE/ Privilège 2.0 16V 5p Mec.',
            'year' => '2009',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Scénic SPORTWAY Hi-Flex 1.6 16V 5p',
            'year' => '2010',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'STEPWAY Iconic Flex 1.6 16V Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'STEPWAY Intense Flex 1.6 16V  Aut.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'STEPWAY Zen Flex 1.6 16V Mec.',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SYMBOL CONNECTION Hi-Flex 1.6 8V 4p',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SYMBOL Expression Hi-Flex 1.6 16V 4p',
            'year' => '2013',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SYMBOL Expression Hi-Flex 1.6 8V 4p',
            'year' => '2011',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'SYMBOL Privilège Hi-Flex 1.6 16V 4p',
            'year' => '2013',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Trafic Furgão 2.0 98cv',
            'year' => '2002',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Trafic Furgão Chassi Curto 2.2',
            'year' => '1999',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Trafic Furgão Chassi Longo 2.2',
            'year' => '1998',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Trafic Van 2.2',
            'year' => '1998',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Twingo 1.0 8V',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Twingo 1.2',
            'year' => '2000',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Twingo Easy 1.2',
            'year' => '1995',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Twingo Initiale 1.0 16V 70cv',
            'year' => '2002',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Twingo Pack 1.0 16V 70cv',
            'year' => '2002',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'Twingo Pack 1.0 8V',
            'year' => '2001',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'ZOE Intense',
            'year' => '2022',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'ZOE Life 92cv',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'ZOE Ultimate 92cv',
            'year' => '2019',
            'brand_id' => 66
        ]);
        VehiclesModel::create([
            'name' => 'ZOE Zen',
            'year' => '2022',
            'brand_id' => 66
        ]);
        /*----------Rolls Royce----------*/
        VehiclesModel::create([
            'name' => 'Cullinan 6.7 V12 Aut.',
            'year' => '2021',
            'brand_id' => 67
        ]);
        VehiclesModel::create([
            'name' => 'Cullinan Black Badge 6.7 V12 Aut.',
            'year' => '2022',
            'brand_id' => 67
        ]);
        VehiclesModel::create([
            'name' => 'Dawn 6.6 V12 Aut.',
            'year' => '2020',
            'brand_id' => 67
        ]);
        VehiclesModel::create([
            'name' => 'Ghost 6.6 V12 Aut.',
            'year' => '2013',
            'brand_id' => 67
        ]);
        VehiclesModel::create([
            'name' => 'Ghost 6.7 V12 Aut.',
            'year' => '2022',
            'brand_id' => 67
        ]);
        VehiclesModel::create([
            'name' => 'Ghost ll 6.6 V12 Aut.',
            'year' => '2019',
            'brand_id' => 67
        ]);
        VehiclesModel::create([
            'name' => 'Phantom 6.7 V12 Aut.',
            'year' => '2016',
            'brand_id' => 67
        ]);
        VehiclesModel::create([
            'name' => 'Wraith 6.6 V12 Aut.',
            'year' => '2020',
            'brand_id' => 67
        ]);
        /*----------Rover----------*/
        VehiclesModel::create([
            'name' => 'Mini Cooper 1.3',
            'year' => '1995',
            'brand_id' => 68
        ]);
        /*----------Saab----------*/
        VehiclesModel::create([
            'name' => '9000 CD 2.3 Turbo',
            'year' => '1993',
            'brand_id' => 69
        ]);
        /*----------Saturn----------*/
        VehiclesModel::create([
            'name' => 'SL-2 1.9',
            'year' => '1992',
            'brand_id' => 70
        ]);
        /*----------Seat----------*/
        VehiclesModel::create([
            'name' => 'Cordoba 1.6L',
            'year' => '2002',
            'brand_id' => 71
        ]);
        VehiclesModel::create([
            'name' => 'Cordoba SXE 1.8 / GLX 1.8 4p',
            'year' => '1999',
            'brand_id' => 71
        ]);
        VehiclesModel::create([
            'name' => 'Cordoba Vario 1.6L',
            'year' => '2002',
            'brand_id' => 71
        ]);
        VehiclesModel::create([
            'name' => 'Ibiza 1.0 16V 4p',
            'year' => '2003',
            'brand_id' => 71
        ]);
        VehiclesModel::create([
            'name' => 'Ibiza 1.0i 8V',
            'year' => '1995',
            'brand_id' => 71
        ]);
        VehiclesModel::create([
            'name' => 'Ibiza 1.6L',
            'year' => '2002',
            'brand_id' => 71
        ]);
        VehiclesModel::create([
            'name' => 'Ibiza SXE/GLX 1.8',
            'year' => '1999',
            'brand_id' => 71
        ]);
        VehiclesModel::create([
            'name' => 'Inca 1.6L',
            'year' => '2002',
            'brand_id' => 71
        ]);
        /*----------Shineray----------*/
        VehiclesModel::create([
            'name' => 'SY1020 T 20 TRUCKS BAU',
            'year' => '2015',
            'brand_id' => 72
        ]);
        VehiclesModel::create([
            'name' => 'SY1020 T 22 TRUCKS CD',
            'year' => '2015',
            'brand_id' => 72
        ]);
        VehiclesModel::create([
            'name' => 'SY1020 T20 TRUCKS',
            'year' => '2015',
            'brand_id' => 72
        ]);
        VehiclesModel::create([
            'name' => 'SY6370 A7 PVAN',
            'year' => '2015',
            'brand_id' => 72
        ]);
        VehiclesModel::create([
            'name' => 'SY6390 A9 CARGOV',
            'year' => '2015',
            'brand_id' => 72
        ]);
        VehiclesModel::create([
            'name' => 'SY6390 A9 PVANS',
            'year' => '2015',
            'brand_id' => 72
        ]);
        VehiclesModel::create([
            'name' => 'X30 VAN 1.3 16V Mec.',
            'year' => '2015',
            'brand_id' => 72
        ]);
        /*----------Smart----------*/
        VehiclesModel::create([
            'name' => 'Fortwo BRABUS cabrio 1.0 72kw',
            'year' => '2011',
            'brand_id' => 73
        ]);
        VehiclesModel::create([
            'name' => 'Fortwo BRABUS Coupe 1.0 72kw',
            'year' => '2011',
            'brand_id' => 73
        ]);
        VehiclesModel::create([
            'name' => 'Fortwo coupé/Brasil.Edition 1.0 mhd 71cv',
            'year' => '2015',
            'brand_id' => 73
        ]);
        VehiclesModel::create([
            'name' => 'Fortwo passion cabrio 1.0 62kw/Tritop',
            'year' => '2015',
            'brand_id' => 73
        ]);
        VehiclesModel::create([
            'name' => 'Fortwo passion coupé 1.0 62kw',
            'year' => '2015',
            'brand_id' => 73
        ]);
        /*----------Ssangyong----------*/
        VehiclesModel::create([
            'name' => 'ACTYON 2.3 16V 150cv Aut.',
            'year' => '2011',
            'brand_id' => 74
        ]);
        VehiclesModel::create([
            'name' => 'Chairman 3.2 V6 220cv Aut.',
            'year' => '2002',
            'brand_id' => 74
        ]);
        VehiclesModel::create([
            'name' => 'Musso GLS 3.2 V6 220cv 4x4 Aut.',
            'year' => '2002',
            'brand_id' => 74
        ]);
        VehiclesModel::create([
            'name' => 'Rexton II 3.2 V6 24V 220cv Aut.',
            'year' => '2010',
            'brand_id' => 74
        ]);
        VehiclesModel::create([
            'name' => 'Rexton RX 320 3.2 V6 235cv Aut.',
            'year' => '2005',
            'brand_id' => 74
        ]);
        VehiclesModel::create([
            'name' => 'TIVOLI 1.6 16V 128cv Aut.',
            'year' => '2018',
            'brand_id' => 74
        ]);
        VehiclesModel::create([
            'name' => 'TIVOLI DLX 1.6 16V 128cv Aut.',
            'year' => '2018',
            'brand_id' => 74
        ]);
        VehiclesModel::create([
            'name' => 'XLV 1.6 16V 128cv Aut.',
            'year' => '2018',
            'brand_id' => 74
        ]);
        VehiclesModel::create([
            'name' => 'XLV DLX 1.6 16V 128cv Aut.',
            'year' => '2018',
            'brand_id' => 74
        ]);
        /*----------Subaru----------*/
        VehiclesModel::create([
            'name' => 'Forester 2.0 16v 4x4 Turbo Aut.',
            'year' => '2005',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Forester 2.0 4x4 Mec.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Forester 2.0 4x4 Turbo',
            'year' => '2001',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Forester 2.0 L 16V 4x4 Aut.',
            'year' => '2018',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Forester 2.0 -S e-BOXER 16V 4x4 Aut.',
            'year' => '2022',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Forester 2.0/2.0 S/2.0 ES 4x4 Aut.',
            'year' => '2021',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Forester XT 2.0 16V 4x4 Turbo Aut.',
            'year' => '2018',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Forester XT 2.5 16V 4x4 Turbo Aut.',
            'year' => '2012',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Forester XT S-EDITION 2.5 16V 4x4 TB Aut',
            'year' => '2012',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza 1.5 16V 115cv Aut.',
            'year' => '2009',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza 1.5 16V 115cv Mec.',
            'year' => '2009',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza 2.0 16V 160cv Aut.',
            'year' => '2011',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza 2.0 16V 160cv Mec.',
            'year' => '2011',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza GL 1.6/1.8 16V',
            'year' => '1997',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza GL 2.0 4x2 Aut.',
            'year' => '1998',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza GL 2.0 4x2 Mec.',
            'year' => '1998',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza GL 2.0 4x4 Aut.',
            'year' => '2000',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza GL 2.0 4x4 Mec.',
            'year' => '2000',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza GL 4x4 1.8 16V',
            'year' => '1997',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza GL 4x4 2.0 16V',
            'year' => '2000',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza GT 2.0 Turbo',
            'year' => '2001',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SD 2.0 16V 160cv Aut.',
            'year' => '2011',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SD 2.0/2.0i-S AWD Aut.',
            'year' => '2016',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SD GX 2.0 16v 4x4 4p Aut.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SD RX 2.0 4x4',
            'year' => '2000',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SD WRX 2.0 16V TB 4x4',
            'year' => '2020',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SD WRX 2.0 16V TB 4x4 Aut.',
            'year' => '2021',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SD WRX 2.5 16V TB 4x4 4p',
            'year' => '2014',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SD WRX STI 2.5 16V TB 4x4',
            'year' => '2021',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SW GL 1.6/1.8/2.0 4x4 16V',
            'year' => '2001',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SW GT 2.0 16V 4x4 Turbo Mec.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SW GX 2.0 16v 4x4 Aut.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SW WRX 2.0 16v 4x4 TB',
            'year' => '2005',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza SW WRX 2.5 16V TB 4x4 5p',
            'year' => '2007',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza WRX 2.5 16V TB 4x4 5p',
            'year' => '2012',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza WRX STI 2.5 16V TB 4x4',
            'year' => '2014',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza XV 2.0 16V 160cv Aut.',
            'year' => '2011',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Impreza XV 2.0 16V 160cv Mec.',
            'year' => '2011',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy 2.0 16V 160cv Aut.',
            'year' => '2011',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy 3.0 R H6 245cv Aut.',
            'year' => '2009',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy 3.6 4x4 256cv Aut.',
            'year' => '2015',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GL 1.8',
            'year' => '1994',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GL 2.0/ GLS Mec',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GL TW 2.0 4x2 Mec./Aut.',
            'year' => '2000',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GL TW 2.0 4x4 Aut.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GL TW 2.0 4x4 Mec.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GL/ GLS 2.0 Aut.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GT 2.5  16V 280cv Aut.',
            'year' => '2014',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GX 2.2 4x4',
            'year' => '1998',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GX 2.5 4x4 Aut.',
            'year' => '2003',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GX 2.5 4x4 Mec.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GX TW 2.2 4x4 Aut.',
            'year' => '1997',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GX TW 2.2 4x4 Mec.',
            'year' => '1997',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GX TW 2.5 4x4 Aut.',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy GX TW 2.5 4x4 Mec',
            'year' => '2002',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Legacy SW 2.2',
            'year' => '1997',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Outback 2.5 4x4 Aut.',
            'year' => '2006',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Outback 2.5 4x4 Mec.',
            'year' => '2000',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Outback 3.0 H6 SW 245cv Aut.',
            'year' => '2009',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Outback 3.6 H6 SW Aut.',
            'year' => '2020',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'SVX Cupê 3.3 4x4 Aut',
            'year' => '1998',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'TRIBECA 3.6 24V 270cv 5p Aut.',
            'year' => '2012',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'Vivio SD GLI 3p Mec.',
            'year' => '1997',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'XV 2.0 L 16V 4x4 Aut.',
            'year' => '2019',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'XV 2.0 S e-Boxer 16V 4x4 Aut.',
            'year' => '2022',
            'brand_id' => 75
        ]);
        VehiclesModel::create([
            'name' => 'XV 2.0/2.0 S/2.0 ES 16V 4x4 Aut.',
            'year' => '2022',
            'brand_id' => 75
        ]);
        /*----------Suzuki----------*/
        VehiclesModel::create([
            'name' => 'Baleno 1.6 16V Aut.',
            'year' => '1999',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Baleno 1.6 16V Mec.',
            'year' => '2000',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Baleno Wagon 1.6 16V Aut.',
            'year' => '2000',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 1.6 16V Aut.',
            'year' => '2002',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 1.6 16V Mec.',
            'year' => '2003',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.0 16V 3p',
            'year' => '2002',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.0 16V 4x2/4x4 5p Aut.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.0 16V 4x2/4x4 5p Mec.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.0 16V 5p/Gold Aut. (Arg.)',
            'year' => '2002',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.0 16V 5p/Gold Mec. (Arg.)',
            'year' => '2002',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.0 16V Ed. Special 5p Aut.',
            'year' => '2000',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.0 16V Ed. Special 5p Mec.',
            'year' => '2000',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.5 V6 5p Aut.',
            'year' => '2003',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 2.5 V6 5p Mec.',
            'year' => '2002',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 3.2 24V 4WD 5p Aut.',
            'year' => '2011',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 4SPORT 2.0 16V 4x2 5P Aut.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 4SPORT 2.0 16V 4x4 5p Aut.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara 4SPORT 2.0 16V 4x4 5p Mec.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara L.EDI. 2.0 16V 4x2/4x4 Aut.',
            'year' => '2015',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara S. EDITI.  2.0 16V 4x2 Aut.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara Sport 2.0 16V Aut.',
            'year' => '2002',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara Sport 2.0 16V Mec.',
            'year' => '2002',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara XL_7 2.7 24V 173cv  4p Aut.',
            'year' => '2003',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Grand Vitara XL_7 2.7 24V 173cv 4p Mec.',
            'year' => '2002',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Ignis 1.3 16V 82cv 4p Aut.',
            'year' => '2003',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Ignis 1.3 16V 82cv 4p Mec.',
            'year' => '2003',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Ignis WRS 1.3 16V 82cv 4x4 4p',
            'year' => '2003',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny 4S 1.3 16V',
            'year' => '2012',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny 4SPORT DESERT 1.3 16V',
            'year' => '2020',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny 4SPORT FOREST 1.3 16V',
            'year' => '2022',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny 4SPORT/ 4WORK 1.3 16V',
            'year' => '2022',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny 4STREET 1.3 16V',
            'year' => '2012',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny 4SUN 1.3 16V',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny 4WORK OFF ROAD 1.3 16V',
            'year' => '2019',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny CANVAS 4ALL 1.3 16V',
            'year' => '2017',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny CANVAS 4SPORT 1.3 16V',
            'year' => '2018',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny Sierra 4STYLE ALLGRIP 1.5 16V Aut.',
            'year' => '2022',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny Sierra 4YOU ALLGRIP 1.5 16V Aut.',
            'year' => '2022',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny Sierra 4YOU ALLGRIP 1.5 16V Mec.',
            'year' => '2022',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Jimny Wide/ Jimny/4ALL 1.3 16V',
            'year' => '2022',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Samurai JX Canvas 1.3',
            'year' => '1999',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Samurai JX Metal 1.3',
            'year' => '1999',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'S-CROSS 4STYLE 1.4 TB 16V Aut.',
            'year' => '2020',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'S-CROSS 4STYLE ALLGRIP 1.4 TB 16V Aut.',
            'year' => '2021',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'S-CROSS 4STYLE-S ALLGRIP 1.4 TB 16V Aut.',
            'year' => '2021',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'S-CROSS 4YOU 1.6 16V Aut.',
            'year' => '2019',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Sidekick Canvas',
            'year' => '1996',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Sidekick Metal',
            'year' => '1995',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Super Carry Van/ Furgão 1.0',
            'year' => '1995',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Swift GL',
            'year' => '1995',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Swift GTi 1.3 3p',
            'year' => '1995',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Swift GTI Convers. 16V',
            'year' => '1994',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Swift Hatch 1.0 3p e 5p',
            'year' => '1999',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Swift Hatch/ Sedan 1.3',
            'year' => '1995',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Swift Sedan 1.6 16V',
            'year' => '1994',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Swift Sport 1.6 16V 5p Mec.',
            'year' => '2015',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Swift Sport R 1.6 16V 5p Mec.',
            'year' => '2015',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'SX4 2.0 16V 145cv 4WD 5p Aut.',
            'year' => '2015',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'SX4 2.0 16V 145cv 4WD 5p Mec.',
            'year' => '2015',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'SX4 S-CROSS ALLGRIP GLS 1.6 16V Aut.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'SX4 S-CROSS ALLGRIP GLX 1.6 16V Aut.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'SX4 S-CROSS GL 1.6 16V Mec.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'SX4 S-CROSS GLX 1.6 16V Aut.',
            'year' => '2016',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara 4ALL 1.6 16V Aut.',
            'year' => '2021',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara 4ALL 1.6 16V Mec.',
            'year' => '2019',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara 4SPORT 1.4 TB 16V Aut.',
            'year' => '2019',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara 4SPORT ALLGRIP 1.4 TB 16V Aut.',
            'year' => '2022',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara 4STYLE ALLGRIP 1.4 TB 16V Aut.',
            'year' => '2022',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara 4YOU 1.6 16V Aut.',
            'year' => '2021',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara 4YOU ALLGRIP 1.6 16V Aut.',
            'year' => '2019',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara JLX 1.6 16V 4x4 4p Aut.',
            'year' => '1998',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara JLX 1.6 16V 4x4 4p Mec.',
            'year' => '1998',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara JLX 2.0 V6 4x4',
            'year' => '1999',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara JLX Canvas 1.6 8V 2p',
            'year' => '1999',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Vitara JLX Metal 1.6 8V 2p',
            'year' => '1999',
            'brand_id' => 76
        ]);
        VehiclesModel::create([
            'name' => 'Wagon R+ 1.0 Mec.',
            'year' => '1999',
            'brand_id' => 76
        ]);
        /*----------Toyota----------*/
        VehiclesModel::create([
            'name' => 'Avalon XLS 3.0',
            'year' => '1995',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Camry LE',
            'year' => '2000',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Camry SW LE 2.2 16V',
            'year' => '1993',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Camry SW XLE 3.0 24V',
            'year' => '1993',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Camry XLE 3.0 24V 186cv',
            'year' => '2006',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Camry XLE 3.5 24V Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Camry XLE Hybrid 2.5 16V Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Celica GT 2.2 16V',
            'year' => '1995',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Celica ST 1.8',
            'year' => '1993',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla ALTIS 2.0 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Altis Hybrid 1.8 16V Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Altis Prem. Hybrid 1.8 Aut',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Cross GR-S 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Cross SE 1.8 16V Aut. (Híbrido)',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Cross XR 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Cross XRE 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Cross XRV 1.8 16V Aut.(Híbrido)',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Cross XRX 1.8 16V Aut.(Híbrido)',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla DX/ SW DX 1.6 16V',
            'year' => '1996',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Dynamic 2.0 Flex 16V Aut.',
            'year' => '2017',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Fielder SW 1.8/1.8 XEi Flex Aut.',
            'year' => '2008',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Fielder SW 1.8/1.8 XEi Flex Mec',
            'year' => '2008',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Fielder SW S  1.8 16V 136cv Aut',
            'year' => '2007',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Fielder SW S 1.8 16V 136cv Mec',
            'year' => '2007',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla Fielder SW SE-G 1.8 Flex 16V Aut',
            'year' => '2008',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla GLi 1.6 16V',
            'year' => '1999',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla GLi 1.8 Flex 16V  Aut.',
            'year' => '2019',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla GLi 1.8 Flex 16V Mec.',
            'year' => '2017',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla GLi 2.0 16V Flex Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla GLi Upper 1.8 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla GLi Upper Black P. 1.8 Flex Aut.',
            'year' => '2017',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla GR-Sport 2.0 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla LE 1.8',
            'year' => '1998',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla LE 2.2 16V',
            'year' => '1997',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla S 1.8 16V 136cv Aut',
            'year' => '2007',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla S 1.8 16V 136cv Mec',
            'year' => '2007',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla SE-G 1.8 16V Mec.',
            'year' => '2002',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla SE-G 1.8/1.8 Flex 16V Aut.',
            'year' => '2010',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla SW LE 1.8/ XLi 1.6 16V',
            'year' => '1999',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla WG',
            'year' => '1999',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla XEi 1.8/1.8 Flex 16V Aut.',
            'year' => '2010',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla XEi 1.8/1.8 Flex 16V Mec.',
            'year' => '2010',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla XEi 2.0 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla XLi 1.6 16V 110cv Aut.',
            'year' => '2010',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla XLi 1.6 16V 110cv Mec.',
            'year' => '2007',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla XLi 1.8/1.8 Flex 16V Aut.',
            'year' => '2014',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla XLi 1.8/1.8 Flex 16V Mec.',
            'year' => '2014',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corolla XRS 2.0 Flex 16V Aut.',
            'year' => '2019',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corona Aut.',
            'year' => '1998',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corona GLi Mec',
            'year' => '2000',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Corona Mec.',
            'year' => '2000',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS 1.3 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS CROSS 1.5 Flex 16V 5p Aut.',
            'year' => '2018',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS CROSS 1.5 Flex 16V 5p Mec.',
            'year' => '2017',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS PLATINUM 1.5 Flex 16V 4p Aut.',
            'year' => '2019',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS PLATINUM 1.5 Flex 16V 5p Mec.',
            'year' => '2016',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS PLATINUM Sed. 1.5 Flex 16V 4p Aut.',
            'year' => '2019',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS PLATINUM Sed. 1.5 Flex 16V 4p Mec.',
            'year' => '2016',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS READY! 1.5 Flex 16V 5p Aut.',
            'year' => '2018',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS X 1.3 Flex 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS X 1.3 Flex 16V 5p Mec.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS X Plus 1.5 Flex 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS X Plus 1.5 Flex 16V 5p Mec.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS X Plus Sedan 1.5 Flex 16V 4p Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS X Plus Sedan 1.5 Flex 16V 4p Mec.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS X Sedan 1.5 Flex 16V 4p Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS X Sedan 1.5 Flex 16V 4p Mec.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XLS 1.5 Flex 16V 5p Mec.',
            'year' => '2017',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XLS 1.5 Flex 5p Aut.',
            'year' => '2019',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XLS Sedan 1.5 Flex 16V 4p Aut.',
            'year' => '2019',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XLS Sedan 1.5 Flex 16V 4p Mec.',
            'year' => '2017',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XS  1.3 Flex 16V 5p Mec.',
            'year' => '2014',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XS 1.5 Flex 16V 5p Aut.',
            'year' => '2018',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XS 1.5 Flex 16V 5p Mec.',
            'year' => '2018',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XS Sedan 1.5 Flex 16V 4p Aut.',
            'year' => '2018',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'ETIOS XS Sedan1.5 Flex 16V 4p Mec.',
            'year' => '2018',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CD 4x4 2.7 16V Flex Mec.',
            'year' => '2015',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CD DX 4x2 2.7 16V 142cv',
            'year' => '2003',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CD GR-S 4x4 4.0 V6 234cv Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CD SR 4x2 2.7 16V/2.7 Flex Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CD SR 4x2 2.7 16V/2.7 Flex Mec.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CD SRV 4x2 2.7 16V 142cv',
            'year' => '2003',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CD SRV 4x2 2.7 Flex 16V Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CD SRV 4x4 2.7 Flex 16V Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CS DX 4x2 2.7 16V 142cv',
            'year' => '2003',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux CS SRV 4x2 2.7 16V 142cv',
            'year' => '2002',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 2.7 16V',
            'year' => '2000',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 3.4 V6',
            'year' => '2001',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 4x4 2.4 8V',
            'year' => '1996',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 4x4 3.0 12V V6',
            'year' => '1996',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 4x4 3.0 24V V6',
            'year' => '2001',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 SR 4x2 2.7/ 2.7 Flex 16V Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 SR 4x2 2.7/2.7 Flex 16V Mec.',
            'year' => '2018',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 SRV 4x2 2.7 Flex 16V Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 SRV 4x4 4.0 V6 24V Aut.',
            'year' => '2013',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Hilux SW4 SRX 4x4 4.0 V6 24V Aut.',
            'year' => '2017',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Land Cruiser 4WD 4.5 24V',
            'year' => '1995',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'MR-2 Turbo 2.0',
            'year' => '1994',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Paseo',
            'year' => '1996',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Previa LE 2.4 16V',
            'year' => '1995',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Previa LX 2.5',
            'year' => '1992',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'PRIUS Hybrid 1.8 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.0 4x2 16V Aut.',
            'year' => '2018',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.0 4x4 16V Aut.',
            'year' => '2015',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.0 4x4 16V Mec.',
            'year' => '2002',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.0 HIGH 4x2 16V Aut.',
            'year' => '2015',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.0 TOP 4x2 16V Aut.',
            'year' => '2019',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.4 4x2 16V 170cv Aut.',
            'year' => '2012',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.4 4x4 16V 170cv Aut.',
            'year' => '2012',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.5 4x4 16V Aut.',
            'year' => '2015',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.5 S 4x4 Hybrid Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.5 S Connect 4x4 Hybrid Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.5 SX 4x4 Hybrid Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'RAV4 2.5 SX Connect 4x4 Hybrid Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'Supra',
            'year' => '2007',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'T-100 3.4 V6',
            'year' => '1995',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS S 1.5 Flex 16V 5p Aut.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL 1.3 Flex 16V 5p Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL 1.3 Flex 16V 5p Mec.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL 1.5 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Live 1.3 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Live 1.3 Flex 16V 5p Mec.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Live Sedan 1.5 Flex 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Live Sedan 1.5 Flex 16V 4p Mec.',
            'year' => '2021',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Plus Con. 1.5 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Plus Con. Sed. 1.5 Flex 16V Aut',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Plus T. Sed. 1.5 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Plus Tech 1.3 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Sedan 1.5 Flex 16V 4p Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XL Sedan 1.5 Flex 16V 4p Mec.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XLS 1.5 Flex 16V 5p Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XLS Connect 1.5 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XLS Connect Sed. 1.5 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XLS Sedan 1.5 Flex 16V 4p Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XS 1.5 Flex 16V 5p Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XS Connect 1.5 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XS Connect Sedan 1.5 Flex 16V Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS XS Sedan 1.5 Flex 16V 4p Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS X-WAY 1.5 Flex 16V 5p Aut.',
            'year' => '2020',
            'brand_id' => 77
        ]);
        VehiclesModel::create([
            'name' => 'YARIS X-WAY Connect 1.5 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 77
        ]);
        /*----------Troller----------*/
        VehiclesModel::create([
            'name' => 'RF Esport 4x4 2.0',
            'year' => '1997',
            'brand_id' => 78
        ]);
        VehiclesModel::create([
            'name' => 'RF Esport T-4 4x4 2.0 Cap. Lona',
            'year' => '2001',
            'brand_id' => 78
        ]);
        VehiclesModel::create([
            'name' => 'RF Esport T-4 4x4 2.0 Cap. Rígida',
            'year' => '2001',
            'brand_id' => 78
        ]);
        /*----------Volvo----------*/
        VehiclesModel::create([
            'name' => '440 Turbo 1.8',
            'year' => '1993',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '460 GLT 2.0/ Turbo 1.8',
            'year' => '1996',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '850 GLE 2.5 20V',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '850 GLE SW 20V',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '850 GLT 2.5 20V',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '850 GLT SW 2.5 20V',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '850 R SW 2.3 Turbo',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '850 Sedan',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '850 T-5 SW 2.5 BI-Turbo/ 2.3 Turbo',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '850 TURBO 20V/ R Turbo 2.3',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '940 Turbo/ SW Turbo 3.0',
            'year' => '1995',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => '960 Sedan',
            'year' => '1997',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C30 2.0 145cv',
            'year' => '2012',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C30 2.4 170cv Aut',
            'year' => '2009',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C30 T-5 2.5 220/ 230cv Aut.',
            'year' => '2011',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C30 T-5 2.5 230cv Mec.',
            'year' => '2009',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C30 T-5 R-DESIGN 2.5 230cv Aut.',
            'year' => '2012',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C40  Twin Ultimate (Elétrico)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C40 Recharge Pure Eletric (Elétrico)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C70 Cabriolet',
            'year' => '2011',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'C70 Cupê',
            'year' => '2002',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 1.8 Aut.',
            'year' => '2000',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 1.8 Mec.',
            'year' => '2000',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 2.0 Aut.',
            'year' => '2003',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 2.0 Mec.',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 2.0 T',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 2.4 140cv Aut.',
            'year' => '2010',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 2.4 170cv Aut.',
            'year' => '2009',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 T 2.0  Turbo Aut.',
            'year' => '2004',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 T-4',
            'year' => '2003',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 T-4 ARM Aut.',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 T-4 ARM Mec.',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S40 T-5 2.5 220/230cv Aut.',
            'year' => '2010',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 R 2.5 300cv Aut.',
            'year' => '2007',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 R 2.5 300cv Mec.',
            'year' => '2007',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T 2.0 4p',
            'year' => '2009',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T 2.4/ 2.5',
            'year' => '2007',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-4 1.6 180cv 4p',
            'year' => '2013',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-4 KINETIC 2.0 190cv 4p',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-4 MOMENTUM 2.0 190cv 4p',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-5 2.0 240cv 4p',
            'year' => '2013',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-5 2.3',
            'year' => '2003',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-5 INSCRIPTION 2.0 254cv 4p',
            'year' => '2021',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-5 KINETIC 2.0 245cv 4p',
            'year' => '2016',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-5 MOMENTUM 2.0 245cv 4p',
            'year' => '2016',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-5 R-DESIGN 2.0 240cv 4p',
            'year' => '2015',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-6 3.0 304cv AWD 4p',
            'year' => '2011',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-6 R-DESIGN 2.0 306cv FWD 4p',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-6 R-DESIGN 3.0 AWD 4p',
            'year' => '2015',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T8 POLESTAR 2.0  (Híbrido)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S60 T-8 R-DESIGN 2.0 407cv (Híbrido)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S70 2.5',
            'year' => '1999',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S70 2.5 Aut.',
            'year' => '2000',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S70 R',
            'year' => '1999',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S70 R Aut.',
            'year' => '2000',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S70 T-5 2.3',
            'year' => '1999',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S80 2.9',
            'year' => '2004',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S80 2.9 ARM',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S80 3.2 238cv Aut.',
            'year' => '2009',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S80 4.4 V8 315cv AWD Aut.',
            'year' => '2010',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S80 T6 2.8 BI-Turbo',
            'year' => '2006',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S80 T6 2.8 BI-Turbo ARM',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S80 T-6 Executive 2.8',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S80 T-6 Executive ARM 2.8 24v',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'S90 T-8  INSCRIPT 2.0 AWD (Híbrido)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 1.8 Aut.',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 1.8 Mec.',
            'year' => '2000',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 2.0',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 2.0 Aut.',
            'year' => '2003',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 2.0 Turbo',
            'year' => '2004',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-3 KINETIC 1.5 Aut.',
            'year' => '2016',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-4',
            'year' => '2000',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-4 2.0 Aut./Mec.',
            'year' => '2015',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-4 ARM Aut.',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-4 Cross Country 2.0 FWD Aut.',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-4 KINETIC 2.0 Aut.',
            'year' => '2019',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-4 MOMENTUM 2.0 Aut.',
            'year' => '2019',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-5 Cross Country 2.0 Awd Aut.',
            'year' => '2016',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V40 T-5 R-DESIGN 2.0 Aut.',
            'year' => '2019',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V50 2.4 20V 140cv Aut.',
            'year' => '2009',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V50 2.4 20V 170cv Aut.',
            'year' => '2009',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V50 T-5 2.5 220cv Aut.',
            'year' => '2011',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V60 T-4 KINETIC 2.0 190cv 5p',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V60 T-4 MOMENTUM 2.0 190cv 5p',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V60 T-5 KINETIC 2.0 245cv 5p',
            'year' => '2016',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V60 T-5 MOMENTUM 2.0  5p',
            'year' => '2020',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V60 T-5 R-DESING 2.0 5p',
            'year' => '2015',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V60 T-6 R-DESIGN 2.0 FWD 4p',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V60 T-6 R-DESIGN 3.0 AWD 4p',
            'year' => '2015',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 2.5',
            'year' => '2000',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 Cross Country 2.4',
            'year' => '2002',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 R 2.5 300cv AWD Aut.',
            'year' => '2007',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 R 2.5 300cv AWD Mec.',
            'year' => '2007',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 T 2.0 20v 180cv 4p Aut.',
            'year' => '2007',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 T 2.4',
            'year' => '2001',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 T 2.4/ 2.5 Premium',
            'year' => '2007',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 T5 2.3',
            'year' => '2003',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'V70 XC/ XC 70',
            'year' => '2010',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 Recharge Pure Eletric (Elétrico)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-4 2.0 190cv FWD',
            'year' => '2020',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-4 INSCRIPTION 2.0 190cv FWD',
            'year' => '2021',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-4 MOMENTUM 2.0 190cv FWD',
            'year' => '2021',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 HÍBRIDO INSC. EXPRESS. 1.5 FWD',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 HÍBRIDO INSCRIPTION 1.5 FWD',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 HÍBRIDO MOMENTUM 1.5 262cv FWD',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 HÍBRIDO R-DESIGN 1.5 262CV FWD',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 MOMENT FIRST ED. 2.0 252cv AWD',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 MOMENTUM 2.0 252cv AWD',
            'year' => '2020',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 R-DESIGN 2.0 252cv AWD',
            'year' => '2020',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 R-DESIGN FIR. ED 2.0 252cv AWD',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 T-5 R-DESIGN SPE. ED 2.0 252cv AWD',
            'year' => '2020',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 40 Twin Ultimate (Elétrico)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 2.0 T5  5p',
            'year' => '2015',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 3.0 AWD 5p',
            'year' => '2015',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 HÍBRIDOT-8 POLESTAR 2.0 5p',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 R-DESIGN 3.0 304cv AWD 5p',
            'year' => '2015',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-5 INSCRIPTION 2.0 245 cv FWD 5p',
            'year' => '2017',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-5 INSCRIPTION 2.0 AWD 5p',
            'year' => '2019',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-5 KINETIC 2.0 245cv FWD 5p',
            'year' => '2017',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-5 MOMENTUM 2.0 245cv FWD 5p',
            'year' => '2017',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-5 MOMENTUM 2.0 254cv AWD 5p',
            'year' => '2021',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-5 R-DESIGN 2.0 AWD 5p',
            'year' => '2018',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-5 R-DESIGN 2.0 FWD 5p',
            'year' => '2017',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-6  R-DESIGN 2.0 306cv FWD 5p',
            'year' => '2016',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-6 INSCRIPTION 2.0 FWD 5p',
            'year' => '2016',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-8 HÍBRIDO INSC. EXPRESS. 2.0 AWD',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-8 HÍBRIDO INSCRIPTION 2.0 5p',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-8 HÍBRIDO MOMENTUM 2.0 5p',
            'year' => '2021',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-8 HÍBRIDO R-DESIGN 2.0 5p',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-8 Plus 2.0 AWD (Híbrido)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-8 Pol. Eng. 2.0 AWD (Híbrido)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-8 Ultim.Dark 2.0 AWD (Híbrido)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 60 T-8 Ultimate 2.0 AWD (Híbrido)',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 2.5T 210cv AWD 5p',
            'year' => '2007',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 3.2 238cv AWD 5p',
            'year' => '2013',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 4.4 V8 315cv AWD 5p',
            'year' => '2011',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T6 2.9 BI-TB 272cv AWD 5p',
            'year' => '2006',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-6 FIRST EDITION 2.0 320cv 5p',
            'year' => '2016',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-6 INSCRIPTION 2.0 320CV 5p',
            'year' => '2019',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-6 MOMENTUM 2.0 320cv 5P',
            'year' => '2021',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-8 EXCELLENCE 2.0 (Híbrido)',
            'year' => '2020',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-8 HÍBRIDO INSC. EXPRESS. 2.0 5p',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-8 HÍBRIDO INSCRIPT 2.0 5p',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-8 HÍBRIDO MOMENTUM 2.0 5p',
            'year' => '2021',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-8 HÍBRIDO R-DESIGN 2.0 5p',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-8 Plus 2.0 AWD',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-8 Ultim. Dark 2.0 AWD',
            'year' => '2022',
            'brand_id' => 79
        ]);
        VehiclesModel::create([
            'name' => 'XC 90 T-8 Ultimate 2.0 AWD',
            'year' => '2022',
            'brand_id' => 79
        ]);
        /*----------Volkswagen----------*/
        VehiclesModel::create([
            'name' => 'Apolo GL 1.8',
            'year' => '1992',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Apolo GLS/ Vip 1.8',
            'year' => '1992',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Bora 2.0 8v Comfortline Aut.',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Bora 2.0 8v Comfortline Mec.',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Bora 2.0/ 2.0 Flex 8v Aut.',
            'year' => '2011',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Bora 2.0/ 2.0 Flex 8v Mec.',
            'year' => '2011',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Corrado 2.0 Turbo',
            'year' => '1992',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Corrado G-60 2.8',
            'year' => '1992',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'CROSSFOX  1.6 T. Flex 16V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'CROSSFOX  I MOTION 1.6 T. Flex 16V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'CROSSFOX 1.6 Mi Total Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'CROSSFOX I MOTION 1.6 Mi T. Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'EOS Cab. 2.0 Turbo FSI Tiptronic',
            'year' => '2012',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox 1.0 Mi Total Flex 8V 3p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox 1.0 Mi Total Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox 1.6 Mi I MOTION Total Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox 1.6 Mi Total Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox BLUEMOTION 1.0 Mi Total Flex 12V 3p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox BLUEMOTION 1.0 Mi Total Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox BlueMotion 1.6 Mi Total Flex 3p.',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox BlueMotion 1.6 Mi Total Flex 5p.',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox City 1.0 Mi/ 1.0Mi Total Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox City 1.0Mi/ 1.0Mi Total Flex 8V 3p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Comfortline 1.0 Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Comfortline 1.0 Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Comfortline 1.6 Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Comfortline I Motion 1.6 Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Connect 1.6 Flex 8V 5p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Connect I Motion 1.6 Flex 8V 5p',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox extreme 1.6 Mi Total Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Highline I MOTION 1.6 Flex 16V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Highline1.6 Flex 16V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox PEPPER 1.6 Flex 16V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox PEPPER I MOTION 1.6 Flex 16V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Plus 1.0Mi/ 1.0Mi Total Flex 8V 3p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Plus 1.0Mi/ 1.0Mi Total Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Plus 1.6Mi/ 1.6Mi Total Flex 8V 3p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Plus 1.6Mi/ 1.6Mi Total Flex 8V 4p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox PRIME/Hghi. IMOTION 1.6 T.Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox PRIME/Higli. 1.6 Total Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Rock in Rio 1.6 Mi Total Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Route 1.0 Mi Total Flex 8V 3p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Route 1.0 Mi Total Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Route 1.6 Mi Total Flex 8V 3p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Route 1.6 Mi Total Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox RUN 1.6 Flex 8V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox SELEÇÃO 1.0 Total Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox SELEÇÃO 1.6 Total Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox SELEÇÃO IMOTION 1.6 Mi T. Flex 8V 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Sportline/Sports 1.0 Tot.Flex 8V 4p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Sportline/Sports 1.0/1.0 Tot.Flex 3p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Sportline/Sports 1.6/1.6 Tot.Flex 3p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Sportline/Sports 1.6/1.6 Tot.Flex 4p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox SUNRISE 1.0 Mi Total Flex 8V 5p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox TRACK 1.0 Flex 12V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Trendline 1.0 Flex 12V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Trendline 1.0 Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Trendline 1.6 Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fox Xtreme 1.6 Flex 8V 5p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fusca',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fusca 2.0 R-Line TSI 16V Aut.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fusca 2.0 TSI 16V Aut.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Fusca 2.0 TSI 16V Mec.',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol (novo) 1.0 Mi Total Flex 8V 2p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol (novo) 1.0 Mi Total Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol (novo) 1.6 Mi Total Flex 8V 2p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol (novo) 1.6 Mi Total Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol (novo) 1.6 Power/Highi T.Flex 8v 4P',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Flex 12V 5p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Mi FUN/ Highway/ Sport 16V  2/4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Plus 16v 2p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Plus 16v 4p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Plus 8v 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Power 16v 76cv 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Total Flex 8V 5p (25 Anos)',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Trend/ Power 8V 2p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.0 Trend/ Power 8V 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 I MOTI.Power/Highli T.Flex 8V 4p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 Mi I MOTION Total Flex 8V 3p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 Mi Plus Total Flex 8V 2p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 Mi Plus Total Flex 8V 4p',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 Mi Power Total Flex 8V 4p',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 Mi Rallye I MOTION T. Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 Mi Rallye Total Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 Mi/ 1.6i 2p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 Mi/ Power 1.6 Mi 4p',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 MSI Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.6 MSI Flex 8V 5p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.8 Mi',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.8 Mi 4p',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.8 Mi Power Total Flex 8V 4p',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1.8 Mi Rallye Total Flex 8V 4p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 (modelo antigo)',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 Mi 16V 2p Turbo',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 Mi 16V 4p Turbo',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 Mi 16V/ Ouro  2p',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 Mi 16V/ Ouro 4p',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 Mi 2p  / 1000i',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 Mi 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 Mi Plus 16V 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000 Mi Plus 8v 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 1000i Plus 2p',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 2.0 Mi 2p',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol 2.0 Mi 4p',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol BLACK 1.0 Mi Total Flex 8V 4p',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City (Trend) 1.0 Mi Total Flex 8V 2p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City (Trend) 1.6 Mi T. Flex 8V 2p',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City (Trend) 1.6 Mi T.Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City (Trend)/Titan 1.0 T. Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City 1.0 Mi 8V 2p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City 1.0 Mi 8V 4p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City 1.0 Total Flex 12V 2p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City 1.0 Total Flex 12V 4P',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City 1.6 Mi 8V 2p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol City 1.6 Mi 8V 4p',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol CL 1.6 Mi 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol CL 1.8 Mi 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol CLi / CL 1.8',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol CLi / CL/ Copa/ Stones 1.6',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Comfort. I MOTION 1.6 T. Flex 8V 3p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Comfort. I MOTION 1.6 T. Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Comfortline 1.0 T. Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Comfortline 1.0 T. Flex 8V 3p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Comfortline 1.0 T. Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Comfortline 1.6 T. Flex 8V 3p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Comfortline 1.6 T. Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol COPA 1.0 Mi Total Flex 8V 4p',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol COPA 1.6 Mi Total Flex 8V 4p',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol ECOMOTION  1.0 Mi Total Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol ECOMOTION 1.0 Mi Total Flex 8V 2p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Furgao 1.0 mi',
            'year' => '1998',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Furgão 1.6 Mi/ 1.6i/ 1.6',
            'year' => '1998',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol GL 1.6 Mi/Star 1.6 e 1.8/Atlanta 1.6',
            'year' => '1998',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol GL 1.8 Mi 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol GLi / GL/ Atlanta 1.8',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol GLS 2.0 Mi',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol GT/GTS 1.8',
            'year' => '1994',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol GTi 2.0',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol GTi 2000 16V',
            'year' => '2000',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol I MOTION 1.6 Mi Total Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol L 1.3/ L/ LS/ C/ S/ BX/ Plus 1.6',
            'year' => '1988',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Plus 1.0 Mi Total Flex 2p',
            'year' => '2008',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Plus 1.0 Mi Total Flex 4p',
            'year' => '2008',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Rallye 1.6 T. Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Rallye I MOTION 1.6 T. Flex 16V 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Rock in Rio 1.0 Mi Total Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol SELEÇÃO 1.0 Mi Total Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol SELEÇÃO 1.6 I MOTION T.Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol SELEÇÃO 1.6 Total Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Special 1.0 Mi 4p',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Special 1.0 Total Flex 8V 3p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Special 1.0 Total Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Special 1.6 Mi 8V 99cv 2p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Special/ Special Xtreme 1.0 Mi 2p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol TECH 1.0 Mi Total Flex 8V 2p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol TECH 1.0 Mi Total Flex 8V 4p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol TRACK 1.0 Mi Total Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol TRACK 1.0 Total Flex 12V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Trendline 1.0 T.Flex 12V 3p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Trendline 1.0 T.Flex 12V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Trendline 1.0 T.Flex 8V 3p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Trendline 1.0 T.Flex 8V 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Trendline 1.6 T.Flex 8V 3p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Trendline 1.6 T.Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Trendline I Motion 1.6 T. Flex 8V 3p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol Trendline I MOTION 1.6 T. Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol TSi 1.8/ 1.8Mi',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Gol TSi 2000 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf  BLACK EDITON 2.0 Mi T. Flex 8V Tip',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf  TECH 1.6 Mi Total Flex 8V 4p',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf 1.6 Mi Total Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf 1.6 Mi Trip/ Sport 101cv 8V',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf 1.6Mi/ 1.6Mi Gener./Black & Silver',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf 1.8 Mi Sport 150cv Turbo Mec/Aut.',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf 2.0/ 2.0 Mi Flex Aut/Tiptronic.',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf 2.0/ 2.0 Mi Flex Comfortline Aut.',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf 2.0/ 2.0 Mi Flex Comfortline/ Sport',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf 2.0/2.0 T. Flex Mec.(Black & Silv)',
            'year' => '2011',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Comfort. 200 TSI 1.0 Flex 12V Aut.',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Comfortline 1.0 TSI Total Flex Mec.',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Comfortline 1.4 TSI 140cv Aut.',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Comfortline 1.4 TSI 140cv Mec.',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Comfortline 1.6 MSI Total Flex Aut.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Comfortline 1.6 MSI Total Flex Mec.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Flash 1.6 Mi/1.6 Mi Tot. Flex 8V 4p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GL 1.8/ 2.0i 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GLX 2.0 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GT 2.0 Mi T. Flex 8V 4p Tiptronic',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GT 2.0 Mi Total Flex 8V 4p',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTE TSI 1.4 16V Híbrido Aut.',
            'year' => '2020',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 1.8 Mi 180/193cv Turbo 4p Mec.',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 1.8 Mi 180/193cv Turbo 4p Tip.',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 1.8 Mi 20V 2p Turbo Mec.',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 1.8 Mi 20V Turbo 2p Aut.',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 1.8 Mi 20V Turbo 4p Aut.',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 1.8 Mi 20V Turbo 4p Mec.',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTI 1.8 Turbo',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 2.0',
            'year' => '1998',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 2.0 TSI 220cv Aut.',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi 350 TSI 2.0 230cv 16V Aut.',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTi Cabrio 2.0 Mi',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf GTI VR6/ Golf 2.8 VR6',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Highline 1.4 TSI 140cv Aut.',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Highline 1.4 TSI 140cv Mec.',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Highline 1.4 TSI Total Flex Aut.',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Highline 1.4 TSI Total Flex Mec.',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Highline 250 TSI 1.4 Flex 16V Aut.',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf SILVER EDIT. 2.0 Mi T.Flex 8v Mec.',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf SILVER EDIT. 2.0 Mi T.Flex 8V Tip.',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Sportline 1.6 Mi Total Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Sportline 2.0 Mi Total F. 8V Tip.',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Variant Comf. 250 1.4 TSI Flex Aut.',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Variant Comfort. 1.4 TSI T.Flex Aut',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Variant Comfortline 1.4 TSI  Aut.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Variant Comfortline 1.4 TSI Mec.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Variant High. 250 1.4 TSI Flex Aut.',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Variant Highli. 1.4 TSI T.Flex Aut',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Golf Variant Highline 1.4 TSI Aut.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Grand Saveiro Xtreme/Street  1.6/1.8/2.0',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA  GLX III 2.8 VR6',
            'year' => '1995',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA 2.5 20V 150/170cv Tiptronic',
            'year' => '2011',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA 250 TSI 1.4 flex 16v Aut.',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Comfort. 250 TSI 1.4 Flex 16v Aut.',
            'year' => '2020',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Comfortline  2.0 T.Flex 8V 4p Mec.',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Comfortline 1.4 TSI 16V 4p Aut.',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Comfortline 2.0 T.Flex 8V 4p Tipt.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA GLI 350 TSI 2.0 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Highline 2.0 TSI 16V 4p Tiptronic',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA R-Line 250 TSI 1.4 Flex 16V Aut.',
            'year' => '2020',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Trendline 1.4 TSI 16V 4p  Aut.',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Trendline 1.4 TSI 16V 4p Mec.',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Trendline 2.0 T.Flex 8V 4p Tip.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'JETTA Variant 2.5 20V 170cv Tiptronic',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Carat',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Escolar 1.6 MPi',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Escolar/50 anos 1.4 Mi Total Flex',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Furgão',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Furgão 1.4 Mi Total Flex 8V',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi LAST EDITION 56 1.4 Mi Total Flex',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Lotação 1.4 Mi Total Flex 8V',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Lotação 1.6 MPi',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Pick-Up',
            'year' => '2000',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Standard 1.4 Mi Total Flex 8V',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Kombi Standard/ Luxo/ Série Prata',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Logus 1.6 / CLi / CL/ GL',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Logus 1.8 / CLi / CL',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Logus GLi / GL 1.8',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Logus GLS 1.8',
            'year' => '1994',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Logus GLSi / GLS 2000',
            'year' => '1995',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Logus Wolfsburg Edition 2000i',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'New Beetle 2.0 Mi Mec./Aut.',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Nivus Comfortline 1.0 200 TSI Flex Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Nivus Highline 1.0 200 TSI Flex Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Nivus Launching Ed. 1.0 200 TSI Flex Aut',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.0 Mi FUN/ SunSet 16V 4p',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.0 Mi Plus 16v 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.0 Mi Summer 16v 4p',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.0 Mi Tour 16V 76cv 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.6 Mi Plus Total Flex  8V 4p',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.6 Mi/ 1.6 Mi City',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.6Mi/1.6Mi City/T.Field T.Flex',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.8 Mi City Total Flex 8V 4p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.8 Mi CROSSOVER Total Flex 8V 4p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.8 Mi Plus Total Flex 8V 4p',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.8 Mi T. Field Total Flex 8V 4p',
            'year' => '2008',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.8 Mi Tour 8V 99cv 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1.8 Mi/ 1.8 Mi Plus',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1000 Mi 16V 2p e 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 1000 Mi 16V 4p Turbo',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 2.0 Mi Tour 8V 112cv 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati 2.0 Mi/ 2.0 Mi Track & Field',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati C 1.6/ CL 1.6 Mi 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati CL 1.8 Mi 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati CLi / CL/ Atlanta 1.6',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati CLi / CL/ Atlanta 1.8',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati COMFORTLINE 1.6 Mi Tot.Flex 8V 4p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati COMFORTLINE 1.8 Mi Tot.Flex 8V 4p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati CROSSOVER 2.0 8V/ 1.0 16V TB 4p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati Evidence 1.8 8V/ 1.0 16V TB 4p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati GL 1.6 Mi/ 1.6/ GLS/ Club 1.6',
            'year' => '1998',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati GL 1.8 Mi/ Club 1.8 Mi 2p e 4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati GLi / GL 1.8',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati GLS 2.0 Mi 2/4p',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati GLSi 2.0 / GLS/ Surf 1.8',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati GTi 2.0 Mi 16V',
            'year' => '2000',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati Plus/ LS/ S',
            'year' => '1990',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati SURF 1.6 Mi Total Flex',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati SURF 1.8 Mi Total Flex',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati TITAN 1.6 Mi Total Flex 8V 4p',
            'year' => '2012',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Parati Utility 1.8 8V/ 1.0 Turbo 16V',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat  L/LS/LSe/GL/GLS/TS/Fla/Vill/Plus',
            'year' => '1989',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 1.8 Aut.',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 1.8 Mec.',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 1.8 Tiptronic',
            'year' => '2000',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 2.0',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 2.0 FSI Tiptronic',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 2.8 V6 Mec.',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 2.8 V6 Protect Tiptronic',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 2.8 V6 Tiptronic',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat 3.2 V6 FSI 24V 250cv Tip.',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat CC 2.0 TSI 211cv Tiptronic',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat CC 3.6 V6 FSI 300cv Tiptronic',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Comfortline 2.0 TSI 220cv Tip.',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Highline 2.0 TSI 220cv Tip.',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Pointer GTS',
            'year' => '1989',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat R-Line TB 2.0 TSI Tiptronic 4p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat TB 2.0 FSI/TSI 211cv Tiptronic 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Turbo 1.8 Mec.',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Turbo 1.8 Tiptronic',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant  2.0 FSI 150cv Tiptron.5p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant 1.8 Aut.',
            'year' => '2000',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant 1.8 Mec.',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant 2.0',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant 2.8 V6',
            'year' => '2000',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant 2.8 V6 Tiptronic',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant 3.2 V6 FSI 24V 250cv Tip.',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant R-Line TB 2.0 TSI Tip. 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant Turbo 1.8',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant Turbo 1.8 Tiptronic',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant Turbo 2.0 FSI Tiptron. 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat Variant VR6 2.8',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Passat VR6 2.8',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Pointer 1.8 / CLi',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Pointer GLi 1.8',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Pointer GLi 2.0',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Pointer GTi 2.0',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo 1.0 Flex 12V 5p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo 1.0 Mi 79cv 16V 5p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo 1.6 E-Flex 8V 5p',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo 1.6 Mi/ S.Ouro 1.6Mi 101cv 8V 5p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo 1.6 Mi/S.Ouro 1.6 Mi Tot.Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo 1.6 MSI Flex 16V 5p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo 1.6 MSI Total Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo 2.0 Mi 116cv 8V 5p',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo BLUEMOTION 1.6 Total Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Classic 1.0 Mi 16v  65cv 4p',
            'year' => '2001',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Classic/ Special 1.8 Mi',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Comfort. 200 TSI 1.0 Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo GT 2.0 Mi Total Flex 8V 5p',
            'year' => '2012',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo GTI 1.8 Mi 150cv 20V Turbo 3p',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo GTS 1.4 TSI 16V Flex',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Highline 200 TSI 1.0 Flex 12V Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo I MOTION 1.6 Total Flex  5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Next 1.6 Mi 101cv 8V 5p',
            'year' => '2003',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sed. COMFORT. 1.6 Mi Tot. Flex 8v',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sed./Sed. COMF. 2.0/2.0 Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sed.COMFORT. I MOTION 1.6 T.Flex 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sedan 1.6 Mi 101cv 8V 4p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sedan 1.6 Mi Total Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sedan Evidence 1.6 Mi T.Flex 8v 4p',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sedan I MOTION  1.6 Total Flex  4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sense 200 TSI 1.0 Flex 12V Aut',
            'year' => '2020',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo SPORTLINE 1.6 Mi Total Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo Sportline 2.0 Mi Total Flex 8V 5p',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Polo SPORTLINE I MOTION 1.6 T.Flex 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Quantum 1.8 Mi/ 1.8i',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Quantum 2.0 Mi',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Quantum CLi / CL / C/ CS/ CD/ CG 1.8/2.0',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Quantum Evidence 2.0 Mi',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Quantum Exclusive 2.0 Mi',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Quantum GLi / GL 1.8/ 2.0',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Quantum GLSi / GLS 1.8/Sport/ Family 2.0',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana 1.8 Mi',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana 2.0 Mi 2p e 4p',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana CLi /CL /C 1.8/2.0 /SU 2.0 2p/4p',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana COMFORTLINE 1.8 Mi 8V 4p',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana CS/CD/CG',
            'year' => '1986',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana Evidenc 2.0 MI',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana Exclusiv 2.0 Mi/ Executivo 2.0i',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana GLi / GL/ Sport 1.8/ 2.0',
            'year' => '1997',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Santana GLSi / GLS 1.8/ 2.0',
            'year' => '1996',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro 1.6 Mi Total Flex 8V CE',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro 1.6 Mi/ 1.6 Mi Total Flex 8V',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro 1.6 Mi/ 1.6Mi City Total Flex 8V',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro 1.8 Mi',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro 2.0 Mi',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro City 1.8 Mi Total Flex 8V',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro CL 1.6 Mi / CL/ C 1.6',
            'year' => '2000',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro CL/ Summer 1.8 Mi e 1.8',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro CROSS 1.6 Mi Total Flex 8V CE',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro CROSS 1.6 T. Flex 16V CE',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro CROSS 1.6 T.Flex 16V CD',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro CROSSOVER 1.6 Mi Total Flex 8V',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro CROSSOVER 1.8 Mi 8V',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro CROSSOVER 1.8 Mi Total Flex 8V',
            'year' => '2007',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro FUN 1.8 99cv/ City e S.Surf  1.6',
            'year' => '2004',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro GL 1.8Mi e 1.6/GL/LS/S/ Sunset',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Highline 1.6 T. Flex 8V CD',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Pepper 1.6 Flex 8V CD',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Pepper 1.6 Flex 8V CE',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Robust 1.6 Total Flex 8V',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Robust 1.6 Total Flex 8V CD',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Rock in Rio 1.6 Total Flex 8V CD',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro SPORTLINE 1.6 Mi Total Flex 8V',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro SPORTLINE 1.8 Mi Total Flex 8V',
            'year' => '2006',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Startline 1.6 T.Flex 8V',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Super Surf  1.8 Mi 8V 99cv',
            'year' => '2005',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Super Surf 1.6 Mi Total Flex 8V',
            'year' => '2008',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Super Surf 1.8 Mi Total Flex 8V',
            'year' => '2008',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro SURF 1.6 Mi Total Flex 2p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro SURF 1.8 Mi Total Flex 2p',
            'year' => '2009',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro TITAN  1.6 Mi Total Flex 2p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Trendline 1.6 T.Flex 8V',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Trendline 1.6 T.Flex 8V CD',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Trendline 1.6 T.Flex 8V CE',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro Trendline 1.6 Total Flex 16V',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro TROOPER 1.6 Mi Total Flex 8V',
            'year' => '2013',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro TROOPER 1.6 Mi Total Flex 8V CE',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Saveiro TSi 2.0 Mi',
            'year' => '1999',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SpaceCross 1.6 Mi Total Flex 16V',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SpaceCross 1.6 Mi Total Flex 8V',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SpaceCross I MOTION 1.6 Mi T. Flex 16V',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SpaceCross I MOTION 1.6 Mi Total Flex 8V',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX  SPORTLINE/HIGHLINE 1.6 T.Flex',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX  TREND I MOTION 1.6 T. Flex 8V',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX 1.6 Trendline I MOT. T.Flex 8V',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX 1.6 Trendline Total Flex 8v 5p',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX 1.6/ 1.6 Trend Total Flex 8V 5p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX COMF. I MOTION 1.6 Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX COMFORTLINE 1.6 Mi T.Flex 8V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX HIGHLINE 1.6 T.Flex 16V',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX HIGHLINE I MOT. 1.6 T.Flex 16V',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX Route 1.6 Mi T.Flex 5p',
            'year' => '2010',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'SPACEFOX SPORTLINE/HIGHLINE I MOTION 1.6',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TAOS Comfortline 1.4 250 TSI Flex Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TAOS Highline 1.4 250 TSI Flex Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TAOS Launching Ed. 1.4 250 TSI Flex Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'T-Cross 1.0 TSI Flex 12V 5p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'T-Cross 1.0 TSI Flex 12V 5p Mec.',
            'year' => '2021',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'T-Cross Comfortline 1.0 TSI Flex 5p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'T-Cross Highline 1.4 TSI Flex 16V 5p Aut',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'T-Cross Sense 1.0 TSI Flex 5p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TIGUAN 1.4 TSI 16V 150cv 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TIGUAN 2.0 TSI 16V 200cv Tiptronic 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TIGUAN Allspac 250 TSI 1.4 Flex',
            'year' => '2020',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TIGUAN Allspac Comf 250 TSI 1.4 Flex',
            'year' => '2020',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TIGUAN Allspac R-Line 350 TSI 2.0 4x4',
            'year' => '2021',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TOUAREG 3.2 24V V6 Tiptronic 5p',
            'year' => '2008',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TOUAREG 3.6 24V V6 280cv Tiptronic 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TOUAREG 4.2 32V V8  Tiptronic 5p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'TOUAREG R-Line 4.2 V8 360cv Tiptronic 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! 1.0 Total Flex 12V 5p',
            'year' => '2020',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! black/white/red 1.0 T. Flex 12V 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! black/white/red 1.0 TSI TFlex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! black/white/red I MOTION 1.0 Flex 5p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! Connect 1.0 TSI Total Flex 12V 5p',
            'year' => '2020',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! cross 1.0 T. Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! cross 1.0 TSI Total Flex 12V 5p',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! cross I MOTION 1.0 T.Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! high 1.0 Total Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! high 1.0 TSI Total Flex 12V 5p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! high I MOTION 1.0 T. Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! move 1.0 T. Flex 12V 3p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! move 1.0 Total Flex 12V 5p',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! move 1.0 TSI Total Flex 12V 5p',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! move I MOTION 1.0 T. Flex 12V 3p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! move I MOTION 1.0 T. Flex 12V 5p',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! Pepper 1.0 TSI T.Flex 12V 5p',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! Run 1.0 Total Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! Run I MOTION 1.0 Total Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! SPEED 1.0 TSI T. Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! take 1.0 T. Flex 12V 3p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! take 1.0 Total Flex 12V 5p',
            'year' => '2019',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! track 1.0 Total Flex 12V 5p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'up! Xtreme 1.0 TSI Total Flex 12V 5p',
            'year' => '2021',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'Van 1.6 Mi (furgão)',
            'year' => '2002',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VIRTUS 1.6 MSI Flex 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VIRTUS 1.6 MSI Flex 16V 5p Mec.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VIRTUS Comfort. 200 TSI 1.0 Flex 12V Aut',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VIRTUS GTS 1.4 TSI 16V Flex 4p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VIRTUS Highline 200 TSI 1.0 Flex 12V Aut',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VIRTUS Sense 1.6 Flex 16V 5p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE  Trendline 1.0 T.Flex 8V 4p',
            'year' => '2017',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE 1.0 Flex 12V 4p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE 1.0/1.0 City Mi Total Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE 1.6 MSI Flex 16V 4p Aut.',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE 1.6 MSI Flex 8V 4p',
            'year' => '2022',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE 1.6/1.6 City  Mi Total Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE C/CL/Fox 1.6',
            'year' => '1995',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE CL 1.8',
            'year' => '1995',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE COMF/Highli. 1.6 T.Flex 8V 4p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE Comfortline  1.0 T.Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE Comfortline 1.0 T.Flex 12V 4p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE Evidence 1.6 Total Flex 8V 4p',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE GL 1.8 4p (Argentino)',
            'year' => '1995',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE GL/ Special 1.6/ 1.8',
            'year' => '1995',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE I MOTION  Trendline 1.6 T.Flex 8V',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE I MOTION 1.6 Mi Total Flex 8V',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE I MOTION COMF/Hghli.1.6 T.Flex 8V',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE I MOTION Evidence 1.6 T.Flex 8V',
            'year' => '2016',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE I MOTION TREND 1.6 Mi T. Flex 8V',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE L/LS/Plus/GLS/S/Sport/Super L.Ang',
            'year' => '1995',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE SELEÇÃO 1.0 Mi Total Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE SELEÇÃO 1.6 I MOTION T.Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE SELEÇÃO 1.6 Total Flex 8V 4p',
            'year' => '2015',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE TREND 1.6 Mi Total Flex 8V 4p',
            'year' => '2014',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE Trendline 1.0 T.Flex 12V 4p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        VehiclesModel::create([
            'name' => 'VOYAGE Trendline 1.6 T.Flex 8V 4p',
            'year' => '2018',
            'brand_id' => 80
        ]);
        /*----------Wake----------*/
        VehiclesModel::create([
            'name' => 'Cross TSI 1.0 TB 12V Flex Mec.',
            'year' => '2022',
            'brand_id' => 81
        ]);
        VehiclesModel::create([
            'name' => 'Way 1.6 Total Flex 8V Mec.',
            'year' => '2022',
            'brand_id' => 81
        ]);
        VehiclesModel::create([
            'name' => 'Way 1.8 Total Flex 8V Mec.',
            'year' => '2012',
            'brand_id' => 81
        ]);
        /*----------Walk----------*/
        VehiclesModel::create([
            'name' => 'Buggy  Walk Sport 1.6 8V 58cv',
            'year' => '2019',
            'brand_id' => 82
        ]);
    }
}
