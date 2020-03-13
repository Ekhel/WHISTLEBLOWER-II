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
  // End CRUD Distrik


  // CRUD Kampung
  public function kampung()
  {
    $data['title'] = 'Kampung';
    $data['kampung'] = $this->M_datamaster->kampung();

    $this->template->load('backend_site','kampung/r-kampung',$data);
  }
  // End CRUD Kampung
}
