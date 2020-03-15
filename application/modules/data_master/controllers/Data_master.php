<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_master extends MX_Controller{
  function  __construct()
  {
      parent::__construct();
      $this->load->model('M_datamaster');
      $this->load->library('form_validation');
      $this->load->helper('form');
  }

  // CRUD Distrik
  public function distrik()
  {
    $data['title'] = 'Distrik';
    $data['distrik'] = $this->db->query("SELECT * FROM tb_distrik")->result();
    $this->template->load('backend_site','distrik/r-distrik',$data);
  }

  function create_distrik_proses()
  {
    $distrik = $this->input->post('distrik');
    $kadis = $this->input->post('kadis');
    $sekdis = $this->input->post('sekdis');
    $no_kontak = $this->input->post('no_kontak');

    $data = array(
      'distrik'     => $distrik,
      'kadis'       => $kadis,
      'sekdis'      => $sekdis,
      'no_kontak'   => $no_kontak
    );

    $this->M_datamaster->create_distrik($data);
    $this->session->set_flashdata("create","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Berhasil Menambah Data!
							</div>");
    redirect('data_master/distrik');
  }

  function update_distrik_proses()
  {
    $id_distrik = $this->input->post('id_distrik');
    $distrik = $this->input->post('distrik');
    $kadis = $this->input->post('kadis');
    $sekdis = $this->input->post('sekdis');
    $no_kontak = $this->input->post('no_kontak');

    $data = array(
      'id_distrik'  => $id_distrik,
      'distrik'     => $distrik,
      'kadis'       => $kadis,
      'sekdis'      => $sekdis,
      'no_kontak'   => $no_kontak
    );

    $where = array(
      'id_distrik'  => $id_distrik
    );

    $this->M_datamaster->update_distrik($where,$data,'tb_distrik');
    $this->session->set_flashdata("update","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Berhasil Mengupdate Data!
							</div>");
    redirect('data_master/distrik');
  }

  public function delete_distrik($id_distrik)
  {
    $data['title'] = 'Hapus Distrik';
    $data['detail'] = $this->db->get_where('tb_distrik', ['id_distrik'  => $id_distrik])->row_array();

    $this->template->load('backend_site','distrik/d-distrik',$data);
  }
  function delete_distrik_proses($id_distrik = 0)
  {
    $id_distrik = $this->input->post('id_distrik');
    $where = array(
      'id_distrik'    => $id_distrik
    );

    $this->M_datamaster->delete_distrik($id_distrik);
    $this->session->set_flashdata("delete","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menghapus Data!
                </div>");
    redirect('data_master/distrik');
  }
  // End CRUD Distrik

  // CRUD Kampung
  public function kampung()
  {
    $data['title'] = 'Kampung';
    $data['kampung'] = $this->M_datamaster->kampung();
    $data['distrik'] = $this->db->query("SELECT * FROM tb_distrik")->result();
    $this->template->load('backend_site','kampung/r-kampung',$data);
  }
  function create_kampung_proses()
  {
    $id_distrik = $this->input->post('id_distrik');
    $kampung = $this->input->post('kampung');
    $kepala_kamp = $this->input->post('kepala_kamp');
    $sekam = $this->input->post('sekam');
    $kontak = $this->input->post('kontak');

    $data = array(
      'id_distrik'    => $id_distrik,
      'kampung'       => $kampung,
      'kepala_kamp'   => $kepala_kamp,
      'sekam'         => $sekam,
      'kontak'        => $kontak
    );

    $this->M_datamaster->create_kampung($data);
    $this->session->set_flashdata("create","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menambah Data!
                </div>");
    redirect('data_master/kampung');
  }

  function update_kampung_proses()
  {
    $id_kampung = $this->input->post('id_kampung');
    $id_distrik = $this->input->post('id_distrik');
    $kampung = $this->input->post('kampung');
    $kepala_kamp = $this->input->post('kepala_kamp');
    $sekam = $this->input->post('sekam');
    $kontak = $this->input->post('kontak');

    $data = array(
      'id_kampung'  => $id_kampung,
      'id_distrik'  => $id_distrik,
      'kampung'     => $kampung,
      'kepala_kamp' => $kepala_kamp,
      'sekam'       => $sekam,
      'kontak'      => $kontak
    );

    $where = array(
      'id_kampung'  => $id_kampung
    );

    $this->M_datamaster->update_kampung($where,$data,'tb_kampung');
    $this->session->set_flashdata("update","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Berhasil Mengupdate Data!
							</div>");
    redirect('data_master/kampung');
  }

  public function delete_kampung($id_kampung)
  {
    $data['title'] = 'Hapus kampung';
    $data['detail'] = $this->db->get_where('tb_kampung', ['id_kampung'  => $id_kampung])->row_array();

    $this->template->load('backend_site','kampung/d-kampung',$data);
  }
  function delete_kampung_proses($id_kampung = 0)
  {
    $id_kampung = $this->input->post('id_kampung');
    $where = array(
      'id_kampung'    => $id_kampung
    );

    $this->M_datamaster->delete_kampung($id_kampung);
    $this->session->set_flashdata("delete","
                <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                    <strong>Success !</strong> Berhasil Menghapus Data!
                </div>");
    redirect('data_master/kampung');
  }
  // End CRUD Kampung
}
