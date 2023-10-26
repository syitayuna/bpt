<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card ">
				<div class="card-body ">
					<h5 class="card-title">Data Aduan</h5>
					<!-- Table with stripped rows -->
					<div class="table-responsive">
						<table class="table datatable">
							<thead>
								<tr class="table">
									<th scope="col">Email</th>
									<th scope="col">Nama</th>
									<th scope="col">Nik </th>
									<th scope="col">Alamat</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col">Pekerjaan</th>
									<th scope="col">No telp </th>
									<th scope="col">Isi Aduan</th>
									<th scope="col">Tindak Lanjut</th>
									<th scope="col">Tanggal</th>
									<th scope="col">Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($aduan as $row) : ?>
									<tr>
										<td>
											<?= $row->email ?>
										</td>
										<td>
											<?= $row->nama ?>
										</td>
										<td>
											<?= $row->nik ?>
										</td>
										<td>
											<?= $row->alamat ?>
										</td>
										<td>
											<?= $row->jenis_kelamin ?>
										</td>
										<td>
											<?= $row->pekerjaan ?>
										</td>
										<td>
											<?= $row->no_telp ?>
										</td>
										<td>
											<?= $row->isi_aduan ?>
										</td>
										<td>
											<?= $row->tindak_lanjut ?>
										</td>
										<td>
											<?= date('d M Y', strtotime($row->created_at)) ?>
										</td>
										<td>
											<a href="<?= base_url('Aduan/delete/') . $row->id_aduan ?>" class="btn btn-danger btn-sm item-delete" onclick="return confirm('Apakah Aduan Ini Mau Di Hapus?')"><i class="fa fa-trash"></i> </a>
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