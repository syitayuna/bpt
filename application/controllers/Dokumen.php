<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("ModelDokumen"); //load model dokumen
		$this->load->library('form_validation');
		$this->load->library('upload');
	}

	//method pertama yang akan di eksekusi
	public function index()
	{
		$data["title"] = "Data Dokumen";
		//ambil fungsi getAll untuk menampilkan semua data 
		$data["dokumen"] = $this->ModelDokumen->getAll();
		//load view 
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('dokumen/index', $data);
		$this->load->view('admin/templates/footer');
	}

	//method add digunakan untuk menampilkan form tambah data 
	public function add()
	{
		$Dokumen = $this->ModelDokumen;
		$validation = $this->form_validation;
		$validation->set_rules($Dokumen->rules());

		if ($validation->run()) {
			//konfigurasi
			$config['upload_path'] = FCPATH . '/assets/dokumen/'; // Ganti dengan path penyimpanan dokumen Anda
			$config['allowed_types'] = 'pdf|doc|docx'; // Jenis file yang diizinkan
			$config['max_size'] = 5000; // Maksimum ukuran file (dalam kilobytes)
			$config['encrypt_name'] = TRUE;


			$this->upload->initialize($config);

			if ($this->upload->do_upload('file')) {
				$data = array(
					"judul" => $this->input->post('judul'),
					"keterangan" => $this->input->post('keterangan'),
					"file" => $this->upload->data('file_name'), // Nama file dokumen yang diupload
					"tanggal" => $this->input->post('tanggal')
				);

				// var_dump($data);
				// die;

				$Dokumen->save($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Dokumen Berhasil Disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
				redirect("Dokumen");
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				redirect("Dokumen/add");
			}
		} else {
			$data["title"] = "Data Dokumen";
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('dokumen/add', $data);
			$this->load->view('admin/templates/footer');
		}
	}

	public function delete($id_dokumen)
	{


		$data = $this->ModelDokumen->getById($id_dokumen);

		if (!isset($id_dokumen))
			show_404();
		$this->ModelDokumen->delete($id_dokumen);

		if ($data->file != '') {

			unlink("./assets/dokumen/" . $data->file);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Dokumen berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
		redirect('/dokumen');
	}

	public function show()
	{
		$data["title"] = "Tampilkan Dokumen";
		$data["dokumen"] = $this->ModelDokumen->getAll();
		$this->load->view('_partials/navbar', $data);
		$this->load->view('dokumen/show', $data);
		$this->load->view('_partials/footer');
	}

	public function tampil()
	{

		$this->load->view('_partials/navbar');
		$this->load->view('dokumen/tampil');
		$this->load->view('_partials/footer');
	}
}
