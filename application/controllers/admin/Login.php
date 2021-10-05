<?php 

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view("admin/login_page.php"); 
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }
}