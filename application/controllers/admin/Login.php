<?php 

class Login extends CI_Controller
{

    public function index()
	{
		$this->load->model("admin_model");  
        $this->load->library('form_validation');

        $rules = $this->admin_model->rules();
		$this->form_validation->set_rules($rules);

        if($this->form_validation->run() == FALSE){
			return $this->load->view('admin/login_page.php');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->admin_model->doLogin($username, $password)){
			redirect('admin');
		} else {
			
		}

		$this->load->view('admin/login_page.php');
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}