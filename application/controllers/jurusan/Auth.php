<?php

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("auth_model");
		$this->load->model("guru_model");
		$this->load->model("siswa_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		show_404();
	}

	public function login()
	{
		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE) {
			return $this->load->view('jurusan/login_page.php');
		}

		$nis = $this->input->post('nis');
		$password = $this->input->post('password');

		if ($this->auth_model->doLoginGuru($nis, $password)) {
			redirect('guru');
		} else {
			$this->session->set_flashdata('message_error', 'Login Gagal, pastikan NIS dan password benar!');
		}

		if ($this->auth_model->doLoginSiswa($nis, $password)) {
			redirect('siswa');
		} else {
			$this->session->set_flashdata('message_error', 'Login Gagal, pastikan NIS dan password benar!');
		}

		$this->load->view('jurusan/login_page.php');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('jurusan/auth/login'));
	}
}
