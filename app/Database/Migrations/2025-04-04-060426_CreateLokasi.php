<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLokasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_lokasi'     => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'id_siswa'      => ['type' => 'INT', 'unsigned' => true],
            'kategori'      => ['type' => 'VARCHAR', 'constraint' => '50'],
            'gambar'        => ['type' => 'VARCHAR', 'constraint' => '255'],
            'deskripsi'     => ['type' => 'TEXT'],
            'longitude'     => ['type' => 'VARCHAR', 'constraint' => '100'],
            'latitude'      => ['type' => 'VARCHAR', 'constraint' => '100'],
            'nama_tempat'   => ['type' => 'VARCHAR', 'constraint' => '100'],
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id_lokasi', true); // Primary key
        $this->forge->addForeignKey('id_siswa', 'siswa', 'id_siswa', 'CASCADE', 'CASCADE'); // FK ke tabel siswa

        $this->forge->createTable('lokasi');
    }

    public function down()
    {
        $this->forge->dropTable('lokasi');
    }
}
