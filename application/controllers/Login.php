<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
        $data = array(
            'title'=> 'Login',
        );
        $this->load->view('view_login', $data);
	}

    function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek_login = $this->model->cek_login($username, $password);

        if(!empty($cek_login)){
            $this->session->set_userdata('username', $cek_login->username);
            $this->session->set_userdata('nama', $cek_login->nama);
            $this->session->set_userdata('tipe_user', $cek_login->tipe_user);
            redirect('dasboard');
        }else{
            redirect('login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}