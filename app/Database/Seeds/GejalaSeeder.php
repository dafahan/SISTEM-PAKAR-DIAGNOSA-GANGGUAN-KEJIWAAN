<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GejalaSeeder extends Seeder
{
    public function run()
    {
        $gejalaData = [
            ['gejala' => 'Sering menderita sakit kepala', 'kode_gejala' => 'G1'],
            ['gejala' => 'Tidak memiliki nafsu makan', 'kode_gejala' => 'G2'],
            ['gejala' => 'Sulit tidur', 'kode_gejala' => 'G3'],
            ['gejala' => 'Mudah takut', 'kode_gejala' => 'G4'],
            ['gejala' => 'Merasa tegang, cemas atau kuatir', 'kode_gejala' => 'G5'],
            ['gejala' => 'Tangan gemetar', 'kode_gejala' => 'G06'],
            ['gejala' => 'Pencernaan terganggu/buruk', 'kode_gejala' => 'G7'],
            ['gejala' => 'Sulit untuk berpikir jernih', 'kode_gejala' => 'G8'],
            ['gejala' => 'Merasa tidak bahagia', 'kode_gejala' => 'G9'],
            ['gejala' => 'Menangis lebih sering', 'kode_gejala' => 'G10'],
            ['gejala' => 'Sulit menjalani aktivitas sehari-hari secara normal', 'kode_gejala' => 'G11'],
            ['gejala' => 'Sulit untuk mengambil keputusan', 'kode_gejala' => 'G12'],
            ['gejala' => 'Pekerjaan terganggu', 'kode_gejala' => 'G13'],
            ['gejala' => 'Tidak mampu melakukan hal-hal yang bermanfaat dalam hidup', 'kode_gejala' => 'G14'],
            ['gejala' => 'Kehilangan minat pada berbagai hal', 'kode_gejala' => 'G15'],
            ['gejala' => 'Merasa tidak berharga', 'kode_gejala' => 'G16'],
            ['gejala' => 'Memiliki pikiran untuk mengakhiri hidup', 'kode_gejala' => 'G17'],
            ['gejala' => 'Merasa lelah sepanjang waktu', 'kode_gejala' => 'G18'],
            ['gejala' => 'Mengalami rasa tidak enak di perut', 'kode_gejala' => 'G19'],
            ['gejala' => 'Mudah lelah', 'kode_gejala' => 'G20'],
            ['gejala' => 'Merasa kesulitan dalam pengendalian emosi, seperti mudah marah', 'kode_gejala' => 'G21'],
            ['gejala' => 'Mengalami gangguan dalam berbicara, atau sering telat dalam berbicara', 'kode_gejala' => 'G22'],
        ];

        // Insert data
        $this->db->table('gejala')->insertBatch($gejalaData);
    }
}
