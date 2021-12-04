<?php

class Input_pengajuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengajuan_model');
		$this->load->library('form_validation');
		$this->load->model("auth_model");
		if (!$this->auth_model->current_user()) {
			redirect('login');
		}
	}

	public function index()
	{
		$pengajuan_model = $this->pengajuan_model;
        $validation = $this->form_validation;
		$validation->set_rules($pengajuan_model->rules());

        if ($validation->run()) {
            $pengajuan_model->save();
			$this->session->set_flashdata('msg_success', 'Data sudah tersimpan');
			redirect('jurusan/guru/list_pengajuan');
        }

		$data['current_user'] = $this->auth_model->current_user();
        $this->load->view("jurusan/guru/input_pengajuan", $data);
		// $this->load->model("pengajuan_model");
		// $id = $this->id = uniqid();
		// $tahun_pelajaran = $this->input->post('tahun_pelajaran');
		// $nama_perusahaan = $this->input->post('nama_perusahaan');
		// $alamat_perusahaan = $this->input->post('alamat_perusahaan');
		// $bidang_usaha = $this->input->post('bidang_usaha');
		// $periode_pkl = $this->input->post('periode_pkl');
		// $kelas = $this->input->post('kelas');
		// $id_user = $this->input->post('id_user');

		// $data = [
		// 	'id' => $id,
		// 	'tahun_pelajaran' => $tahun_pelajaran,
		// 	'nama_perusahaan' => $nama_perusahaan,
		// 	'alamat_perusahaan' => $alamat_perusahaan,
		// 	'bidang_usaha' => $bidang_usaha,
		// 	'periode_pkl' => $periode_pkl,
		// 	'kelas' => $kelas,	
		// 	'id_user' => $id_user			
		// ];

		// $simpan = $this->pengajuan_model->insert($data);

		// if ($simpan) {
		// 	$this->session->set_flashdata('msg_success', 'Data sudah tersimpan');		
		// }else {
		// 	$this->session->set_flashdata('msg_error', 'Data gagal disimpan');
		// }
		// redirect('jurusan/guru/list_pengajuan');

		// $data['current_user'] = $this->auth_model->current_user();
		// $this->load->view("jurusan/guru/input_pengajuan", $data);
	}

	public function tambah()
	{
	}
}
