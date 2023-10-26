<section class="section">


	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">

					<template id="my-template">
						<swal-title>
							Save changes to "Untitled 1" before closing?
						</swal-title>
						<swal-icon type="warning" color="red"></swal-icon>
						<swal-button type="confirm">
							Save As
						</swal-button>
						<swal-button type="cancel">
							Cancel
						</swal-button>
						<swal-button type="deny">
							Close without Saving
						</swal-button>
						<swal-param name="allowEscapeKey" value="false" />
						<swal-param name="customClass" value='{ "popup": "my-popup" }' />
						<swal-function-param name="didOpen" value="popup => console.log(popup)" />
					</template>

					<script>
						Swal.fire({
							template: '#my-template'
						})
					</script>

					<h5 class="card-title">Data Saran</h5>
					<!-- Table with stripped rows -->
					<div class="table-responsive">
						<table class="table datatable">
							<thead>
								<tr class="table">
									<th scope="col">Email</th>
									<th scope="col">Nama</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col">Pekerjaan</th>
									<th scope="col">Nik </th>
									<th scope="col">No telp </th>
									<th scope="col">Alamat</th>
									<th scope="col">Kecamatan</th>
									<th scope="col">Isi Saran</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($saran as $row) : ?>
									<tr id="<?= $row->id_saran ?>">
										<td>
											<?= $row->email ?>
										</td>
										<td>
											<?= $row->nama ?>
										</td>
										<td>
											<?= $row->jenis_kelamin ?>
										</td>
										<td>
											<?= $row->pekerjaan ?>
										</td>
										<td>
											<?= $row->nik ?>
										</td>
										<td>
											<?= $row->no_telp ?>
										</td>
										<td>
											<?= $row->alamat ?>
										</td>
										<td>
											<?= $row->kecamatan ?>
										</td>
										<td>
											<?= $row->isi_saran ?>
										</td>
										<td>
											<?= date('d M Y', strtotime($row->created_at)) ?>
										</td>
										<td>
											<!-- Button trigger modal -->
											<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $row->id_saran ?>">
												<i class="fa fa-trash"></i>
											</button>

											<!-- Modal -->
											<div class="modal fade" id="delete<?= $row->id_saran ?>" tabindex="-1" aria-labelledby="delete<?= $row->id_saran ?>Label" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-body text-center">
															<img src="<?= base_url('assets/img/hapus.gif') ?>" alt="" width="20%"> <span class="fw-bold fs-4">Yakin Mau Dihapus?</span>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
															<a href="<?= base_url('saran/delete/') . $row->id_saran ?>" class="btn btn-danger">Hapus</a>
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