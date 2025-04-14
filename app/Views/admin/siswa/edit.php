<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Edit Data Timeline Magang</h5>
    </div>
    <div class="card-body">
       

        <form action="<?= base_url('admin/siswa/update/1') ?>" method="post">
            <?= csrf_field() ?>
           
            <div class="mb-3">
                <label for="nama" class="form-label">Nama </label>
                <input type="text" class="form-control <?= isset($validation) && $validation->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" 
                    value="<?= old('nama', $siswa['nama']) ?>" placeholder="Masukkan Nama Siswa" required>
                <?php if (isset($validation) && $validation->hasError('nama')): ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control <?= isset($validation) && $validation->hasError('nik') ? 'is-invalid' : '' ?>" id="nik" name="nik" 
                    value="<?= old('nik', $siswa['nik']) ?>" placeholder="Masukkan NIK" required>
                <?php if (isset($validation) && $validation->hasError('nik')): ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nik') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control <?= isset($validation) && $validation->hasError('kelas') ? 'is-invalid' : '' ?>" id="kelas" name="kelas" 
                    value="<?= old('kelas', $siswa['kelas']) ?>" placeholder="Masukkan Kelas" required>
                <?php if (isset($validation) && $validation->hasError('kelas')): ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('kelas') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control <?= isset($validation) && $validation->hasError('jurusan') ? 'is-invalid' : '' ?>" id="jurusan" name="jurusan" 
                    value="<?= old('jurusan', $siswa['jurusan']) ?>" placeholder="Masukkan Jurusan" required>
                <?php if (isset($validation) && $validation->hasError('jurusan')): ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('jurusan') ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('admin/siswa') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>