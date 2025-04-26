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

            <h5 class="card-title">Data Lokasi</h5>

            <div class="mb-3">
                <a href="/siswa/lokasi/tambah" class="btn btn-success">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tempat Magang</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Maps</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($lokasi as $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= esc($item['lokasi_siswa']) ?></td>
                                <td><?= esc($item['kategori']) ?></td>
                                <td><?= esc($item['deskripsi']) ?></td>
                                <td><?= esc($item['gambar']) ?></td>
                                <td><?= esc($item['latitude']) ?></td>
                                <td class="d-flex justify-content-start gap-1">
                                    <a href="/siswa/lokasi/edit/<?= $item['id_lokasi'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/siswa/lokasi/hapus/<?= $item['id_lokasi'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
