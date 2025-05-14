<?php

namespace App\Controllers\Siswa;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\LogbookModel;

class LogbookController extends BaseController
{
    protected $LogbookModel;
    public function __construct()
    {
        $this->LogbookModel = new LogbookModel();
    }
    public function index()
    {
        {
            $data = [
                'title' => 'Beranda',
                'logbook' => $this->LogbookModel->findAll(), // Menampilkan logbook berdasarkan siswa_id
                'content' => view('siswa/logbook/index', [
                    'logbook' => $this->LogbookModel->findAll()
                ])
            ];
            return view('template/template-siswa', $data); // panggil template tunggal
        }
    }

    public function tambah()
    {
        $data = [
            'title' => 'Logbook',
            'content' => view('siswa/logbook/tambah'), // ini isi kontennya
        ];
        return view('template/template-siswa', $data); // panggil template tunggal
    }
    public function simpan()
    {
        // Ambil semua input form biasa
        $hari_tanggal = $this->request->getPost('hari_tanggal');
        $jenis_kegiatan = $this->request->getPost('jenis_kegiatan');
        $uraian_kegiatan = $this->request->getPost('uraian_kegiatan');

        // Ambil file upload
        $gambar = $this->request->getFile('gambar');

        // Cek apakah file valid dan belum dipindahkan
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            // Generate nama file baru biar unik
            $newName = $gambar->getRandomName();

            // Pindahkan file ke folder yang diinginkan
            $gambar->move('uploads/logbook', $newName);

            // Simpan data ke database
            $data = [
                'id_siswa' => 5, // Ambil ID siswa dari session
                'hari_tanggal' => $hari_tanggal,
                'jenis_kegiatan' => $jenis_kegiatan,
                'uraian_kegiatan' => $uraian_kegiatan,
                'gambar' => $newName,
            ];

            if ($this->LogbookModel->insert($data)) {
                return redirect()->to('/siswa/logbook')->with('success', 'Data logbook berhasil ditambahkan.');
            } else {
                return redirect()->back()->with('error', 'Gagal menambahkan data logbook.');
            }
        } else {
            return redirect()->back()->with('error', 'File gambar tidak valid.');
        }
    }

    public function edit($id)
    {
        $logbook = $this->LogbookModel->find($id);
        if (!$logbook) {
            return redirect()->to('/siswa/logbook')->with('error', 'Data logbook tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Logbook',
            'logbook' => $logbook,
            'content' => view('siswa/logbook/edit', ['logbook' => $logbook])
        ];
        return view('template/template-siswa', $data); // panggil template tunggal
    }
    public function update($id)
    {
        $logbook = $this->LogbookModel->find($id);
        if (!$logbook) {
            return redirect()->to('/siswa/logbook')->with('error', 'Data logbook tidak ditemukan.');
        }
    
        $hari_tanggal = $this->request->getPost('hari_tanggal');
        $jenis_kegiatan = $this->request->getPost('jenis_kegiatan');
        $uraian_kegiatan = $this->request->getPost('uraian_kegiatan');
    
        $gambar = $this->request->getFile('gambar');
    
        // Default: pakai gambar lama
        $namaGambar = $logbook['gambar'];
    
        // Jika upload gambar baru
        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move('uploads/logbook', $namaGambar);
    
            // Optional: hapus gambar lama jika ada
            if ($logbook['gambar'] && file_exists('uploads/logbook/' . $logbook['gambar'])) {
                unlink('uploads/logbook/' . $logbook['gambar']);
            }
        }
    
        $data = [
            'id_siswa' => 5, // Ganti dengan session atau sesuai kebutuhan Anda
            'hari_tanggal' => $hari_tanggal,
            'jenis_kegiatan' => $jenis_kegiatan,
            'uraian_kegiatan' => $uraian_kegiatan,
            'gambar' => $namaGambar
        ];
    
        if ($this->LogbookModel->update($id, $data)) {
            return redirect()->to('/siswa/logbook')->with('success', 'Data logbook berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data logbook.');
        }
    }
    
    public function hapus($id)
    {
        $logbook = $this->LogbookModel->find($id);
        if (!$logbook) {
            return redirect()->to('/siswa/logbook')->with('error', 'Data logbook tidak ditemukan.');
        }

        // Hapus gambar dari folder
        if ($logbook['gambar']) {
            unlink('uploads/logbook/' . $logbook['gambar']);
        }

        // Hapus data dari database
        if ($this->LogbookModel->delete($id)) {
            return redirect()->to('/siswa/logbook')->with('success', 'Data logbook berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data logbook.');
        }
    }

}
