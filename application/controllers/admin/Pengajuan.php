<?php

class Pengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model');
        $this->load->model('guru_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

	public function index()
	{
		$data["pengajuan"] = $this->pengajuan_model->getTable4();
        $data["pengajuan3"] = $this->pengajuan_model->getTable();
        $data["pengajuan2"] = $this->pengajuan_model->getTable1();
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("admin/pengajuan/list", $data);
	}

	public function add()
    {
        $pengajuan = $this->pengajuan_model;
		$validation = $this->form_validation;
		$validation->set_rules($pengajuan->rules());

		if ($validation->run()) {
            $pengajuan->save();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('admin/pengajuan'));
        }

		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("admin/Pengajuan/add", $data);
    }

	public function print($id = null)
	{
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'Surat Pengajuan PKL';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'surat_pengajuan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $pengajuan = $this->pengajuan_model;

		$this->data['pengajuan'] = $pengajuan->getById($id); 
		$html = $this->load->view('admin/pengajuan/cetak', $this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

    public function edit($id = null)
    {
		$data['current_user'] = $this->auth_model->current_user();
        
        if (!isset($id)) redirect('admin/pengajuan');

        $pengajuan = $this->pengajuan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengajuan->rules());

        if ($validation->run()) {
            $pengajuan->update();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('admin/pengajuan'));
        }

        $data["pengajuan"] = $pengajuan->getById($id);
        if (!$data["pengajuan"]) show_404();

        $this->load->view("admin/pengajuan/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pengajuan_model->delete($id)) {
            redirect(site_url('admin/pengajuan/'));
        }
    }

	
}