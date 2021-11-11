<?php

class Siswa_model extends CI_Model
{
    private $_table = "user";

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getSiswa()
    {
        return $this->db->get("{$this->_table} WHERE role='Siswa'")->result();
       
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nis" => $id])->row();
    }
  
    public function update()
    {
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->username = $post["username"];
        $this->program_studi = $post["prodi_studi"];
        return $this->db->update($this->_table, $this, array('nis' => $post['nis']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nis" => $id));
    }
}
