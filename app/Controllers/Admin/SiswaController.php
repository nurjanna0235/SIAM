<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SiswaController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'content' => view('admin/siswa/siswa'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function tambah()
    {
        $data = [
            'title' => 'Tambah Siswa',
            'content' => view('admin/siswa/tambah'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Siswa',
            'content' => view('admin/siswa/edit'), // isi kontennya dengan data
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function simpan()
    {
        // Simpan data siswa
        // Implementasikan logika penyimpanan di sini
        return redirect()->to('admin/siswa')->with('success', 'Data berhasil disimpan.');
    }
    public function hapus($id)
    {
        // Hapus data siswa
        // Implementasikan logika penghapusan di sini
        return redirect()->to('admin/siswa')->with('success', 'Data berhasil dihapus.');
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Siswa',
            'content' => view('admin/siswa/detail'), // isi kontennya dengan data
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    
}
