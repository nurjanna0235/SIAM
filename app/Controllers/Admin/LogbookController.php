<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LogbookController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Logbook',
            'content' => view('admin/logbook/logbook'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $logbookModel = new \App\Models\LogbookModel();

            $data = [
                'hari_tanggal' => $this->request->getPost('hari_tanggal'),
                'jenis_kegiatan' => $this->request->getPost('jenis_kegiatan'),
                'uraian_kegiatan' => $this->request->getPost('uraian_kegiatan'),
                'gambar' => $this->request->getFile('gambar')->getName(),
            ];

            // Upload the image
            $gambar = $this->request->getFile('gambar');
            if ($gambar->isValid() && !$gambar->hasMoved()) {
                $gambar->move(WRITEPATH . 'uploads');
            }

            if ($logbookModel->insert($data)) {
                return redirect()->to('admin/logbook')->with('success', 'Data berhasil ditambahkan.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data.');
            }
        }

        $data = [
            'title' => 'Tambah Logbook',
            'content' => view('admin/logbook/tambah'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function edit($id)
    {
        $logbookModel = new \App\Models\LogbookModel();
        $logbook = $logbookModel->find($id);

        if (!$logbook) {
            return redirect()->to('admin/logbook')->with('error', 'Data tidak ditemukan.');
        }

        if ($this->request->getMethod() === 'post') {
            $data = [
                'hari_tanggal' => $this->request->getPost('hari_tanggal'),
                'jenis_kegiatan' => $this->request->getPost('jenis_kegiatan'),
                'uraian_kegiatan' => $this->request->getPost('uraian_kegiatan'),
            ];

            // Check if a new image is uploaded
            $gambar = $this->request->getFile('gambar');
            if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
                $gambar->move(WRITEPATH . 'uploads');
                $data['gambar'] = $gambar->getName();
            }

            if ($logbookModel->update($id, $data)) {
                return redirect()->to('admin/logbook')->with('success', 'Data berhasil diperbarui.');
            } else {
                return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data.');
            }
        }

        $data = [
            'title' => 'Edit Logbook',
            'logbook' => $logbook,
            'content' => view('admin/logbook/edit', ['logbook' => $logbook]), // isi kontennya dengan data
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function simpan()
    {
        $logbookModel = new \App\Models\LogbookModel();

        $data = [
            'hari_tanggal' => $this->request->getPost('hari_tanggal'),
            'jenis_kegiatan' => $this->request->getPost('jenis_kegiatan'),
            'uraian_kegiatan' => $this->request->getPost('uraian_kegiatan'),
            'gambar' => $this->request->getFile('gambar')->getName(),
        ];

        // Upload the image
        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $gambar->move(WRITEPATH . 'uploads');
        }

        if ($logbookModel->insert($data)) {
            return redirect()->to('admin/logbook')->with('success', 'Data berhasil disimpan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data.');
        }
    }
    public function hapus($id)
    {
        // Hapus data logbook
        // Implementasikan logika penghapusan di sini
        return redirect()->to('admin/logbook')->with('success', 'Data berhasil dihapus.');
    }

}
