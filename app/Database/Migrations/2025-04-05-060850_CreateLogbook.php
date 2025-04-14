<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLogbook extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_logbook'       => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'id_siswa'         => ['type' => 'INT', 'unsigned' => true],
            'hari_tanggal'     => ['type' => 'DATE'],
            'jenis_kegiatan'    => ['type' => 'VARCHAR', 'constraint' => '100'],
            'uraian_kegiatan'  => ['type' => 'TEXT'],
            'gambar'           => ['type' => 'VARCHAR', 'constraint' => '255'],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id_logbook', true); // Primary key
        $this->forge->addForeignKey('id_siswa', 'siswa', 'id_siswa', 'CASCADE', 'CASCADE'); // Relasi ke tabel siswa

        $this->forge->createTable('logbook');
    }

    public function down()
    {
        $this->forge->dropTable('logbook');
    }
}
