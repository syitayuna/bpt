<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelDokumen extends CI_Model
{
	private $table = 'dokumen';


	public function rules()
	{
		return [
			[
				'field' => 'judul',
				//samakan dengan atribute name pada tags input
				'label' => 'Judul',
				// label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'keterangan',
				'label' => 'Keterangan',
				'rules' => 'trim|required'
			],
			[
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'trim|required'
			]
		];
	}

	public function getById($id_dokumen)
	{
		return $this->db->get_where($this->table, ["id_dokumen" => $id_dokumen])->row();
	}

	//menampilkan semua data aduan
	public function getAll()
	{
		$this->db->from($this->table);
		$this->db->order_by("id_dokumen", "desc");
		$query = $this->db->get();
		return $query->result();
	}

	//menyimpan data 
	public function save($data)
	{

		return $this->db->insert($this->table, $data);
	}

	// Gak jelas
	// public function total($field, $where)
	// {
	// 	$this->db->select_sum($field);
	// 	if (!empty($where) && count($where) > 0) {
	// 		$this->db->where($where);
	// 	}
	// 	$this->db->from('dokumen');
	// 	return $this->db->get()->row($field);
	// }
	//hapus data 
	public function delete($id_dokumen)
	{
		return $this->db->delete($this->table, array("id_dokumen" => $id_dokumen));
	}
}
