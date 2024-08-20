<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggajian extends CI_Controller {
	public function index()
	{
        $data = array(
            'title'=>'Data Gaji Karyawan',
            'potongan' => $this->model->potongan_gaji(),
            'penggajian' => $this->model->penggajian(),
            'isi' => 'view_penggajian',
        );
        $this->load->view('layout', $data);
	}

}