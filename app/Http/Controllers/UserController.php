<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin', 'full_name' => 'Shaina', 'role' => 'Administrator'],
            ['id' => 2, 'username' => 'cashier.01', 'full_name' => 'Jhoanna', 'role' => 'Cashier'],
            ['id' => 3, 'username' => 'cashier.02', 'full_name' => 'Marie', 'role' => 'Cashier'],
            ['id' => 4, 'username' => 'manager', 'full_name' => 'Canaveras', 'role' => 'Manager'],
            ['id' => 5, 'username' => 'staff.01', 'full_name' => 'Calonge', 'role' => 'Staff'],
        ];

        return view('users.index', compact('users'));
    }
}

