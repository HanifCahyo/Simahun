<?php

class  Cetak_lembarmonitoring extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("auth_model");
		if(!$this->auth_model->current_user()){
			redirect('admin/auth/login');
		}
		
	}
	
	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/guru/cetak_lembarmonitoring", $data);
	}

}