<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName,
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'companyName' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'role' => $this->faker->randomElement(['admin', 'user']),
            'password' => bcrypt('password'), // or use Hash::make('password')
            'remember_token' => Str::random(10),
        ];
    }
}
