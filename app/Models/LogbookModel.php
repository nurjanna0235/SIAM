<?php

namespace App\Models;

use CodeIgniter\Model;

class LogbookModel extends Model
{
    protected $table = 'logbook';      // Nama tabel di database
    protected $primaryKey = 'id_logbook';              // Primary key

    // Field yang boleh diisi (harus sesuai nama kolom di DB)
    protected $allowedFields = [
        'id_siswa',
        'hari_tanggal',
        'jenis_kegiatan',
        'uraian_kegiatan',
        'gambar',
    ];

    // Optional: aktifkan timestamps kalau kamu punya kolom created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
