<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            [
                'full_name' => 'Shaina Calonge',
                'email' => 'shaina@example.com',
                'phone' => '09171234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Jhoanna Calonge',
                'email' => 'jhoannaxample.com',
                'phone' => '09181234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Marie Calonge',
                'email' => 'marie@example.com',
                'phone' => '09191234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Canaveras Calonge',
                'email' => 'canaveras@example.com',
                'phone' => '09201234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'full_name' => 'Calonge Calonge',
                'email' => 'calonge@example.com',
                'phone' => '09211234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
