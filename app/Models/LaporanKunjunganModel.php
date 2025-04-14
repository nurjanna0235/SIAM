<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanKunjunganModel extends Model
{
    protected $table = 'laporan_kunjungan';      // Nama tabel di database
    protected $primaryKey = 'id_laporan_kunjungan';              // Primary key

    // Field yang boleh diisi (harus sesuai nama kolom di DB)
    protected $allowedFields = [
        'id_user',
        'id_siswa',
        'id_lokasi',
        'nama_instansi',
        'nama_petugas_monitoring',
        'kelas',
        'jurusan',
        'nama_iduka',
        'catatan_iduka',
        'gambar',
        'hasil_konsultasi',
        'created_at',
        'updated_at'
    ];

    // Optional: aktifkan timestamps kalau kamu punya kolom created_at dan updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}

