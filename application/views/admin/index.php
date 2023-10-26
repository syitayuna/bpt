<div class="container-fluid">
	<!-- ROW 1 -->
	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2 bg-info">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col">
							<div class="text-md font-weight-bold text-white text-uppercase mb-2">Aduan</div>
							<div class="h1 font-weight-bold text-white">
								<?php
								$totaladuan = count($this->ModelAduan->getAll());
								echo $totaladuan;
								?>
							</div>
						</div>
						<div class="col-auto">
							<a href="<?= base_url('Aduan'); ?>">
								<i class="bi bi-envelope-paper-fill fa-3x text-light"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2 bg-info">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col">
							<div class="text-md font-weight-bold text-white text-uppercase mb-2">Saran</div>
							<div class="h1 font-weight-bold text-white">
								<?php
								$totalsaran = count($this->ModelSaran->getAll());
								echo $totalsaran;
								?>
							</div>
						</div>
						<div class="col-auto">
							<a href="<?= base_url('Saran'); ?>">
								<i class="bi bi-envelope-paper-heart-fill fa-3x text-light"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2 bg-info">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-md font-weight-bold text-white text-uppercase mb-1">Dokumen</div>
							<div class="h1 mb-0 font-weight-bold text-white">
								<?php

								$totaldokumen
									= count($this->ModelDokumen->getAll());
								echo $totaldokumen;
								?>
							</div>
						</div>
						<div class="col-auto">
							<a href="<?= base_url('Dokumen'); ?>"><i
									class="bi bi-file-earmark-text-fill fa-3x text-light"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="mt-5" />
	<!-- ROW 2 -->
	<div class="row">
		<?php foreach ($this->ModelKategori->getAll() as $kategori) { ?>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2 bg-primary">
					<div class="card-body">
						<div class="text-center">
							<a href="<?= base_url() . "Berita?kategori=" . urlencode($kategori->nama_kategori) ?>"><i
									class="bi bi-newspaper fa-3x text-light mb-3"></i></a>
							<div class="text-md font-weight-bold text-white text-uppercase mb-1">
								<?= $kategori->nama_kategori ?>
							</div>
							<div class="h1 mb-0 font-weight-bold text-white">
								<?php
								$totalberita = count($this->ModelAllBerita->getTotal($kategori->id_kategori));
								echo $totalberita;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

	<hr class="mt-5" />
	<!-- ROW 3 -->

	<div class="row">
		<?php foreach ($this->ModelKategoriGambar->getAll() as $kategori) { ?>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2 bg-info">
					<div class="card-body">
						<div class="text-center">
							<a href="<?= base_url() . "Galeri?kategori=" . urlencode($kategori->nama_kategori) ?>"><i
									class="bi bi-file-earmark-image fa-3x text-light mb-3"></i></a>
							<div class="text-md font-weight-bold text-white text-uppercase mb-1">
								<?= $kategori->nama_kategori ?>
							</div>
							<div class="h1 mb-0 font-weight-bold text-white">
								<?php
								$totalgaleri = count($this->ModelAllGaleri->getTotal($kategori->id_kategori));
								echo $totalgaleri;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>

</div>
</div>