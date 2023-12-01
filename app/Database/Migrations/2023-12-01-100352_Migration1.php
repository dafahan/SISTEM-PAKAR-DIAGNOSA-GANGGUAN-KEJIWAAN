<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Migration1 extends Migration
{
    public function up()
    {
        // Create tb_gejala table
        $this->forge->addField([
            'id_gejala' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'gejala' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
            ],
            'kode_gejala' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_gejala', true);
        $this->forge->createTable('gejala');

        // Create tb_penyakit table
        $this->forge->addField([
            'id_penyakit' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
            ],
            'nama_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'penjelasan' => [
                'type' => 'VARCHAR',
                'constraint' => '5000',
            ],
            'gejala' => [
                'type' => 'VARCHAR',
                'constraint' => '5000',
            ],
            'penanganan' => [
                'type' => 'VARCHAR',
                'constraint' => '5000',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_penyakit', true);
        $this->forge->createTable('penyakit');

        // Create tb_rule table
        $this->forge->addField([
            'id_rule' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_rule' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
            ],
            'kode_gejala' => [
                'type' => 'VARCHAR',
                'constraint' => '1000',
            ],
            'kode_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => '5',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_rule', true);
        $this->forge->createTable('rule');
    }

    public function down()
    {
        // Drop tables in reverse order
        $this->forge->dropTable('rules');
        $this->forge->dropTable('penyakits');
        $this->forge->dropTable('gejalas');
    }
}
