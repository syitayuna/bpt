<div style="background-image: url('assets/img/kpt.JPG'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; width: 100%; height: 100vh;">
	<div class="p-3 mb-2 bg-secondary-subtle text-emphasis-secondary">
		<div class="container">
			<!-- Outer Row -->
			<div class="row align-items-center justify-content-center" style="min-height: 100vh;">
				<div class="col-lg-7">
					<div class="card o-hidden border-0 shadow-lg my-5">
						<div class="card-body p-0">
							<!-- Nested Row within Card Body -->
							<div class="row">
								<div class="col-lg">
									<div class="p-5">
										<div class="text-center">
											<h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
										</div>
										<?php
										if ($this->session->flashdata('error') != '') {
											echo '<div class="alert alert-danger" role="alert">';
											echo $this->session->flashdata('error');
											echo '</div>';
										}
										?>

										<?php
										if ($this->session->flashdata('success_register') != '') {
											echo '<div class="alert alert-info" role="alert">';
											echo $this->session->flashdata('success_register');
											echo '</div>';
										}
										?>
										<form method="post" class="user" action="<?php echo base_url(); ?>index.php/login/proses">
											<div class="form-group">
												<input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
												<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
												<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<button type="submit" class="btn btn-warning text-dark btn-user btn-block">Masuk</button>
										</form>
										<hr>
										<!-- <div class="text-center">
											<a class="small" href="<?= base_url('autentifikasi/lupaPassword'); ?>">Lupa
												Password?</a>
										</div> -->
										<!-- <div class="text-center">
											<a class="small" href="<?= base_url('register'); ?>">Registrasi!</a>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>