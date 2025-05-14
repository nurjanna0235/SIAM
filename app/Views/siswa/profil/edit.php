<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Edit Data Profil</h5>
    </div>
    <div class="card-body">
    <form action="<?= base_url('siswa/profil/update/' . esc($siswa['id_siswa'])) ?>" method="post" enctype="multipart/form-data">
           
            <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa </label>
            <input type="text" class="form-control" id="nama" name="nama" 
                value="<?= esc($siswa['nama']) ?>" placeholder="Masukkan Nama" required>
            </div>
            <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" 
                value="<?= esc($siswa['nik']) ?>" placeholder="Masukkan NIK" required>
            </div>
            <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" 
                value="<?= esc($siswa['kelas']) ?>" placeholder="Masukkan Kelas" required>
            </div>
            <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" 
                value="<?= esc($siswa['email']) ?>" placeholder="Masukkan Email" required>
            </div>
       
          
            
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('siswa/profil') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>