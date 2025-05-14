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
                'auto_increment' => true,
                'unsigned'       => true,
            ],
            'id_user' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'id_jurusan' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'nama_guru_pendamping' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'nip' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
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

        $this->forge->addKey('id_guru_pendamping', true); // Primary Key

        $this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_jurusan', 'jurusan', 'id_jurusan', 'CASCADE', 'CASCADE');

        $this->forge->createTable('guru_pendamping', true);
    }

    public function down()
    {
        $this->forge->dropTable('guru_pendamping');
    }
}
