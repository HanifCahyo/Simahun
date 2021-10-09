<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin_model");
		if(!$this->admin_model->current_user()){
			redirect('admin/login');
		}
		
	}
	
	public function index()
	{
		$this->load->view("admin/dashboard");
	}

}