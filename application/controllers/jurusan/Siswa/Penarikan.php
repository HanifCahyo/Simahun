<?php

 class Penarikan extends CI_Controller
 {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('penarikan_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

    public function index() 
    {
        $data["penarikan"] = $this->penarikan_model->getTable();
        $data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/penarikan/list", $data);
    }

    public function add()
    {
        $penarikan = $this->penarikan_model;
		$validation = $this->form_validation;
		$validation->set_rules($penarikan->rules());

		if ($validation->run()) {
            $penarikan->save();
            $this->session->set_flashdata('message', 'Data sudah tersimpan');
        }

		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/penarikan/tambah", $data);
    }
 }