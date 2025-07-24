<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $layanan = [
            [
                'judul' => 'HUKUM PERDATA',
                'keterangan' => 'Penanganan perkara perdata seperti perjanjian, utang-piutang, ganti rugi, dan sengketa hak
                            milik.',
            ],
            [
                'judul' => 'HUKUM PIDANA',
                'keterangan' => 'Pendampingan hukum untuk kasus pidana mulai penyelidikan sampai dengan pengadilan.'
            ],
            [
                'judul' => 'HUKUM KELUARGA',
                'keterangan' => 'Penyelesaian masalah keluarga seperti perceraian, hak asuh anak, waris, dan perwalian.'
            ],
            [
                'judul' => 'HUKUM PERTANAHAN',
                'keterangan' => 'Penyelesaian sengketa tanah, pendaftaran hak milik, sertifikasi, dan masalah agraria.'
            ],

            [
                'judul' => 'HUKUM PERBANKAN',
                'keterangan' => 'Pendampingan hukum terkait perjanjian kredit, pembiayaan, dan sengketa perbankan.'
            ],
            [
                'judul' => 'HUKUM KETENAGAKERJAAN',
                'keterangan' => 'Penyelesaian perselisihan hubungan industrial antara pekerja dan pengusaha.'
            ],
            [
                'judul' => 'LITIGASI',
                'keterangan' => 'Penyelesaian sengketa melalui proses pengadilan dengan pendampingan advokat berpengalaman.'
            ],
            [
                'judul' => 'HUKUM PERUSAHAAN',
                'keterangan' => 'Pendampingan hukum untuk perusahaan termasuk kontrak, compliance, dan struktur bisnis.'
            ],
            [
                'judul' => 'HUKUM KEIMIGRASIAN',
                'keterangan' => 'Konsultasi dan bantuan hukum terkait regulasi keimigrasian, deportasi, dan status tinggal warga asing.'
            ],
            [
                'judul' => 'DOKUMEN PERJALANAN',
                'keterangan' => 'Layanan pengurusan paspor, visa, dan dokumen legalitas perjalanan dalam dan luar negeri.'
            ],
            [
                'judul' => 'PENGURUSAN KITAS',
                'keterangan' => 'Pendampingan lengkap dalam proses pengajuan dan perpanjangan Izin Tinggal Terbatas (KITAS).'
            ],
            [
                'judul' => 'TINDAK PIDANA KEIMIGRASIAN',
                'keterangan' => 'Bantuan hukum terhadap pelanggaran hukum keimigrasian seperti overstay, dokumen palsu, dan penyalahgunaan izin tinggal.'
            ]
        ];

        foreach ($layanan as $data) {
            DB::table('layanans')->insert([
                'judul' => $data['judul'],
                'keterangan' => $data['keterangan'],
                'visited' => 0,
                'created_by' => 1,
                'updated_by' => 1,
            ]);
        }
    }
}
