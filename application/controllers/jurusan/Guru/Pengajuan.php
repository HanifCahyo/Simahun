<?php

class Pengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('bimbingan_model');
		$this->load->model('kegiatan_model');
        $this->load->model('guru_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

	public function index()
	{
		$data["bimbingan"] = $this->bimbingan_model->getTable();
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/guru/pengajuan/list", $data);
	}

	
}