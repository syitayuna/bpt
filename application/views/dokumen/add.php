<!-- berita/berita_sekre/add -->
<div class="container pt-2">
	<h3>
		<?= $title ?>
	</h3>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a>Dokumen</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url('Dokumen'); ?>">Data Dokumen</a></li>
			<li class="breadcrumb-item active" aria-current="page">Upload Dokumen</li>
		</ol>
	</nav>

	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="<?= base_url('Dokumen/add'); ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group row">
							<label for="judul" class="col-sm-5 col-form-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul'); ?>">
								<small class="text-danger">
									<?= form_error('judul') ?>
								</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="keterangan" class="col-sm-5 col-form-label">Keterangan</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= set_value('keterangan'); ?>">
								<small class="text-danger">
									<?= form_error('keterangan') ?>
								</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="file" class="col-sm-5 col-form-label">File</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" id="file" name="file">
								<small class="text-danger">
									<?= form_error('file') ?>
								</small>
							</div>
						</div>
						<div class="form-group row">
							<label for="tanggal" class="col-sm-5 col-form-label">Tanggal</label>
							<div class="col-sm-10">
								<input type="date" class="form-control" id="tanggal" name="tanggal">
								<small class="text-danger">
									<?= form_error('tanggal') ?>
								</small>
							</div>
						</div>
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