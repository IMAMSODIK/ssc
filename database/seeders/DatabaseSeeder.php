<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Sadrach Meilando Siagian, S.H',
            'username' => 'sadrach',
            'role' => 'lawyer',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Ardik Putra Pratama Sudibyo, S.H',
            'username' => 'ardik',
            'role' => 'lawyer',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Lamria Sirait, S.H',
            'username' => 'lamria',
            'role' => 'lawyer',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Hosbal Maruli Sihombing, S.H',
            'username' => 'hosbal',
            'role' => 'lawyer',
            'password' => bcrypt('123')
        ]);
    }
}
