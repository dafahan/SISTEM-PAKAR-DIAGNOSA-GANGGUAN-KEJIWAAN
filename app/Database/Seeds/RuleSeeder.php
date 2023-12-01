<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RuleSeeder extends Seeder
{
    public function run()
    {
        $ruleData = [
            ['kode_rule' => 'R1', 'kode_gejala' => 'G1 and G5 and G8 and G11 and G12', 'kode_penyakit' => 'P1'],
            ['kode_rule' => 'R2', 'kode_gejala' => 'G3 and G5 and G7 and G14 and G18 and G19 and G20', 'kode_penyakit' => 'P2'],
            ['kode_rule' => 'R3', 'kode_gejala' => 'G3 and G4 and G8 and G9 and G11 and G12 and G13 and G14 and G15', 'kode_penyakit' => 'P3'],
            ['kode_rule' => 'R4', 'kode_gejala' => 'G2 and G3 and G5 and G8 and G9 and G14 and G15 and G16 and G17', 'kode_penyakit' => 'P4'],
            ['kode_rule' => 'R5', 'kode_gejala' => 'G2 and G3 and G5 and G9 and G11 and G12 and G13 and G14 and G15 and G16 and G17', 'kode_penyakit' => 'P5'],
            ['kode_rule' => 'R6', 'kode_gejala' => 'G1 and G2 and G5 and G8 and G9 and G11 and G15 and G16 and G20', 'kode_penyakit' => 'P6'],
            ['kode_rule' => 'R7', 'kode_gejala' => 'G4 and G5 and G7 and G8 and G16', 'kode_penyakit' => 'P7'],
            ['kode_rule' => 'R8', 'kode_gejala' => 'G21 and G22', 'kode_penyakit' => 'P8'],
            ['kode_rule' => 'R9', 'kode_gejala' => 'G1 and G2 and G4 and G5 and G8 and G9 and G12 and G15 and G17 and G21', 'kode_penyakit' => 'P9'],
        ];

        // Insert data
        $this->db->table('rule')->insertBatch($ruleData);
    }
}
