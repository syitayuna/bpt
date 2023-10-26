<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
		$this->auth->cek_login();
	}

	public function index()
	{

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/index');
		$this->load->view('admin/templates/footer');
	}
}
