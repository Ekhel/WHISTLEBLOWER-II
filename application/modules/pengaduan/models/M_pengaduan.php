<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaduan extends CI_Model{

  function aduan()
  {
    $query = $this->db->query("SELECT * FROM tb_aduan
    LEFT JOIN tb_distrik ON tb_aduan.id_distrik = tb_distrik.id_distrik
    LEFT JOIN tb_kampung ON tb_aduan.id_kampung = tb_kampung.id_kampung
    ORDER BY tb_aduan.date_created DESC ");

    return $query->result();
  }
  function detail_aduan($id_aduan)
  {
    $query = $this->db->query("SELECT * FROM tb_aduan
    LEFT JOIN tb_distrik ON tb_aduan.id_distrik = tb_distrik.id_distrik
    LEFT JOIN tb_kampung ON tb_aduan.id_kampung = tb_kampung.id_kampung
    WHERE tb_aduan.id_aduan = '$id_aduan' ");

    return $query->row_array();
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
    WHERE tb_aduan.read = 'false' ");

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
    WHERE tb_aduan.read = 'false'
    ORDER BY date_created DESC ");

    return $query->result();
  }

}
