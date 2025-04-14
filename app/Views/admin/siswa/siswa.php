<main class="content">
    <div class="card">
        <div class="card-body">
            <!-- Alert Section -->
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <h5 class="card-title">Data Siswa</h5>

            <div class="mb-3">
                <a href="/admin/siswa/tambah" class="btn btn-success">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= esc($item['nama']) ?></td>
                                <td><?= esc($item['nik']) ?></td>
                                <td><?= esc($item['kelas']) ?></td>
                                <td><?= esc($item['jurusan']) ?></td>
                                <td class="d-flex justify-content-start gap-1">
                                    <a href="/admin/siswa/edit/<?= $item['id_siswa'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/admin/siswa/hapus/<?= $item['id_siswa'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
