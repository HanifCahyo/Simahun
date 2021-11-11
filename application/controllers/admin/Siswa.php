<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("auth_model");
		$this->load->model("siswa_model");
        $this->load->library('form_validation');
		$this->load->library('session');
        if(!$this->auth_model->current_user()){
			redirect('admin/auth/login');
		}
	}

	public function index()
    {
		$data['current_user'] = $this->auth_model->current_user();
		$data['siswa'] = $this->siswa_model->getSiswa();
        $this->load->view('admin/siswa/list', $data);
    }

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/siswa');

		$auth = $this->auth_model;
		$siswa = $this->siswa_model;
		$validation = $this->form_validation;
		$validation->set_rules($auth->profile_rules());

		if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('admin/siswa');
        }

		$data["siswa"] = $siswa->getById($id);
        if (!$data["siswa"]) show_404();

		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("admin/siswa/edit_form", $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->siswa_model->delete($id)) {
            redirect(site_url('admin/siswa'));
        }
    }
}