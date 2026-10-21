<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'full_name' => 'Shaina Calonge', 'email' => 'shaina.calonge@gmail.com', 'phone' => '09123456789'],
            ['id' => 2, 'full_name' => 'Jhoanna Calonge', 'email' => 'jhoanna.calonge@gmail.com', 'phone' => '09123456789'],
            ['id' => 3, 'full_name' => 'Marie Calonge', 'email' => 'marie.calonge@gmail.com', 'phone' => '09123456789'],
            ['id' => 4, 'full_name' => 'Canaveras Calonge', 'email' => 'canaveras.calonge@gmail.com', 'phone' => '09123456789'],
            ['id' => 5, 'full_name' => 'Shai Calonge', 'email' => 'shai.calonge@gmail.com', 'phone' => '09123456789'],
        ];

        return view('customers.index', compact('customers'));
    }
}