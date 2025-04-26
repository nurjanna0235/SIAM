<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Edit Data Jurusan</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/jurusan/update/' . $jurusan['id_jurusan']) ?>" method="post">
           
            <div class="mb-3">
            <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
            <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" 
                value="<?php echo($jurusan['nama_jurusan']) ?>" placeholder="Masukkan Nama Jurusan" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('admin/jurusan') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>