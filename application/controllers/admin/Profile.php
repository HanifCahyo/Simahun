<?php

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('admin/auth/login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("admin/profile", $data);
	}

	public function upload_avatar()
	{
		$this->load->model('auth_model');
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			// the user id contain dot, so we must remove it
			$file_name = str_replace('.', '', $data['current_user']->nis);
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
					'nis' => $data['current_user']->nis,
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
		$file_name = str_replace('.', '', $current_user->nis);
		array_map('unlink', glob(FCPATH . "/upload/avatar/$file_name.*"));

		// set avatar menjadi null
		$new_data = [
			'nis' => $current_user->nis,
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
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->auth_model->profile_rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === FALSE) {
				return $this->load->view('admin/profile', $data);
			}

			$new_data = [
				'nis' => $data['current_user']->nis,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
			];

			if ($this->auth_model->update($new_data)) {
				$this->session->set_flashdata('message', 'Profile was updated');
				redirect(site_url('admin/profile'));
			}
		}

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
				'nis' => $data['current_user']->nis,
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];

			if ($this->auth_model->update($new_password_data)) {
				$this->session->set_flashdata('message', 'Password was changed');
				redirect(site_url('admin/profile'));
			}
		}
	}

}
