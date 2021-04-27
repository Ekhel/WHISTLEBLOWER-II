<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model{
    function hitung_aduan() {
        $query = $this->db->query("SELECT COUNT(id_aduan) as jumlah_aduan FROM tb_aduan ");
        return $query->row_array();
    }

    function hitung_aduan_pemeriksa(){
        $query = $this->db->query("SELECT COUNT(id_aduan) as jumlah_aduan_pemeriksa FROM tb_aduan WHERE status_pemeriksa = '1' ");
        return $query->row_array();
    }

    function hitung_user_registrasi(){
        $query = $this->db->query("SELECT COUNT(id_user) as jumlah_user FROM tb_user WHERE tb_user.level = '3' ");
        return $query->row_array();
    }
}