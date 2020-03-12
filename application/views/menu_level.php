<?php if ($this->session->userdata('level')=='1') {?>

<div class="left-custom-menu-adp-wrap">
    <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="<?php echo base_url()?>home" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Master</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>master/klasifikasi" class="dropdown-item">Klasifikasi</a>
                <a href="#" class="dropdown-item">Kategori</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-envelope-o"></i> <span class="mini-dn">Surat</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>suratmasuk" class="dropdown-item">Masuk</a>
                <a href="<?php echo base_url()?>suratkeluar" class="dropdown-item">Keluar</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-film"></i> <span class="mini-dn">Galeri File</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="#" class="dropdown-item">Masuk</a>
                <a href="#" class="dropdown-item">Keluar</a>
            </div>
        </li>

        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Pengguna</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="#" class="dropdown-item">Level</a>
                <a href="#" class="dropdown-item">Akun</a>
            </div>
        </li>

    </ul>
</div>

<?php }
elseif ($this->session->userdata('level')=='2'){?>
  <div class="left-custom-menu-adp-wrap">
      <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="<?php echo base_url()?>Home/beranda/1" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
        </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Registrasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>Periksa" class="dropdown-item">Periksa</a>
              </div>
          </li>
      </ul>
  </div>
<?php }

elseif($this->session->userdata('level')=='4'){?>
  <div class="left-custom-menu-adp-wrap">
      <ul class="nav navbar-nav left-sidebar-menu-pro">
          <li class="nav-item">
              <a href="<?php echo base_url()?>Home/beranda/1" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
          </li>
          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Laboratorium</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
              <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                  <a href="<?php echo base_url()?>Lab" class="dropdown-item">Jenis Pemeriksaan</a>
                  <a href="<?php echo base_url()?>Lab/pasien_periksa_lab" class="dropdown-item">Periksa Lab</a>
              </div>
          </li>
      </ul>
  </div>
<?php }
?>
