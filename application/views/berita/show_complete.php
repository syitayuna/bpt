<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
	#isi_berita {
		font-family: 'Times New Roman', Times, serif !important;
	}

	.apa {
		position: -webkit-sticky;
		position: sticky;
		top: 130px;
		height: 600px;
		padding: 5px;

	}
</style>

<div style="margin:100px 3%; ">
	<div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
		<div class="col-lg-2 apa d-none d-lg-block">
			<div class="card">
				<div class="card-body">
					<h4>Kategori Lainya</h4>
					<ul class="list-group list-group-flush">
						<?php foreach ($allkategori as $kategori) { ?>
							<?php if ($kategori->id_kategori != $data_berita->id_kategori) { ?>
								<li class="list-group-item fs-6">
									<a class="text-dark" href="<?= base_url("$class/show/?kategori=" . $kategori->nama_kategori); ?>">
										<i class="bi bi-record-fill text-warning"></i>
										<?= $kategori->nama_kategori ?>
									</a>
								</li>
							<?php } ?>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>


		<div class="col-lg-7">
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/baperlitbangda/<?= $class ?>/show">
							<?= $title ?>
						</a></li>
					<li class="breadcrumb-item"><a href="/baperlitbangda/berita/show?kategori=<?= $data_berita->nama_kategori; ?>">
							<?= $data_berita->nama_kategori; ?>
						</a></li>
					<li class="breadcrumb-item active d-inline-block text-truncate" style="max-width: 50%;" aria-current="page">
						<?= $data_berita->judul_berita; ?>
					</li>
				</ol>
			</nav>

			<h2 class="mb-3">
				<?= $data_berita->judul_berita; ?>
			</h2>

			<img src="<?= base_url('assets/img/berita/') . $data_berita->gambar; ?>" class="img-responsive" alt="<?= $data_berita->judul_berita; ?>" width="100%">



			<p class="mt-3">

				<a href="/baperlitbangda/<?= $class ?>/show">
					<?= $title ?>
				</a> -
				<?= date('M d, Y', strtotime($data_berita->tanggal)); ?>
			</p>
			<div class="fs-6 ">
				<span style="color:#444;">
					<?= $data_berita->isi_berita; ?>
				</span>
			</div>

		</div>



		<div class="col-lg-3 apa">
			<div class="card">
				<div class="card-body">
					<div class="container ">
						<h4>Berita Terkait</h4>
						<ul class="list-group list-group-flush">
							<?php foreach ($allberita as $berita) { ?>

								<?php if ($berita->judul_berita != $data_berita->judul_berita && $berita->id_kategori == $data_berita->id_kategori) { ?>

									<li class="list-group-item fs-6"><a class="text-dark" href="<?= base_url("$class/show_complete/" . $berita->id_berita); ?>"><i class="bi bi-record-fill text-warning"></i>
											<?= $berita->judul_berita ?>
										</a></li>

								<?php } ?>

							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>