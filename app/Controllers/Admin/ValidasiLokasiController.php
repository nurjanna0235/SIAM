<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ValidasiLokasiController extends BaseController
{
    public function setuju($id)
    {
        $this->ValidasiLokasiModel->update($id, [
            'status_validasi' => 'setuju'
        ]);
        return redirect()->to('admin/validasi_magang')->with('success', 'Lokasi magang disetujui!');
    }

    // Validasi: Tidak Setuju
    public function tidakSetuju($id)
    {
        $this->ValidasiLokasiModel->update($id, [
            'status_validasi' => 'tidak setuju'
        ]);
        return view('template/template-admin', $data); // panggil template tunggal
    }
   
}
