<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            // 'user_id' => User::factory(['is_hr' => true]),
            // 'title' => 'Desenvolvedor ' . fake()->word(),
            // 'mode' => ['on-site', 'hybrid', 'remote'],
            // 'type' => ['full-time', 'part-time', 'contract', 'internship'],
            // 'salary' => fake()->price(),
            // 'location' => fake(),
            // 'description' => fake()->paragraph(2),
        ];
    }
}
