<?php

class List_pengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('pengajuan_model');
		$this->load->model("auth_model");
		$this->load->library('form_validation');
		if(!$this->auth_model->current_user()){
			redirect('login');
		}		
	}
	
	public function index()
	{
		$data["pengajuan_pkl"] = $this->pengajuan_model->getTable();
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/guru/list_pengajuan", $data);
	}

	public function edit($id = null)
    {
		$data['current_user'] = $this->auth_model->current_user();
        
        if (!isset($id)) redirect('jurusan/guru/list_pengajuan');

        $pengajuan = $this->pengajuan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengajuan->rules());

        if ($validation->run()) {
            $pengajuan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pengajuan_pkl"] = $pengajuan->getById($id);
        if (!$data["pengajuan_pkl"]) show_404();

        $this->load->view("jurusan/guru/edit_form_pengajuan", $data);
    }

	public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->pengajuan_model->delete($id)) {
            redirect(site_url('jurusan/guru/list_pengajuan'));
        }
    }
}