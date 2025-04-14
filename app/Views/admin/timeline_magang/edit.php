<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Tambah Data Timeline Magang</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/timeline_magang/update/'. $timeline['id_timeline_magang']) ?>" method="post">
           
            <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" 
                value="<?= $timeline['nama_kegiatan'] ?>" placeholder="Masukkan nama_kegiatan timeline" required>
            </div>
            <div class="mb-3">
            <div class="mb-3">
            <label for="mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="mulai" name="mulai" 
                value="<?= $timeline['mulai'] ?>" required>
            </div>
            <div class="mb-3">
            <label for="selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="selesai" name="selesai" 
                value="<?= $timeline['selesai'] ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('admin/timeline_magang') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>