<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKamarTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id INT(11) PRIMARY KEY AUTO_INCREMENT',
            'nama VARCHAR(255) NOT NULL',
            'kapasitas INT(11) NOT NULL',
            'daerah VARCHAR(255) NOT NULL',
            'dokter_id INT(11)',
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('dokter_id REFERENCES dokter(id)');
        $this->forge->createTable('kamars');
    }

    public function down()
    {
        $this->forge->dropTable('kamars');
    }
}
