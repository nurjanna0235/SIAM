<?php

namespace App\Controllers\GuruPendamping;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LogbookModel;
use App\Models\SiswaModel;

class ValidasiController extends BaseController
{
    protected $LogbookModel;
    protected $SiswaModel;

    public function __construct()
    {
        $this->LogbookModel = new LogbookModel();
        $this->SiswaModel = new SiswaModel();
    }

    public function index()
    {
        $logbook = $this->LogbookModel->join('siswa', 'logbook.id_siswa = siswa.id_siswa')->findAll();
        $data = [
            'title' => 'Beranda',
            'logbook' => $logbook, // Menampilkan logbook berdasarkan siswa_id
            'content' => view('gurupendamping/validasi/index', [
                'logbook' => $logbook
            ])
        ];
        return view('template/template-gurupendamping', $data); // panggil template tunggal

    }

    public function setuju($id)
    {
        $data = [
            'status' => 'setuju'
        ];
        $this->LogbookModel->update($id, $data);
        return redirect()->to('/guru_pendamping/validasi')->with('success', 'Logbook berhasil disetujui');
    }

    public function tidak_setuju($id)
    {
        $data = [
            'status' => 'tidak_setuju'
        ];
        $this->LogbookModel->update($id, $data);
        return redirect()->to('/guru_pendamping/validasi')->with('success', 'Logbook berhasil ditolak');
    }
}
