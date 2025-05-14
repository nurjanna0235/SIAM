<?php

namespace App\Controllers\OrangTuaSiswa;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SiswaModel;
use App\Models\OrangTuaSiswaModel;
use App\Models\UserModel;
use App\Models\LokasiModel;

class DashboardController extends BaseController
{
    protected $SiswaModel;
    protected $OrangTuaSiswaModel;
    protected $UserModel;
    protected $LokasiModel;
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
        $this->OrangTuaSiswaModel = new OrangTuaSiswaModel();
        $this->UserModel = new UserModel();
        $this->LokasiModel = new LokasiModel();
    }
    public function index()
    {
        $siswa = $this->SiswaModel->where('id_orang_tua', 9)->first();
        $lokasi = $this->LokasiModel->where('id_siswa', $siswa['id_siswa'])->first();
        $data = [
            'title' => 'Beranda',
            'siswa' => $siswa,
            'lokasi' => $lokasi,
            'content' => view('orangtuasiswa/dashboard/index',['siswa' => $siswa, 'lokasi' => $lokasi]), // ini isi kontennya

        ];
        return view('template/template-orangtuasiswa', $data); // panggil template tunggal
    }
}
