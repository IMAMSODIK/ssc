<?php

namespace Database\Seeders;

use App\Models\WebModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebModel::create([
            'nama_perusahaan' => 'SIAGIAN SUDIBYO & CO',
            'jargon_perusahaan' => 'Lawyer & Law Firm',
            'logo' => null,
            'alamat' => 'Gedung Blok M Square Lantai 6 JI Melawai 5, Jakarta Selatan',
            'whatsapp' => '081218473429',
            'instagram' => 'https://www.instagram.com/ssc.lawfirm?igsh=MWx5M3p0NG9ybHU5',
            'email' => null,
            'created_by' => 1,
            'updated_by' => 1
        ]);
    }
}
