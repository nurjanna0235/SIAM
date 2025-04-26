<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda',
            'content' => view('admin/dashboard/index'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }

    
}
