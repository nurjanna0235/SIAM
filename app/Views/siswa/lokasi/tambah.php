<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">lokasi</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('siswa/lokasi/simpan') ?>" method="post">
            <div class="mb-3">
                <label for="lokasi_siswa" class="form-label">Nama Tempat Magang</label>
                <input type="text" class="form-control" id="lokasi_siswa" name="lokasi_siswa" required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Maps</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('siswa/lokasi') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>