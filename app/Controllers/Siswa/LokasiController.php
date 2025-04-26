<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LokasiModel;


class LokasiController extends BaseController
{
    protected $LokasiModel;
    public function __construct()
    {
        $this->LokasiModel = new LokasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Jurusan',
            'jurusan' => $this->LokasiModel->findAll(),
            'content' => view('siswa/lokasi/index',['lokasi' => $this->LokasiModel->findAll()]), // ini isi kontennya
        ];
        return view('template/template-siswa', $data); // panggil template tunggal
    }
    public function tambah()
    {
        $data = [
            'title' => 'Lokasi',
            'content' => view('siswa/lokasi/tambah'), // ini isi kontennya
        ];
        return view('template/template-siswa', $data); // panggil template tunggal
    }
    public function simpan ()
    {
        $lokasiModel = new LokasiModel();
        $data = [
            'lokasi_siswa' => $this->request->getPost('lokasi_siswa'),
            'kategori' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $this->request->getPost('gambar'),
            'maps' => $this->request->getPost('maps'),
        ];

        if ($lokasiModel->insert($data)) {
            return redirect()->to('siswa/lokasi')->with('success', 'Data berhasil ditambahkan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data.');
        }
    }
}
