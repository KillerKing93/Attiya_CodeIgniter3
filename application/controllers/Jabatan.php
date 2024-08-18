<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
	public function index()
	{
        $data = array(
            'title'=>'Data Jabatan',
            'jabatan' => $this->model->jabatan(),
            'isi' => 'view_jabatan',
        );
        $this->load->view('layout', $data);
	}

    /* Fungsi Tambah */
    function tambah(){
        $data = array(
            'title' => 'Tambah Jabatan',
            'isi' => 'view_jabatan_tambah',
        );
        $this->load->view('layout', $data);

    }
    function tambah_proses(){
        $data = array(
            'nama_jabatan' => $this->input->post('nama_jabatan'),
            'gaji_pokok' => $this->input->post('gaji_pokok'),
            'transport' => $this->input->post('transport'),
            'uang_makan' => $this->input->post('uang_makan'),
        );
        $this->db->insert('jabatan', $data);
        redirect('jabatan');
    }
    
    /* Fungsi Edit */
    function ubah($id_jabatan){
        $data = array(
             'title' => 'Ubah Jabatan',
             'jabatan'=> $this->model->ubah_jabatan($id_jabatan),
             'isi' => 'view_jabatan_ubah',
         );
        $this->load->view('layout', $data);
    }

    function ubah_proses(){
        $data = array(
            'nama_jabatan' => $this->input->post('nama_jabatan'),
            'gaji_pokok' => $this->input->post('gaji_pokok'),
            'transport' => $this->input->post('transport'),
            'uang_makan' => $this->input->post('uang_makan'),
        );
        $this->db->where('id_jabatan',$this->input->post('id_jabatan'));
        $this->db->update('jabatan', $data);
        redirect('jabatan');
    }

    /* Fungsi Hapus */
    function hapus($id_jabatan) {
        $this->db->delete('jabatan', array('id_jabatan'=>$id_jabatan));
        redirect('jabatan');
    }
}