<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Edit Data Laporan Kujungan</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/logbook/update/1') ?>" method="post">
           
            <div class="mb-3">
            <label for="id_siswa" class="form-label">ID Siswa </label>
            <input type="text" class="form-control" id="id_siswa" name="id_siswa" 
                value="" placeholder="Masukkan ID Siswa" required>
            </div>
            <div class="mb-3">
            <label for="id_lokasi" class="form-label">ID Lokasi</label>
            <input type="text" class="form-control" id="id_lokasi" name="id_lokasi" 
                value="" placeholder="Masukkan ID Lokasi" required>
            </div>
            <div class="mb-3">
            <label for="nama_instansi" class="form-label">Nama Instansi</label>
            <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" 
                value="" placeholder="Masukkan Nama Instansi" required>
            </div>
            <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" 
                value="" placeholder="Masukkan Kelas" required>
            </div>
            <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" 
                value="" placeholder="Masukkan Jurusan" required>
            </div>
            <div class="mb-3">
            <label for="nama_iduka" class="form-label">Nama Iduka</label>
            <input type="text" class="form-control" id="nama_iduka" name="nama_iduka" 
                value="" placeholder="Masukkan Nama Iduka" required>
            </div>
            <div class="mb-3">
            <label for="catatan_iduka" class="form-label">Catatan Iduka</label>
            <input type="text" class="form-control" id="catatan_iduka" name="catatan_iduka" 
                value="" placeholder="Masukkan Catatan Iduka" required>
            </div>
            <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" 
                value="" placeholder="Masukkan Catatan Iduka" required>
            </div>
            <div class="mb-3">
            <label for="hasil_konsultasi" class="form-label">Hasil Konsultasi</label>
            <input type="text" class="form-control" id="hasil_konsultasi" name="hasil_konsultasi" 
                value="" placeholder="Masukkan Catatan Iduka" required>
            </div>


            <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" 
                value="" placeholder="Masukkan Gambar" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('admin/laporan_kunjungan') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>