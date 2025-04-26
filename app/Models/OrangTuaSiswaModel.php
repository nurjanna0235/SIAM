<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangTuaSiswaModel extends Model
{
    protected $table = 'orang_tua';      // Nama tabel di database
    protected $primaryKey = 'id_orang_tua';              // Primary key

    // Field yang boleh diisi (harus sesuai nama kolom di DB)
    protected $allowedFields = [
        'id_user',
        'id_orang_tua',
        'nama',
        'alamat',
        'no_hp',
        'nik',
    ];

    // Optional: aktifkan timestamps kalau kamu punya kolom created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
