<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Tambah Data Laporan Kunjungan Magang</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/laporan_kunjungan/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="id_siswa">ID Siswa</label>
                <select class="form-control" id="id_siswa" name="id_siswa">
                    <option value="">Pilih ID Siswa</option>
                    <!-- Tambahkan opsi ID Siswa di sini -->
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="id_lokasi">ID Lokasi</label>
                <select class="form-control" id="id_lokasi" name="id_lokasi">
                    <option value="">Pilih ID Lokasi</option>
                    <!-- Tambahkan opsi ID Lokasi di sini -->
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="nama_instansi">Nama Instansi</label>
                <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="Masukkan Nama Instansi">
            </div>
            <div class="form-group mb-3">
                <label for="nama_petugas">Nama Petugas Monitoring</label>
                <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Masukkan Nama Petugas Monitoring">
            </div>
            <div class="form-group mb-3">
                <label for="kelas">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Kelas">
            </div>
            <div class="form-group mb-3">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan">
            </div>
            <div class="form-group mb-3">
                <label for="nama_iduka">Nama Iduka</label>
                <input type="text" class="form-control" id="nama_iduka" name="nama_iduka" placeholder="Masukkan Nama Iduka">
            </div>
            <div class="form-group mb-3">
                <label for="catatan_iduka">Catatan Iduka</label>
                <textarea class="form-control" id="catatan_iduka" name="catatan_iduka" rows="3" placeholder="Masukkan Catatan Iduka"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
            <div class="form-group mb-3">
                <label for="hasil_konsultasi">Hasil Konsultasi</label>
                <textarea class="form-control" id="hasil_konsultasi" name="hasil_konsultasi" rows="3" placeholder="Masukkan Hasil Konsultasi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('admin/laporan_kunjungan') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>