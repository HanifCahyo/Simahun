<?php

class Guru_model extends CI_Model
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

    public function getGuru()
    {
        return $this->db->get("{$this->_table} WHERE role='Guru'")->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nomor_induk" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nomor_induk = $post["nomor_induk"];
        $this->name = $post["name"];
        $this->password = $post["password"];
        return $this->db->update($this->_table, $this, array('nomor_induk' => $post['nomor_induk']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nomor_induk" => $id));
    }

    function prodi_enums($table, $field)
    {
        $query = "SHOW COLUMNS FROM " . $table . " LIKE '$field'";
        $row = $this->db->query("SHOW COLUMNS FROM " . $table . " LIKE '$field'")->row()->Type;
        $regex = "/'(.*?)'/";
        preg_match_all($regex, $row, $enum_array);
        $enum_fields = $enum_array[1];
        foreach ($enum_fields as $key => $value) {
            $enums[$value] = $value;
        }
        return $enums;
    }
}
