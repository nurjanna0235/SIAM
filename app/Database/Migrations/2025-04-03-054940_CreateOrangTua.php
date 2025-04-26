<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrangTua extends Migration
{
    public function up()
    {
        // Membuat struktur tabel
        $this->forge->addField([
            'id_orang_tua' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_user' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'nik' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ]
        ]);

        // Primary key
        $this->forge->addKey('id_orang_tua', true);

        // Foreign key ke tabel user
        $this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE');

        // Buat tabel
        $this->forge->createTable('orang_tua');
    }

    public function down()
    {
        // Drop tabel saat rollback
        $this->forge->dropTable('orang_tua');
    }
}
