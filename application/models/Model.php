<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    // Karyawan
    function karyawan() {
        $data = $this->db->get('karyawan');
        return $data->result_array();
    }

    function karyawan_ubah($id_karyawan) {
        $this->db->where('id_karyawan',$id_karyawan);
        $data = $this->db->get('karyawan');
        return $data->result_array();
    }

    // Jabatan
    function jabatan() {
        $data = $this->db->get('jabatan');
        return $data->result_array();
    }

    function ubah_jabatan($id_jabatan) {
        $this->db->where('id_jabatan',$id_jabatan);
        $data = $this->db->get('jabatan');
        return $data->result_array();
    }

    // User
    function user() {
        $data = $this->db->get('user');
        return $data->result_array();
    }

    function ubah_user($id_user) {
        $this->db->where('id_user',$id_user);
        $data = $this->db->get('user');
        return $data->result_array();
    }

    // Absensi
    function absen() {
        $data = $this->db->get('absen');
        return $data->result_array();
    }

    function ubah_absen($id_absen) {
        $this->db->where('id_absen',$id_absen);
        $data = $this->db->get('absen');
        return $data->result_array();
    }

    // Penggajian
    function penggajian() {
        $data = $this->db->query(" SELECT karyawan.nip, karyawan.nama_karyawan, jabatan.nama_jabatan, jabatan.gaji_pokok, jabatan.transport, jabatan.uang_makan, absen.alpha, potongan_gaji.jml_potongan AS potongan_per_alpha
            FROM karyawan 
            INNER JOIN absen ON absen.nip = karyawan.nip
            INNER JOIN jabatan ON jabatan.nama_jabatan = karyawan.jabatan
            LEFT JOIN potongan_gaji ON potongan_gaji.potongan = 'Alpha' -- Assuming 'Alpha' refers to absence
            ORDER BY karyawan.nama_karyawan ASC");
        return $data->result_array();
    }
    
    // Potongan Gaji
    function potongan_gaji() {
        $data = $this->db->get('potongan_gaji');
        return $data->result_array();
    }

    function ubah_potongan_gaji($id) {
        $this->db->where('id',$id);
        $data = $this->db->get('potongan_gaji');
        return $data->result_array();
    }

    // Login
    function cek_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }
}