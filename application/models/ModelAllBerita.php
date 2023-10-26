<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAllBerita extends CI_Model
{
	private $table = 'berita';


	public function rules()
	{
		return [
			[
				'field' => 'judul_berita',
				//samakan dengan atribute name pada tags input
				'label' => 'Judul Berita',
				// label yang kan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],
			[
				'field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'trim|required'
			],
			[
				'field' => 'isi_berita',
				'label' => 'Isi Berita',
				'rules' => 'trim|required'
			],
			// [
			// 	'field' => 'id_kategori',
			// 	'label' => 'Isi Berita',
			// 	'rules' => 'trim|required'
			// ],

		];
	}

	public function getById($id_berita)
	{
		$this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');
		return $this->db->get_where($this->table, ["id_berita" => $id_berita])->row();
	}

	public function kategori($nama_kategori)
	{
		return $this->db->get_where('kategori', ['nama_kategori' => $nama_kategori])->row_array();
	}

	public function getKategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');
		$this->db->where('Berita.id_kategori', $id_kategori);
		$query = $this->db->get();
		return $query->result();
	}

	//menampilkan semua data berita
	public function getAll()
	{
		$this->db->from($this->table);
		$this->db->order_by("id_berita", "desc");
		$this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	//menampilkan semua data berita
	public function getLimit()
	{
		$this->db->from($this->table);
		$this->db->limit(5);
		$this->db->order_by("id_berita", "desc");
		$this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	//menampilkan semua data berita
	public function getTotal($kategori)
	{
		$this->db->from($this->table);
		$this->db->order_by("id_berita", "desc");
		// $this->db->join('kategori', 'kategori.id_kategori = berita.id_kategori', 'left');
		$this->db->where('id_kategori', $kategori);
		$query = $this->db->get();
		return $query->result();
	}

	//menyimpan data berita
	public function save($data)
	{
		// $data = array(
		// 	"judul_berita" => $this->input->post('judul_berita'),
		// 	"tanggal" => $this->input->post('tanggal'),
		// 	"isi_berita" => $this->input->post('isi_berita'),
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
	public function delete($id_berita)
	{
		return $this->db->delete($this->table, array("id_berita" => $id_berita));
	}
}
