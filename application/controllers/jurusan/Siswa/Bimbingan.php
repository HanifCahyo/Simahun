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
		$data["bimbingan"] = $this->bimbingan_model->getTable2();
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/bimbingan/list", $data);
	}

	public function add()
	{
        $bimbingan_model = $this->bimbingan_model;
        $validation = $this->form_validation;
		$validation->set_rules($bimbingan_model->rules());

        if ($validation->run()) {
            $bimbingan_model->save();
			$this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('jurusan/siswa/bimbingan'));
        }

		$data['current_user'] = $this->auth_model->current_user();
        $data['guru'] = $this->guru_model->getGuru();
        $this->load->view("jurusan/siswa/bimbingan/add", $data);
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('jurusan/siswa/bimbingan');

		$bimbingan_model = $this->bimbingan_model;
        $validation = $this->form_validation;
		$validation->set_rules($bimbingan_model->rules());

		if ($validation->run()) {
            $bimbingan_model->update();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('jurusan/siswa/bimbingan'));
        }

		$data["guru"] = $bimbingan_model->getById($id);
        if (!$data["guru"]) show_404();

		$data['current_user'] = $this->auth_model->current_user();
		$data['guru'] = $this->guru_model->getGuru();
		$this->load->view("jurusan/siswa/bimbingan/edit", $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->bimbingan_model->delete($id)) {
            redirect(site_url('jurusan/siswa/bimbingan'));
        }
    }


}
