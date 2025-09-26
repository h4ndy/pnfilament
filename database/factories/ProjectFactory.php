<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Client;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->create();
        $startDate = $this->faker->dateTimeBetween('-6 month', 'now');
        $endDate = $this->faker->dateTimeBetween($startDate, '+1 year');
        return [
            'name' => $this->faker->sentence(3),
            'code' => strtoupper($this->faker->bothify('PRJ-###')), // ex: PRJ-123
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['pending', 'on_hold', 'on_progress', 'completed', 'cancelled']),
            'image_path' => $this->faker->optional()->imageUrl(600, 800, 'project'),
            'client_id' => Client::factory(), // aman kalau relasi didefinisikan
            'category_id' => Category::factory(), // atau numberBetween
            'created_by' => $user->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            //
        ];
    }
}
