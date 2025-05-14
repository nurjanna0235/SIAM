<?php

namespace App\Controllers\OrangTuaSiswa;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LogbookModel;
use App\Models\SiswaModel;
use App\Models\OrangTuaSiswaModel;
use App\Models\UserModel;

class LogbookController extends BaseController
{
    protected $LogbookModel;
    public function __construct()
    {
        $this->LogbookModel = new LogbookModel();
    }
    public function index()
    {
        {
            $data = [
                'title' => 'Beranda',
                'logbook' => $this->LogbookModel->findAll(), // Menampilkan logbook berdasarkan siswa_id
                'content' => view('orangtuasiswa/logbook/index', [
                    'logbook' => $this->LogbookModel->findAll()
                ])
            ];
            return view('template/template-orangtuasiswa', $data); // panggil template tunggal
        }
    }
}