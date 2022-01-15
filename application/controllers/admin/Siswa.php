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
			redirect('login');
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

		$siswa = $this->siswa_model;
		$this->load->library('form_validation');
		$this->load->model('auth_model');
		$this->load->model('siswa_model');
		$data['current_user'] = $this->auth_model->current_user();

		if ($this->input->method() === 'post') {
			$rules = $this->auth_model->guru_rules();
			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() === FALSE) {
				return $this->load->view('admin/siswa/edit_form', $data);
			}

			$new_password_data = [
				'nomor_induk' => $this->input->post('nomor_induk'),
				'name' => $this->input->post('name'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			];

			if ($this->auth_model->update($new_password_data)) {
				$this->session->set_flashdata('message', 'Berhasil disimpan');
				redirect(site_url('admin/siswa'));
			}
		}

		$data["siswa"] = $siswa->getById($id);
        if (!$data["siswa"]) show_404();
		
		$this->load->view('admin/siswa/edit_form', $data);
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->siswa_model->delete($id)) {
            redirect(site_url('admin/siswa'));
        }
    }
}