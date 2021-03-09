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
        $this->template->load('frontend_site','r-pengaduan',$data);
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

    public function aduan()
    {
        $data['title'] = 'Aduan Masuk';
        $data['aduan'] = $this->M_pengaduan->aduan();

        $this->template->load('backend_site','r-aduan',$data);
    }

    public function detail_aduan($id_aduan)
    {
        $baca = 1;
        $user = $this->session->userdata('nama');
        $tanggal = date('Y-m-d');
        $data['title'] = 'Detail Pengaduan';
        $read = $this->M_pengaduan->detail_aduan($id_aduan);

        if ($read['status_read'] === '0'){
            $data = array('status_read' => $baca);
            $where = array('id_aduan' => $id_aduan);
                
            $data_status = array(
                'id_aduan'      => $id_aduan,
                'user'          => $user,
                'id_ket_status' => 1,
                'tanggal'       => $tanggal
            );
    
            $this->M_pengaduan->update_read($where,$data,'tb_aduan');
            $this->M_pengaduan->create_status($data_status);
        }

        $data['detail'] = $this->M_pengaduan->detail_aduan($id_aduan);
        $data['status'] = $this->M_pengaduan->status_aduan($id_aduan);
        $this->template->load('backend_site','detail-aduan',$data);
    }

    public function detail_aduan_pemeriksa($id_aduan){
        $data['title'] = 'Detail Aduan';
        $data['detail'] = $this->M_pengaduan->detail_aduan($id_aduan);
        $data['status'] = $this->M_pengaduan->status_aduan($id_aduan);
        $this->template->load('backend_site','pemeriksa/detail-aduan',$data);

    }

    function teruskan_pemeriksa(){
        $id_aduan = $this->input->post('id_aduan');
        $user = $this->session->userdata('nama');
        $tanggal = date('Y-m-d');
        $id_ket_status = 2;
        $pemeriksa = 1;

        $data_status = array(
            'id_aduan'  => $id_aduan,
            'user'      => $user,
            'id_ket_status' => $id_ket_status,
            'tanggal'   => $tanggal
        );

        $data = array('status_pemeriksa' => $pemeriksa);
        $where = array('id_aduan' => $id_aduan);

        if ($data_status) {
            $this->M_pengaduan->update_pemeriksa($where,$data,'tb_aduan');
            $this->M_pengaduan->create_status($data_status);
            $this->session->set_flashdata("teruskan_pemeriksa","
            <div class='alert alert-success fade in'>
                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                <strong>Success !</strong> Anda Telah Meneruskan Pengaduan ini Ke Pemeriksa!
            </div>");

            redirect('pengaduan/detail_aduan/'.$id_aduan.'');
        }
    }

    // function update_view()
    // {
    //     $id_aduan = $this->input->post('id_aduan');
    //     $status_read = $this->input->post('status_read');
    //     $id_ket_status = 1;
    //     $tanggal = date('Y-m-d');

    //     $data = array(
    //         'id_surat'    => $id_surat,
    //         'status_read' => $status_read
    //     );

    //     $data_status = array(
    //         'id_aduan'    => $id_aduan,
    //         'id_ket_status'=> $id_ket_status,
    //         'tanggal'     => $tanggal
    //     );

    //     $where = array('id_aduan' => $id_aduan);

    //     $this->M_pengaduan->update_baca($where,$data, 'tb_pengaduan');
    //     $this->M_pengaduan->create_status($data_status);
    //     redirect('surat/surat_masuk');
    // }

    function aduan_pemeriksa(){
        $data['title'] = 'Aduan Masuk';
        $data['aduan'] = $this->M_pengaduan->aduan_pemeriksa();

        $this->template->load('backend_site','pemeriksa/r-aduan',$data);
    }

    function kembali_aduan(){

        $id_aduan = $this->input->post('id_aduan');
        $keterangan = $this->input->post('ket');
        $user = $this->session->userdata('nama');
        $tanggal = date('Y-m-d');
        $id_ket_status = 3;
        $pemeriksa = 2;

        $data_status = array(
            'id_aduan'  => $id_aduan,
            'user'      => $user,
            'id_ket_status' => $id_ket_status,
            'tanggal'   => $tanggal,
            'ket'       => $keterangan
        );

        $data = array('status_pemeriksa' => $pemeriksa);
        $where = array('id_aduan' => $id_aduan);

        if ($data_status) {
            $this->M_pengaduan->update_pemeriksa($where,$data,'tb_aduan');
            $this->M_pengaduan->create_status($data_status);
            $this->session->set_flashdata("teruskan_pemeriksa","
            <div class='alert alert-success fade in'>
                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                <strong>Success !</strong> Anda Telah Meneruskan Pengaduan ini Ke Pemeriksa!
            </div>");

            redirect('pengaduan/detail_aduan_pemeriksa/'.$id_aduan.'');
        }
    }

    function teruskan_administrasi(){
        $id_aduan = $this->input->post('id_aduan');
        $user = $this->session->userdata('nama');
        $tanggal = date('Y-m-d');
        $id_ket_status = 4;
        $administrasi = 1;

        $data_status = array(
            'id_aduan'  => $id_aduan,
            'user'      => $user,
            'id_ket_status' => $id_ket_status,
            'tanggal'   => $tanggal,
            'ket'       => $keterangan
        );

        $data = array('status_administrasi' => $administrasi);
        $where = array('id_aduan' => $id_aduan);

        if ($data_status) {
            $this->M_pengaduan->update_administrasi($where,$data,'tb_aduan');
            $this->M_pengaduan->create_status($data_status);
            $this->session->set_flashdata("teruskan_pemeriksa","
            <div class='alert alert-success fade in'>
                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                <strong>Success !</strong> Anda Telah Meneruskan Pengaduan ini Ke Pemeriksa!
            </div>");

            redirect('pengaduan/detail_aduan_pemeriksa/'.$id_aduan.'');
        }
    }
}
