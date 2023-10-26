<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['slide'] = true;
		$data['judul'] = "BAPERLITBANGDA KABUPATEN BREBES";
		$this->load->view('_partials/navbar');
		$this->load->view('main/home');
		$this->load->view('_partials/footer');
	}
	// profile
	public function sejarah()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/sejarah');
		$this->load->view('_partials/footer');
	}
	public function struktur()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/struktur');
		$this->load->view('_partials/footer');
	}
	public function vimi()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/vimi');
		$this->load->view('_partials/footer');
	}

	// tusi
	public function tusi_baperlitbangda()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/tusi_baperlit');
		$this->load->view('_partials/footer');
	}
	public function tusi_sekretariat()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/tusi_sekretariat');
		$this->load->view('_partials/footer');
	}
	public function tusi_rendalev()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/tusi_rendalev');
		$this->load->view('_partials/footer');
	}
	public function tusi_sosbud()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/tusi_sosbud');
		$this->load->view('_partials/footer');
	}
	public function tusi_eiw()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/tusi_eiw');
		$this->load->view('_partials/footer');
	}
	public function tusi_litbang()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('profile/tusi_litbang');
		$this->load->view('_partials/footer');
	}

	// layanan
	public function prospel1()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('layanan/prospel/prospel1');
		$this->load->view('_partials/footer');
	}
	public function prospel2()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('layanan/prospel/prospel2');
		$this->load->view('_partials/footer');
	}
	public function prospel3()
	{
		$this->load->view('_partials/navbar');
		$this->load->view('layanan/prospel/prospel3');
		$this->load->view('_partials/footer');
	}

}