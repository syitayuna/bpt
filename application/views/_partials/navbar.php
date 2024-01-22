<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Baperlitbangda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- logo web -->
	<link href="<?= base_url('') ?>assets/img/logo_brebes.ico" rel="shortcut icon">

	<!-- Bootstrap 5.3.2 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Fontawesome 6.4.2 CSS -->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet" />

	<!-- css -->
	<link href="<?= base_url('assets/css/_main.css') ?>" rel="stylesheet">


	<!-- jQuery 3.6.0 -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Popper.js 2.11.8 -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous"></script>
	<!-- Bootstrap 5.3.2 JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- DataTables JS -->
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
	<!-- Simple Datatables -->
	<script src="<?= base_url() . 'assets/admin/vendor/simple-datatables/simple-datatables.js' ?>"></script>

</head>

<body>
	<div class="navbar">
		<nav class="navbar navbar-expand-lg shadow container-fluid p-0 p-2 fixed-top bg-danger">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?= base_url('home'); ?>">
					<img src="<?= base_url('assets/img/Logo2.png'); ?>" class="img-fluid" alt="Logo"
						style="max-width: 100%; height: auto;" />
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<div class="hamburger-toggle">
						<span class="material-icons">menu</span>
					</div>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link text-white" href="<?= base_url('home') ?>">HOME</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" data-bs-auto-close="outside">PROFIL</a>
							<ul class="dropdown-menu bg-danger text-white" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item text-white"
										href="<?= base_url('home/sejarah') ?>">Sejarah</a></li>
								<li><a class="dropdown-item text-white" href="<?= base_url('home/vimi') ?>">Visi &
										Misi</a></li>
								<li><a class="dropdown-item text-white" href="<?= base_url('home/struktur') ?>">Struktur
										Bagian</a></li>
								<li class="dropend dropdown">
									<a class="dropdown-item dropdown-toggle text-white" style="cursor: pointer;"
										data-bs-toggle="dropdown">Tugas dan Fungsi</a>
									<ul class="dropdown-menu bg-danger text-white shadow">
										<li><a class="dropdown-item text-white"
												href="<?= base_url('home/tusi_baperlitbangda') ?>">Baperlitbangda</a>
										</li>
										<li><a class="dropdown-item text-white"
												href="<?= base_url('home/tusi_sekretariat') ?>">Sekretariat</a></li>
										<li><a class="dropdown-item text-white"
												href="<?= base_url('home/tusi_rendalev') ?>">Bidang Perencanaan dan
												Pengendalian Evaluasi</a></li>
										<li><a class="dropdown-item text-white"
												href="<?= base_url('home/tusi_sosbud') ?>">Bidang Pemerintahan dan
												Sosial Budaya</a></li>
										<li><a class="dropdown-item text-white"
												href="<?= base_url('home/tusi_eiw') ?>">Bidang Ekonomi dan Infrastruktur
												Wilayah</a></li>
										<li><a class="dropdown-item text-white"
												href="<?= base_url('home/tusi_litbang') ?>">Bidang Penelitian dan
												Pengembangan</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">PPID</a>
							<ul class="dropdown-menu bg-danger">
								<li><a class="dropdown-item text-white" href="#">Informasi PPID</a></li>
								<li><a class="dropdown-item text-white" href="#">Daftar Informasi Publik</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">LAYANAN</a>
							<ul class="dropdown-menu bg-danger">
								<li><a class="dropdown-item text-white" href="<?= base_url('home/prospel1') ?>">Prosedur
										Pelayanan Pengajuan KKN</a></li>
								<li><a class="dropdown-item text-white" href="<?= base_url('home/prospel2') ?>">Prosedur
										Permohonan Informasi</a></li>
								<li><a class="dropdown-item text-white" href="<?= base_url('home/prospel3') ?>">Prosedur
										Pengajuan Keberatan Informasi</a></li>
								<li><a class="dropdown-item text-white"
										href="<?= base_url('aduan/add') ?>">Pengaduan</a></li>
								<li><a class="dropdown-item text-white" href="<?= base_url('saran/add') ?>">Saran</a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">BERITA</a>
							<?php $kategori = $this->ModelKategori->getAll(); ?>
							<ul class="dropdown-menu bg-danger">
								<li>
									<a class="dropdown-item text-white" href="<?= base_url() . "Berita/show" ?>">
										Semua Berita
									</a>
								</li>
								<?php foreach ($kategori as $row) { ?>
									<li>
										<a class="dropdown-item text-white"
											href="<?= base_url() . "Berita/show?kategori=" . $row->nama_kategori ?>">
											<?= $row->nama_kategori ?>
										</a>
									</li>
								<?php } ?>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">GALERI</a>
							<?php $kategori = $this->ModelKategoriGambar->getAll(); ?>
							<ul class="dropdown-menu bg-danger">
								<li>
									<a class="dropdown-item text-white" href="<?= base_url() . "Galeri/show" ?>">
										Semua Gambar
									</a>
								</li>
								<?php foreach ($kategori as $row) { ?>
									<li>
										<a class="dropdown-item text-white"
											href="<?= base_url() . "Galeri/show?kategori=" . $row->nama_kategori ?>">
											<?= $row->nama_kategori ?>
										</a>
									</li>
								<?php } ?>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="<?= base_url('Dokumen/show') ?>">DOWNLOAD</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>