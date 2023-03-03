<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Role as ModelsRole;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsRole::create([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);
        ModelsRole::create([
            'name' => 'Teacher',
            'guard_name' => 'web'
        ]);
        ModelsRole::create([
            'name' => 'Student Manager',
            'guard_name' => 'web'
        ]);
        ModelsRole::create([
            'name' => 'Student',
            'guard_name' => 'web'
        ]);
        ModelsRole::create([
            'name' => 'Process',
            'guard_name' => 'web'
        ]);
        ModelsRole::create([
            'name' => 'Reject',
            'guard_name' => 'web'
        ]);
        // ModelsRole::create([
        //     'name' => 'admin',
        //     'guard_name' => 'web'
        // ]);
        // ModelsRole::create([
        //     'name' => 'user',
        //     'guard_name' => 'web'
        // ]);
    }
}
