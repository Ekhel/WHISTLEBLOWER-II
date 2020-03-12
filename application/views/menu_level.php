<?php if ($this->session->userdata('level')=='1') {?>

<div class="left-custom-menu-adp-wrap">
    <ul class="nav navbar-nav left-sidebar-menu-pro">
        <li class="nav-item">
            <a href="<?php echo base_url()?>Home/beranda/1" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Beranda</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-database"></i> <span class="mini-dn">Data Induk</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Data_induk/agama" class="dropdown-item">Agama</a>
                <a href="<?php echo base_url()?>Data_induk/jabatan" class="dropdown-item">Jabatan</a>
                <a href="<?php echo base_url()?>Data_induk/departemen" class="dropdown-item">Departemen</a>
                <a href="<?php echo base_url()?>Data_induk/Spesialis" class="dropdown-item">Spesialis</a>
                <a href="<?php echo base_url()?>Data_induk/Poliklinik" class="dropdown-item">Poliklinik</a>
                <a href="<?php echo base_url()?>Data_induk/Pegawai" class="dropdown-item">Pegawai</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-book"></i> <span class="mini-dn">Data Master</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Dokter" class="dropdown-item">Dokter</a>
                <a href="<?php echo base_url()?>Jadwal" class="dropdown-item">Jadwal Praktek</a>
                <!--<a href="<?php echo base_url()?>Dokter" class="dropdown-item">Tindakan</a>
                <a href="<?php echo base_url()?>Dokter" class="dropdown-item">Rekam Medis</a>!-->
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-pie-chart"></i> <span class="mini-dn">Registrasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Pasien" class="dropdown-item">Pasien</a>
                <a href="<?php echo base_url()?>Periksa" class="dropdown-item">Periksa</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-flask"></i> <span class="mini-dn">Instalasi Farmasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Apotik/Satuan" class="dropdown-item">Satuan</a>
                <a href="<?php echo base_url()?>Apotik" class="dropdown-item">Obat & Alkes</a>
                <a href="<?php echo base_url()?>Apotik/supplier" class="dropdown-item">Supplier</a>
                <a href="#" class="dropdown-item">Pengembalian</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-bar-chart-o"></i> <span class="mini-dn">Laboratorium</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Lab" class="dropdown-item">Jenis Pemeriksaan</a>
                <a href="<?php echo base_url()?>Lab/pasien_periksa_lab" class="dropdown-item">Periksa Lab</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-folder"></i> <span class="mini-dn">Laporan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="#" class="dropdown-item">Pasien</a>
                <a href="#" class="dropdown-item">Pemeriksaan</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Pengguna</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Users/level_user" class="dropdown-item">Level Akses</a>
                <a href="<?php echo base_url()?>Users" class="dropdown-item">Pengguna</a>
            </div>
        </li>
        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-cogs"></i> <span class="mini-dn">Pengaturan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                <a href="<?php echo base_url()?>Settings/update/1" class="dropdown-item">Profil</a>

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
