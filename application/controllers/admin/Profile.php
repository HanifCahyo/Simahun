<?php

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("auth_model");
		$this->load->model("guru_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$data['program_studi']=$this->auth_model->prodi_enums('user','program_studi');
		$data['status']=$this->auth_model->prodi_enums('user','status');
		$this->load->view("admin/profile", $data);
	}

	public function upload_avatar()
	{
		$this->load->model('auth_model');
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			// the user id contain dot, so we must remove it
			$file_name = str_replace('.', '', $data['current_user']->nomor_induk);
			$config['upload_path']          = FCPATH . '/upload/avatar/';
			$config['allowed_types']        = 'gif|jpg|jpeg|png';
			$config['file_name']            = $file_name;
			$config['overwrite']            = true;
			$config['max_size']             = 1024; // 1MB
			$config['max_width']            = 1080;
			$config['max_height']           = 1080;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('avatar')) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$uploaded_data = $this->upload->data();

				$new_data = [
					'nomor_induk' => $data['current_user']->nomor_induk,
					'avatar' => $uploaded_data['file_name'],
				];

				if ($this->auth_model->update($new_data)) {
					$this->session->set_flashdata('message', 'Avatar updated!');
					redirect(site_url('admin/profile'));
				}
			}
		}

		$this->load->view('admin/profile', $data);
	}

	public function remove_avatar()
	{
		$current_user = $this->auth_model->current_user();
		$this->load->model('auth_model');

		// hapus file
		$file_name = str_replace('.', '', $current_user->nomor_induk);
		array_map('unlink', glob(FCPATH . "/upload/avatar/$file_name.*"));

		// set avatar menjadi null
		$new_data = [
			'nomor_induk' => $current_user->nomor_induk,
			'avatar' => "default.png",
		];

		if ($this->auth_model->update($new_data)) {
			$this->session->set_flashdata('message', 'Avatar dihapus!');
			redirect(site_url('admin/profile'));
		}
	}

	public function edit_profile()
	{
		$this->load->library('form_validation');
		$this->load->model('auth_model');
		$this->load->model('guru_model');

		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->auth_model->profile_rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === FALSE) {
				return $this->load->view('admin/profile', $data);
			}

			$new_data = [
				'nomor_induk' => $data['current_user']->nomor_induk,
				'name' => $this->input->post('name'),
				'program_studi' => $this->input->post('program_studi'),
				'alamat' => $this->input->post('alamat'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jekel' => $this->input->post('jekel'),
				'status' => $this->input->post('status'),
			];

			if ($this->auth_model->update($new_data)) {
				$this->session->set_flashdata('message', 'Profile was updated');
				redirect(site_url('admin/profile'));
			}
		}

		$data['program_studi']=$this->auth_model->prodi_enums('user','program_studi');
		$data['status']=$this->auth_model->prodi_enums('user','status');
		$this->load->view('admin/profile', $data);
	}

	public function edit_password()
	{
		$this->load->library('form_validation');
		$this->load->model('auth_model');
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->auth_model->password_rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === FALSE) {
				return $this->load->view('admin/profile', $data);
			}

			$new_password_data = [
				'nomor_induk' => $data['current_user']->nomor_induk,
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];

			if ($this->auth_model->update($new_password_data)) {
				$this->session->set_flashdata('message', 'Password was changed');
				redirect(site_url('admin/profile'));
			}
		}
	}

}
