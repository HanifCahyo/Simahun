<?php
class Sertifikat_model extends CI_Model
{
    private $_table = "sertifikat";

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'program_studi',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'kelas',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_surat',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_pembimbing',
                'label' => '',
                'rules' => 'required'
            ],

        ];
    }

    public function getTable() 
	{
		$this->db->select('sertifikat.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('sertifikat');
		$this->db->join('user', 'user.nomor_induk = sertifikat.nis');
        $this->db->where('sertifikat.status', '2');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable1() 
	{
		$this->db->select('sertifikat.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('sertifikat');
		$this->db->join('user', 'user.nomor_induk = sertifikat.nis');
        $this->db->where('sertifikat.status', '1');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable2() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
		$this->db->select('sertifikat.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('sertifikat');
		$this->db->join('user', 'user.nomor_induk = sertifikat.nis');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('sertifikat.status', '1');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable3() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
		$this->db->select('sertifikat.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('sertifikat');
		$this->db->join('user', 'user.nomor_induk = sertifikat.nis');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('sertifikat.status', '2');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable4() 
	{
		$this->db->select('sertifikat.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('sertifikat');
		$this->db->join('user', 'user.nomor_induk = sertifikat.nis');
        $this->db->where('sertifikat.status', '0');
		$query = $this->db->get();
		return $query->result();
	} //Admin

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
	
    public function insert($data) 
	{
		return $this->db->insert('sertifikat', $data);
	}

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->program_studi = $post["program_studi"];
		$this->nis = $post["nis"];
        $this->kelas = $post["kelas"];
        $this->tanggal_surat = $post["tanggal_surat"];
        $this->nama_pembimbing = $post["nama_pembimbing"];
        $this->angka_keahlian1 = $post["angka_keahlian1"];
        $this->angka_keahlian2 = $post["angka_keahlian2"];
        $this->angka_keahlian3 = $post["angka_keahlian3"];
        $this->angka_keahlian4 = $post["angka_keahlian4"];
        $this->angka_keahlian5 = $post["angka_keahlian5"];
        $this->angka_keahlian6 = $post["angka_keahlian6"];
        $this->angka_keahlian7 = $post["angka_keahlian7"];
        $this->angka_disiplin = $post["angka_disiplin"];
        $this->angka_kerjasama = $post["angka_kerjasama"];
        $this->angka_inisiatif = $post["angka_inisiatif"];
        $this->angka_kerajinan = $post["angka_kerajinan"];
        $this->angka_tanggung_jawab = $post["angka_tanggung_jawab"];
        $this->angka_kepribadian = $post["angka_kepribadian"];
        $this->angka_prestasi = $post["angka_prestasi"];
        $this->keahlian1 = $post["keahlian1"];
        $this->keahlian2 = $post["keahlian2"];
        $this->keahlian3 = $post["keahlian3"];
        $this->keahlian4 = $post["keahlian4"];
        $this->keahlian5 = $post["keahlian5"];
        $this->keahlian6 = $post["keahlian6"];
        $this->keahlian7 = $post["keahlian7"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->program_studi = $post["program_studi"];
		$this->nis = $post["nis"];
        $this->kelas = $post["kelas"];
        $this->tanggal_surat = $post["tanggal_surat"];
        $this->nama_pembimbing = $post["nama_pembimbing"];
        $this->angka_keahlian1 = $post["angka_keahlian1"];
        $this->angka_keahlian2 = $post["angka_keahlian2"];
        $this->angka_keahlian3 = $post["angka_keahlian3"];
        $this->angka_keahlian4 = $post["angka_keahlian4"];
        $this->angka_keahlian5 = $post["angka_keahlian5"];
        $this->angka_keahlian6 = $post["angka_keahlian6"];
        $this->angka_keahlian7 = $post["angka_keahlian7"];
        $this->angka_disiplin = $post["angka_disiplin"];
        $this->angka_kerjasama = $post["angka_kerjasama"];
        $this->angka_inisiatif = $post["angka_inisiatif"];
        $this->angka_kerajinan = $post["angka_kerajinan"];
        $this->angka_tanggung_jawab = $post["angka_tanggung_jawab"];
        $this->angka_kepribadian = $post["angka_kepribadian"];
        $this->angka_prestasi = $post["angka_prestasi"];
        $this->keahlian1 = $post["keahlian1"];
        $this->keahlian2 = $post["keahlian2"];
        $this->keahlian3 = $post["keahlian3"];
        $this->keahlian4 = $post["keahlian4"];
        $this->keahlian5 = $post["keahlian5"];
        $this->keahlian6 = $post["keahlian6"];
        $this->keahlian7 = $post["keahlian7"];
        $this->status = $post["status"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->status = '0';
        return $this->db->update($this->_table, $this, array('id' => $id));
    }
}