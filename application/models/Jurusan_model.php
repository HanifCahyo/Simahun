<?php

class Jurusan_model extends CI_Model
{
    private $_table = "users_jurusan";
    const SESSION_KEY = 'user_id';

    public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'Username or Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function doLogin($username, $password)
    {
        $post = $this->input->post();

        $this->db->where('email', $username)->or_where('username', $username);
        $user = $this->db->get($this->_table)->row();

        // cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

        if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isGuru = $user->role == "Guru";

            if ($isPasswordTrue && $isGuru) {

                $this->session->set_userdata([self::SESSION_KEY => $user->user_id]);
                $this->_updateLastLogin($user->user_id);
                return $this->session->has_userdata(self::SESSION_KEY);
            }
        }
        return false;
    }

    public function doLoginSiswa($username, $password)
    {
        $post = $this->input->post();

        $this->db->where('email', $username)->or_where('username', $username);
        $user = $this->db->get($this->_table)->row();

        // cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

        if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isSiswa = $user->role == "Siswa";

            if ($isPasswordTrue && $isSiswa) {

                $this->session->set_userdata([self::SESSION_KEY => $user->user_id]);
                $this->_updateLastLogin($user->user_id);
                return $this->session->has_userdata(self::SESSION_KEY);
            }
        }
        return false;
    }

    public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['user_id' => $user_id]);
		return $query->row();
	}

    private function _updateLastLogin($user_id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->user_id = $post["user_id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->email = $post["email"];
        $this->full_name = $post["full_name"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        return $this->db->update($this->_table, $this, array('user_id' => $post['user_id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/avatar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->user_id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }
        // print_r($this->upload->display_errors());
        return "default.jpg";
    }
    
}
