<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Tambah Data Timeline Magang</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/timeline_magang/simpan') ?>" method="post">
            <div class="mb-3">
                <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Masukkan nama_kegiatan timeline"
                    required>
            </div>
            <div class="mb-3">
                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
            </div>
            

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('admin/timeline_magang') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>