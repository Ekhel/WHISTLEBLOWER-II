<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends MX_Controller{
  function  __construct()
  {
      parent::__construct();
      $this->load->model('M_auth');
      $this->load->library('form_validation');
      $this->load->helper('form');
  }

  public function index()
  {
    $data['title'] = 'Login | AMS';
    $this->load->view('login',$data);
  }
  function login_proses()
  {
		$nama = $this->input->post('nama');
		$sandi = md5($this->input->post('sandi'));
		if (isset($nama, $sandi)) {
			//cek user dan sandi di database
			if($this->M_auth->cek($nama, $sandi) == TRUE){
				$admin = $this->M_auth->getAdmin($nama, $sandi);
				$data['nama'] = $nama;
				$data['sandi'] = $sandi;
				$data['id_admin'] = $admin->id_admin;
				$data['level'] = $admin->level;
        $data['id_user'] = $admin->id_user;
				$data['nama_lengkap'] = $admin->nama_lengkap;
				$data['login'] = TRUE;
				$this->session->set_userdata($data);
        if ($this->session->userdata('level')=='1'){
				redirect('Home');
			  }
  			elseif ($this->session->userdata('level')=='2'){
          //helper_log("login", "Login ke applikasi");
  		  redirect('home');
  			}
			}
			else {
				$this->session->set_flashdata('message', 'Nama dan sandi anda salah');
				redirect('auth');
			}
		}
		else {
			redirect('auth');
		}
	}

  function cek_login($user_level = ""){
		$status_login = $this->session->userdata('login');
		if (!isset($status_login) || $status_login != TRUE){
			redirect('auth');
		}
		else {
      $this->nama = $this->session->userdata('nama');
      $this->global ['nama'] = $this->nama;
			if ($user_level) {
				if (is_array($user_level)) { //cek apakah $user_level merupakan jenis array
					if (!in_array($this->session->userdata('level'), $user_level)) {//cek apakah user_level yg login masuk dalam array $user_level
						redirect('home');
					}
				}
				else {
					if ($this->session->userdata('level') != $user_level){
						redirect('auth');
					}
				}
			}
		}
	}

  function logout(){
		$this->session->sess_destroy();
    //helper_log("logout", "Logout dari Applikasi");
		redirect('auth', 'refresh');
	}
}
