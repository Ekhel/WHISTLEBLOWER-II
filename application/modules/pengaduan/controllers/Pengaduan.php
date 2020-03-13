<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengaduan extends MX_Controller{
  function  __construct()
  {
      parent::__construct();
      $this->load->model('M_pengaduan');
      $this->load->library('form_validation');
      $this->load->helper('form');
  }
  public function index()
  {
    $data['title'] = 'Form Pengaduan';
    $this->template->load('frontend_site','r-form-pengaduan',$data);
  }
  function create_aduan()
  {
    $nama = $this->input->post('nama');
    $no_hp = $this->input->post('no_hp');
    $email = $this->input->post('email');
    $id_kategori = $this->input->post('id_kategori');
    $id_distrik = $this->input->post('id_distrik');
    $id_kampung = $this->input->post('id_kampung');
    $permasalahan = $this->input->post('permasalahan');
    $terlapor = $this->input->post('terlapor');

    $data = array(
      'nama'        => $nama,
      'no_hp'       => $no_hp,
      'email'       => $email,
      'id_kategori' => $id_kategori,
      'id_distrik'  => $id_distrik,
      'id_kampung'  => $id_kampung,
      'permasalahan'=> $permasalahan,
      'terlapor'    => $terlapor
    );

    $this->M_pengaduan->create_aduan($data);
    $this->session->set_flashdata("create","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Berhasil Mengirim Data!
							</div>");
    redirect('pengaduan');
  }
}
