<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
        $data = array(
            'title'=> 'Data User',
            'user' => $this->model->user(),
            'isi'=> 'view_user',
        );
        $this->load->view('layout', $data);
	}
    /* Funsi Tambah */
    function tambah(){
        $data = array(
            'title' => 'Tambah User',
            'isi' => 'view_user_tambah',
        );
        $this->load->view('layout', $data);

    }
    function tambah_proses(){
        $data = array(
            'nama' =>$this->input->post('nama'),
            'username' =>$this->input->post('username'),
            'password' =>$this->input->post('password'),

        );
        $this->db->insert('user', $data);
        redirect('user');
    }

    /* Fungsi Edit */
    function ubah($id_user){
        $data = array(
             'title' => 'Ubah User',
             'user'=> $this->model->ubah_user($id_user),
             'isi' => 'view_user_ubah',
         );
        $this->load->view('layout', $data);
    }

    function ubah_proses(){
        $data = array(
            'nama' =>$this->input->post('nama'),
            'username' =>$this->input->post('username'),
            'password' =>$this->input->post('password'),
        );
        $this->db->where('id_user',$this->input->post('id_user'));
        $this->db->update('user', $data);
        redirect('user');
    }

    /* Funsi Hapus */
    function hapus($id_user) {
        $this->db->delete('user', array('id_user'=>$id_user));
        redirect('user');
    }
}