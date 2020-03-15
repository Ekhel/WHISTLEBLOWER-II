<?php
$this->load->model('pengaduan/M_pengaduan');
$notif_aduan = $this->M_pengaduan->notif_aduan();
$data_aduan  = $this->M_pengaduan->data_notif_aduan();

foreach($notif_aduan as $i){
  $signal_aduan = $i->notread;
}
?>

<?php if ($signal_aduan === '0'): ?>
<li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-bell" aria-hidden="true"></i>
  </a>
  <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated flipInX">
    <text class="text-center"><strong>Belum ada Aduan Terbaru</strong></text>
  </div>
<?php
else:?>
</li>
  <li class="nav-item">
  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="fa fa-bell-o" aria-hidden="true"></i>
    <span class="badge badge-info"><?php echo $signal_aduan ?></span>
  </a>
    <div role="menu" class="notification-author dropdown-menu animated flipInX">
        <div class="notification-single-top">
            <h1>Aduan Masuk</h1>
        </div>
        <ul class="notification-menu">
            <?php foreach($data_aduan as $a){?>
            <li>
              <a href="<?php echo base_url()?>pengaduan/detail_aduan/<?php echo $a->id_aduan ?>">
                  <div class="notification-icon">
                      <img src="<?php echo base_url()?>assets/backend/img/person.png" width="90px" alt="">
                  </div>
                  <div class="notification-content">
                      <p> <strong><?php echo $a->nama ?></strong>  <?php echo $a->no_hp ?> <br/> <?php echo $a->date_created ?></p>

                  </div>
              </a>
            </li>

            <?php } ?>
        </ul>
        <div class="notification-view">
            <a href="<?php echo base_url()?>pengaduan/aduan">Lihat Semua Aduan</a>
        </div>
    </div>
</li>
<?php endif ?>
