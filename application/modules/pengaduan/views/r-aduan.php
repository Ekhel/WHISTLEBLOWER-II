<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="breadcome-heading">

                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <ul class="breadcome-menu">
                            <li><a href="#">Pengaduan</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Aduan Masuk</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
      <div class="sparkline8-list shadow-reset mg-tb-30">
          <div class="sparkline8-hd">
              <div class="main-sparkline8-hd">
                  <h1><i class="fa fa-bell-o"></i> Aduan Masuk</h1>
                  <div class="sparkline8-outline-icon">
                      <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                      <span><i class="fa fa-wrench"></i></span>
                      <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                  </div>
              </div>
          </div>
          <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
              <?php foreach($aduan as $item){ ?>
              <div class="comment-phara">
                  <div class="comment-adminpr">
                      <a class="dashtwo-messsage-title" href="#"><?php echo $item->nama ?>
                        <?php if($item->read == 'false'): ?>
                          <text class="badge badge-success"><i class="fa fa-check-o"></i> Read </text>
                        <?php endif ?>
                      </a>
                      <p class="comment-content"><?php echo $item->permasalahan ?></p>
                  </div>
                  <div class="admin-comment-month">
                      <p class="comment-clock"><i class="fa fa-clock-o"></i> <?php echo $item->date_created ?></p>

                      <br/>

                      <a href="#" class="btn btn-xs btn-default" title="tandai sudah di baca"><i class="fa fa-check"></i></a>
                      <a href="<?php echo base_url()?>pengaduan/detail_aduan/<?php echo $item->id_aduan ?>" class="btn btn-xs btn-default" title="Detail Aduan"><i class="fa fa-list"></i></a>
                      <a href="#" class="btn btn-xs btn-default" title="Lanjutkan ke Pemeriksa"><i class="fa fa-bookmark"></i></a>
                      <a href="#" class="btn btn-xs btn-default" title="Hapus Aduan"><i class="fa fa-trash"></i></a>
                      <a href="#" class="btn btn-xs btn-default" title="Edit Aduan"><i class="fa fa-edit"></i></a>
                      <!--<button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo1">...</button>
                      <ul id="adminpro-demo1" class="comment-action-st collapse">
                          <li><a href="#">Detail Aduan</a>
                          </li>
                          <li><a href="#">Konfirmasi</a>
                          </li>
                          <li><a href="#">Lanjutkan Ke Pemeriksa</a>
                          </li>
                          <li><a href="#">Hapus Aduan</a>
                          </li>
                          <li><a href="#">Edit Aduan</a>
                          </li>
                      </ul>!-->
                  </div>
              </div>
            <?php } ?>
          </div>
      </div>
    </div>
  </div>
</div>
