<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasienTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id INT(11) PRIMARY KEY AUTO_INCREMENT',
            'nama VARCHAR(255) NOT NULL',
            'alamat VARCHAR(255) NOT NULL',
            'umur INT(11) NOT NULL',
            'jenis_kelamin VARCHAR(255) NOT NULL',
            'created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->createTable('pasiens');
    }

    public function down()
    {
        $this->forge->dropTable('pasiens');
    }
}
