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

            <h5 class="card-title">Data Logbook Siswa</h5>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Jurusan</th>
                            <th>Hari Tanggal</th>
                            <th>Jenis Kegiatan</th>
                            <th>Uraian Kegiatan</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($logbook as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= esc($item['nama']) ?></td>
                                <td><?= esc($item['jurusan']) ?></td>
                                <td><?= esc($item['hari_tanggal']) ?></td>
                                <td><?= esc($item['jenis_kegiatan']) ?></td>
                                <td><?= esc($item['uraian_kegiatan']) ?></td>
                                <td><img width="100px" src="/uploads/logbook/<?= esc($item['gambar']) ?>" alt=""></td>
                                <td>
                                    <?php if ($item['status'] === 'setuju'): ?>
                                        <span class="badge bg-success"><i class="bi bi-check-circle"></i> Setuju</span>
                                    <?php elseif ($item['status'] === 'tidak_setuju'): ?>
                                        <span class="badge bg-danger"><i class="bi bi-x-circle"></i> Tidak Setuju</span>
                                    <?php else: ?>
                                        <span class="badge bg-secondary">Menunggu</span>
                                    <?php endif; ?>
                                </td>

                                <td class="d-flex justify-content-start gap-1">
                                    <a href="/guru_pendamping/validasi/setuju/<?= esc($item['id_logbook']) ?>" class="btn btn-success btn-sm" title="Setuju">
                                        <i class="bi bi-check"></i>
                                    </a>
                                    <a href="/guru_pendamping/validasi/tidak_setuju/<?= esc($item['id_logbook']) ?>" class="btn btn-danger btn-sm" title="Tidak Setuju">
                                        <i class="bi bi-x"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>