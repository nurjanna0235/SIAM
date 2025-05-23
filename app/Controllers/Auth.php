<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SiswaModel;
use App\Models\OrangTuaSiswaModel;
use App\Models\UserModel;
use App\Models\JurusanModel;

class Auth extends BaseController
{
    public $siswaModel;
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Constructor.
     *
     * @return void
     */
/*******  2e206e6b-39ae-4777-9b0d-d3d79d9642b7  *******/    public $jurusanModel;

    public function __construct()
    {
        $this->siswaModel = new SiswaModel();
        $this->jurusanModel = new JurusanModel();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function registrasi(){
        $data = [
            'jurusan' => $this->jurusanModel->findAll(),
        ];
        return view('auth/registrasi',$data);
    }

    public function submit() {
        $orangTuaSiswaModel = new OrangTuaSiswaModel();
        $siswaModel = new SiswaModel();
        $userModel = new UserModel();
    
        $check_ortu = $this->request->getPost('check_ortu');
    
        if ($check_ortu == 'on') {
            // Cek NIK orang tua di database
            $cariOrtu = $orangTuaSiswaModel->where('nik', $this->request->getPost('nik_ortu'))->first();
    
            if ($cariOrtu) {
                // Insert user siswa
                $userModel->insert([
                    'username' => $this->request->getPost('username_siswa'),
                    'password' => password_hash($this->request->getPost('password_siswa'), PASSWORD_BCRYPT),
                    'role' => 'siswa'
                ]);
                $id_user_siswa = $userModel->getInsertID();
    
                // Insert siswa
                $siswaModel->insert([
                    'id_orang_tua' => $cariOrtu['id_orang_tua'],
                    'id_user' => $id_user_siswa,
                    'id_jurusan' => $this->request->getPost('id_jurusan'),
                    'nama' => $this->request->getPost('nama_siswa'),
                    'nik' => $this->request->getPost('nik'),
                    'kelas' => $this->request->getPost('kelas'),
                ]);
    
                return redirect()->to('/login')->with('success', 'Registrasi berhasil!');
            } else {
                return redirect()->to('/registrasi')->with('error', 'NIK orang tua tidak ditemukan.');
            }
        } else {
            // Insert user untuk orang tua
            $userModel->insert([
                'username' => $this->request->getPost('username_ortu'),
                'password' => password_hash($this->request->getPost('password_ortu'), PASSWORD_BCRYPT),
                'email' => $this->request->getPost('email_ortu'),
                'role' => 'ortu'
            ]);
            $id_user_ortu = $userModel->getInsertID();
    
            // Insert orang tua
            $orangTuaSiswaModel->insert([
                'id_user' => $id_user_ortu,
                'nama' => $this->request->getPost('nama_ortu'),
                'nik' => $this->request->getPost('nik_ortu'),
                'alamat' => $this->request->getPost('alamat'),
                'no_hp' => $this->request->getPost('no_hp')
            ]);
            $id_orang_tua = $orangTuaSiswaModel->getInsertID();
    
            // Insert user untuk siswa
            $userModel->insert([
                'username' => $this->request->getPost('username_siswa'),
                'password' => password_hash($this->request->getPost('password_siswa'), PASSWORD_BCRYPT),
                'role' => 'siswa',
                'email' => $this->request->getPost('email_siswa')
            ]);
            $id_user_siswa = $userModel->getInsertID();
    
            // Insert siswa
            $siswaModel->insert([
                'id_orang_tua' => $id_orang_tua,
                'id_user' => $id_user_siswa,
                'nama' => $this->request->getPost('nama_siswa'),
                'nik' => $this->request->getPost('nik'),
                'kelas' => $this->request->getPost('kelas'),
                'id_jurusan' => $this->request->getPost('id_jurusan')
            ]);
    
            return redirect()->to('/login')->with('success', 'Registrasi berhasil!');
        }
    }
    
}
