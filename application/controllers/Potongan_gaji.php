<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Potongan_gaji extends CI_Controller {
	public function index()
	{
        $data = array(
            'title' => 'Data Potongan Gaji',
            'potongan_gaji' => $this->model->potongan_gaji(),
            'isi' => 'view_potongan_gaji',
        );
        $this->load->view('layout', $data);
	}
    /* Funsi Tambah */
    function tambah(){
        $data = array(
            'title' => 'Tambah Potongan Gaji',
            'isi' => 'view_potongan_gaji_tambah',
        );
        $this->load->view('layout', $data);

    }
    function tambah_proses(){
        $data = array(
            'potongan' =>$this->input->post('potongan'),
            'jml_potongan' => $this->input->post('jml_potongan'),
        );
        $this->db->insert('potongan_gaji', $data);
        redirect('potongan_gaji');
    }

    /* Fungsi Edit */
    function ubah($id){
        $data = array(
             'title' => 'Ubah Potongan Gaji',
             'potongan_gaji'=> $this->model->ubah_potongan_gaji($id),
             'isi' =>'view_potongan_gaji_ubah',
         );
        $this->load->view('layout', $data);
    }

    function ubah_proses(){
        $data = array(
            'potongan' =>$this->input->post('potongan'),
            'jml_potongan' => $this->input->post('jml_potongan'),
        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('potongan_gaji', $data);
        redirect('potongan_gaji');
    }

    /* Funsi Hapus */
    function hapus($id) {
        $this->db->delete('potongan_gaji', array('id'=>$id));
        redirect('potongan_gaji');
    }
}