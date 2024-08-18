<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {
	public function index()
	{
        $data = array(
            'title'=>'Data Absen',
            'absen' => $this->model->absen(),
            'isi' => 'view_absen',
        );
        $this->load->view('layout', $data);
	}

    /* Fungsi Tambah */
    function tambah(){
        $data = array(
            'title' => 'Tambah absen',
            'isi' => 'view_absen_tambah',
        );
        $this->load->view('layout', $data);

    }
    function tambah_proses(){
        $data = array(
            'bulan' => $this->input->post('bulan'),
            'nip' => $this->input->post('nip'),
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nama_jabatan' => $this->input->post('nama_jabatan'),
            'hadir' => $this->input->post('hadir'),
            'sakit' => $this->input->post('sakit'),
            'alpha' => $this->input->post('alpha'),
        );
        $this->db->insert('absen', $data);
        redirect('absen');
    }
    
    /* Fungsi Edit */
    function ubah($id_absen){
        $data = array(
             'title' => 'Ubah absen',
             'absen'=> $this->model->ubah_absen($id_absen),
             'isi' => 'view_absen_ubah',
         );
        $this->load->view('layout', $data);
    }

    function ubah_proses(){
        $data = array(
            'bulan' => $this->input->post('bulan'),
            'nip' => $this->input->post('nip'),
            'nama_karyawan' => $this->input->post('nama_karyawan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'nama_jabatan' => $this->input->post('nama_jabatan'),
            'hadir' => $this->input->post('hadir'),
            'sakit' => $this->input->post('sakit'),
            'alpha' => $this->input->post('alpha'),
        );
        $this->db->where('id_absen',$this->input->post('id_absen'));
        $this->db->update('absen', $data);
        redirect('absen');
    }

    /* Fungsi Hapus */
    function hapus($id_absen) {
        $this->db->delete('absen', array('id_absen'=>$id_absen));
        redirect('absen');
    }
}