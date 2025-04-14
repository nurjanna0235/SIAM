<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TimelineMagangModel;

class TimelineMagangController extends BaseController
{
    public function index()
    {
        $model = new TimelineMagangModel();
        $timelineData = $model->findAll();

        $data = [
            'title' => 'Timeline Magang',
            'timelineMagang' => $timelineData,
            'content' => view('admin/timeline_magang/timeline_magang', ['timelineMagang' => $timelineData]),
        ];

        return view('template/template-admin', $data);
    }


    public function tambah()
    {
        $data = [
            'title' => 'Tambah Timeline Magang',
            'content' => view('admin/timeline_magang/tambah'), // ini isi kontennya
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }


    public function edit($id)
    {
        $model = new TimelineMagangModel();
        $timeline = $model->where('id_timeline_magang', $id)->first();

        if (!$timeline) {
            return redirect()->to('admin/timeline_magang')->with('error', 'Data tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Timeline Magang',
            'timeline' => $timeline,
            'content' => view('admin/timeline_magang/edit', ['timeline' => $timeline]), // isi kontennya dengan data
        ];
        return view('template/template-admin', $data); // panggil template tunggal
    }
    public function simpan()
    {
        $model = new TimelineMagangModel();
        $tanggalMulai = strtotime($this->request->getPost('tanggal_mulai'));
        $tanggalSelesai = strtotime($this->request->getPost('tanggal_selesai'));
        $currentTime = time();

        $status = '';
        if ($currentTime < $tanggalMulai) {
            $status = 'belum berlangsung';
        } elseif ($currentTime >= $tanggalMulai && $currentTime <= $tanggalSelesai) {
            $status = 'berlangsung';
        } else {
            $status = 'selesai';
        }

        $data = [
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'mulai' => $this->request->getPost('tanggal_mulai'),
            'selesai' => $this->request->getPost('tanggal_selesai'),
            'status' => $status,
            'id_user' => 1
        ];

        if ($model->insert($data)) {
            return redirect()->to('admin/timeline_magang')->with('success', 'Data berhasil disimpan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data.');
        }
    }

    public function update($id)
    {
        $model = new TimelineMagangModel();
        $timeline = $model->where('id_timeline_magang', $id)->first();

        if (!$timeline) {
            return redirect()->to('admin/timeline_magang')->with('error', 'Data tidak ditemukan.');
        }

        $tanggalMulai = strtotime($this->request->getPost('tanggal_mulai'));
        $tanggalSelesai = strtotime($this->request->getPost('tanggal_selesai'));
        $currentTime = time();

        $status = '';
        if ($currentTime < $tanggalMulai) {
            $status = 'belum berlangsung';
        } elseif ($currentTime >= $tanggalMulai && $currentTime <= $tanggalSelesai) {
            $status = 'berlangsung';
        } else {
            $status = 'selesai';
        }

        $data = [
            'nama_kegiatan' => $this->request->getPost('nama_kegiatan'),
            'mulai' => $this->request->getPost('mulai'),
            'selesai' => $this->request->getPost('selesai'),
            'status' => $status,
            'id_user' => 1
        ];
        if ($model->update($id, $data)) {
            return redirect()->to('admin/timeline_magang')->with('success', 'Data berhasil diperbarui.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data.');
        }
    }
    public function hapus($id)
    {
        $model = new TimelineMagangModel();
        $timeline = $model->where('id_timeline_magang', $id)->first();

        if (!$timeline) {
            return redirect()->to('admin/timeline_magang')->with('error', 'Data tidak ditemukan.');
        }

        if ($model->delete($id)) {
            return redirect()->to('admin/timeline_magang')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }
}
