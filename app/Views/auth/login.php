<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Login Page">
	<meta name="author" content="AdminKit">
	<title>Login | Sistem</title>

	<link href="/adminkit-dev/static/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Selamat Datang!</h1>
							<p class="lead">
								Silakan masuk untuk melanjutkan.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">

									<!-- ALERT FLASHDATA -->
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
									
									<!-- FORM LOGIN -->
									<form action="<?= base_url('/login') ?>" method="post">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="username" placeholder="Masukkan username" required />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan password" required />
										</div>
										<div class="form-check mb-3">
											<input id="remember" type="checkbox" class="form-check-input" name="remember-me" checked>
											<label class="form-check-label" for="remember">Ingat saya</label>
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Masuk</button>
										</div>
									</form>

								</div>
							</div>
						</div>

						<div class="text-center mt-3">
							Belum punya akun? <a href="<?= base_url('/register') ?>">Daftar di sini</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="/adminkit-dev/static/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
