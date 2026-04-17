<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            ['name' => 'Arusha', 'code' => 'AR', 'order' => 1],
            ['name' => 'Dar es Salaam', 'code' => 'DS', 'order' => 2],
            ['name' => 'Dodoma', 'code' => 'DO', 'order' => 3],
            ['name' => 'Geita', 'code' => 'GE', 'order' => 4],
            ['name' => 'Iringa', 'code' => 'IR', 'order' => 5],
            ['name' => 'Kagera', 'code' => 'KA', 'order' => 6],
            ['name' => 'Katavi', 'code' => 'KT', 'order' => 7],
            ['name' => 'Kigoma', 'code' => 'KI', 'order' => 8],
            ['name' => 'Kilimanjaro', 'code' => 'KM', 'order' => 9],
            ['name' => 'Lindi', 'code' => 'LI', 'order' => 10],
            ['name' => 'Manyara', 'code' => 'MA', 'order' => 11],
            ['name' => 'Mara', 'code' => 'MR', 'order' => 12],
            ['name' => 'Mbeya', 'code' => 'MB', 'order' => 13],
            ['name' => 'Morogoro', 'code' => 'MO', 'order' => 14],
            ['name' => 'Mtwara', 'code' => 'MT', 'order' => 15],
            ['name' => 'Mwanza', 'code' => 'MW', 'order' => 16],
            ['name' => 'Njombe', 'code' => 'NJ', 'order' => 17],
            ['name' => 'Pemba Kusini', 'code' => 'PK', 'order' => 18],
            ['name' => 'Pemba North', 'code' => 'PN', 'order' => 19],
            ['name' => 'Pwani', 'code' => 'PW', 'order' => 20],
            ['name' => 'Rukwa', 'code' => 'RU', 'order' => 21],
            ['name' => 'Ruvuma', 'code' => 'RV', 'order' => 22],
            ['name' => 'Shinyanga', 'code' => 'SH', 'order' => 23],
            ['name' => 'Simiyu', 'code' => 'SI', 'order' => 24],
            ['name' => 'Singida', 'code' => 'SG', 'order' => 25],
            ['name' => 'Songwe', 'code' => 'SO', 'order' => 26],
            ['name' => 'Tabora', 'code' => 'TB', 'order' => 27],
            ['name' => 'Tanga', 'code' => 'TA', 'order' => 28],
            ['name' => 'Unguja Kusini', 'code' => 'UK', 'order' => 29],
            ['name' => 'Unguja North', 'code' => 'UN', 'order' => 30],
            ['name' => 'Unguja West', 'code' => 'UW', 'order' => 31],
        ];

        foreach ($regions as $region) {
            \App\Models\Region::create($region);
        }
    }
}
