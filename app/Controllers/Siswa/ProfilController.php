<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\SiswaModel;

class ProfilController extends BaseController
{
    protected $UserModel;
    protected $SiswaModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->SiswaModel = new SiswaModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Profil',
            'siswa' => $this->SiswaModel
                ->where('id_siswa', 5)
                ->join('user', 'siswa.id_user = user.id_user')
                ->first(),
            'content' => view('siswa/profil/index', [
                'siswa' => $this->SiswaModel
                    ->where('id_siswa', 5)
                    ->join('user', 'siswa.id_user = user.id_user')
                    ->first()
            ]),
        ];

        return view('template/template-siswa', $data); // Panggil template tunggal
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Profil',
            'siswa' => $this->SiswaModel
                ->join('user', 'siswa.id_user = user.id_user')
                ->where('siswa.id_siswa', $id)
                ->first(),

            'content' => view('siswa/profil/edit', [
                'siswa' => $this->SiswaModel
                    ->join('user', 'siswa.id_user = user.id_user')
                    ->where('siswa.id_siswa', $id)
                    ->first(),
            ]),
        ];

        return view('template/template-siswa', $data); // Panggil template tunggal
    }

    function update($id)
    {
        $siswa = $this->SiswaModel->find($id);
        if (!$siswa) {
            return redirect()->to('/siswa/profil')->with('error', 'Data tidak ditemukan');
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'nik' => $this->request->getPost('nik'),
            'kelas' => $this->request->getPost('kelas'),
            'email' => $this->request->getPost('email'),
        ];

        if ($this->SiswaModel->update($id, $data)) {
            return redirect()->to('/siswa/profil')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect()->back()->withInput()->with('error', 'Data gagal diupdate');
        }
    }
}
