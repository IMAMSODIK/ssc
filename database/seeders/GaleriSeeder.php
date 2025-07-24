<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 26; $i++){
            Galeri::create([
                'gambar' => 'galeri/' . $i . '.jpg',
                'keterangan' => 'Keterangan gambar default',
                'created_by' => 1,
                'updated_by' => 1,
            ]);
        }
    }
}
