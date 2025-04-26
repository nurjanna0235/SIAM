<main class="content">
	<div class="card">
		<div class="card-body">
			<!-- Alert Section -->

			<h5 class="card-title">Validasi Lokasi</h5>

			<div class="mb-3">
				<a href="/admin/validasi_lokasi/tambah" class="btn btn-success">Tambah</a>
			</div>


			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Siswa</th>
                            <th>Tempat Magang</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<!-- Contoh data statis, ganti dengan data dinamis dari database -->
						<tr>
							<td>1</td>


							<td>Janna</td>
                            <td>PT. ABC</td>
							<td class="d-flex justify-content-start gap-1">
								<a href="/admin/validasi_lokasi/validasi/1" class="btn btn-warning btn-sm" >Validasi</a>
								
							</td>
						</tr>
						<!-- Tambahkan data lainnya di sini -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
