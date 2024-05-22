<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create specific test users
        User::create([
            'username' => 'admin',
            'firstName' => 'Admin',
            'lastName' => 'User',
            'companyName' => 'Admin Company',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => bcrypt('password'), // Ensure password is hashed correctly
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'username' => 'client',
            'firstName' => 'Client',
            'lastName' => 'User',
            'companyName' => 'Client Company',
            'email' => 'client@example.com',
            'role' => 'client',
            'password' => bcrypt('password'), // Ensure password is hashed correctly
            'remember_token' => Str::random(10),
        ]);

        // Generate additional fake users
        User::factory(10)->create();
    }
}
