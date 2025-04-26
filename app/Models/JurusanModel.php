<?php

namespace App\Models;

use CodeIgniter\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';      // Nama tabel di database
    protected $primaryKey = 'id_jurusan';              // Primary key

    // Field yang boleh diisi (harus sesuai nama kolom di DB)
    protected $allowedFields = [
        'nama_jurusan',
    ];

    // Optional: aktifkan timestamps kalau kamu punya kolom created_at dan updated_at
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
