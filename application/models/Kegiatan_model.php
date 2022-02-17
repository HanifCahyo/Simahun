<?php defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{
    private $_table = "kegiatan";

    public $id;
    public $image = "gambar.png";

    public function rules()
    {
        return [
            [
                'field' => 'nama_kegiatan',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'keterangan',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_kegiatan',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'lokasi',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'waktu_mulai',
                'label' => '',
                'rules' => 'required'
            ],

            [
                'field' => 'waktu_selesai',
                'label' => '',
                'rules' => 'required'
            ],
        ];
    }

    public function rules2()
    {
        return [

            [
                'field' => 'validasi',
                'label' => '',
                'rules' => 'required'
            ],
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    
    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama_kegiatan = $post["nama_kegiatan"];
        $this->lokasi = $post["lokasi"];
        $this->nis = $post["nis"];
        $this->keterangan = $post["keterangan"];
        $this->tanggal_kegiatan = $post["tanggal_kegiatan"];
        $this->waktu_mulai = $post["waktu_mulai"];
        $this->waktu_selesai = $post["waktu_selesai"];
        $this->image = $this->_uploadImage();
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_kegiatan = $post["nama_kegiatan"];
        $this->lokasi = $post["lokasi"];
        $this->nis = $post["nis"];
        $this->keterangan = $post["keterangan"];
        $this->tanggal_kegiatan = $post["tanggal_kegiatan"];
        $this->waktu_mulai = $post["waktu_mulai"];
        $this->waktu_selesai = $post["waktu_selesai"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    // public function update2()
    // {
    //     $post = $this->input->post();
    //     $this->id = $post["id"];
    //     $this->nama_kegiatan = $post["nama_kegiatan"];
    //     $this->nis = $post["nis"];
    //     $this->keterangan = $post["keterangan"];
    //     $this->tanggal_kegiatan = $post["tanggal_kegiatan"];
    //     $this->validasi = $post["validasi"];
    //     if (!empty($_FILES["image"]["name"])) {
    //         $this->image = $this->_uploadImage();
    //     } else {
    //         $this->image = $post["old_image"];
    //     }
    //     return $this->db->update($this->_table, $this, array('id' => $post['id']));
    // }

    public function validasi()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->validasi = $post["validasi"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function approve($id)
    {
        $this->validasi = 'Sudah diapprove';
        return $this->db->update($this->_table, $this, array('id' => $id));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/kegiatan/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->id;
        $config['overwrite']            = true;
        $config['max_size']             = 5024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        // print_r($this->upload->display_errors());
        return "gambar.png";
    }

    private function _deleteImage($id)
    {
        $image = $this->getById($id);
        if ($image->image != "gambar.png") {
            $filename = explode(".", $image->image)[0];
            return array_map('unlink', glob(FCPATH . "upload/kegiatan/$filename.*"));
        }
    }

    public function getTable($id) 
	{
        $this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->join('user', 'user.nomor_induk =  kegiatan.nis', 'left');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('kegiatan.validasi', 'Belum diapprove');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable1($id) 
	{
        $this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->join('user', 'user.nomor_induk =  kegiatan.nis', 'left');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('kegiatan.validasi', 'Sudah diapprove');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable2() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
        $this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->join('user', 'user.nomor_induk =  kegiatan.nis', 'left');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('kegiatan.validasi', 'Belum diapprove');
		$query = $this->db->get();
		return $query->result();
	}

    public function getTable3() 
	{
        $id = $this->session->userdata('nomor_induk'); // dapatkan id user yg login
        $this->db->select('*');
		$this->db->from('kegiatan');
		$this->db->join('user', 'user.nomor_induk =  kegiatan.nis', 'left');
        $this->db->where('user.nomor_induk', $id);
        $this->db->where('kegiatan.validasi', 'Sudah diapprove');
		$query = $this->db->get();
		return $query->result();
	}

    function validasi_enums($table, $field)
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
