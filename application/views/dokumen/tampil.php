<section>
	<h2 class="title"><?= $this->input->get('judul'); ?></h2>
</section>

<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body bg-info shadow text-center">
					<embed type="application/pdf" src="<?= base_url('assets/dokumen/') . $this->input->get('file'); ?>" width="60%" height="500px"></embed>
				</div>
			</div>
		</div>
	</div>
	<hr class="my-5" />
</section>