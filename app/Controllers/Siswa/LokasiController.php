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
        
        // Ambil ID siswa dari session atau auth (misalnya)
        $siswa_id = 5; // Sesuaikan dengan session atau metode autentikasi kamu
        
        // Ambil data lokasi yang hanya milik siswa ini
        $data = [
            'title' => 'Lokasi Magang',
            'lokasi' => $this->LokasiModel->where('id_siswa', $siswa_id)->find(), // Menampilkan lokasi berdasarkan siswa_id
            'content' => view('siswa/lokasi/index', [
                'lokasi' => $this->LokasiModel->where('id_siswa', $siswa_id)->first()
            ])
        ];
    
        return view('template/template-siswa', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Lokasi',
            'content' => view('siswa/lokasi/tambah'), // ini isi kontennya
        ];
        return view('template/template-siswa', $data); // panggil template tunggal
    }
    public function simpan()
{
    // Ambil semua input form biasa
    $lokasi_siswa = $this->request->getPost('lokasi_siswa');
    $kategori     = $this->request->getPost('kategori');
    $deskripsi    = $this->request->getPost('deskripsi');
    $latitude     = $this->request->getPost('latitude');
    $longitude    = $this->request->getPost('longitude');

    // Ambil file upload
    $gambar = $this->request->getFile('gambar');

    // Cek apakah file valid dan belum dipindahkan
    if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
        // Generate nama file baru biar unik
        $newName = $gambar->getRandomName();

        // Pindahkan file ke folder public/uploads
        $gambar->move('uploads/', $newName);
    } else {
        $newName = null; // Kalau gagal upload
    }

    // Cek apakah data lokasi siswa sudah ada di database
    $lokasiModel = new \App\Models\LokasiModel();

    // Jika ada ID lokasi yang diterima (misalnya untuk update), gunakan itu
    $id_lokasi = $this->request->getPost('id_lokasi'); // Misalnya, ID lokasi siswa dikirim melalui form

    // Menyiapkan data untuk disimpan atau diperbarui
    $data = [
        'id_siswa'     => 5, // ambil id siswa dari session
        'lokasi_siswa' => $lokasi_siswa,
        'kategori'     => $kategori,
        'deskripsi'    => $deskripsi,
        'latitude'     => $latitude,
        'longitude'    => $longitude,
        'gambar'       => $newName // simpan nama file ke database
    ];

    if ($id_lokasi) {
        // Jika ID lokasi sudah ada, lakukan update
        $lokasiModel->update($id_lokasi, $data);
        $message = 'Data lokasi berhasil diperbarui';
    } else {
        // Jika ID lokasi tidak ada, maka data baru ditambahkan
        $lokasiModel->insert($data);
        $message = 'Data lokasi berhasil disimpan';
    }

    return redirect()->to('/siswa/lokasi')->with('success', $message);
}

}
