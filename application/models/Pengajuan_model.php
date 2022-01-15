<?php 

class Pengajuan_model extends CI_Model 
{
	private $_table = "pengajuan_pkl";

    public function rules()
    {
        return [
            [
                'field' => 'tahun_pelajaran',
                'label' => 'tahun_pelajaran',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_perusahaan',
                'label' => 'nama_perusahaan',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat_perusahaan',
                'label' => 'alamat_perusahaan',
                'rules' => 'required'
            ],

            [
                'field' => 'bidang_usaha',
                'label' => 'bidang_usaha',
                'rules' => 'required'
            ],

            [
                'field' => 'periode_pkl',
                'label' => 'periode_pkl',
                'rules' => 'required'
            ],

            [
                'field' => 'kelas',
                'label' => 'kelas',
                'rules' => 'required'
            ],

        ];
    }

    public function getTable() 
	{
		$this->db->select('pengajuan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('pengajuan_pkl');
		$this->db->join('user', 'user.nomor_induk = pengajuan_pkl.id_user');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable2() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
		$this->db->select('pengajuan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('pengajuan_pkl');
		$this->db->join('user', 'user.nomor_induk = pengajuan_pkl.id_user');
        $this->db->where('user.nomor_induk', $id);
		$query = $this->db->get();
		return $query->result();
	}

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
	
    public function insert($data) 
	{
		return $this->db->insert('pengajuan_pkl', $data);
	}

	public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->tahun_pelajaran = $post["tahun_pelajaran"];
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
        $this->bidang_usaha = $post["bidang_usaha"];
		$this->periode_pkl = $post["periode_pkl"];
		$this->kelas = $post["kelas"];
		$this->id_user = $post["id_user"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->tahun_pelajaran = $post["tahun_pelajaran"];
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
        $this->bidang_usaha = $post["bidang_usaha"];
		$this->periode_pkl = $post["periode_pkl"];
		$this->kelas = $post["kelas"];
		$this->id_user = $post["id_user"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}