<?php 

class Sertifikat extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('sertifikat_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

    public function index() 
    {
        $data["sertifikat"] = $this->sertifikat_model->getTable2();
        $data["sertifikat2"] = $this->sertifikat_model->getTable3();
        $data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/sertifikat/list", $data);
    }

    public function add()
    {
        $sertifikat = $this->sertifikat_model;
		$validation = $this->form_validation;
		$validation->set_rules($sertifikat->rules());

		if ($validation->run()) {
            $sertifikat->save();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('jurusan/siswa/sertifikat'));
        }

        $data['program_studi']=$this->auth_model->prodi_enums('user','program_studi');
		$data['current_user'] = $this->auth_model->current_user();
		$this->load->view("jurusan/siswa/sertifikat/add", $data);
    }

    public function print($id = null)
	{
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        $this->data['title_pdf'] = 'Sertifikat PKL';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'sertifikat_pkl';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $sertifikat = $this->sertifikat_model;

		$this->data['sertifikat'] = $sertifikat->getById($id); 
		$html = $this->load->view('jurusan/siswa/sertifikat/cetak', $this->data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

    public function edit($id = null)
    {
		$data['current_user'] = $this->auth_model->current_user();
        
        if (!isset($id)) redirect('jurusan/siswa/sertifikat');

        $sertifikat = $this->sertifikat_model;
        $validation = $this->form_validation;
        $validation->set_rules($sertifikat->rules());

        if ($validation->run()) {
            $sertifikat->update();
            $this->session->set_flashdata('message', 'Data berhasil tersimpan');
			redirect(site_url('jurusan/siswa/sertifikat'));
        }

        $data["sertifikat"] = $sertifikat->getById($id);
        if (!$data["sertifikat"]) show_404();

        $data['program_studi']=$this->auth_model->prodi_enums('user','program_studi');
        $this->load->view("jurusan/siswa/sertifikat/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->sertifikat_model->delete($id)) {
            redirect(site_url('jurusan/siswa/sertifikat/'));
        }
    }
}