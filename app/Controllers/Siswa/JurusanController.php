<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JurusanModel;

class JurusanController extends BaseController
{
    public function index()
{
    $data = [
        'title' => 'Jurusan',
        'jurusan' => $this->JurusanModel->findAll(), // Menampilkan semua jurusan
        'content' => view('siswa/jurusan/index', [
            'jurusan' => $this->JurusanModel->findAll()
        ])
    ];
    return view('template/template-siswa', $data);
}

}
