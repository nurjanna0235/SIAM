<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        {
            $data = [
                'title' => 'Beranda',
                'content' => view('siswa/dashboard/index'), // ini isi kontennya
            ];
            return view('template/template-siswa', $data); // panggil template tunggal
        }
    }
}
