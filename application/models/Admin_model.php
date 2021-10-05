<?php

class Admin_model extends CI_Model
{
    private $_table = "users_admin";
    const SESSION_KEY = 'user_id';

    public $admin_id;
    public $username;
    public $password;
    public $email;
    public $full_name;
    public $image = "default.png";

    public function rules1()
    {
        return [
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],

            [
                'field' => 'full_name',
                'label' => 'Full_Name',
                'rules' => 'required'
            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
        ];
    }


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function doLogin()
    {
        $post = $this->input->post();

        $this->db->where('email', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isAdmin = $user->role == "Admin";

            if ($isPasswordTrue && $isAdmin) {

                $this->session->set_userdata([self::SESSION_KEY => $user->admin_id]);
                $this->_updateLastLogin($user->admin_id);
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

		$admin_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['admin_id' => $admin_id]);
		return $query->row();
	}

    private function _updateLastLogin($admin_id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE admin_id={$admin_id}";
        $this->db->query($sql);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->admin_id = $post["admin_id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->email = $post["email"];
        $this->full_name = $post["full_name"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        return $this->db->update($this->_table, $this, array('admin_id' => $post['admin_id']));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/avatar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->admin_id;
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
