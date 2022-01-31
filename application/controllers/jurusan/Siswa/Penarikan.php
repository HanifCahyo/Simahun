<?php

 class Penarikan extends CI_Controller
 {
    public function __construct()
	{
		parent::__construct();
		$this->load->model('penarikan_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

    public function index() 
    {
        $data["penarikan"] = $this->penarikan_model->getTable();
        $data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/penarikan/list", $data);
    }

    public function add()
    {
        $penarikan = $this->penarikan_model;
		$validation = $this->form_validation;
		$validation->set_rules($penarikan->rules());

		if ($validation->run()) {
            $penarikan->save();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('jurusan/siswa/penarikan'));
        }

		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/penarikan/add", $data);
    }

	public function print($id = null)
	{
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'Surat Penarikan PKL';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'surat_penarikan';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $penarikan = $this->penarikan_model;

		$this->data['penarikan'] = $penarikan->getById($id); 
		$html = $this->load->view('jurusan/siswa/penarikan/cetak', $this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

    public function edit($id = null)
    {
		$data['current_user'] = $this->auth_model->current_user();
        
        if (!isset($id)) redirect('jurusan/siswa/penarikan');

        $penarikan = $this->penarikan_model;
        $validation = $this->form_validation;
        $validation->set_rules($penarikan->rules());

        if ($validation->run()) {
            $penarikan->update();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('jurusan/siswa/penarikan'));
        }

        $data["penarikan"] = $penarikan->getById($id);
        if (!$data["penarikan"]) show_404();

        $this->load->view("jurusan/siswa/penarikan/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->penarikan_model->delete($id)) {
            redirect(site_url('jurusan/siswa/penarikan/'));
        }
    }
 }