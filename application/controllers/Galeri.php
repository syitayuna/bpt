<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url', 'form');
		$this->load->model("ModelAllGaleri");
		$this->load->model("ModelKategoriGambar");
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->model('auth');
	}

	//method pertama yang akan di eksekusi
	public function index()
	{
		$this->auth->cek_login();
		$data["title"] = "Data Gambar";
		$data["class"] = "Galeri";


		//ambil fungsi getAll 

		$this->input->get('kategori');
		$nama_kategori = $this->input->get('kategori');
		$kategori =  $this->ModelAllGaleri->kategori($nama_kategori);

		// var_dump($kategori);
		// die;

		if ($kategori != NULL) {
			$data["data_gambar"] = $this->ModelAllGaleri->getKategori($kategori['id_kategori']);
		} else {
			$data["data_gambar"] = $this->ModelAllGaleri->getAll();
		}
		//load view 
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('galeri/index', $data);
		$this->load->view('admin/templates/footer');
	}
	public function add()
	{
		$this->auth->cek_login();
		$galeri = $this->ModelAllGaleri;
		$validation = $this->form_validation;
		$validation->set_rules($galeri->rules());


		// var_dump($validation->run());
		// die;

		if ($validation->run()) {

			// Konfigurasi Upload Gambar
			$config['upload_path'] = FCPATH . '/assets/img/galeri/'; // Lokasi penyimpanan gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg'; // Jenis file yang diizinkan
			$config['max_size'] = 5000; // Maksimum ukuran file (dalam kilobytes)

			$config['encrypt_name'] = TRUE;



			$this->upload->initialize($config);

			// var_dump();
			// die;



			if ($this->upload->do_upload('gambar')) {

				$data = array(
					"judul" => $this->input->post('judul'),
					"tanggal" => $this->input->post('tanggal'),
					"id_kategori" =>  $this->input->post('id_kategori'),
					"gambar" => $this->upload->data('file_name') // Nama file gambar yang diupload
				);

				// var_dump($data);
				// die;

				$galeri->save($data);

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Gambar Berhasil Disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');

				if ($this->input->post('kategori')) {
					$ke = "Galeri?kategori=" . $this->input->post('kategori');
				} else {
					$ke = "Galeri";
				}


				redirect($ke);
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				redirect("Galeri/add");
			}
		} else {
			$data["title"] = "Upload Gambar ";
			$data["class"] = "Galeri";
			$data["Kategori"] = $this->ModelKategoriGambar->getAll();
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('galeri/add', $data);
			$this->load->view('admin/templates/footer');
		}
	}

	public function edit($id_gambar = null)
	{
		$this->auth->cek_login();



		$galeri = $this->ModelAllGaleri;
		$validation = $this->form_validation;
		$validation->set_rules($galeri->rules());

		if ($validation->run()) {
			// Konfigurasi Upload Gambar


			$config['upload_path'] = FCPATH . '/assets/img/galeri'; // Lokasi penyimpanan gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg'; // Jenis file yang diizinkan
			$config['max_size'] = 5000; // Maksimum ukuran file (dalam kilobytes)
			$new_name = md5(time()) . $_FILES["userfiles"]['name'];
			$config['file_name'] = $new_name;



			$this->upload->initialize($config);


			if ($this->upload->do_upload('gambar')) {
				$gambar = $this->upload->data('file_name');
				unlink("./assets/img/galeri/" . $this->input->post('gambar_lama'));
			} else {
				$gambar = $this->input->post('gambar_lama');
			}

			$data = array(
				"judul" => $this->input->post('judul'),
				"tanggal" => $this->input->post('tanggal'),
				"id_kategori" =>  $this->input->post('id_kategori'),
				"gambar" => $gambar

			);



			$where = array(
				'id_gambar' => $this->input->post('id_gambar')
			);

			$galeri->update($where, $data, 'gambar');


			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Gambar Berhasil Disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');



			if ($this->input->post('kategori')) {
				$ke = "Galeri?kategori=" . $this->input->post('kategori');
			} else {
				$ke = "Galeri";
			}


			redirect($ke);
		} else {

			$data["class"] = "Galeri";
			$data["title"] = "Edit Data Gambar ";
			$data["data_gambar"] = $galeri->getById($id_gambar);
			$data["Kategori"] = $this->ModelKategoriGambar->getAll();
			if (!$data["data_gambar"])
				show_404();
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('galeri/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		if (!isset($id_gambar)) {
			redirect('Galeri');
		}
	}



	public function delete()
	{
		// var_dump($this->input->post('kategori'));
		// die;

		$this->auth->cek_login();
		$id_gambar =
			$this->input->post('id_gambar');

		if (!isset($id_gambar)) {
			show_404();
		}

		if ($this->input->post('gambar_lama') != '') {

			unlink("./assets/img/galeri/" . $this->input->post('gambar_lama'));
		}


		$success = $this->ModelAllGaleri->delete($id_gambar);

		if ($success) {
			$msg['success'] = true;

			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Gambar berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');

			if ($this->input->post('kategori')) {
				$ke = "Galeri?kategori=" . $this->input->post('kategori');
			} else {
				$ke = "Galeri";
			}


			redirect($ke);
		} else {
			$msg['success'] = false;
		}

		$this->output->set_output(json_encode($msg));
	}


	public function show()
	{
		$this->input->get('kategori');
		$nama_kategori = $this->input->get('kategori');
		$kategori =  $this->ModelAllGaleri->kategori($nama_kategori);

		// var_dump($kategori);
		// die;

		if ($kategori != NULL) {
			$data["data_gambar"] = $this->ModelAllGaleri->getKategori($kategori['id_kategori']);
		} else {
			$data["data_gambar"] = $this->ModelAllGaleri->getAll();
		}
		$data["title"] = "Galeri ";
		$data["class"] = "Galeri";
		// $data["data_gambar"] = $this->ModelAllGaleri->getAll();
		$this->load->view('_partials/navbar', $data);
		$this->load->view('galeri/show', $data);
		$this->load->view('_partials/footer');
	}
}
