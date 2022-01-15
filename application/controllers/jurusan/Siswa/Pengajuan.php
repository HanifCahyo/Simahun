<?php

 class Pengajuan extends CI_Controller
 {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

    public function index() 
    {
        $data["pengajuan"] = $this->pengajuan_model->getTable2();
        $data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/Pengajuan/list", $data);
    }

    public function add()
    {
        $pengajuan = $this->pengajuan_model;
		$validation = $this->form_validation;
		$validation->set_rules($pengajuan->rules());

		if ($validation->run()) {
            $pengajuan->save();
            $this->session->set_flashdata('message', 'Data sudah tersimpan');
        }

		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/Pengajuan/tambah", $data);
    }
 }