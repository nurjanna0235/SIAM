<main class="content">
	<div class="card">
		<div class="card-body">
			<!-- Alert Section -->

			<h5 class="card-title">Logbook</h5>

			<div class="mb-3">
				<a href="/admin/logbook/tambah" class="btn btn-success">Tambah</a>
			</div>


			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Hari/Tanggal</th>
							<th>Jenis Kegiatan</th>
							<th>Uraian Kegiatan</th>
							<th>Gambar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<!-- Contoh data statis, ganti dengan data dinamis dari database -->
						<tr>
							<td>1</td>
							<td>Kamis, 23 Juli 2024</td>
							<td>Perbaikan</td>
							<td>Ganti Oli</td>
							<td><img src="/path/to/image.jpg" alt="Gambar" width="50"></td>
							<td class="d-flex justify-content-start gap-1">
								<a href="/admin/logbook/edit" class="btn btn-warning btn-sm" onclick="editData(1)">Edit</a>
								<a href="/admin/logbook/hapus" class="btn btn-danger btn-sm" onclick="hapusData(1)">Hapus</a>
							</td>
						</tr>
						<!-- Tambahkan data lainnya di sini -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
