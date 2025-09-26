<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $userId = User::factory()->create()->id;

        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->unique()->companyEmail,
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'created_by' => $userId,
        ];
    }
}
