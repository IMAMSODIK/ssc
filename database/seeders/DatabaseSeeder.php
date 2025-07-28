<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Profile;
use App\Models\User;
use Faker\Provider\Lorem;
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
            'role' => 'Admin',
            'password' => bcrypt('123')
        ]);

        $sadrach = User::create([
            'name' => 'Sadrach Meilando Siagian, S.H',
            'username' => 'sadrach',
            'role' => 'Lawyer',
            'password' => bcrypt('123')
        ]);

        Profile::create([
            'user_id' => $sadrach->id,
            'gambar' => 'lawyer/sadrach.jpeg',
            'instagram' => 'www.instagram.com',
            'facebook' => 'www.facebook.com',
            'email' => 'www.email.com',
            'whatsapp' => 'www.wa.com',
            'detail' => 'detail',
        ]);

        $ardik = User::create([
            'name' => 'Ardik Putra Pratama Sudibyo, S.H',
            'username' => 'ardik',
            'role' => 'Lawyer',
            'password' => bcrypt('123')
        ]);

        Profile::create([
            'user_id' => $ardik->id,
            'gambar' => 'lawyer/putra.jpeg',
            'instagram' => 'www.instagram.com',
            'facebook' => 'www.facebook.com',
            'email' => 'www.email.com',
            'whatsapp' => 'www.wa.com',
            'detail' => 'detail',
        ]);

        $lamria = User::create([
            'name' => 'Lamria Sirait, S.H',
            'username' => 'lamria',
            'role' => 'Lawyer',
            'password' => bcrypt('123')
        ]);

        Profile::create([
            'user_id' => $lamria->id,
            'gambar' => 'lawyer/lamrida.jpeg',
            'instagram' => 'www.instagram.com',
            'facebook' => 'www.facebook.com',
            'email' => 'www.email.com',
            'whatsapp' => 'www.wa.com',
            'detail' => 'detail',
        ]);

        $hosbal = User::create([
            'name' => 'Hosbal Maruli Sihombing, S.H',
            'username' => 'hosbal',
            'role' => 'Lawyer',
            'password' => bcrypt('123')
        ]);

        Profile::create([
            'user_id' => $hosbal->id,
            'gambar' => 'lawyer/hosbal.jpeg',
            'instagram' => 'www.instagram.com',
            'facebook' => 'www.facebook.com',
            'email' => 'www.email.com',
            'whatsapp' => 'www.wa.com',
            'detail' => 'detail',
        ]);

        $this->call([
            WebModelSeeder::class,
            BannerSeeder::class,
            LayananSeeder::class,
            TestimoniSeeder::class,
            GaleriSeeder::class,
            ClientSeeder::class
        ]);
    }
}
