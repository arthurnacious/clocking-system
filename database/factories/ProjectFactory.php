<?php

namespace Database\Factories;

use App\Models\Company;
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
        return [
            'company_id' => fake()->randomElement(Company::all()->pluck('id')),
            'name' => fake()->word(),
            'payout' => fake()->floatval(),
            'description' => fake()->sentence(),
            'due_at' => fake()->dateTimeBetween('+15 days', '+100 days'),
            'completed_at' => fake()->dateTimeBetween('+100 days', '+12 months'),
            'completed' => fake()->boolean(),
        ];
    }
}
