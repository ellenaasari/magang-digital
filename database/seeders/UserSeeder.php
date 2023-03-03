<?php

namespace Database\Seeders;

use App\Models\Leader;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'gender'=>'l',
            'password' => bcrypt('1')
        ]);
        $user->assignRole('Admin');

        // Siswa atau Peserta
        $user = User::create([
            'name' => 'Helen Dwi Hapsari',
            'email' => 'student@gmail.com',
            'gender'=>'l',
            'password' => bcrypt('1')
        ]);
        $user->assignRole('Student');

        // Pembina
        $user = User::create([
            'name' => 'Nur Hamid',
            'email' => 'pembina@gmail.com',
            'gender'=>'l',
            'password' => bcrypt('1')
        ]);
        Leader::create([
            'user_id' => $user->id,
            'magang_leader_id' => 1
        ]);
        $user->assignRole('Teacher');

        $user = User::create([
            'name' => 'Ryan Risqi Maulana',
            'email' => 'pembina1@gmail.com',
            'gender'=>'l',
            'password' => bcrypt('1')
        ]);
        Leader::create([
            'user_id' => $user->id,
            'magang_leader_id' => 2
        ]);
        $user->assignRole('Teacher');

        $user = User::create([
            'name' => 'Dewi Qurrotul A yun',
            'email' => 'pembina2@gmail.com',
            'gender'=>'l',
            'password' => bcrypt('1')
        ]);
        Leader::create([
            'user_id' => $user->id,
            'magang_leader_id' => 3
        ]);
        $user->assignRole('Teacher');

        // Kesiswaan
        $user = User::create([
            'name' => 'Erni Sumarlia',
            'email' => 'kesiswaan@gmail.com',
            'gender'=>'p',
            'password' => bcrypt('1')
        ]);
        $user->assignRole('Student Manager');

    }
}
