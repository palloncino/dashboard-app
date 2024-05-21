<?php

// database/factories/UserFactory.php

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
            'username' => $this->faker->userName,
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'companyName' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'role' => 'admin',
            'password' => bcrypt('password'), // or Hash::make('password')
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
