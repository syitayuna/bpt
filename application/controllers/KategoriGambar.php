<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KategoriGambar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('url', 'form');
		$this->load->model("ModelKategoriGambar");
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->model('auth');
		$this->auth->cek_login();
	}

	public function index()
	{
		$data['title'] = "Kategori Gambar";
		$data['kategori_gambar'] = $this->ModelKategoriGambar->getAll();



		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('galeri/kategori/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function add()
	{
		$Kategori = $this->ModelKategoriGambar;
		$validation = $this->form_validation;
		$validation->set_rules($Kategori->rules());


		if ($validation->run()) {

			$data = array(

				"nama_kategori" => $this->input->post('nama_kategori')
			);

			// var_dump($data);
			// die;

			if ($Kategori->save("kategori_gambar", $data)) {

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Kategori Gambar Berhasil Disimpan. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
				redirect("KategoriGambar");
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				redirect("KategoriGambar/add");
			}
		} else {
			$data["title"] = "Upload Kategori Gambar";
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('galeri/kategori/add', $data);
			$this->load->view('admin/templates/footer');
		}
	}

	public function edit($id = null)
	{
		$Kategori = $this->ModelKategoriGambar;
		$validation = $this->form_validation;
		$validation->set_rules($Kategori->rules());
		if (!isset($id))
			redirect('KategoriGambar');



		if ($validation->run()) {

			$data = array(

				"nama_kategori" => $this->input->post('nama_kategori')
			);

			$where = array(
				'id_kategori' => $id
			);




			if ($Kategori->update($where, $data, 'kategori_gambar')) {

				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Kategori Gambar Berhasil Diubah. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
				redirect("KategoriGambar");
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error', $error['error']);
				redirect("KategoriGambar/edit");
			}
		} else {
			$data["title"] = "Upload Kategori Gambar";
			$data["data_kategori"] = $Kategori->getById($id);
			$this->load->view('admin/templates/header', $data);
			$this->load->view('admin/templates/sidebar');
			$this->load->view('galeri/kategori/edit', $data);
			$this->load->view('admin/templates/footer');
		}
	}

	public function delete($id)
	{

		if (!isset($id)) {
			show_404();
		}

		$success = $this->ModelKategoriGambar->delete_kategori($id);

		if ($success) {
			$msg['success'] = true;
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Kategori Gambar berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button></div>');

			redirect("KategoriGambar");
		} else {
			$msg['success'] = false;
		}

		$this->output->set_output(json_encode($msg));
	}
}
