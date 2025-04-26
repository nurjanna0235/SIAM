<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user'   => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'username'  => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'email'     => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
                'unique'     => true,
            ],
            'password'  => [
                'type'       => 'VARCHAR',
                'constraint' => 255, // untuk bcrypt hash
            ],
            'level'     => [
                'type'       => 'ENUM',
                'constraint' => ['admin', 'siswa','orang_tua'],
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id_user', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
