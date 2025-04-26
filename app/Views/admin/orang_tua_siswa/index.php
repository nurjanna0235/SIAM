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

            <h5 class="card-title">Data OrangTua</h5>

            <div class="mb-3">
                <a href="/admin/orang_tua_siswa/tambah" class="btn btn-success">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Handphone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($OrangTuaSiswa as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= esc($item['nama']) ?></td>
                                <td><?= esc($item['alamat']) ?></td>
                                <td><?= esc($item['no_hp']) ?></td>
                                <td class="d-flex justify-content-start gap-1">
                                    <a href="/admin/orang_tua_siswa/edit/<?= $item['id_orang_tua'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/admin/siswa/orang_tua_siswa/<?= $item['id_orang_tua'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
