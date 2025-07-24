<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'gambar' => 'banner/image2.jpeg',
            'heading_1' => 'Tim Pengacara Berpengalaman',
            'heading_2' => 'Dengan lebih dari 15 tahun pengalaman, kami siap mendampingi Anda dalam berbagai masalah hukum.',
            'text_tombol' => 'Lihat Profil Pengacara',
            'link_tombol' => '#',
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Banner::create([
            'gambar' => 'banner/image3.jpeg',
            'heading_1' => 'Konsultasi Hukum Gratis',
            'heading_2' => 'Manfaatkan konsultasi hukum pertama gratis dengan pengacara spesialis kami.',
            'text_tombol' => 'Jadwalkan Konsultasi',
            'link_tombol' => '#',
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}
