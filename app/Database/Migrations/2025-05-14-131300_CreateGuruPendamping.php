<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuruPendamping extends Migration
{
   public function up()
    {
        $this->forge->addField([
            'id_guru_pendamping' => [
                'type'           => 'INT',
                'auto_increment' => true
            ],
            'id_user' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_siswa' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_lokasi' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'nama_instansi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_petugas' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_siswa' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelas' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'jurusan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'nama_iduka' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'catatan_iduka' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'hasil_konsultasi' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);

        $this->forge->addKey('id_laporan_kunjungan', true); // Primary Key

        // Tambahkan relasi foreign key
        $this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_siswa', 'siswa', 'id_siswa', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_lokasi', 'lokasi', 'id_lokasi', 'CASCADE', 'CASCADE');

        $this->forge->createTable('laporan_kunjungan');
    }

    public function down()
    {
        $this->forge->dropTable('laporan_kunjungan');
    }
\
}
