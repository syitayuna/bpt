<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("ModelSaran"); //load model saran
		$this->load->model('auth');
	}

	//method pertama yang akan di eksekusi
	public function index()
	{
		$data["title"] = "Data Saran";
		//ambil fungsi getAll untuk menampilkan semua data 
		$data["saran"] = $this->ModelSaran->getAll();
		//load view 
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('layanan/data_saran/index', $data);
		$this->load->view('admin/templates/footer');
	}

	//method add digunakan untuk menampilkan form tambah data 
	public function add()
	{
		$Saran = $this->ModelSaran;
		$validation = $this->form_validation;
		$validation->set_rules($Saran->rules());

		if ($validation->run()) {
			$Saran->save();
			$this->session->set_flashdata('success', 'Saran anda telah terkirim.');
			redirect("saran/add");
		}
		$data["title"] = "Sampaikan Saran Anda";
		$this->load->view('_partials/navbar', $data);
		$this->load->view('layanan/data_saran/add', $data);
		$this->load->view('_partials/footer');
	}

	public function delete($id)
	{
		// $id_aduan = $this->input->get('id_aduan');
		if (!isset($id))
			show_404();
		$this->ModelSaran->delete($id);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Aduan berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');

		redirect('saran');
	}
}
