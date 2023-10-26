<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url', 'form');
		$this->load->model("ModelKategori");
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->model('auth');
		$this->auth->cek_login();
	}

	public function index()
	{
		$data['title'] = "kategori";
		$data['kategori'] = $this->ModelKategori->getAll();



		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('berita/kategori/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function add()
	{
		$Kategori = $this->ModelKategori;
		$validation = $this->form_validation;
		$validation->set_rules($Kategori->rules());


		if ($validation->run()) {

			$data = array(

				"nama_kategori" => $this->input->post('nama_kategori')
			);

			// var_dump($data);
			// die;

			if ($Kategori->save("kategori", $data)) {

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berita Berhasil Disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
				redirect("Kategori");
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				redirect("Kategori/add");
			}
		} else {
			$data["title"] = "Upload Kategori Berita";
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('berita/kategori/add', $data);
			$this->load->view('admin/templates/footer');
		}
	}

	public function edit($id = null)
	{
		$Kategori = $this->ModelKategori;
		$validation = $this->form_validation;
		$validation->set_rules($Kategori->rules());
		if (!isset($id))
			redirect('Kategori');



		if ($validation->run()) {

			$data = array(

				"nama_kategori" => $this->input->post('nama_kategori')
			);

			$where = array(
				'id_kategori' => $id
			);




			if ($Kategori->update($where, $data, 'kategori')) {

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Kategori Berhasil Diubah. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
				redirect("Kategori");
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				redirect("Kategori/edit");
			}
		} else {
			$data["title"] = "Upload Kategori Berita";
			$data["data_kategori"] = $Kategori->getById($id);
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('berita/kategori/edit', $data);
			$this->load->view('admin/templates/footer');
		}
	}

	public function delete($id)
	{

		if (!isset($id)) {
			show_404();
		}

		$success = $this->ModelKategori->delete_kategori($id);

		if ($success) {
			$msg['success'] = true;
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berita berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>');

			redirect("Kategori");
		} else {
			$msg['success'] = false;
		}

		$this->output->set_output(json_encode($msg));
	}
}
