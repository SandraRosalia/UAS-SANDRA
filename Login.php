<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('simple_login'); // 🔥 WAJIB
    }

    public function index() {  
        $username = $this->input->post('username');  
        $password = $this->input->post('password');  

        $this->form_validation->set_rules('username','Username','required');  
        $this->form_validation->set_rules('password','Password','required');  

        if($this->form_validation->run() == TRUE) {  
            $this->simple_login->login(
                $username,
                $password,
                site_url('dashboard'), // sukses
                site_url('login')      // gagal
            );  
        }  

        $this->load->view('account/v_login');  
    }  

    public function logout(){  
        $this->simple_login->logout();  
    }                 
}

