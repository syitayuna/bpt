<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Dashboard - Admin Baperlitbangda</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?= base_url() . 'assets/admin/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/admin/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/admin/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/admin/vendor/quill/quill.snow.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/admin/vendor/quill/quill.bubble.css' ?>" rel="stylesheet">
	<link href="<?= base_url() . 'assets/admin/vendor/remixicon/remixicon.css' ?>" rel="stylesheet">
	<!-- simple database -->
	<link href="<?= base_url() . 'assets/admin/vendor/simple-datatables/style.css' ?>" rel="stylesheet">
	<!-- logo web -->
	<link href="<?= base_url('') ?>assets/img/logo_brebes.ico" rel="shortcut icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/admin/css/style.css' ?>">
	<!-- Datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- font & icon -->

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">



</head>

<body>
	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top d-flex align-items-center bg-danger text-light shadow">

		<div class="col-md-2 gx-2">
			<div class="bg-image hover-overlay ripple shadow-2-strong rounded-2" data-mdb-ripple-color="light">
				<img src="<?= base_url('assets/img/Logo2.png'); ?>" class="img-fluid" />
				<a href="#!">
					<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
				</a>
			</div>
		</div>

		<nav class="header-nav ms-auto">
			<ul class="d-flex align-items-center">

				<li class="nav-item dropdown pe-3">
					<a class="nav-link nav-profile d-flex align-items-center pe-0 text-white" href="#" data-bs-toggle="dropdown">
						<span class="d-none d-md-block dropdown-toggle ps-2">PROFILE ADMIN</span>
					</a><!-- End Profile Iamge Icon -->

					<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile bg-warning">
						<li>
							<a class="dropdown-item d-flex align-items-center" href="User">
								<i class="bi bi-person"></i>
								<span>My Profile</span>
							</a>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li>
							<a href="<?php echo base_url(); ?>index.php/login/logout" class="btn btn-primary btn-lg btn-block">Logout</a>
						</li>

					</ul><!-- End Profile Dropdown Items -->
				</li><!-- End Profile Nav -->

			</ul>
		</nav><!-- End Icons Navigation -->

	</header><!-- End Header -->