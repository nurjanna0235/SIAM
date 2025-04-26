<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SiswaModel;
use App\Models\OrangTuaModel;
use App\Models\OrangTuaSiswa;

class SiswaController extends BaseController
{
    public function index()
    {
        // Ambil data siswa dari model
        $siswaModel = new \App\Models\SiswaModel();
        $siswa = $siswaModel->findAll();
        // Kirim data siswa ke view
        $data = [
            'title' => 'Siswa',
            'siswa' => $siswa,
            'content' => view('admin/siswa/siswa', ['siswa' => $siswa]), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function tambah()
    {
        // ambil data orang tua
        $orangTuaModel = new OrangTuaSiswa();
        $orangTua = $orangTuaModel->findAll();

        $data = [
            'title' => 'Tambah Siswa',
            'orangTua' => $orangTua,
            'content' => view('admin/siswa/tambah',['orang_tua' => $orangTua]), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function edit($id)
    {
        // Ambil data siswa berdasarkan ID
        $siswaModel = new \App\Models\SiswaModel();
        $siswa = $siswaModel->find($id);
        if (!$siswa) {
            return redirect()->to('admin/siswa')->with('error', 'Data tidak ditemukan.');
        }
        $data = [
            'title' => 'Edit Siswa',
            'siswa' => $siswa,
            'content' => view('admin/siswa/edit', ['siswa' => $siswa]), // isi kontennya dengan data
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function simpan()
    {
        // Validasi input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required',
            'nik' => 'required|numeric',
            'kelas' => 'required',
            'jurusan' => 'required',

        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // end validasi

        $siswaModel = new \App\Models\SiswaModel();

        $data = [
            'id_user' => 1,
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
        ];

        if ($siswaModel->insert($data)) {
            return redirect()->to('admin/siswa')->with('success', 'Data berhasil disimpan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data.');
        }
    }

    public function update($id)
    {
        // Validasi input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required',
            'nik' => 'required|numeric',
            'kelas' => 'required',
            'jurusan' => 'required',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // end validasi

        $siswaModel = new \App\Models\SiswaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'kelas' => $this->request->getPost('kelas'),
            'jurusan' => $this->request->getPost('jurusan'),
        ];


        if ($siswaModel->update($id, $data)) {
            return redirect()->to('admin/siswa')->with('success', 'Data berhasil diperbarui .');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data.');
        }
    }
    public function hapus($id)
    {
        $siswaModel = new \App\Models\SiswaModel();
        $siswa = $siswaModel->find($id);
        if (!$siswa) {
            return redirect()->to('admin/siswa')->with('error', 'Data tidak ditemukan.');
        }
        // Hapus data siswa
        $siswaModel->delete($id);
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
