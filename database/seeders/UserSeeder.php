<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'username' => 'admin',
                'full_name' => 'Administrator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'shaina',
                'full_name' => 'Shaina Calonge',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'jhoanna',
                'full_name' => 'Jhoanna Calonge',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'marie',
                'full_name' => 'Marie Calonge',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'canaveras',
                'full_name' => 'Canaveras Calonge',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
