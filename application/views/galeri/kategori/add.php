<div class="container pt-2">
	<h3>
		<?= $title ?>
	</h3>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a>Kategori</a></li>
			<li class="breadcrumb-item"><a href="<?= base_url('KategoriGambar'); ?>">Data Kategori</a></li>
			<li class="breadcrumb-item active" aria-current="page">Upload nama kategori</li>
		</ol>
	</nav>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form action="<?= base_url('KategoriGambar/add'); ?>" method="POST">

						<div class="form-group row">
							<label for="nama_kategori" class="col-sm-5 col-form-label">Nama Kategori</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
									value="<?= set_value('nama_kategori'); ?>">
								<small class="text-danger">
									<?= form_error('nama_kategori') ?>
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