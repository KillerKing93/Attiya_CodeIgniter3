<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {
    public function index()
    {
        $data = array(
            'title' => 'Dasboard',
            'isi' => 'view_dasboard',
        );

        $karyawan = $this->db->query("SELECT * FROM karyawan");
        $data['karyawan']=$karyawan->num_rows();

        $admin = $this->db->query("SELECT * FROM karyawan WHERE jabatan = 'admin'");
        $data['admin']=$admin->num_rows();

        $jabatan = $this->db->query("SELECT * FROM jabatan");
        $data['jabatan']=$jabatan->num_rows();

        $this->load->view('layout', $data);
    }


}