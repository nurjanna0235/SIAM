<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTimelineMagang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_timeline_magang' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_user' => [
                'type'     => 'INT',
                'unsigned' => true
            ],
            'nama_kegiatan' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'mulai' => [
                'type' => 'DATE'
            ],
            'selesai' => [
                'type' => 'DATE'
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['belum_mulai','mulai', 'selesai'],
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);

        $this->forge->addKey('id_timeline_magang', true); // Primary Key
        $this->forge->addForeignKey('id_user', 'user', 'id_user', 'CASCADE', 'CASCADE'); // Foreign Key
        $this->forge->createTable('timeline_magang');
    }

    public function down()
    {
        $this->forge->dropTable('timeline_magang');
    }
}
