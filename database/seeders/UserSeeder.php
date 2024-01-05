<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Lottery;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create()->each(function($user) {
            // Lottery::odds(1, 2)->winner(function () use($user) {
                Profile::factory()->create([
                    'user_id' => $user->id
                ]);
            // });


            // Lottery::odds(1, 2)->winner(function () use($user) {
                Address::factory()->create([
                    'user_id' => $user->id
                ]);
            // });

                $roles = Role::inRandomOrder()
                    ->limit(fake()->numberBetween(1, 3))
                    ->get();

                $user->assignRole($roles);
        });
    }
}
