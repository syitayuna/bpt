<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url', 'form');
		$this->load->model("ModelAllBerita");
		$this->load->model("ModelKategori");
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->model('auth');
	}

	//method pertama yang akan di eksekusi
	public function index()
	{
		$this->auth->cek_login();
		$data["title"] = "Data Berita ";
		$data["class"] = "Berita";


		//ambil fungsi getAll 

		$this->input->get('kategori');
		$nama_kategori = $this->input->get('kategori');
		$kategori =  $this->ModelAllBerita->kategori($nama_kategori);

		// var_dump($kategori);
		// die;

		if ($kategori != NULL) {
			$data["data_berita"] = $this->ModelAllBerita->getKategori($kategori['id_kategori']);
		} else {
			$data["data_berita"] = $this->ModelAllBerita->getAll();
		}
		//load view 
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('berita/index', $data);
		$this->load->view('admin/templates/footer');
	}
	public function add()
	{
		$this->auth->cek_login();
		$Berita = $this->ModelAllBerita;
		$validation = $this->form_validation;
		$validation->set_rules($Berita->rules());

		if ($validation->run()) {
			// Konfigurasi Upload Gambar
			$config['upload_path'] = FCPATH . '/assets/img/berita//'; // Lokasi penyimpanan gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg'; // Jenis file yang diizinkan
			$config['max_size'] = 5000; // Maksimum ukuran file (dalam kilobytes)

			$config['encrypt_name'] = TRUE;


			$this->upload->initialize($config);

			if ($this->upload->do_upload('gambar')) {
				$data = array(
					"judul_berita" => $this->input->post('judul_berita'),
					"tanggal" => $this->input->post('tanggal'),
					"id_kategori" =>  $this->input->post('id_kategori'),
					"isi_berita" => $this->input->post('isi_berita'),
					"gambar" => $this->upload->data('file_name') // Nama file gambar yang diupload
				);




				$Berita->save($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berita Berhasil Disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');

				if ($this->input->post('kategori')) {
					$ke = "Berita?kategori=" . $this->input->post('kategori');
				} else {
					$ke = "Berita";
				}


				redirect($ke);
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				redirect("Berita/add");
			}
		} else {
			$data["title"] = "Upload Berita";
			$data["class"] = "Berita";
			$data["Kategori"] = $this->ModelKategori->getAll();
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('berita/add', $data);
			$this->load->view('admin/templates/footer');
		}
	}

	public function edit($id_berita = null)
	{
		$this->auth->cek_login();



		$Berita = $this->ModelAllBerita;
		$validation = $this->form_validation;
		$validation->set_rules($Berita->rules());

		if ($validation->run()) {
			// Konfigurasi Upload Gambar


			$config['upload_path'] = FCPATH . '/assets/img/berita'; // Lokasi penyimpanan gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg'; // Jenis file yang diizinkan
			$config['max_size'] = 5000; // Maksimum ukuran file (dalam kilobytes)
			$new_name = md5(time()) . $_FILES["userfiles"]['name'];
			$config['file_name'] = $new_name;



			$this->upload->initialize($config);


			if ($this->upload->do_upload('gambar')) {
				$gambar = $this->upload->data('file_name');
				unlink("./assets/img/berita/" . $this->input->post('gambar_lama'));
			} else {
				$gambar = $this->input->post('gambar_lama');
			}

			$data = array(
				"judul_berita" => $this->input->post('judul_berita'),
				"tanggal" => $this->input->post('tanggal'),
				"id_kategori" =>  $this->input->post('id_kategori'),
				"isi_berita" => $this->input->post('isi_berita'),
				"gambar" => $gambar

			);



			$where = array(
				'id_berita' => $this->input->post('id_berita')
			);

			$Berita->update($where, $data, 'berita');


			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berita Berhasil Disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');



			if ($this->input->post('kategori')) {
				$ke = "Berita?kategori=" . $this->input->post('kategori');
			} else {
				$ke = "Berita";
			}


			redirect($ke);
		} else {

			$data["class"] = "Berita";
			$data["title"] = "Edit Data Berita ";
			$data["data_berita"] = $Berita->getById($id_berita);
			$data["Kategori"] = $this->ModelKategori->getAll();
			if (!$data["data_berita"])
				show_404();
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('berita/edit', $data);
			$this->load->view('admin/templates/footer');
		}

		if (!isset($id_berita)) {
			redirect('Berita');
		}
	}



	public function delete()
	{
		// var_dump($this->input->post('kategori'));
		// die;

		$this->auth->cek_login();
		$id_berita =
			$this->input->post('id_berita');

		if (!isset($id_berita)) {
			show_404();
		}

		if ($this->input->post('gambar_lama') != '') {

			unlink("./assets/img/berita/" . $this->input->post('gambar_lama'));
		}


		$success = $this->ModelAllBerita->delete($id_berita);

		if ($success) {
			$msg['success'] = true;

			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berita berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');

			if ($this->input->post('kategori')) {
				$ke = "Berita?kategori=" . $this->input->post('kategori');
			} else {
				$ke = "Berita";
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
		$kategori =  $this->ModelAllBerita->kategori($nama_kategori);

		// var_dump($kategori);
		// die;

		if ($kategori != NULL) {
			$data["data_berita"] = $this->ModelAllBerita->getKategori($kategori['id_kategori']);
		} else {
			$data["data_berita"] = $this->ModelAllBerita->getAll();
		}
		$data["title"] = "Berita ";
		$data["class"] = "Berita";
		// $data["data_berita"] = $this->ModelAllBerita->getAll();
		$this->load->view('_partials/navbar', $data);
		$this->load->view('berita/show', $data);
		$this->load->view('_partials/footer');
	}

	public function show_complete($id_berita)
	{
		$data["title"] = "Berita ";
		$data["class"] = "Berita";
		$data["data_berita"] = $this->ModelAllBerita->getById($id_berita);
		$data["allberita"] = $this->ModelAllBerita->getLimit();
		$data["allkategori"] = $this->ModelKategori->getAll();
		$this->load->view('_partials/navbar', $data);
		$this->load->view('berita/show_complete', $data);
		$this->load->view('_partials/footer');
	}
}
