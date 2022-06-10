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

		$nomor_induk = $this->input->post('nomor_induk');
		$password = $this->input->post('password');

		if ($this->auth_model->doLoginAdmin($nomor_induk, $password)) {
			redirect('admin');
		} elseif ($this->auth_model->doLoginGuru($nomor_induk, $password)) {
			redirect('guru');
		} elseif ($this->auth_model->doLoginSiswa($nomor_induk, $password)) {
			redirect('siswa');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan Username dan password benar!');
			redirect('login');
		}

		$this->load->view('jurusan/login_page.php');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}
