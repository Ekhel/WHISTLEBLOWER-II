<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends MX_Controller{
  function  __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('M_dashboard');
      $this->load->helper('form');
  }
  public function index()
  {
    $data['title'] = 'Dashboard | S P E';
    $data['aduan'] = $this->M_dashboard->hitung_aduan();
    $data['reguser'] = $this->M_dashboard->hitung_user_registrasi();
    $data['aduan_pem'] = $this->M_dashboard->hitung_aduan_pemeriksa();

    
    $this->template->load('backend_site','r-dashboard',$data);
  }
}
