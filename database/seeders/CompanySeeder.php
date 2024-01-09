<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Industry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory(100)->create()->each(function($company) {
            $industries = Industry::inRandomOrder()->limit(fake()->numberBetween(1, 5))->get();
            $company->industries()->attach($industries);
        });
    }
}
