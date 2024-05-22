<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create 10 dummy users
        User::factory(10)->create();

        // Create a specific admin user
        User::factory()->create([
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        // Create a specific client user
        User::factory()->create([
            'email' => 'client@example.com',
            'password' => Hash::make('password'),
            'role' => 'client'
        ]);
    }
}
