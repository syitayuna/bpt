<style>
	.background-gambar {
		width: 100%;
		height: 700px;
		background-size: cover;
		background-image: url('<?= base_url('assets/img/banner/kpt_shadow.jpg'); ?>');
		background-attachment: fixed;
		color: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.card {
        width: 100%;
        height: 100%;
    }
</style>

<div class="banner">
	<div class="background-gambar">
		<div class="py-5 bg-image-full">
			<div class="container text-center my-5">
				<img class="img-fluid rounded-circle mb-2" src="<?= base_url('assets/img/logo_brebes.png'); ?>"
					alt="Profile Picture" style="max-width: 20%;" />
				<marquee behavior="scroll" direction="left">
					<h1><strong>SELAMAT DATANG DI WEBSITE BAPERLITBANGDA KABUPATEN BREBES</strong></h1>
				</marquee>
			</div>
		</div>
	</div>
</div>

<div class="container mt-5" style="background-color: #fff;">
	<!--Carousel-->
	<section class="mt-5">
		<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
			<ol class="carousel-indicators">
				<li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
					aria-label="First slide"></li>
				<li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
				<li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
				<li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="Fourth slide"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img src="<?= base_url('assets/img/carousel/Bpt.jpeg'); ?>"
						style="max-width:100%; max-height: 100%; height: 600px; width: 1200px" alt="First slide">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/img/carousel/stbrebes.jpg'); ?>"
						style="max-width:100%; max-height: 100%; height: 600px; width: 1200px" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/img/carousel/apel_ikrar.jpeg'); ?>"
						style="max-width:100%; max-height: 100%; height: 600px; width: 1200px" alt="Third slide">
				</div>
				<div class="carousel-item">
					<img src="<?= base_url('assets/img/carousel/apel_ikrar2.jpeg'); ?>"
						style="max-width:100%; max-height: 100%; height: 600px; width: 1200px" alt="Fourth slide">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<!-- Content Section 1 -->
	<section class="mt-5">
		<div class="container text-center">
			<h1 class="h1-content1 fs-md-5 bd-title">BAPERLITBANGDA KABUPATEN BREBES</h1>
			<h6 class="h6-content1 fw-semibold fst-italic">Perencanaan Berkualitas, Akomodatif, Kreatif dan Inovatif
			</h6>
		</div>
	</section>

	<!-- Content Section 2 -->
	<section class="mt-5">
		<div class="row">
			<div class="col-md-5 gx-5 mb-5">
				<div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
					<img src="<?= base_url('assets/img/logo_brebes.png'); ?>" class="img-fluid" alt="Logo Brebes">
					<a href="#!">
						<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
					</a>
				</div>
			</div>

			<div class="col-md-6 gx-5 mb-4">
				<h6><strong>BAPERLITBANGDA (Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah)</strong>
				</h6>
				<p class="text-muted">adalah sebuah lembaga pemerintah yang bertugas untuk melakukan berbagai kegiatan
					penelitian, pengembangan, dan inovasi di tingkat daerah atau daerah otonom.</p>
				<p><strong>Apa Fungsi dan Peran Baperlitbangda?</strong></p>
				<p class="text-muted">Fungsi dan peran utama BAPERLITBANGDA adalah untuk mendukung dan memfasilitasi
					pembangunan daerah, serta untuk meningkatkan kualitas hidup masyarakat di dalamnya.</p>
			</div>
		</div>
	</section>

	<section class="mt-5 text-center">
    <div class="container">
        <h2 class="section-title mb-4">BERITA BAPERLITBANGDA</h2>
        <div class="row">
            <?php
            $kategoriList = [
				[
					'nama_kategori' => 'Kepala Badan',
					'icon' => 'fa-user-tie',
					'color' => 'primary',
				],
				[
					'nama_kategori' => 'Sekretariat',
					'icon' => 'fa-id-card',
					'color' => 'orange',
				],
				[
					'nama_kategori' => 'Bidang Perencanaan dan Pengendalian Evaluasi',
					'icon' => 'fa-laptop-file',
					'color' => 'purple',
				],
				[
					'nama_kategori' => 'Bidang Penelitian dan Pengembangan',
					'icon' => 'fa-magnifying-glass-chart',
					'color' => 'cyan',
				],
				[
					'nama_kategori' => 'Bidang Ekonomi dan Infrastruktur Wilayah',
					'icon' => 'fa-money-bill-trend-up',
					'color' => 'red',
				],
				[
					'nama_kategori' => 'Bidang Pemerintahan dan Sosial Budaya',
					'icon' => 'fa-mountain-city',
					'color' => 'yellow',
				],
			];

            foreach ($kategoriList as $kategori) { ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <a href="<?= base_url('berita/show?kategori=' . $kategori['nama_kategori']); ?>">
                        <div class="card border-0 shadow rounded-xs pt-4 d-flex flex-column">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center equal-height">
                                <i class="fa <?= $kategori['icon'] ?> icon-lg icon-<?= $kategori['color'] ?> icon-bg-<?= $kategori['color'] ?> icon-bg-circle mb-2"></i>
                                <h6 class="mt-4 mb-2">
                                    <?= $kategori['nama_kategori'] ?>
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="mt-5 text-center">
    <div class="container">
        <h2 class="section-title mb-4">GALERI BAPERLITBANGDA</h2>
        <div class="row">
            <?php
            $kategoriList = [
				[
					'nama_kategori' => 'Kepala Badan',
					'icon' => 'fa-user-tie',
					'color' => 'primary',
				],
				[
					'nama_kategori' => 'Sekretariat',
					'icon' => 'fa-id-card',
					'color' => 'orange',
				],
				[
					'nama_kategori' => 'Bidang Perencanaan dan Pengendalian Evaluasi',
					'icon' => 'fa-laptop-file',
					'color' => 'purple',
				],
				[
					'nama_kategori' => 'Bidang Penelitian dan Pengembangan',
					'icon' => 'fa-magnifying-glass-chart',
					'color' => 'cyan',
				],
				[
					'nama_kategori' => 'Bidang Ekonomi dan Infrastruktur Wilayah',
					'icon' => 'fa-money-bill-trend-up',
					'color' => 'red',
				],
				[
					'nama_kategori' => 'Bidang Pemerintahan dan Sosial Budaya',
					'icon' => 'fa-mountain-city',
					'color' => 'yellow',
				],
			];

            foreach ($kategoriList as $kategori) { ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <a href="<?= base_url('galeri/show?kategori=' . $kategori['nama_kategori']); ?>">
                        <div class="card border-0 shadow rounded-xs pt-4 d-flex flex-column">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center equal-height">
                                <i class="fa <?= $kategori['icon'] ?> icon-lg icon-<?= $kategori['color'] ?> icon-bg-<?= $kategori['color'] ?> icon-bg-circle mb-2"></i>
                                <h6 class="mt-4 mb-2">
                                    <?= $kategori['nama_kategori'] ?>
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

</div>
<!--Main layout-->