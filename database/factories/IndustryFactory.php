<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Industry>
 */
class IndustryFactory extends Factory
{
    protected static $industryNames = [
        'Information Technology',
        'Healthcare',
        'Finance',
        'Education',
        'Manufacturing',
        'Retail',
        'Automotive',
        'Telecommunications',
        'Energy',
        'Construction',
        'Aerospace',
        'Media and Entertainment',
        'Hospitality',
        'Real Estate',
        'Transportation',
        'Biotechnology',
        'Pharmaceutical',
        'Food and Beverage',
        'Fashion',
        'Insurance',
        'Consulting',
        'Environmental',
        'Marketing',
        'Legal',
        'Nonprofit',
        'Government',
        'Research and Development',
        'Travel',
        'Sports',
        'Art and Design',
        'Logistics',
        'E-commerce',
        'Social Media',
        'Gaming',
        'Agriculture',
        'Fitness',
        'Beauty',
        'Telecom',
        'Utilities',
        'Medical Devices',
        'Space Exploration',
        'Renewable Energy',
        'Cybersecurity',
        'Blockchain',
        'Robotics',
        'Virtual Reality',
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement($this->industryNames),
            'description' => fake()->sentence()
        ];
    }
}
