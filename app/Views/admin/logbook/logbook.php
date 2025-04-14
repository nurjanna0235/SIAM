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
							<th>Nama Siswa</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<!-- Contoh data statis, ganti dengan data dinamis dari database -->
						<tr>
							<td>1</td>

							<td>Kamis, 23 Juli 2024</td>
							<td>Janna</td>
							<td class="d-flex justify-content-start gap-1">
								<a href="/admin/logbook/edit/1" class="btn btn-warning btn-sm" >Edit</a>
								<a href="/admin/logbook/detail/1" class="btn btn-primary btn-sm" >Detail</a>
								<a href="/admin/logbook/hapus/1" class="btn btn-danger btn-sm" >Hapus</a>
							</td>
						</tr>
						<!-- Tambahkan data lainnya di sini -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
