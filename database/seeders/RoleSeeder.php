<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Super Admin',
                'slug' => 'superadmin',
                'description' => 'Has full access to all system features and can manage other admins',
                'level' => 100,
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'Can manage clerks, managers, and view all reports',
                'level' => 80,
            ],
            [
                'name' => 'Manager',
                'slug' => 'manager',
                'description' => 'Can manage clerks, view reports, and oversee marking operations',
                'level' => 60,
            ],
            [
                'name' => 'Clerk',
                'slug' => 'clerk',
                'description' => 'Can enter marks, view student data, and perform basic operations',
                'level' => 40,
            ],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::firstOrCreate(
                ['slug' => $role['slug']],
                $role
            );
        }

        // Create default users for each role
        $this->createDefaultUsers();
    }

    private function createDefaultUsers(): void
    {
        $users = [
            [
                'name' => 'Super Administrator',
                'email' => 'superadmin@emas.co.tz',
                'password' => bcrypt('password123'),
                'role_slug' => 'superadmin',
            ],
            [
                'name' => 'System Administrator',
                'email' => 'admin@emas.co.tz',
                'password' => bcrypt('password123'),
                'role_slug' => 'admin',
            ],
            [
                'name' => 'Default Manager',
                'email' => 'manager@emas.co.tz',
                'password' => bcrypt('password123'),
                'role_slug' => 'manager',
            ],
            [
                'name' => 'Default Clerk',
                'email' => 'clerk@emas.co.tz',
                'password' => bcrypt('password123'),
                'role_slug' => 'clerk',
            ],
        ];

        foreach ($users as $userData) {
            $roleSlug = $userData['role_slug'];
            unset($userData['role_slug']);

            $role = \App\Models\Role::where('slug', $roleSlug)->first();
            if ($role) {
                $userData['role_id'] = $role->id;
                $userData['email_verified_at'] = now();
                
                // Use firstOrCreate to avoid duplicate email errors
                $user = \App\Models\User::firstOrCreate(
                    ['email' => $userData['email']],
                    $userData
                );

                // Create complete profile if not exists
                if (!$user->profile) {
                    $user->profile()->create([
                        'phone_number' => '071234567' . rand(0, 9),
                        'date_of_birth' => '1990-01-01',
                        'gender' => 'male',
                        'region_id' => 1, // Arusha
                        'district_id' => 1, // Arusha CC
                        'profile_step' => 'complete',
                        'is_complete' => true,
                    ]);
                }
            }
        }
    }
}
