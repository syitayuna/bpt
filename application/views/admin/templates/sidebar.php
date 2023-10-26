<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar bg-danger bg-opacity-10">
	<ul class="sidebar-nav" id="sidebar-nav">
		<li class="nav-item">
			<a class="nav-link " href="<?= base_url('') ?>admin">
				<i class="bi bi-grid"></i>
				<span>Dashboard</span>
			</a>
		</li>
		<!-- End Dashboard Nav -->
		<li class="nav-item">
			<a class="nav-link " href="<?= base_url('') ?>home">
				<i class="bi bi-grid"></i>
				<span>Website Baperlitbangda</span>
			</a>
		</li>
		<!-- End Dashboard Nav -->
		<li class="nav-item">
			<a class="nav-link " href="<?= base_url('') ?>kategori">
				<i class="bi bi-grid"></i>
				<span>Kategori Berita</span>
			</a>
		</li>
		<!-- End Dashboard Nav -->
		<li class="nav-item">
			<a class="nav-link " href="<?= base_url('') ?>kategoriGambar">
				<i class="bi bi-grid"></i>
				<span>Kategori Gambar</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#berita-nav" data-bs-toggle="collapse" href="#">
				<i class="bi bi-menu-button-wide"></i><span>BERITA</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="berita-nav" class="nav-content collapse bg-info" data-bs-parent="#sidebar-nav">
				<?php

				$kategori = $this->ModelKategori->getAll();
				?>

				<li>
					<a href="<?= base_url() . "Berita"  ?>">
						<i class="bi bi-star-fill"></i><span>Semua Berita</span>
					</a>
				</li>


				<?php foreach ($kategori as $row) { ?>
					<li>
						<a href="<?= base_url() . "Berita?kategori=" . $row->nama_kategori ?>">
							<i class="bi bi-star-fill"></i><span><?= $row->nama_kategori ?></span>
						</a>
					</li>

				<?php } ?>

			</ul>
		</li>
		<!-- End Berita Nav -->

		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#galeri-nav" data-bs-toggle="collapse" href="#">
				<i class="bi bi-menu-button-wide"></i><span>GALERI</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="galeri-nav" class="nav-content collapse bg-info" data-bs-parent="#sidebar-nav">
				<?php

				$kategori = $this->ModelKategoriGambar->getAll();
				?> <li>
					<a href="<?= base_url() . "Galeri"  ?>">
						<i class="bi bi-star-fill"></i><span>Semua Gambar</span>
					</a>
				</li>


				<?php foreach ($kategori as $row) { ?>
					<li>
						<a href="<?= base_url() . "Galeri?kategori=" . $row->nama_kategori ?>">
							<i class="bi bi-star-fill"></i><span><?= $row->nama_kategori ?></span>
						</a>
					</li>

				<?php } ?>
			</ul>
		</li>
		<!-- End Galeri Nav -->

		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#layanan-nav" data-bs-toggle="collapse" href="#">
				<i class="bi bi-journal-text"></i><span>LAYANAN</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="layanan-nav" class="nav-content collapse bg-info" data-bs-parent="#sidebar-nav">
				<li>
					<a href="<?= base_url() ?>aduan">
						<i class="bi bi-star-fill"></i><span>Aduan</span>
					</a>
				</li>
				<li>
					<a href="<?= base_url() ?>saran">
						<i class="bi bi-star-fill"></i><span>Saran</span>
					</a>
				</li>
			</ul>
		</li>
		<!-- End layanan Nav -->

		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#dokumen-nav" data-bs-toggle="collapse" href="#">
				<i class="bi bi-journal-text"></i><span>DOKUMEN</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="dokumen-nav" class="nav-content collapse bg-info" data-bs-parent="#sidebar-nav">
				<li>
					<a href="<?= base_url() ?>Dokumen">
						<i class="bi bi-star-fill"></i><span>Data Dokumen</span>
					</a>
				</li>
			</ul>
		</li>
		<!-- End dokumen Nav -->
</aside>
<!-- End Sidebar-->
<main id="main" class="main">