<?php

class Bimbingan_model extends CI_Model
{
    private $_table = "bimbingan";
    const SESSION_KEY = 'nomor_induk';

    public function rules()
    {
        return [
            [
                'field' => 'niy',
                'label' => 'niy',
                'rules' => 'required'
            ],

            [
                'field' => 'nis',
                'label' => 'nis',
                'rules' => 'required'
            ],
        ];
    }

    // public function getTable() 
    // {
    // 	$this->db->select('pengajuan_pkl.*, user.nomor_induk, user.name, user.program_studi');
    // 	$this->db->from('pengajuan_pkl');
    // 	$this->db->join('user', 'user.nomor_induk = pengajuan_pkl.id_user');
    // 	$query = $this->db->get();
    // 	return $query->result();
    // }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->niy = $post["niy"];
        $this->nis = $post["nis"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->niy = $post["niy"];
        $this->nis = $post["nis"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function getTable() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
        $this->db->select('*');
		$this->db->from('bimbingan');       
		$this->db->join('user', 'user.nomor_induk =  bimbingan.nis', 'left');
        $this->db->where('bimbingan.niy', $id);
		$query = $this->db->get();
		return $query->result();
	}

    public function update2()
    {
        
    }
}
