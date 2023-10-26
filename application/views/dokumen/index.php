<div class="pagetitle">
	<h1>Upload Dokumen</h1>
	<hr class="mt-2" />
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-warning mb-2" href="<?= base_url('Dokumen/add'); ?>">Tambah Dokumen</a>
		</div>
	</div>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb ">
			<li class="breadcrumb-item"><a>Dokumen</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data Dokumen</li>
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
					<h5 class="card-title">Tabel Data Dokumen</h5>
					<div class="table-responsive">
						<!-- Table with stripped rows -->
						<table class="table datatable">
							<thead>
								<tr class="table">
									<th scope="col">Judul</th>
									<th scope="col">Keterangan</th>
									<th scope="col">File</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($dokumen as $row) : ?>
									<tr>
										<td>
											<?= $row->judul ?>
										</td>
										<td>
											<?= $row->keterangan ?>
										</td>
										<td>
											<?= $row->file ?>
										</td>
										<td>
											<?= $row->tanggal ?>
										</td>
										<td>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $row->id_dokumen ?>">
												<i class="fa fa-trash"></i>
											</button>

											<!-- Modal -->
											<div class="modal fade" id="delete<?= $row->id_dokumen ?>" tabindex="-1" aria-labelledby="delete<?= $row->id_dokumen ?>Label" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-body text-center">
															<img src="<?= base_url('assets/img/hapus.gif') ?>" alt="" width="20%"> <span class="fw-bold fs-4">Yakin Mau Dihapus?</span>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
															<a href="<?= base_url('dokumen/delete/') . $row->id_dokumen ?>" class="btn btn-danger">Hapus</a>
														</div>
													</div>
												</div>
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
	$('#tablebDokumen').DataTable();

	//menampilkan modal dialog saat tombol hapus ditekan
	$('#tableDokumen').on('click', '.item-delete', function() {
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
				url: '<?php echo base_url() ?>Dokumen/delete/',
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