<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSaran extends CI_Model
{
	private $table = 'saran';


	public function rules()
	{
		return [
			[
				'field' => 'email',
				//samakan dengan atribute name pada tags input
				'label' => 'Email',
				// label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'nama',
				'label' => 'Nama',
				'rules' => 'trim|required'
			],
			[
				'field' => 'jenis_kelamin',
				'label' => 'Jenis Kelamin',
				'rules' => 'trim|required'
			],
			[
				'field' => 'pekerjaan',
				'label' => 'Pekerjaan',
				'rules' => 'trim|required'
			],
			[
				'field' => 'nik',
				'label' => 'NIK',
				'rules' => 'trim|required'
			],
			[
				'field' => 'no_telp',
				'label' => 'No Telp',
				'rules' => 'trim|required'
			],
			[
				'field' => 'alamat',
				'label' => 'Alamat',
				'rules' => 'trim|required'
			],
			[
				'field' => 'kecamatan',
				'label' => 'Kecamatan',
				'rules' => 'trim|required'
			],
			[
				'field' => 'isi_saran',
				'label' => 'Isi Saran',
				'rules' => 'trim|required'
			]
		];
	}

	public function getById($id_saran)
	{
		return $this->db->get_where($this->table, ["id_saran" => $id_saran])->row();
	}

	//menampilkan semua data aduan
	public function getAll()
	{
		$this->db->from($this->table);
		$this->db->order_by("id_saran", "desc");
		$query = $this->db->get();
		return $query->result();
	}

	//menyimpan data 
	public function save()
	{
		$data = array(
			"email" => $this->input->post('email'),
			"nama" => $this->input->post('nama'),
			"jenis_kelamin" => $this->input->post('jenis_kelamin'),
			"pekerjaan" => $this->input->post('pekerjaan'),
			"nik" => $this->input->post('nik'),
			"no_telp" => $this->input->post('no_telp'),
			"alamat" => $this->input->post('alamat'),
			"kecamatan" => $this->input->post('kecamatan'),
			"isi_saran" => $this->input->post('isi_saran')
		);
		return $this->db->insert($this->table, $data);
	}

	//hapus data 
	public function delete($id_saran)
	{
		return $this->db->delete($this->table, array("id_saran" => $id_saran));
	}
}
