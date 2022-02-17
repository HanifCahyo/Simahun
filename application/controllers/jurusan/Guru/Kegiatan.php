<?php

class Kegiatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kegiatan_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

	// public function index()
	// {
	// 	$data["kegiatan"] = $this->kegiatan_model->getTable();
	// 	$data['current_user'] = $this->auth_model->current_user();
	// 	$this->load->view("jurusan/guru/kegiatan/list", $data);
	// }


	// public function edit($id = null)
	// {
	// 	if (!isset($id)) redirect('jurusan/guru/kegiatan');

	// 	$kegiatan = $this->kegiatan_model;
	// 	$validation = $this->form_validation;
	// 	$validation->set_rules($kegiatan->rules());

	// 	if ($validation->run()) {
    //         $kegiatan->update2();
    //         $this->session->set_flashdata('message', 'Data berhasil tersimpan');
    //     }

	// 	$data["kegiatan"] = $kegiatan->getById($id);
    //     if (!$data["kegiatan"]) show_404();

	// 	$data['validasi']=$this->kegiatan_model->validasi_enums('kegiatan','validasi');
	// 	$data['current_user'] = $this->auth_model->current_user();
	// 	$this->load->view("jurusan/guru/kegiatan/edit", $data);
	// }

}