<?php

class Bimbingan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('bimbingan_model');
        $this->load->model('guru_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

	public function index()
	{
		
	}

	public function simpanData()
	{
        $bimbingan_model = $this->bimbingan_model;
        $validation = $this->form_validation;
		$validation->set_rules($bimbingan_model->rules());

        if ($validation->run()) {
            $bimbingan_model->save();
			// $this->session->set_flashdata('msg_success', 'Data sudah tersimpan');
			redirect('jurusan/siswa/dashboard');
        }

		$data['current_user'] = $this->auth_model->current_user();
        $data['guru'] = $this->guru_model->getGuru();
        $this->load->view("jurusan/siswa/bimbingan/tambah", $data);
	}

	public function tambah()
	{
		
	}
}
