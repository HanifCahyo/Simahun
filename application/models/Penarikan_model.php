<?php defined('BASEPATH') or exit('No direct script access allowed');

class Penarikan_model extends CI_Model
{
    private $_table = "penarikan_pkl";

    public function rules()
    {
        return [
            [
                'field' => 'lamp',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'hal',
                'label' => '',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_perusahaan',
                'label' => '',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat_perusahaan',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_penarikan',
                'label' => '',
                'rules' => 'required'
            ],
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getTable() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
        $this->db->select('*');
		$this->db->from('penarikan_pkl');
		$this->db->join('user', 'user.nomor_induk =  penarikan_pkl.nis', 'left');
        $this->db->where('user.nomor_induk', $id);
		$query = $this->db->get();
		return $query->result();
	}

    public function save() 
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nomor = $post["nomor"];
        $this->nis = $post["nis"];
        $this->lamp = $post["lamp"];
        $this->hal = $post["hal"];
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
        $this->tanggal_penarikan = $post["tanggal_penarikan"];
        return $this->db->insert($this->_table, $this);
    }
}