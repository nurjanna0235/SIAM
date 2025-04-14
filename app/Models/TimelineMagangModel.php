<?php

namespace App\Models;

use CodeIgniter\Model;

class TimelineMagangModel extends Model
{
    protected $table = 'timeline_magang';      // Nama tabel di database
    protected $primaryKey = 'id_timeline_magang';              // Primary key

    // Field yang boleh diisi (harus sesuai nama kolom di DB)
    protected $allowedFields = [
        'id_user',
        'nama_kegiatan',
        'mulai',
        'selesai',
        'status',
    ];

    // Optional: aktifkan timestamps kalau kamu punya kolom created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
