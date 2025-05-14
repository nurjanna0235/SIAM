<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\GuruPendampingModel;
use App\Models\JurusanModel;

class GuruPendampingController extends BaseController
{
    protected $GuruPendampingModel;
    protected $JurusanModel;

    public function __construct()
    {
        $this->GuruPendampingModel = new GuruPendampingModel();
        $this->JurusanModel = new JurusanModel();
    }
    public function index()
    {
        // Ambil semua data guru pendamping
        $guruPendamping = $this->GuruPendampingModel->join('jurusan', 'guru_pendamping.id_jurusan = jurusan.id_jurusan')->findAll();
      
        $data = [
            'title' => 'Guru Pendamping',
            'content' => view('admin/guru_pendamping/index', ['guru_pendamping' => $guruPendamping]),
        ];
        return view('template/template-admin', $data);
    }
}
