<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	public function index()
	{
        $data = array(
            'title' => 'Data Karyawan',
            'karyawan' => $this->model->karyawan(),
            'isi' => 'view_karyawan',
        );
        $this->load->view('layout', $data);
	}
    /* Funsi Tambah */
    function tambah(){
        $data = array(
            'title' => 'Tambah Karyawan',
            'jabatan' => $this->model->jabatan(),
            'isi' => 'view_karyawan_tambah',
        );
        $this->load->view('layout', $data);

    }
    function tambah_proses(){
        $data = array(
            'nip' =>$this->input->post('nip'),
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'jabatan' => $this->input->post('jabatan'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
        );
        $this->db->insert('karyawan', $data);
        redirect('karyawan');
    }

    /* Fungsi Edit */
    function ubah($id_karyawan){
        $data = array(
             'title' => 'Ubah Karyawan',
             'karyawan'=> $this->model->karyawan_ubah($id_karyawan),
             'isi' =>'view_karyawan_ubah',
         );
        $this->load->view('layout', $data);
    }

    function ubah_proses(){
        $data = array(
            'nip' =>$this->input->post('nip'),
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'jabatan' => $this->input->post('jabatan'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
        );
        $this->db->where('id_karyawan',$this->input->post('id_karyawan'));
        $this->db->update('karyawan', $data);
        redirect('karyawan');
    }

    /* Funsi Hapus */
    function hapus($id_karyawan) {
        $this->db->delete('karyawan', array('id_karyawan'=>$id_karyawan));
        redirect('karyawan');
    }
}