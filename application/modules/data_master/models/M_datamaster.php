<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datamaster extends CI_Model{
  function create_distrik($data)
  {
    $this->db->insert('tb_distrik',$data);
  }
  function update_distrik($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function delete_distrik($where = 0)
  {
    $hapus_kampung = $this->db->get_where('tb_kampung',['id_distrik'  => $where]);
    if($hapus_kampung->num_rows() > 1){
      $this->db->delete('tb_kampung', array('id_distrik' => $where));
    }
    $this->db->delete('tb_distrik', array('id_distrik' => $where));
  }

  function kampung()
  {
    $query = $this->db->query("SELECT * FROM tb_kampung
    LEFT JOIN tb_distrik ON tb_kampung.id_distrik = tb_distrik.id_distrik");

    return $query->result();
  }

  function create_kampung($data)
  {
    $this->db->insert('tb_kampung',$data);
  }

  function update_kampung($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function delete_kampung($where = 0)
  {
    $this->db->delete('tb_kampung', array('id_kampung' => $where));
  }
}
