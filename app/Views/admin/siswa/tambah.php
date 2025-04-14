<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Siswa</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/siswa/simpan') ?>" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama siswa"
                    required>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan nama nik" required>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan kelas" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Masukkan jurusan" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('admin/logbook') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>