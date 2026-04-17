<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\Region;
use App\Models\District;
use App\Models\User;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    public function run(): void
    {
        // Get regions and districts
        $arushaRegion = Region::where('code', 'AR')->first();
        $darRegion = Region::where('code', 'DSM')->first();
        $dodomaRegion = Region::where('code', 'DO')->first();

        $arushaCbd = District::where('name', 'Arusha CBD')->first();
        $arumeru = District::where('name', 'Arumeru')->first();
        $karatu = District::where('name', 'Karatu')->first();
        $monduli = District::where('name', 'Monduli')->first();
        $ngorongoro = District::where('name', 'Ngorongoro')->first();

        // Get manager (first user)
        $manager = User::whereHas('role', function($q) {
            $q->where('slug', 'manager');
        })->first();

        if (!$manager) {
            $manager = User::first();
        }

        $schools = [
            [
                'name' => 'Arusha Secondary School',
                'registration_number' => 'SCH-001-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $arushaCbd?->id ?? 1,
                'ward' => 'Sakina',
                'type' => 'Secondary School',
                'category' => 'Public',
                'phone' => '+255712345678',
                'email' => 'arusha.sec@schools.go.tz',
                'address' => 'P.O. Box 1234, Arusha',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 450,
                'teacher_count' => 28,
            ],
            [
                'name' => 'Milimani Primary School',
                'registration_number' => 'SCH-002-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $arumeru?->id ?? 2,
                'ward' => 'Olasiti',
                'type' => 'Primary School',
                'category' => 'Public',
                'phone' => '+255723456789',
                'email' => 'milimani.pri@schools.go.tz',
                'address' => 'Olasiti Area, Arumeru',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 320,
                'teacher_count' => 15,
            ],
            [
                'name' => 'Olmoti Secondary School',
                'registration_number' => 'SCH-003-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $karatu?->id ?? 3,
                'ward' => 'Karatu',
                'type' => 'Secondary School',
                'category' => 'Public',
                'phone' => '+255734567890',
                'email' => 'olmoti.sec@schools.go.tz',
                'address' => 'Karatu Town Centre',
                'status' => 'Pending',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 580,
                'teacher_count' => 32,
            ],
            [
                'name' => 'Ngorongoro Mixed School',
                'registration_number' => 'SCH-004-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $ngorongoro?->id ?? 5,
                'ward' => 'Nainokanoka',
                'type' => 'Mixed School',
                'category' => 'Faith-Based',
                'phone' => '+255745678901',
                'email' => 'ngorongoro.mix@schools.go.tz',
                'address' => 'Nainokanoka Village, Ngorongoro',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 210,
                'teacher_count' => 12,
            ],
            [
                'name' => 'Monduli Secondary School',
                'registration_number' => 'SCH-005-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $monduli?->id ?? 4,
                'ward' => 'Monduli',
                'type' => 'Secondary School',
                'category' => 'Public',
                'phone' => '+255756789012',
                'email' => 'monduli.sec@schools.go.tz',
                'address' => 'Monduli Town, P.O. Box 45',
                'status' => 'Inactive',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 425,
                'teacher_count' => 22,
            ],
            [
                'name' => 'St. Jude Primary School',
                'registration_number' => 'SCH-006-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $arushaCbd?->id ?? 1,
                'ward' => 'Ngarenaro',
                'type' => 'Primary School',
                'category' => 'Private',
                'phone' => '+255767890123',
                'email' => 'stjude.pri@gmail.com',
                'address' => 'Ngarenaro Street, Arusha',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 280,
                'teacher_count' => 18,
            ],
            [
                'name' => 'Karatu Day Secondary School',
                'registration_number' => 'SCH-007-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $karatu?->id ?? 3,
                'ward' => 'Karatu',
                'type' => 'Secondary School',
                'category' => 'Public',
                'phone' => '+255778901234',
                'email' => 'karatu.day@schools.go.tz',
                'address' => 'Karatu Town, Near Market',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 520,
                'teacher_count' => 30,
            ],
            [
                'name' => 'Arusha Girls Secondary School',
                'registration_number' => 'SCH-008-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $arushaCbd?->id ?? 1,
                'ward' => 'Kijenge',
                'type' => 'Secondary School',
                'category' => 'Public',
                'phone' => '+255789012345',
                'email' => 'arushagirls@schools.go.tz',
                'address' => 'Kijenge Area, Arusha',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 650,
                'teacher_count' => 38,
            ],
            [
                'name' => 'Olkerian Primary School',
                'registration_number' => 'SCH-009-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $monduli?->id ?? 4,
                'ward' => 'Monduli Juu',
                'type' => 'Primary School',
                'category' => 'Public',
                'phone' => '+255790123456',
                'email' => 'olkerian.pri@schools.go.tz',
                'address' => 'Monduli Juu Village',
                'status' => 'Pending',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 180,
                'teacher_count' => 9,
            ],
            [
                'name' => 'Engutoto Secondary School',
                'registration_number' => 'SCH-010-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $arumeru?->id ?? 2,
                'ward' => 'Usa River',
                'type' => 'Secondary School',
                'category' => 'Public',
                'phone' => '+255701234567',
                'email' => 'engutoto@schools.go.tz',
                'address' => 'Usa River Area, Arumeru',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 380,
                'teacher_count' => 21,
            ],
            [
                'name' => 'Ilboru Special Needs School',
                'registration_number' => 'SCH-011-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $arushaCbd?->id ?? 1,
                'ward' => 'Ilboru',
                'type' => 'Special Needs School',
                'category' => 'Public',
                'phone' => '+255712345678',
                'email' => 'ilboru.special@schools.go.tz',
                'address' => 'Ilboru Area, Arusha',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 95,
                'teacher_count' => 14,
            ],
            [
                'name' => 'Kisongo Academy',
                'registration_number' => 'SCH-012-2024',
                'region_id' => $arushaRegion?->id ?? 1,
                'district_id' => $arumeru?->id ?? 2,
                'ward' => 'Kisongo',
                'type' => 'Mixed School',
                'category' => 'Private',
                'phone' => '+255723456789',
                'email' => 'kisongo.academy@gmail.com',
                'address' => 'Kisongo Area, Arumeru',
                'status' => 'Active',
                'manager_id' => $manager?->id ?? 1,
                'student_count' => 340,
                'teacher_count' => 20,
            ],
        ];

        foreach ($schools as $schoolData) {
            School::firstOrCreate(
                ['registration_number' => $schoolData['registration_number']],
                $schoolData
            );
        }
    }
}
