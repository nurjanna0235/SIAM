<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasi Akun</title>
	<link href="/adminkit-dev/static/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style>
		.card-body h5 {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		#ortu-data {
			display: none;
			margin-top: 10px;
			padding: 10px;
			background-color: #f1f1f1;
			border-radius: 5px;
		}
	</style>
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-10 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Registrasi Akun</h1>
							<p class="lead">Silakan isi data lengkap sesuai kategori.</p>
						</div>

						<div class="card">
							<div class="card-body">

								<!-- ALERT FLASH MESSAGE -->
								<!-- Ganti bagian ini sesuai backend, contoh untuk Laravel/CodeIgniter -->
								<?php if (session()->getFlashdata('success')): ?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										<?= session()->getFlashdata('success') ?>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
								<?php endif; ?>
								<?php if (session()->getFlashdata('error')): ?>
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
										<?= session()->getFlashdata('error') ?>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
								<?php endif; ?>

								<form action="/registrasi/submit" method="post">
									<div class="row">
										<!-- Form Siswa -->
										<div class="col-md-6">
											<h5 class="mb-3">Form Siswa</h5>
											<div class="mb-3">
												<label class="form-label">Nama</label>
												<input type="text" class="form-control" name="nama_siswa" required>
											</div>
											<div class="mb-3">
												<label class="form-label">NIK</label>
												<input type="text" class="form-control" name="nik" required>
											</div>
											<div class="mb-3">
												<label class="form-label">Kelas</label>
												<input type="text" class="form-control" name="kelas" required>
											</div>
											<div class="mb-3">
												<label class="form-label">Jurusan</label>
												<select class="form-control" name="id_jurusan" required>
													<option value="">-- Pilih Jurusan --</option>
													<?php foreach ($jurusan as $item): ?>
														<option value="<?= $item['id_jurusan'] ?>"><?= $item['nama_jurusan'] ?></option>
													<?php endforeach; ?>
												</select>
											</div>

											<div class="mb-3">
												<label class="form-label">Email</label>
												<input type="email" class="form-control" name="email_siswa" required>
											</div>
											<div class="mb-3">
												<label class="form-label">Username</label>
												<input type="text" class="form-control" name="username_siswa" required>
											</div>
											<div class="mb-3">
												<label class="form-label">Password</label>
												<input type="password" class="form-control" name="password_siswa" required>
											</div>
										</div>

										<!-- Form Orang Tua -->
										<div class="col-md-6">
											<h5 class="mb-3">
												Form Orang Tua
												<div class="form-check form-switch ms-auto">
													<input class="form-check-input" type="checkbox" id="toggleOrtu" name="check_ortu" onchange="toggleOrtuForm()">
													<label class="form-check-label" for="toggleOrtu">Sudah punya akun orang tua?</label>
												</div>
											</h5>

											<div id="selectOrtu" style="display: none;">
												<div class="mb-3">
													<label class="form-label">Pilih NIK Orang Tua</label>
													<input type="text" class="form-control" name="nik_ortu" id="nik_ortu" onkeyup="cariOrtu()">
												</div>
												<div id="ortu-data">
													<p><strong>Data Orang Tua:</strong></p>
													<p id="ortu-nama"></p>
													<p id="ortu-alamat"></p>
													<p id="ortu-nohp"></p>
												</div>
											</div>

											<div id="formOrtu">
												<div class="mb-3">
													<label class="form-label">Nama</label>
													<input type="text" class="form-control" name="nama_ortu">
												</div>
												<div class="mb-3">
													<label class="form-label">Alamat</label>
													<input type="text" class="form-control" name="alamat">
												</div>
												<div class="mb-3">
													<label class="form-label">No. HP</label>
													<input type="text" class="form-control" name="no_hp">
												</div>
												<div class="mb-3">
													<label class="form-label">Email</label>
													<input type="email" class="form-control" name="email_ortu">
												</div>
												<div class="mb-3">
													<label class="form-label">Username</label>
													<input type="text" class="form-control" name="username_ortu">
												</div>
												<div class="mb-3">
													<label class="form-label">Password</label>
													<input type="password" class="form-control" name="password_ortu">
												</div>
											</div>
										</div>
									</div>

									<div class="d-grid gap-2 mt-4">
										<button type="submit" class="btn btn-lg btn-primary">Daftar</button>
									</div>
								</form>
							</div>
						</div>

						<div class="text-center mb-3">
							Sudah punya akun? <a href="pages-sign-in.html">Masuk di sini</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script>
		function toggleOrtuForm() {
			const isChecked = document.getElementById("toggleOrtu").checked;
			document.getElementById("selectOrtu").style.display = isChecked ? "block" : "none";
			document.getElementById("formOrtu").style.display = isChecked ? "none" : "block";
		}

		function cariOrtu() {
			const nikOrtu = document.getElementById("nik_ortu").value;

			if (nikOrtu.length >= 3) {
				fetch(`/api/cari-ortu?nik=${nikOrtu}`)
					.then(response => response.json())
					.then(data => {
						if (data.status === "found") {
							document.getElementById("ortu-data").style.display = "block";
							document.getElementById("ortu-nama").textContent = `Nama: ${data.nama}`;
							document.getElementById("ortu-alamat").textContent = `Alamat: ${data.alamat}`;
							document.getElementById("ortu-nohp").textContent = `No HP: ${data.no_hp}`;
						} else {
							document.getElementById("ortu-data").style.display = "none";
						}
					});
			}
		}
	</script>

	<script src="/adminkit-dev/static/js/app.js"></script>
</body>

</html>