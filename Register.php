<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_account');
        $this->load->helper(['url','form']);
    }

    public function index(){
        $this->form_validation->set_rules('name','Nama','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password_conf','Konfirmasi','required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('account/v_register');
        } else {
            $data = [
                'nama' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            ];
            $this->m_account->daftar($data);
            $this->load->view('account/v_success', ['message'=>'Pendaftaran berhasil']);
        }
    }
}
