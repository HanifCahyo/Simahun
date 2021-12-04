<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("auth_model");
		$this->load->model("guru_model");
		$this->load->library('form_validation');
		$this->load->library('session');
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['current_user'] = $this->auth_model->current_user();
		$data['guru'] = $this->guru_model->getGuru();
		$this->load->view('admin/guru/list', $data);
	}

	public function edit($id = null)
	{
		if (!isset($id)) redirect('admin/guru');

		$auth = $this->auth_model;
		$guru = $this->guru_model;
		$validation = $this->form_validation;
		$validation->set_rules($auth->guru_rules());

		if ($validation->run()) {
            $guru->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect('admin/guru');
        }

		$data["guru"] = $guru->getById($id);
        if (!$data["guru"]) show_404();
		
		$data['program_studi']=$this->guru_model->prodi_enums('user','program_studi');
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("admin/guru/edit_form", $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->guru_model->delete($id)) {
            redirect(site_url('admin/guru'));
        }
    }
}
