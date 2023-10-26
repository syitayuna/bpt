</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer bg-warning">
	<div class="copyright">
		&copy; Copyright <strong><span>Baperlitbangda Kabupaten Brebes</span></strong>. All Rights Reserved
	</div>
</footer>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() . 'assets/admin/vendor/apexcharts/apexcharts.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/chart.js/chart.umd.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/echarts/echarts.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/quill/quill.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/tinymce/tinymce.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/admin/vendor/php-email-form/validate.js' ?>"></script>

<!-- simple datatables -->
<script src="<?= base_url() . 'assets/admin/vendor/simple-datatables/simple-datatables.js' ?>"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<!-- jQuery 3.6.0 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Datatables -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src=".Bootstrap/js/bootstrap.bundle.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Popper.js 2.11.8 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>



<script>
	var quill = new Quill('#editor', {
		theme: 'snow'
	});
	quill.on('text-change', function(delta, oldDelta, source) {
		document.querySelector("input[name='isi_berita']").value = quill.root.innerHTML;
	});




	//   Priview
	function upload(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#gambar').attr('src', e.target.result);
				document.getElementById("priview").style.display = "none";
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>

</body>

</html>