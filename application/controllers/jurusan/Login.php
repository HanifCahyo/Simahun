<?php 

class Login extends CI_Controller
{

    public function index()
	{
		$this->load->model("jurusan_model");  
        $this->load->library('form_validation');

        $rules = $this->jurusan_model->rules();
		$this->form_validation->set_rules($rules);

        if($this->form_validation->run() == FALSE){
			return $this->load->view('jurusan/login_page.php');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->jurusan_model->doLogin($username, $password)){
			redirect('guru');
		} else if ($this->jurusan_model->doLoginSiswa($username, $password)){
			redirect('siswa');
		} else {
            
        }

		$this->load->view('jurusan/login_page.php');
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('jurusan/login'));
    }
	
}