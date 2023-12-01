<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenyakitSeeder extends Seeder
{
    public function run()
    {
        $penyakitData = [
            ['nama_penyakit' => 'Gangguan Mental Organik', 'kode_penyakit' => 'P1'],
            ['nama_penyakit' => 'Gangguan Penggunaan NAPZA (Alkohol, zat dan tembakau)', 'kode_penyakit' => 'P2'],
            ['nama_penyakit' => 'Skizofrenia dan Gangguan Psikotik Kronik Lain', 'kode_penyakit' => 'P3'],
            ['nama_penyakit' => 'Gangguan Psikotik Akut', 'kode_penyakit' => 'P4'],
            ['nama_penyakit' => 'Gangguan Bipolar', 'kode_penyakit' => 'P5'],
            ['nama_penyakit' => 'Gangguan Depresi', 'kode_penyakit' => 'P6'],
            ['nama_penyakit' => 'Gangguan Neurotik (ansietas) (Panik, ansietas menyeluruh, campuran ansietas dan depresi, obsesif kompulsif, penyesuaian, somatoform)', 'kode_penyakit' => 'P7'],
            ['nama_penyakit' => 'Retardasi Mental', 'kode_penyakit' => 'P8'],
            ['nama_penyakit' => 'Gangguan kesehatan jiwa anak dan remaja (perkembangan pervasif dan hiperkinetik)', 'kode_penyakit' => 'P9'],
        ];

        // Insert data
        $this->db->table('penyakit')->insertBatch($penyakitData);
    }
}
