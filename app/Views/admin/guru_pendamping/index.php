<main class="content">
    <div class="card">
        <div class="card-body">
            <!-- Alert Section -->
            <h5 class="card-title">Jurusan</h5>

            <div class="mb-3">
                <a href="/admin/guru_pendamping/tambah" class="btn btn-success">Tambah</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru Pendamping</th>
                            <th>Jurusan</th>
                            <th>NIP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($guru_pendamping as $item): ?>
                            <tr>
                                <td><?php echo ($no++) ?></td>
                                <td><?= $item['nama_guru_pendamping'] ?></td>
                                  <td><?= $item['nip'] ?></td>
                                <td><?= $item['nama_jurusan'] ?></td>
                                <td class="d-flex justify-content-start gap-1">
                                    <a href="/admin/guru_pendamping/edit/<?= $item['id_guru_pendamping'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/admin/guru_pendamping/hapus/<?= $item['id_guru_pendamping'] ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus guru pendamping <?= addslashes($item['nama_jurusan']) ?>?')">
                                        Hapus
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