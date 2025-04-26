<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\JurusanModel;

class JurusanController extends BaseController
{
    protected $JurusanModel;
    public function __construct()
    {
        $this->JurusanModel = new JurusanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Jurusan',
            'jurusan' => $this->JurusanModel->findAll(),
            'content' => view('admin/jurusan/index',['jurusan' => $this->JurusanModel->findAll()]), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function tambah()
    {
        $data = [
            'title' => 'Jurusan',
            'content' => view('admin/jurusan/tambah'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function edit($id)
    {
        $jurusan = $this->JurusanModel->find($id);

        $data = [
            'title' => 'Edit Jurusan',
            'content' => view('admin/jurusan/edit', ['jurusan' => $jurusan]), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function simpan ()
    {
        $jurusanModel = new JurusanModel();
        $data = [
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ];

        if ($jurusanModel->insert($data)) {
            return redirect()->to('admin/jurusan')->with('success', 'Data berhasil ditambahkan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data.');
        }
    }
    public function update($id)
    {
        $jurusanModel = new JurusanModel();
        $data = [
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ];

        if ($jurusanModel->update($id, $data)) {
            return redirect()->to('admin/jurusan')->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data.');
        }
    }
    public function hapus($id)
    {
        $jurusanModel = new JurusanModel();
        if ($jurusanModel->delete($id)) {
            return redirect()->to('admin/jurusan')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menghapus data.');
        }
    }
}
