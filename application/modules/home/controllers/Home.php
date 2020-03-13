<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MX_Controller{
  function  __construct()
  {
      parent::__construct();
      $this->load->library('form_validation');
      $this->load->helper('form');
  }
  public function index()
  {
    $data['title'] = 'S P E | Beranda';
    $this->template->load('frontend_site','r-home',$data);
  }
}
