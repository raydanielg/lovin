<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\District;

class RegionsAndDistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            'Arusha' => ['code' => 'AR', 'districts' => ['Arusha CC', 'Arumeru', 'Karatu', 'Longido', 'Meru', 'Monduli', 'Ngorongoro']],
            'Dar es Salaam' => ['code' => 'DS', 'districts' => ['Ilala', 'Kinondoni', 'Temeke', 'Kigamboni', 'Ubungo']],
            'Dodoma' => ['code' => 'DO', 'districts' => ['Bahi', 'Chamwino', 'Chemba', 'Dodoma CC', 'Kondoa', 'Kongwa', 'Mpwapwa']],
            'Geita' => ['code' => 'GE', 'districts' => ['Bukombe', 'Chato', 'Geita DC', 'Geita TC', 'Mbogwe', "Nyang'hwale"]],
            'Iringa' => ['code' => 'IR', 'districts' => ['Iringa DC', 'Iringa MC', 'Kilolo', 'Mafinga TC', 'Mufindi']],
            'Kagera' => ['code' => 'KA', 'districts' => ['Biharamulo', 'Bukoba DC', 'Bukoba MC', 'Karagwe', 'Kyerwa', 'Missenyi', 'Muleba', 'Ngara']],
            'Katavi' => ['code' => 'KT', 'districts' => ['Mlele', 'Mpanda DC', 'Mpanda MC', 'Tanganyika']],
            'Kigoma' => ['code' => 'KI', 'districts' => ['Buhigwe', 'Kakonko', 'Kasulu DC', 'Kasulu TC', 'Kibondo', 'Kigoma DC', 'Kigoma Ujiji MC', 'Uvinza']],
            'Kilimanjaro' => ['code' => 'KM', 'districts' => ['Hai', 'Moshi DC', 'Moshi MC', 'Mwanga', 'Rombo', 'Same', 'Siha']],
            'Lindi' => ['code' => 'LI', 'districts' => ['Kilwa', 'Lindi DC', 'Lindi MC', 'Liwale', 'Nachingwea', 'Ruangwa']],
            'Manyara' => ['code' => 'MA', 'districts' => ['Babati DC', 'Babati TC', 'Hanang', 'Kiteto', 'Mbulu', 'Simanjiro']],
            'Mara' => ['code' => 'MR', 'districts' => ['Bunda DC', 'Bunda TC', 'Butiama', 'Musoma DC', 'Musoma MC', 'Rorya', 'Serengeti', 'Tarime DC', 'Tarime TC']],
            'Mbeya' => ['code' => 'MB', 'districts' => ['Busokelo', 'Chunya', 'Ileje', 'Kyela', 'Mbeya CC', 'Mbeya DC', 'Rungwe']],
            'Morogoro' => ['code' => 'MO', 'districts' => ['Gairo', 'Ifakara TC', 'Kilombero', 'Kilosa', 'Morogoro MC', 'Mvomero', 'Ulanga', 'Malinyi']],
            'Mtwara' => ['code' => 'MT', 'districts' => ['Masasi DC', 'Masasi TC', 'Mtwara DC', 'Mtwara MC', 'Nanyumbu', 'Newala DC', 'Newala TC', 'Tandahimba']],
            'Mwanza' => ['code' => 'MW', 'districts' => ['Ilemela', 'Kwimba', 'Magu', 'Misungwi', 'Nyamagana', 'Sengerema', 'Ukerewe']],
            'Njombe' => ['code' => 'NJ', 'districts' => ['Ludewa', 'Makambako TC', 'Njombe DC', 'Njombe TC', "Wanging'ombe"]],
            'Pwani' => ['code' => 'PW', 'districts' => ['Bagamoyo', 'Kibaha DC', 'Kibaha TC', 'Kisarawe', 'Mafia', 'Mkuranga', 'Rufiji']],
            'Rukwa' => ['code' => 'RU', 'districts' => ['Kalambo', 'Nkasi', 'Sumbawanga DC', 'Sumbawanga MC']],
            'Ruvuma' => ['code' => 'RV', 'districts' => ['Madaba', 'Mbinga', 'Namtumbo', 'Nyasa', 'Songea DC', 'Songea MC', 'Tunduru']],
            'Shinyanga' => ['code' => 'SH', 'districts' => ['Kahama TC', 'Kishapu', 'Shinyanga DC', 'Shinyanga MC']],
            'Simiyu' => ['code' => 'SI', 'districts' => ['Bariadi DC', 'Bariadi TC', 'Busega', 'Itilima', 'Maswa', 'Meatu']],
            'Singida' => ['code' => 'SG', 'districts' => ['Ikungi', 'Iramba', 'Manyoni', 'Mkalama', 'Singida DC', 'Singida MC']],
            'Songwe' => ['code' => 'SO', 'districts' => ['Ileje', 'Mbozi', 'Momba', 'Songwe']],
            'Tabora' => ['code' => 'TB', 'districts' => ['Igunga', 'Kaliua', 'Nzega', 'Sikonge', 'Tabora MC', 'Urambo', 'Uyui']],
            'Tanga' => ['code' => 'TA', 'districts' => ['Handeni DC', 'Handeni TC', 'Kilindi', 'Korogwe DC', 'Korogwe TC', 'Lushoto', 'Mkinga', 'Muheza', 'Pangani', 'Tanga CC']],
            'Mjini Magharibi' => ['code' => 'MM', 'districts' => ['Mjini', 'Magharibi']],
            'Kaskazini Unguja' => ['code' => 'KU', 'districts' => ['Kaskazini A', 'Kaskazini B']],
            'Kusini Unguja' => ['code' => 'KSU', 'districts' => ['Kusini']],
            'Kati Unguja' => ['code' => 'KAT', 'districts' => ['Kati']],
            'Kaskazini Pemba' => ['code' => 'KP', 'districts' => ['Micheweni', 'Wete']],
            'Kusini Pemba' => ['code' => 'KSP', 'districts' => ['Chake Chake', 'Mkoani']],
        ];

        $order = 1;
        foreach ($regions as $regionName => $regionData) {
            $region = Region::updateOrCreate(
                ['name' => $regionName],
                ['code' => $regionData['code'], 'order' => $order++]
            );

            foreach ($regionData['districts'] as $districtName) {
                District::updateOrCreate(
                    ['region_id' => $region->id, 'name' => $districtName],
                    ['name' => $districtName]
                );
            }
        }
    }
}
