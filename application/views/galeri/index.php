<div class="pagetitle">
	<?php
	if (isset($_REQUEST['kategori'])) { ?>
		<h1>Upload Gambar <?= $_REQUEST['kategori'] ?></h1>
	<?php } else { ?>

		<h1>Upload Gambar <?= "Galeri" ?></h1>
	<?php } ?>

	<hr class="mt-2" />
	<div class="row">
		<div class="col-md-12">
			<?php
			if (isset($_REQUEST['kategori'])) { ?>
				<a class="btn btn-warning mb-2" href="<?= base_url("$class/add?kategori=") . $_REQUEST['kategori'] ?>">Tambah Gambar</a>

			<?php } else { ?>
				<a class="btn btn-warning mb-2" href="<?= base_url("$class/add") ?>">Tambah Gambar</a>
			<?php } ?>
		</div>
	</div>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb ">
			<li class="breadcrumb-item"><a>Galeri</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data Galeri</li>
		</ol>
	</nav>
	<div mb-2>
		<!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
		<?php if ($this->session->flashdata('message')) :
			echo $this->session->flashdata('message');
		endif; ?>
	</div>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<!-- Table with stripped rows -->
						<table class="table datatable">
							<thead>
								<tr class="table">
									<th scope="col">No</th>
									<th scope="col">Judul Galeri</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Gambar</th>
									<th scope="col">Kategori</th>
									<th scope="col">Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1 ?>
								<?php foreach ($data_gambar as $row) : ?>
									<tr>
										<th>
											<?= $i++ ?>
										</th>
										<td>
											<?= $row->judul ?>
										</td>
										<td>
											<?= $row->tanggal ?>
										</td>
										<td>
											<picture>
												<source srcset="" type="image/svg+xml">
												<img src="<?= base_url('assets/img/galeri/' . $row->gambar) ?>" class="img-fluid img-thumbnail" alt="berita eiw" width="150" height="100">
											</picture>

										</td>

										<td>
											<?= $row->nama_kategori ?>
										</td>
										<td>
											<div class="d-flex justify-content-start">

												<a href="<?= site_url("$class/edit/" . $row->id_gambar) ?>" class="btn btn-success btn-sm ml-1"><i class="fa fa-edit"></i> </a>
												<form action="<?= base_url("$class/delete/"); ?>" method="POST" enctype="multipart/form-data">
													<input type="text" name="id_gambar" value="<?= $row->id_gambar; ?>" hidden>
													<input type="hidden" name="kategori" value="<?= $this->input->get('kategori') ?>">
													<input type="text" class="form-control" id="tanggal" name="gambar_lama" value="<?= $row->gambar; ?>" hidden>
													<button type="submit" class="btn btn-danger btn-sm item-delete ml-1" onclick="return confirm('Apakan Yakin Mau di Hapus')"><i class="fa fa-trash"></i> </button>
												</form>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<!-- End Table with stripped rows -->
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Modal dialog hapus data-->
<div class="modal fade" id="myModalDelete" tabindex="-1" aria-labelledby="myModalDeleteLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myModalDeleteLabel">Konfirmasi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Anda ingin menghapus data ini?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="button" class="btn btn-danger" id="btdelete">Lanjutkan</button>
			</div>
		</div>
	</div>
</div>

<script>
	//menampilkan data ketabel dengan plugin datatables
	$('#tablebBeritaSekre').DataTable();

	//menampilkan modal dialog saat tombol hapus ditekan
	$('#tableBeritaSekre').on('click', '.item-delete', function() {
		//ambil data dari atribute data 
		var id = $(this).attr('data');
		$('#myModalDelete').modal('show');
		//ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete 
		//pada controller berita sekre
		$('#btdelete').unbind().click(function() {
			$.ajax({
				type: 'ajax',
				method: 'get',
				async: false,
				url: '<?php echo base_url() ?>BeritaEiw/delete/',
				data: {
					id: id
				},
				dataType: 'json',
				success: function(response) {
					$('#myModalDelete').modal('hide');
					location.reload();
				}
			});
		});
	});
</script>