<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonis')->insert([
            [
                'nama' => 'Andi Saputra',
                'asal' => 'Perorangan',
                'testi' => 'Pelayanan hukum sangat profesional dan responsif. Sangat direkomendasikan!',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'nama' => 'PT Sukses Makmur',
                'asal' => 'Perusahaan',
                'testi' => 'Kami dibantu menyelesaikan sengketa bisnis dengan hasil yang memuaskan.',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'nama' => 'Rina Kurniawati',
                'asal' => 'Perorangan',
                'testi' => 'Sangat membantu saat menghadapi permasalahan ketenagakerjaan.',
                'created_by' => 1,
                'updated_by' => 1
            ],
            [
                'nama' => 'CV Maju Terus',
                'asal' => 'Perusahaan',
                'testi' => 'Kami terbantu dalam pengurusan kontrak dan compliance hukum perusahaan.',
                'created_by' => 1,
                'updated_by' => 1
            ],
        ]);
    }
}
