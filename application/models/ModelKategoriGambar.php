<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ModelKategoriGambar extends CI_Model
{

	private $table = 'kategori_gambar';

	public function rules()
	{
		return [
			[
				'field' => 'nama_kategori',
				//samakan dengan atribute name pada tags input
				'label' => 'Nama Kategori',
				// label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],

		];
	}

	public function getById($id_galeri)
	{
		return $this->db->get_where($this->table, ["id_kategori" => $id_galeri])->row();
	}

	public function getAll()
	{
		$this->db->from($this->table);
		$this->db->order_by("id_kategori", "desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function save($table, $data)
	{

		return $this->db->insert($table, $data);
	}

	//edit data berita
	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//hapus data 
	public function delete_kategori($id)
	{
		return $this->db->delete('kategori_gambar', array('id_kategori' => $id));
	}
}
