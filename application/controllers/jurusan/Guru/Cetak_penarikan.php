<?php

class Cetak_penarikan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("auth_model");
		if(!$this->auth_model->current_user()){
			redirect('login');
		}		
	}
	
	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/guru/cetak_penarikan", $data);
	}

	public function add()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/guru/penarikan/cetak_penarikan", $data);
	}

}