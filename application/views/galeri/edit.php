<div class="container pt-5">
	<h3>
		<?= $title ?>
	</h3>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb ">
			<li class="breadcrumb-item"><a>Berita</a></li>
			<li class="breadcrumb-item "><a href="<?= base_url($class); ?>">Data Berita</a></li>
			<li class="breadcrumb-item active" aria-current="page">Edit Data</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="<?= base_url("$class/edit"); ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="judul" class="col-sm-5 col-form-label">Judul Berita</label>
							<div class="col-sm-10">
								<input type="hidden" class="form-control" id="id_gambar" name="id_gambar" value=" <?= $data_gambar->id_gambar; ?>">
								<input type="text" class="form-control" id="judul" name="judul" value=" <?= $data_gambar->judul; ?>">
								<small class="text-danger">
									<?php echo form_error('judul') ?>
								</small>
							</div>
						</div>
						<img id="gambar" width="30%" />
						<img id="priview" style="display: block;" src="<?= base_url('assets/img/galeri/') . $data_gambar->gambar; ?>" width="30%" />

						<div class="form-group row">
							<label for="gambar" class="col-sm-5 col-form-label">Gambar</label>
							<div class="col-sm-10">
								<input type="file" class="form-control-file" id="gambar" name="gambar" value="<?= $data_gambar->gambar ?>" onchange="upload(this);">
								<small class="text-danger">
									<?= form_error('gambar') ?>
								</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="tanggal" class="col-sm-5 col-form-label">Tanggal</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data_gambar->tanggal; ?>">
								<small class="text-danger">
									<?= form_error('tanggal') ?>
								</small>
							</div>
						</div>


						<input type="text" name="kategori" value="<?= $data_gambar->nama_kategori ?>" hidden>
						<label for="tanggal" class="col-sm-5 col-form-label">Kategori</label>
						<select class="form-select" aria-label="Default select example" name="id_kategori">
							<?php foreach ($Kategori as $row) { ?>
								<?php if ($row->id_kategori == $data_gambar->id_kategori) { ?>
									<option value="<?= $row->id_kategori ?>"><?= $row->nama_kategori ?></option>
								<?php } ?>
							<?php } ?>

							<?php foreach ($Kategori as $row) { ?>
								<?php if ($row->id_kategori != $data_gambar->id_kategori) { ?>
									<option value="<?= $row->id_kategori ?>"><?= $row->nama_kategori ?></option>
								<?php } ?>


							<?php } ?>
						</select>

						<input type="text" class="form-control" id="tanggal" name="gambar_lama" value="<?= $data_gambar->gambar; ?>" hidden>


						<input type="hidden" name="id_gambar" value="<?= $data_gambar->id_gambar; ?>">

						<hr class="my-3" />
						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-warning">Simpan</button>
								<a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>