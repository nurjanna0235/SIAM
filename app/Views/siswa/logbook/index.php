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

            <h5 class="card-title">Data Logbook</h5>

            <div class="mb-3">
                <a href="logbook/tambah" class="btn btn-success">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hari Tanggal</th>
                            <th>Jenis Kegiatan</th>
                            <th>Uraian Kegiatan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($logbook as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= esc($item['hari_tanggal']) ?></td>
                                <td><?= esc($item['jenis_kegiatan']) ?></td>
                                <td><?= esc($item['uraian_kegiatan']) ?></td>
                                <td><img width="100px" src="/uploads/logbook/<?= esc($item['gambar']) ?>" alt=""></td>
                                <td class="d-flex justify-content-start gap-1">
								<a href="/siswa/logbook/edit/<?= esc($item['id_logbook']) ?>" class="btn btn-warning btn-sm" >Edit</a>
								<a href="/siswa/logbook/hapus/<?= esc($item['id_logbook']) ?>" class="btn btn-danger btn-sm" >Hapus</a>
							</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>