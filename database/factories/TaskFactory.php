<?php

namespace Database\Factories;

use App\Enums\Priority;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->boolean() ? fake()->text() : null,
            'priority' => fake()->randomElement(Priority::values()),
            'status' => fake()->randomElement(Status::values()),
        ];
    }
}
