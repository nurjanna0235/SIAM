<main class="content">
	<div class="card">
		<div class="card-body">
			<!-- Alert Section -->

			<h5 class="card-title">Laporan Kunjungan</h5>

			<div class="mb-3">
				<a href="/admin/laporan_kunjungan/tambah" class="btn btn-success">Tambah</a>
			</div>


			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>ID Siswa</th>
							<th>ID Lokasi</th>
							<th>Nama Instansi</th>
							<th>Nama Petugas Monitoring</th>
							<th>Kelas</th>
							<th>Jurusan</th>
							<th>Nama Iduka</th>
							<th>Catatan Iduka</th>
							<th>Gambar</th>
							<th>Hasil Konsultasi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<!-- Contoh data statis, ganti dengan data dinamis dari database -->
						<tr>
							<td>1</td>
							<td>12345</td>
							<td>67890</td>
							<td>PT. Contoh</td>
							<td>John Doe</td>
							<td>12</td>
							<td>RPL</td>
							<td>Iduka A</td>
							<td>Catatan A</td>
							<td><img src="/path/to/image.jpg" alt="Gambar" width="50"></td>
							<td>Hasil A</td>
							<td class="d-flex justify-content-between">
							<a href="/admin/laporan_kunjungan/edit/1"  class="btn btn-warning btn-sm me-2">Edit</a>
							<a href="/admin/laporan_kunjungan/hapus/1" class="btn btn-danger btn-sm me-2">Hapus</a>
							</td>
						</tr>
						<!-- Tambahkan data lainnya di sini -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
