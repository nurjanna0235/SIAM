<div class="container mt-4">
    <h1 class="mb-4 text-center">Profil Siswa</h1>

    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
        <div class="row g-0">
           
            <div class="col-md-8">
                <div class="card-body">
                    <p class="card-text"><strong>Nama Siswa:</strong> <?= $siswa['nama']; ?></p>
                    <p class="card-text"><strong>NIK:</strong> <?= $siswa['nik']; ?></p>
                    <p class="card-text"><strong>Kelas:</strong> <?= $siswa['kelas']; ?></p>
                    <p class="card-text"><strong>Email:</strong> <?= $siswa['email']; ?></p>
                    <p class="card-text"><strong>Level:</strong> <?= $siswa['level']; ?></p>
                    <a href="/siswa/profil/edit/<?= esc($siswa['id_siswa']) ?>" class="btn btn-warning btn-sm" >Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
