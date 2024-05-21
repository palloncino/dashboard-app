<?php

namespace Database\Factories;

use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    protected $model = Device::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'type' => $this->faker->word,
            'serial_number' => $this->faker->unique()->uuid,
            'description' => $this->faker->sentence,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
