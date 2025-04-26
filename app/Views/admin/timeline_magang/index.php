<main class="content">
	<div class="card">
		<div class="card-body">
			<!-- Alert Section -->
			

			<h5 class="card-title">Kelola Data Timeline Magang</h5>
			<!-- Tombol Tambah -->
			<a href="/admin/timeline_magang/tambah" class="btn btn-sm btn-success mb-3">Tambah Data</a>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kegiatan</th>
							<th>Mulai</th>
							<th>Selesai</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<!-- Contoh data statis, ganti dengan data dinamis dari database -->
						<?php foreach ($timelineMagang as $index => $item): ?>
						<tr>
							<td><?= $index + 1; ?></td>
							<td><?= esc($item['nama_kegiatan']); ?></td>
							<td><?= esc($item['mulai']); ?></td>
							<td><?= esc($item['selesai']); ?></td>
							<td><?= esc($item['status']); ?></td>
							<td>
								<a href="/admin/timeline_magang/edit/<?= $item['id_timeline_magang']; ?>"
									class="btn btn-sm btn-warning">Edit</a>
								<a href="/admin/timeline_magang/hapus/<?= $item['id_timeline_magang']; ?>" class="btn btn-sm btn-danger"
									onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
							</td>
						</tr>
						<?php endforeach; ?>
						<!-- Tambahkan data lainnya di sini -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>

<!-- Tambahkan SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>