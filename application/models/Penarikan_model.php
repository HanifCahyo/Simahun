<?php 

class Penarikan_model extends CI_Model
{
    private $_table = "penarikan_pkl";

    public function rules()
    {
        return [

            // [
            //     'field' => 'nomor_surat',
            //     'label' => 'tanggal_surat',
            //     'rules' => 'required'
            // ],

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
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat_perusahaan',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'mulai_pkl',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'selesai_pkl',
                'label' => '',
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
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'email',
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
		$this->db->select('penarikan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('penarikan_pkl');
		$this->db->join('user', 'user.nomor_induk = penarikan_pkl.nis');
        $this->db->where('penarikan_pkl.status', '2');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable1() 
	{
		$this->db->select('penarikan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('penarikan_pkl');
		$this->db->join('user', 'user.nomor_induk = penarikan_pkl.nis');
        $this->db->where('penarikan_pkl.status', '1');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable2() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
		$this->db->select('penarikan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('penarikan_pkl');
		$this->db->join('user', 'user.nomor_induk = penarikan_pkl.nis');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('penarikan_pkl.status', '1');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable3() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
		$this->db->select('penarikan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('penarikan_pkl');
		$this->db->join('user', 'user.nomor_induk = penarikan_pkl.nis');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('penarikan_pkl.status', '2');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable4() 
	{
		$this->db->select('penarikan_pkl.*, user.nomor_induk, user.name, user.program_studi');
		$this->db->from('penarikan_pkl');
		$this->db->join('user', 'user.nomor_induk = penarikan_pkl.nis');
        $this->db->where('penarikan_pkl.status', '0');
		$query = $this->db->get();
		return $query->result();
	}

    public function save() 
    {
        $post = $this->input->post();
        $this->id = uniqid();
        // $this->nomor_surat = $post["nomor_surat"];
        // $this->tanggal_surat = $post["tanggal_surat"];
        // $this->tahun_pelajaran = $post["tahun_pelajaran"];
        $this->nis = $post["nis"];
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
        $this->mulai_pkl = $post["mulai_pkl"];
        $this->selesai_pkl = $post["selesai_pkl"];
        $this->nama = $post["nama"];
		$this->kelas = $post["kelas"];
        $this->nomor = $post["nomor"];
        $this->email = $post["email"];
        return $this->db->insert($this->_table, $this);
    }

    public function save2() 
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nomor_surat = $post["nomor_surat"];
        $this->tanggal_surat = $post["tanggal_surat"];
        $this->tahun_pelajaran = $post["tahun_pelajaran"];
        $this->nis = $post["nis"];
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
        $this->mulai_pkl = $post["mulai_pkl"];
        $this->selesai_pkl = $post["selesai_pkl"];
        $this->nama = $post["nama"];
		$this->kelas = $post["kelas"];
        $this->nomor = $post["nomor"];
        $this->email = $post["email"];
        $this->status = $post["status"];
        return $this->db->insert($this->_table, $this);
    }

    public function update() 
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nomor_surat = $post["nomor_surat"];
        $this->tanggal_surat = $post["tanggal_surat"];
        $this->tahun_pelajaran = $post["tahun_pelajaran"];
        $this->nis = $post["nis"];
        $this->nama_perusahaan = $post["nama_perusahaan"];
        $this->alamat_perusahaan = $post["alamat_perusahaan"];
        $this->mulai_pkl = $post["mulai_pkl"];
        $this->selesai_pkl = $post["selesai_pkl"];
        $this->nama = $post["nama"];
		$this->kelas = $post["kelas"];
        $this->nomor = $post["nomor"];
        $this->email = $post["email"];
        $this->status = $post["status"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        $this->status = '0';
        return $this->db->update($this->_table, $this, array('id' => $id));
    }
}