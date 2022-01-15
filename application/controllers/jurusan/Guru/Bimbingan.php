<?php

class Bimbingan extends CI_Controller
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
		$this->load->view("jurusan/guru/bimbingan/list_bimbingan", $data);
	}

	public function detail($id)
	{
		$data["kegiatan"] = $this->kegiatan_model->getTable($id);
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/guru/kegiatan/list", $data);
	}

	public function edit($id = null)
	{
		$data['current_user'] = $this->auth_model->current_user();

		if (!isset($id)) redirect('jurusan/guru/bimbingan/detail');

		$bimbingan = $this->bimbingan_model;
		$validation = $this->form_validation;
		$validation->set_rules($bimbingan->rules2());

		if ($validation->run()) {
            $bimbingan->update2();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

		$data["bimbingan"] = $bimbingan->getById($id);
        if (!$data["bimbingan"]) show_404();

        $this->load->view("jurusan/guru/kegiatan/edit", $data);
	}
	

}
