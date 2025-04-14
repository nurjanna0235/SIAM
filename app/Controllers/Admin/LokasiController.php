<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LokasiController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Lokasi',
            'content' => view('admin/lokasi/lokasi'), // ini isi kontennya
        ];

        return view('template/template-admin', $data); // panggil template tunggal
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Lokasi',
            'content' => view('admin/lokasi/tambah'), // ini isi kontennya
        ];

        return view('template/template-admin', $data); // panggil template tunggal
    }
}
