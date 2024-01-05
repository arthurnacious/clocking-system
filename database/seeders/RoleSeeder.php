<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    protected $roles = [
        'Admin',
        'Team Lead',
        'Finances',
        'Snr Developper',
        'Mid Developper', //I know!
        'Jnr Developper',
        'Web Designer', //I know!
        'Cummunity',
        'Graphic Designer',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }


    }
}
