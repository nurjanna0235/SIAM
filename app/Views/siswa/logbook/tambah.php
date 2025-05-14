<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Logbook</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('siswa/logbook/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="hari_tanggal" class="form-label">Hari/Tanggal</label>
                <input type="date" class="form-control" id="hari_tanggal" name="hari_tanggal" placeholder="Masukkan nama_kegiatan timeline"
                    required>
            </div>
            <div class="mb-3">
                <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
                <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan" required>
            </div>
            <div class="mb-3">
                <label for="uraian_kegiatan" class="form-label">Uraian Kegiatan</label>
                <input type="text" class="form-control" id="uraian_kegiatan" name="uraian_kegiatan" required>
            </div>
            <div class="mb-3">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('siswa/logbook') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>