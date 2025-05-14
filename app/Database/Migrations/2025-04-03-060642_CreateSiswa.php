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
            'id_jurusan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_guru_pendamping' => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true,
            ],
            'nama'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'nik'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'kelas'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'jurusan'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'created_at'     => ['type' => 'DATETIME', 'null' => true],
            'updated_at'     => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id_siswa', true); // Primary key
        $this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE'); // Relasi ke tabel user
        $this->forge->addForeignKey('id_orang_tua', 'orang_tua', 'id_orang_tua', 'CASCADE', 'CASCADE'); // Relasi ke tabel orang_tua
        $this->forge->addForeignKey('id_jurusan', 'jurusan', 'id_jurusan', 'CASCADE', 'CASCADE');
         $this->forge->addForeignKey('id_guru_pendamping', 'guru_pendamping', 'id_guru_pendamping', 'CASCADE', 'CASCADE');
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
