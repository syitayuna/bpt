<div class="pagetitle mt-2">
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-warning mb-2" href="<?= base_url('KategoriGambar/add'); ?>">Tambah Kategori</a>
		</div>
	</div>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb ">
			<li class="breadcrumb-item"><a>Kategori</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data Kategori</li>
		</ol>
	</nav>
	<div mb-2>
		<!-- Menampilkan flashh data (pesan saat data berhasil disimpan)-->
		<?php if ($this->session->flashdata('message')) :
			echo $this->session->flashdata('message');
		endif; ?>
	</div>
</div>
<!-- End Page Title -->

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
									<th scope="col">Nama Kategori</th>
									<th scope="col">Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($kategori_gambar as $row) : ?>
									<tr>
										<td>
											<?= $row->nama_kategori ?>
										</td>
										<td>
											<a href="<?= site_url('KategoriGambar/edit/' . $row->id_kategori) ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </a>
											<a href="<?= site_url('KategoriGambar/delete/' . $row->id_kategori) ?>" class="btn btn-danger btn-sm item-delete" onclick="return confirm('Apakah Yakin Mau Dihapus')">
												<i class="fa fa-trash"></i></a>
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



<!-- Skrip JavaScript -->
<script>
	// Menampilkan data ke tabel dengan plugin DataTables
	$('#tableGaleriLitbang').DataTable();

	// Menampilkan modal dialog saat tombol hapus ditekan
	$('#tableGaleriLitbang').on('click', '.item-delete', function() {
		// Ambil data dari atribut data-id
		var id = $(this).data('id');
		$('#myModalDelete').modal('show');

		// Ketika tombol Lanjutkan ditekan, kirim data ID ke method delete pada controller GaleriLitbang
		$('#btdelete').click(function() {
			$.ajax({
				type: 'GET',
				url: '<?= base_url() ?>GaleriLitbang/delete/' + id,
				dataType: 'json',
				success: function(response) {
					$('#myModalDelete').modal('hide');
					location.reload();
				},
				error: function() {
					// Handle kesalahan dengan lebih baik
					console.error('Terjadi kesalahan saat menghapus data.');
				}
			});
		});
	});
</script>