<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aduan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("ModelAduan"); //load model 
	}

	//method pertama yang akan di eksekusi
	public function index()
	{
		$data["title"] = "Data Aduan";
		//ambil fungsi getAll untuk menampilkan semua data 
		$data["aduan"] = $this->ModelAduan->getAll();
		//load view 
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('layanan/data_aduan/index', $data);
		$this->load->view('admin/templates/footer');
	}

	//method add digunakan untuk menampilkan form tambah data 
	public function add()
	{
		$Aduan = $this->ModelAduan;
		$validation = $this->form_validation;
		$validation->set_rules($Aduan->rules());

		if ($validation->run()) {
			$Aduan->save();
			$this->session->set_flashdata('success', 'Aduan anda berhasil terkirim.');
			redirect("aduan/add");
		}
		$data["title"] = "Sampaikan Aduan Anda";
		$this->load->view('_partials/navbar', $data);
		$this->load->view('layanan/data_aduan/add', $data);
		$this->load->view('_partials/footer');
	}

	public function delete($id)
	{
		// $id_aduan = $this->input->get('id_aduan');
		if (!isset($id))
			show_404();
		$this->ModelAduan->delete($id);

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Aduan berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');

		redirect('aduan');
	}
}
