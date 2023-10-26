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
							<label for="judul_berita" class="col-sm-5 col-form-label">Judul Berita</label>
							<div class="col-sm-10">
								<input type="hidden" class="form-control" id="id_berita" name="id_berita" value=" <?= $data_berita->id_berita; ?>">
								<input type="text" class="form-control" id="judul_berita" name="judul_berita" value=" <?= $data_berita->judul_berita; ?>">
								<small class="text-danger">
									<?php echo form_error('judul_berita') ?>
								</small>
							</div>
						</div>
						<img id="gambar" width="30%" />
						<img id="priview" style="display: block;" src="<?= base_url('assets/img/berita/') . $data_berita->gambar; ?>" width="30%" />

						<div class="form-group row">
							<label for="gambar" class="col-sm-5 col-form-label">Gambar</label>
							<div class="col-sm-10">
								<input type="file" class="form-control-file" id="gambar" name="gambar" value="<?= $data_berita->gambar ?>" onchange="upload(this);">
								<small class="text-danger">
									<?= form_error('gambar') ?>
								</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="tanggal" class="col-sm-5 col-form-label">Tanggal</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data_berita->tanggal; ?>">
								<small class="text-danger">
									<?= form_error('tanggal') ?>
								</small>
							</div>
						</div>



						<label for="tanggal" class="col-sm-5 col-form-label">Kategori</label>
						<select class="form-select" aria-label="Default select example" name="id_kategori">
							<?php foreach ($Kategori as $row) { ?>
								<?php if ($row->id_kategori == $data_berita->id_kategori) { ?>
									<option value="<?= $row->id_kategori ?>"><?= $row->nama_kategori ?></option>
								<?php } ?>
							<?php } ?>

							<?php foreach ($Kategori as $row) { ?>
								<?php if ($row->id_kategori != $data_berita->id_kategori) { ?>
									<option value="<?= $row->id_kategori ?>"><?= $row->nama_kategori ?></option>
								<?php } ?>


							<?php } ?>
						</select>

						<input type="text" class="form-control" id="tanggal" name="gambar_lama" value="<?= $data_berita->gambar; ?>" hidden>

						<div>
							<label for="isi_berita">Konten</label>
							<input type="hidden" name="isi_berita" value="">
							<div id="editor" style="min-height: 300px; font-size: 18px;"><?= $data_berita->isi_berita ?></div>
						</div>


						<input type="hidden" name="id_berita" value="<?= $data_berita->id_berita; ?>">

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