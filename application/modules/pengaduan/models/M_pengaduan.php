<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaduan extends CI_Model{

    function aduan()
    {
        $query = $this->db->query("SELECT * FROM tb_aduan
        LEFT JOIN tb_distrik ON tb_aduan.id_distrik = tb_distrik.id_distrik
        ORDER BY tb_aduan.date_created DESC ");

        return $query->result();
    }

    function aduan_pemeriksa(){
        $query = $this->db->query("SELECT * FROM tb_aduan
        LEFT JOIN tb_distrik ON tb_aduan.id_distrik = tb_distrik.id_distrik
        WHERE status_pemeriksa = 1
        ORDER BY tb_aduan.date_created DESC ");
        
        return $query->result();
    }

    function detail_aduan($id_aduan)
    {
        $query = $this->db->query("SELECT * FROM tb_aduan
        LEFT JOIN tb_distrik ON tb_aduan.id_distrik = tb_distrik.id_distrik
        WHERE tb_aduan.id_aduan = '$id_aduan' ");

        return $query->row_array();
    }

    function status_aduan($id_aduan){
        $query = $this->db->query("SELECT
        tb_keterangan_status.status as status_aduan,
        tanggal,
        tb_status.id_ket_status as id_ket_status,
        ket,
        icon
        FROM tb_status
        LEFT JOIN tb_keterangan_status ON tb_status.id_ket_status = tb_keterangan_status.id_ket_status
        WHERE tb_status.id_aduan = '$id_aduan' ");

        return $query->result();
    }

    function create_aduan($data)
    {
        $this->db->insert('tb_aduan',$data);
    }

    function notif_aduan()
    {
        $query = $this->db->query("SELECT
        COUNT(id_aduan) as notread
        FROM tb_aduan
        WHERE tb_aduan.status_read = 0 ");

        return $query->result();
    }

    function data_notif_aduan()
    {
        $query = $this->db->query("SELECT
        id_aduan,
        nama,
        no_hp,
        date_created,
        email
        FROM tb_aduan
        WHERE tb_aduan.status_read = 0
        ORDER BY date_created DESC ");

        return $query->result();
    }

    function update_read($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function update_pemeriksa($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function update_administrasi($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function create_status($data_status)
    {
        $this->db->insert('tb_status',$data_status);
    }

}
