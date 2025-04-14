<main class="content">
	<div class="card">
		<div class="card-body">
			<!-- Alert Section -->

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
						<!-- Contoh data statis, ganti dengan data dinamis dari database -->
						<tr>
							<td>1</td>
							<td>Janna</td>
							<td>2222</td>
							<td>XII 1</td>
                            <td>Multimedia</td>
                            <td class="d-flex justify-content-start gap-1">
                            <a href="/admin/siswa/edit/1" class="btn btn-warning btn-sm" onclick="editData(1)">Edit</a>
                            <a href="/admin/siswa/hapus/1" class="btn btn-danger btn-sm" onclick="hapusData(1)">Hapus</a>
                            </td>
						</tr>
						<!-- Tambahkan data lainnya di sini -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
