<div class="container" style="margin-top: 70px;">
	<section>
		<h2 class="title">FILE YANG BISA DI DOWNLOAD</h2>
	</section>

	<section class="section">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body bg-dark shadow text-white">
						<div class="table-responsive">
							<!-- Table with stripped rows -->
							<table class="table datatable" id="tableDokumen">
								<thead>
									<tr>
										<th scope="col">Judul</th>
										<th scope="col">Keterangan</th>
										<th scope="col">File</th>
										<th scope="col">Lihat</th>
										<th scope="col">Tanggal</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($dokumen as $row): ?>
										<tr>
											<td>
												<?= $row->judul ?>
											</td>
											<td>
												<?= $row->keterangan ?>
											</td>
											<td>
												<?php if (!empty($row->file)): ?>
													<?php $file_path = base_url('assets/dokumen/' . $row->file); ?>
													<a href="<?= $file_path ?>" download>Download</a>
												<?php endif; ?>
											</td>
											<td>
												<?php if (!empty($row->file) && substr($row->file, -3) == "pdf"): ?>
													<a
														href="<?= base_url('Dokumen/tampil/?file=' . $row->file . '&judul=' . $row->judul) ?>">Lihat</a>
												<?php endif; ?>
											</td>
											<td>
												<?= $row->tanggal ?>
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
		<hr class="my-5" />
	</section>
</div>

<script>
	// Menampilkan data ke dalam tabel dengan plugin DataTables
	$(document).ready(function () {
		$('#tableDokumen').DataTable();
	});
</script>