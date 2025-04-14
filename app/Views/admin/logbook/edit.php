<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Edit Data Logbook</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/logbook/update/1') ?>" method="post">
           
            <div class="mb-3">
            <label for="hari_tanggal" class="form-label">Hari/Tanggal </label>
            <input type="text" class="form-control" id="hari_tanggal" name="hari_tanggal" 
                value="" placeholder="Masukkan Hari/Tanggal" required>
            </div>
            <div class="mb-3">
            <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
            <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan" 
                value="" placeholder="Masukkan Jenis Kegiatan" required>
            </div>
            <div class="mb-3">
            <label for="uraian_kegiatan" class="form-label">Uraian Kegiatan</label>
            <input type="text" class="form-control" id="uraian_kegiatan" name="uraian_kegiatan" 
                value="" placeholder="Masukkan Uraian Kegiatann" required>
            </div>
            <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" 
                value="" placeholder="Masukkan Gambar" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('admin/logbook') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>