<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\OrangTuaSiswa;

class OrangTuaSiswaController extends BaseController
{
    public function index()
    {
        $ModelOrangTuaSiswa = new OrangTuaSiswa();
        $orangTuaSiswa = $ModelOrangTuaSiswa->findAll();

        $data = [
            'title' => 'Orang Tua Siswa',
            'OrangTuaSiswa' => $orangTuaSiswa,
            'content' => view('admin/orang_tua_siswa/orang_tua_siswa',['OrangTuaSiswa' => $orangTuaSiswa]), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
}
