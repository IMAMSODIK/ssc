<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'logo' => 'client/harum.png',
            'created_by' => 1,
            'updated_by' => 1
        ]);

        Client::create([
            'logo' => 'client/japasian.jpeg',
            'created_by' => 1,
            'updated_by' => 1
        ]);

        Client::create([
            'logo' => 'client/latitude.png',
            'created_by' => 1,
            'updated_by' => 1
        ]);

        Client::create([
            'logo' => 'client/mabora.jpeg',
            'created_by' => 1,
            'updated_by' => 1
        ]);

        Client::create([
            'logo' => 'client/mandala.jpg',
            'created_by' => 1,
            'updated_by' => 1
        ]);

        Client::create([
            'logo' => 'client/nk.jpeg',
            'created_by' => 1,
            'updated_by' => 1
        ]);

        Client::create([
            'logo' => 'client/pungkook.jpg',
            'created_by' => 1,
            'updated_by' => 1
        ]);

        Client::create([
            'logo' => 'client/vautid.png',
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
