<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement(User::all()->pluck('id')),
            'country_id' => fake()->randomElement(Country::all()->pluck('id')),
            'street_address' => fake()->streetAddress(),
            'city' => fake()->city(),
            'state_province' => fake()->state(),
            'zip_code' => fake()->postcode(),
        ];
    }
}
