<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Edit Data Logbook</h5>
    </div>
    <div class="card-body">
    <form action="<?= base_url('siswa/logbook/update/' . esc($logbook['id_logbook'])) ?>" method="post" enctype="multipart/form-data">
           
            <div class="mb-3">
            <label for="hari_tanggal" class="form-label">Hari/Tanggal </label>
            <input type="date" class="form-control" id="hari_tanggal" name="hari_tanggal" 
                value="<?= esc($logbook['hari_tanggal']) ?>" placeholder="Masukkan Hari/Tanggal" required>
            </div>
            <div class="mb-3">
            <label for="jenis_kegiatan" class="form-label">Jenis Kegiatan</label>
            <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan" 
                value="<?= esc($logbook['jenis_kegiatan']) ?>" placeholder="Masukkan Jenis Kegiatan" required>
            </div>
            <div class="mb-3">
            <label for="uraian_kegiatan" class="form-label">Uraian Kegiatan</label>
            <input type="text" class="form-control" id="uraian_kegiatan" name="uraian_kegiatan" 
                value="<?= esc($logbook['uraian_kegiatan']) ?>" placeholder="Masukkan Uraian Kegiatann" required>
            </div>
            <div class="mb-3">
            <label for="gambar" class="form-label">Edit Gambar</label>
            
            <input type="file" class="form-control" id="gambar" name="gambar" 
                value="<?= esc($logbook['gambar']) ?>" placeholder="Masukkan Gambar" >
            <img src="<?= base_url('uploads/logbook/' . esc($logbook['gambar'])) ?>" alt="Gambar" class="img-thumbnail mt-2" width="150">
            </div>
          
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('siswa/logbook') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>