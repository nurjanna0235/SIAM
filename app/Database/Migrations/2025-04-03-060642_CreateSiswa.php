<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_siswa'       => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'id_user'        => ['type' => 'INT', 'unsigned' => true],
            'id_orang_tua'   => ['type' => 'INT', 'unsigned' => true],
            'jurusan'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id_siswa', true); // Primary key
        $this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE'); // Relasi ke tabel user
        $this->forge->addForeignKey('id_orang_tua', 'orang_tua', 'id_orang_tua', 'CASCADE', 'CASCADE'); // Relasi ke tabel orang_tua

        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
