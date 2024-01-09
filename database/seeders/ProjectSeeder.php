<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory(5000)->create()->each(function($project) {
            $companies = Company::inRandomOrder()->limit(fake()->numberBetween(10, 50))->get();
            $users = User::inRandomOrder()->limit(fake()->numberBetween(9, 10))->get();
            $project->companies()->attach($companies);
            $project->users()->attach($users);
        });
    }
}
