<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LaporanKunjunganModel;
use CodeIgniter\HTTP\ResponseInterface;

class LaporanKunjunganController extends BaseController
{
    public function index()
    {
       
        $data = [
            'title' => 'LaporanKunjungan',
            'content' => view('admin/laporan_kunjungan/laporan_kunjungan'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Laporan Kunjungan',
            'content' => view('admin/laporan_kunjungan/tambah'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Laporan Kunjungan',
            'content' => view('admin/laporan_kunjungan/edit'), // isi kontennya dengan data
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function simpan()
    {
        // Simpan data laporan kunjungan
        // Implementasikan logika penyimpanan di sini
        return redirect()->to('admin/laporan_kunjungan')->with('success', 'Data berhasil disimpan.');
    }
    
    public function hapus($id)
    {
        $model = new LaporanKunjunganModel();
        $timeline = $model->where('id_laporan_kunjungan', $id)->first();

        if (!$timeline) {
            return redirect()->to('admin/laporan_kunjungan')->with('error', 'Data tidak ditemukan.');
        }

        if ($model->delete($id)) {
            return redirect()->to('admin/laporan_kunjungan')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }

}
