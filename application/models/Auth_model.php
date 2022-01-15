<?php

class Auth_model extends CI_Model
{
	private $_table = "user";
	const SESSION_KEY = 'nomor_induk';

	public function rules()
	{
		return [
			[
				'field' => 'nomor_induk',
				'label' => 'Nomor Induk',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function profile_rules()
	{
		return [
			[
				'field' => 'name',
				'label' => 'name',
				'rules' => 'required|max_length[64]'
			],
		];
	}

	public function guru_rules()
	{
		return [
			[
				'field' => 'nomor_induk',
				'label' => 'nomor_induk',
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

	public function doLoginAdmin($nomor_induk, $password)
	{
		$post = $this->input->post();

		$this->db->where('email', $nomor_induk)->or_where('nomor_induk', $nomor_induk);
		$user = $this->db->get($this->_table)->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		if ($user) {
			$isPasswordTrue = password_verify($post["password"], $user->password);
			$isAdmin = $user->role == "Admin";

			if ($isPasswordTrue && $isAdmin) {

				$this->session->set_userdata([self::SESSION_KEY => $user->nomor_induk]);
				$this->_updateLastLogin($user->nomor_induk);
				return $this->session->has_userdata(self::SESSION_KEY);
			}
		}
		return false;
	}

	public function doLoginGuru($nomor_induk, $password)
	{
		$post = $this->input->post();

		$this->db->where('email', $nomor_induk)->or_where('nomor_induk', $nomor_induk);
		$user = $this->db->get($this->_table)->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isGuru = $user->role == "Guru";

            if ($isPasswordTrue && $isGuru) {

                $this->session->set_userdata([self::SESSION_KEY => $user->nomor_induk]);
                $this->_updateLastLogin($user->nomor_induk);
                return $this->session->has_userdata(self::SESSION_KEY);
            }
        }
		return false;
	}

	public function doLoginSiswa($nomor_induk, $password)
	{
		$post = $this->input->post();

		$this->db->where('email', $nomor_induk)->or_where('nomor_induk', $nomor_induk);
		$user = $this->db->get($this->_table)->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		if ($user) {
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isSiswa = $user->role == "Siswa";

            if ($isPasswordTrue && $isSiswa) {

                $this->session->set_userdata([self::SESSION_KEY => $user->nomor_induk]);
                $this->_updateLastLogin($user->nomor_induk);
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

		$nomor_induk = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['nomor_induk' => $nomor_induk]);
		return $query->row();
	}

	private function _updateLastLogin($nomor_induk)
	{
		$sql = "UPDATE {$this->_table} SET last_login=now() WHERE nomor_induk={$nomor_induk}";
		$this->db->query($sql);
	}

	public function update($data)
	{
		if (!$data['nomor_induk']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['nomor_induk' => $data['nomor_induk']]);
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
