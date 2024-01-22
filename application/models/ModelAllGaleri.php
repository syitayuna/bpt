<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAllGaleri extends CI_Model
{
	private $table = 'gambar';

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
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'trim|required'
			]
		];
	}

	public function getById($id_gambar)
	{
		$this->db->join('kategori_gambar', 'kategori_gambar.id_kategori = gambar.id_kategori', 'left');
		return $this->db->get_where($this->table, ["id_gambar" => $id_gambar])->row();
	}

	public function kategori($nama_kategori)
	{
		return $this->db->get_where('kategori_gambar', ['nama_kategori' => $nama_kategori])->row_array();
	}

	public function getKategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('kategori_gambar', 'kategori_gambar.id_kategori = gambar.id_kategori', 'left');
		$this->db->where('gambar.id_kategori', $id_kategori);
		$query = $this->db->get();
		return $query->result();
	}

	//menampilkan semua data berita
	public function getAll()
	{
		$this->db->from($this->table);
		$this->db->order_by("id_gambar", "desc");
		$this->db->join('kategori_gambar', 'kategori_gambar.id_kategori = gambar.id_kategori', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	//menampilkan semua data berita
	public function getTotal($kategori)
	{
		$this->db->from($this->table);
		$this->db->order_by("id_gambar", "desc");
		// $this->db->join('kategori_gambar', 'kategori_gambar.id_kategori = gambar.id_kategori', 'left');
		$this->db->where('id_kategori', $kategori);
		$query = $this->db->get();
		return $query->result();
	}

	//menyimpan data berita
	public function save($data)
	{
		// $data = array(
		// 	"judul" => $this->input->post('judul'),
		// 	"tanggal" => $this->input->post('tanggal'),
		// 	"id_kategori" => $this->input->post('id_kategori'),
		// 	"gambar" => $this->upload->data('file_name')
		// );
		return $this->db->insert($this->table, $data);
	}

	//edit data berita
	public function update($where, $data, $table)
	{

		$this->db->where($where);
		$this->db->update($table, $data);
	}

	//hapus data 
	public function delete($id_gambar)
	{
		return $this->db->delete($this->table, array("id_gambar" => $id_gambar));
	}
}
