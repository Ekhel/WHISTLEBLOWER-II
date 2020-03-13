<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaduan extends CI_Model{
  function create_aduan($data)
  {
    $this->db->insert('tb_aduan',$data);
  }
}
