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

	public function index()
	{
		$data["kegiatan"] = $this->kegiatan_model->getTable2();
		$data["kegiatan2"] = $this->kegiatan_model->getTable3();
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/kegiatan/list", $data);	
	}

	public function add()
	{
		$kegiatan = $this->kegiatan_model;
		$validation = $this->form_validation;
		$validation->set_rules($kegiatan->rules());

		if ($validation->run()) {
            $kegiatan->save();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('jurusan/siswa/kegiatan'));
        }

		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/kegiatan/add", $data);
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('jurusan/siswa/kegiatan');

		$kegiatan = $this->kegiatan_model;
		$validation = $this->form_validation;
		$validation->set_rules($kegiatan->rules());

		if ($validation->run()) {
            $kegiatan->update();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('jurusan/siswa/kegiatan'));
        }

		$data["kegiatan"] = $kegiatan->getById($id);
        if (!$data["kegiatan"]) show_404();

		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/kegiatan/edit", $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kegiatan_model->delete($id)) {
            redirect(site_url('jurusan/siswa/kegiatan'));
        }
    }

}