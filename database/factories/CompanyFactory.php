<?php

namespace Database\Factories;

use App\Models\Industry;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->company();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'logo' => fake()->randomElement([null, null, fake()->image('public/storage/companies/', 400, 400, null, false), null]),
            'description' => fake()->sentence(nbWords: 50),
            'founded_at' => fake()->date(),
            'headquarters_address' => fake()->address(),
            'size_range' => fake()->numberBetween(1, 10) .' - '. fake()->numberBetween(10, 20) ,
        ];
    }
}
