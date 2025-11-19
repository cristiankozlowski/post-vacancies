<?php

namespace Database\Factories;

use App\Models\User;
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
        $programmingLanguages = ['php', 'node', 'phyton', 'java', 'c#'];
        $mode = ['on-site', 'hybrid', 'remote'];
        $type = ['full-time', 'part-time', 'contract', 'internship'];

        return [
            'user_id' => User::factory()->create(['is_hr' => true]),
            'title' => 'Desenvolvedor ' . $programmingLanguages[rand(0, 4)],
            'mode' => $mode[rand(0, 2)],
            'type' => $type[rand(0, 3)],
            'salary' => rand(1800, 3250),
            'location' => fake()->address(),
            'description' => fake()->paragraph(rand(2, 4)),
        ];
    }
}
