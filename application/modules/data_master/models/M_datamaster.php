<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datamaster extends CI_Model{
  function create_distrik($data)
  {
    $this->db->insert('tb_distrik',$data);
  }
  function kampung()
  {
    $query = $this->db->query("SELECT * FROM tb_kampung
    LEFT JOIN tb_distrik ON tb_kampung.id_distrik = tb_distrik.id_distrik");

    return $query->result();
  }
}
