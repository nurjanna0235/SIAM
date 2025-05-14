<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'janna 1',
                'email'    => 'janna@example.com',
                'password' => password_hash('123', PASSWORD_DEFAULT),
                'level'    => 'orang_tua',
            ],
            [
                'username' => 'janna 2',
                'email'    => 'janna2@example.com',
                'password' => password_hash('123', PASSWORD_DEFAULT),
                'level'    => 'orang_tua',
            ],
            [
                'username' => 'janna 3',
                'email'    => 'janna3@example.com',
                'password' => password_hash('123', PASSWORD_DEFAULT),
                'level'    => 'guru_pendamping',
            ],
        ];

        // Insert data to 'users' table
        $this->db->table('user')->insertBatch($data);
    }
}
