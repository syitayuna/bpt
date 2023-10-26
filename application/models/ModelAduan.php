<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAduan extends CI_Model
{
    private $table = 'aduan';

    
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
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
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
                'field' => 'no_telp',
                'label' => 'No Telp',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'isi_aduan',
                'label' => 'Isi Aduan',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tindak_lanjut',
                'label' => 'Tindak Lanjut',
                'rules' => 'trim|required'
            ]
        ];
    }


    public function getById($id_aduan)
    {
        return $this->db->get_where($this->table, ["id_aduan" => $id_aduan])->row();

    }

    //menampilkan semua data aduan
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_aduan", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    //menyimpan data 
    public function save()
    {
        $data = array(
            "email" => $this->input->post('email'),
            "nama" => $this->input->post('nama'),
            "nik" => $this->input->post('nik'),
            "alamat" => $this->input->post('alamat'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "no_telp" => $this->input->post('no_telp'),
            "isi_aduan" => $this->input->post('isi_aduan'),
            "tindak_lanjut" => $this->input->post('tindak_lanjut')
        );
        return $this->db->insert($this->table, $data);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('aduan');
        return $this->db->get()->row($field);
    }

    //hapus data 
    public function delete($id_aduan)
    {
        return $this->db->delete($this->table, array("id_aduan" => $id_aduan));
    }
}