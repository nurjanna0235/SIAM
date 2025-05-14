<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JurusanSeed extends Seeder
{
      public function run()
    {
        $data = [
            [
                'id_jurusan'   => 1,
                'nama_jurusan' => 'Teknik Kendaraan Ringan (Otomotif)',
            ],
            [
                'id_jurusan'   => 2,
                'nama_jurusan' => 'Desain Komunikasi Visual (DKV)',
            ],
            [
                'id_jurusan'   => 3,
                'nama_jurusan' => 'Manajemen Perkantoran dan Layanan Bisnis',
            ],
       
        ];

        // Insert data ke dalam tabel jurusan
        $this->db->table('jurusan')->insertBatch($data);
    }
}
