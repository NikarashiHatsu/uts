<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDokterTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id INT(11) PRIMARY KEY AUTO_INCREMENT',
            'nip VARCHAR(255) NOT NULL',
            'nama VARCHAR(255) NOT NULL',
            'jenis_kelamin VARCHAR(255) NOT NULL',
            'bidang_keahlian VARCHAR(255) NOT NULL',
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->createTable('dokters');
    }

    public function down()
    {
        $this->forge->dropTable('dokters');
    }
}
