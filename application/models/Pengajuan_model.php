<?php 

class Pengajuan_model extends CI_Model 
{
	private $_table = "pengajuan_pkl";

    public function rules()
    {
        return [
            // [
            //     'field' => 'tanggal_surat',
            //     'label' => 'tanggal_surat',
            //     'rules' => 'required'
            // ],
            // [
            //     'field' => 'tahun_pelajaran',
            //     'label' => 'tahun_pelajaran',
            //     'rules' => 'required'
            // ],

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
                'field' => 'mulai_pkl',
                'label' => 'mulai_pkl',
                'rules' => 'required'
            ],

            [
                'field' => 'selesai_pkl',
                'label' => 'selesai_pkl',
                'rules' => 'required'
            ],

            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

            [
                'field' => 'kelas',
                'label' => 'kelas',
                'rules' => 'required'
            ],

            [
                'field' => 'nomor',
                'label' => 'nomor',
                'rules' => 'required|max_length[15]|min_length[10]'
            ],

            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required'
            ],

        ];
    }

    public function getTable() 
	{
		$this->db->select('pengajuan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('pengajuan_pkl');
		$this->db->join('user', 'user.nomor_induk = pengajuan_pkl.nis');
        $this->db->where('pengajuan_pkl.status', '2');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable1() 
	{
		$this->db->select('pengajuan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('pengajuan_pkl');
		$this->db->join('user', 'user.nomor_induk = pengajuan_pkl.nis');
        $this->db->where('pengajuan_pkl.status', '1');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable2() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
		$this->db->select('pengajuan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('pengajuan_pkl');
		$this->db->join('user', 'user.nomor_induk = pengajuan_pkl.nis');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('pengajuan_pkl.status', '1');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable3() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
		$this->db->select('pengajuan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('pengajuan_pkl');
		$this->db->join('user', 'user.nomor_induk = pengajuan_pkl.nis');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('pengajuan_pkl.status', '2');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable4() 
	{
		$this->db->select('pengajuan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('pengajuan_pkl');
		$this->db->join('user', 'user.nomor_induk = pengajuan_pkl.nis');
        $this->db->where('pengajuan_pkl.status', '0');
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
        // $this->tanggal_surat = $post["tanggal_surat"];
        // $this->tahun_pelajaran = $post["tahun_pelajaran"];
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
		$this->mulai_pkl = $post["mulai_pkl"];
        $this->selesai_pkl = $post["selesai_pkl"];
        $this->nama = $post["nama"];
		$this->kelas = $post["kelas"];
        $this->nomor = $post["nomor"];
        $this->email = $post["email"];
		$this->nis = $post["nis"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nomor_surat = $post["nomor_surat"];
        $this->tanggal_surat = $post["tanggal_surat"];
        $this->tahun_pelajaran = $post["tahun_pelajaran"];
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
		$this->mulai_pkl = $post["mulai_pkl"];
        $this->selesai_pkl = $post["selesai_pkl"];
        $this->nama = $post["nama"];
		$this->kelas = $post["kelas"];
        $this->nomor = $post["nomor"];
        $this->email = $post["email"];
        $this->status = $post["status"];
		$this->nis = $post["nis"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->status = '0';
        return $this->db->update($this->_table, $this, array('id' => $id));
    }
}