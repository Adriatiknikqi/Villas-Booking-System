<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class defaultUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Admin User',
            'last_name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        User::create([
            'first_name' => 'Owner User',
            'last_name' => 'Owner',
            'email' => 'owner@example.com',
            'password' => bcrypt('password'),
            'role' => 'owner'
        ]);
        User::create([
            'first_name' => 'Client User',
            'last_name' => 'Client',
            'email' => 'client@example.com',
            'password' => bcrypt('password'),
            'role' => 'client'
        ]);
    }
}
