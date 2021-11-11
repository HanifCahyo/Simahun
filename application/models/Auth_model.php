<?php

class Auth_model extends CI_Model
{
	private $_table = "user";
	const SESSION_KEY = 'nis';

	public function rules()
	{
		return [
			[
				'field' => 'nis',
				'label' => 'nis or Email',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function register_rules()
	{
		return [
			[
				'field' => 'nis',
				'label' => 'nis',
				'rules' => 'required|max_length[64]'
			],
			[
				'field' => 'prodi_keahlian',
				'label' => 'Program Studi Keahlian',
				'rules' => 'required|max_length[64]'
			],
			[
				'field' => 'password',
				'label' => 'New Password',
				'rules' => 'required'
			],
			[
				'field' => 'password_confirm',
				'label' => 'Password Confirmation',
				'rules' => 'required|matches[password]'
			],
		];
	}

	public function profile_rules()
	{
		return [
			[
				'field' => 'nis',
				'label' => 'nis',
				'rules' => 'required|max_length[64]'
			],
			[
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|max_length[64]'
			],
		];
	}

	public function guru_rules()
	{
		return [
			[
				'field' => 'nis',
				'label' => 'nis',
				'rules' => 'required|max_length[64]'
			],
			[
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|max_length[64]'
			],
		];
	}

	public function password_rules()
	{
		return [
			[
				'field' => 'password',
				'label' => 'New Password',
				'rules' => 'required'
			],
			[
				'field' => 'password_confirm',
				'label' => 'Password Confirmation',
				'rules' => 'required|matches[password]'
			],
		];
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function doLoginAdmin($nis, $password)
	{
		$post = $this->input->post();

		$this->db->where('email', $nis)->or_where('nis', $nis);
		$user = $this->db->get($this->_table)->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		if ($user) {
			$isPasswordTrue = password_verify($post["password"], $user->password);
			$isAdmin = $user->role == "Admin";

			if ($isPasswordTrue && $isAdmin) {

				$this->session->set_userdata([self::SESSION_KEY => $user->nis]);
				$this->_updateLastLogin($user->nis);
				return $this->session->has_userdata(self::SESSION_KEY);
			}
		}
		return false;
	}

	public function doLoginGuru($nis, $password)
	{
		$post = $this->input->post();

		$this->db->where('email', $nis)->or_where('nis', $nis);
		$user = $this->db->get($this->_table)->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isGuru = $user->role == "Guru";

            if ($isPasswordTrue && $isGuru) {

                $this->session->set_userdata([self::SESSION_KEY => $user->nis]);
                $this->_updateLastLogin($user->nis);
                return $this->session->has_userdata(self::SESSION_KEY);
            }
        }
		return false;
	}

	public function doLoginSiswa($nis, $password)
	{
		$post = $this->input->post();

		$this->db->where('email', $nis)->or_where('nis', $nis);
		$user = $this->db->get($this->_table)->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isSiswa = $user->role == "Siswa";

            if ($isPasswordTrue && $isSiswa) {

                $this->session->set_userdata([self::SESSION_KEY => $user->nis]);
                $this->_updateLastLogin($user->nis);
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

		$nis = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['nis' => $nis]);
		return $query->row();
	}

	private function _updateLastLogin($nis)
	{
		$sql = "UPDATE {$this->_table} SET last_login=now() WHERE nis={$nis}";
		$this->db->query($sql);
	}

	public function update($data)
	{
		if (!$data['nis']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['nis' => $data['nis']]);
	}
}
