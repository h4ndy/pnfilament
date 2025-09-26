<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            //
            'name' => $this->faker->sentence(4),
            'description' => $this->faker->optional->paragraph(),
            'status' => $this->faker->randomElement(['pending', 'on_hold','on_progress','completed','cancelled']),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'due_date' => $this->faker->optional()->dateTimeBetween('now' ,'+3 months'),
            'assigned_to' => $this->faker->optional()->randomElement([User::factory(),  null]),
            'project_id' => Project::factory(),
            'category_id' => Category::factory(),
            'image_path' => $this->faker->optional()->imageUrl(600,480,'task',true),
            'created_by' => User::factory(),



        ];
    }
}
