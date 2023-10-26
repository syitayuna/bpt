<!-- berita/berita_sekre/add -->
<div class="container pt-2">
	<?php
	if (isset($_REQUEST['kategori'])) { ?>
		<h3>Upload Berita
			<?= $_REQUEST['kategori'] ?>
		</h3>
	<?php } else { ?>

		<h3>Upload Berita
			<?= "Berita" ?>
		</h3>
	<?php } ?>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a>Berita</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url($class); ?>">Data Berita</a></li>
			<li class="breadcrumb-item active" aria-current="page">Upload Berita</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="<?= base_url("$class/add"); ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="judul_berita" class="col-form-label">Judul Berita</label>

							<input type="text" class="form-control" id="judul_berita" name="judul_berita"
								value="<?= set_value('judul_berita'); ?>">
							<small class="text-danger">
								<?= form_error('judul_berita') ?>
							</small>

						</div>

						<input type="text" name="kategori" value="<?= $this->input->get('kategori') ?>" hidden>

						<?php
						if (isset($_REQUEST['kategori'])) { ?>
							<div class="form-group">
								<label for="id_kategori" class="col-form-label">Kategori</label>

								<select class="form-select form-control" aria-label="Default select example"
									name="id_kategori">

									<?php foreach ($Kategori as $row) { ?>
										<?php if ($row->nama_kategori == $this->input->get('kategori')) { ?>
											<option value="<?= $row->id_kategori ?>">
												<?= $row->nama_kategori ?>
											</option>
										<?php } ?>
									<?php } ?>

									<?php foreach ($Kategori as $row) { ?>
										<?php if ($row->nama_kategori != $this->input->get('kategori')) { ?>
											<option value="<?= $row->id_kategori ?>">
												<?= $row->nama_kategori ?>
											</option>
										<?php } ?>


									<?php } ?>
								</select>
							</div>
						<?php } else { ?>

							<div class="form-group">
								<label for="id_kategori" class="col-form-label">Kategori</label>
								<select class="form-select form-control" aria-label="Default select example"
									name="id_kategori">

									<option selected>-- Pilih Kategori --</option>
									<?php foreach ($Kategori as $row) { ?>
										<option value="<?= $row->id_kategori ?>">
											<?= $row->nama_kategori ?>
										</option>
									<?php } ?>
								</select>
							</div>
						<?php } ?>



						<img id="gambar" width="30%" />

						<div class="form-group">
							<label for="gambar" class="col-form-label">Gambar</label>

							<input type="file" class="form-control" id="gambar" name="gambar" onchange="upload(this);">
							<small class="text-danger">
								<?= form_error('gambar') ?>
							</small>

						</div>
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input type="date" class="form-control" id="tanggal" name="tanggal"
								value="<?= date('Y-m-d') ?>">
						</div>

						<div>
							<label for="isi_berita">Konten</label>
							<input type="hidden" name="isi_berita" value="<?= set_value('isi_berita') ?>">
							<div id="editor" style="min-height: 300px; font-size: 18px;">
								<?= set_value('isi_berita') ?>
							</div>
						</div>


						<hr class="my-3" />
						<div class="form-group">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-warning">Simpan</button>
								<a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>




	</div>

</div>