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
                            <li><a href="<?php echo base_url()?>pengaduan/aduan">Aduan Masuk</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Detail Aduan</span>
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
    <div class="col-lg-10">
      <div id="viewmail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message">
        <div class="view-mail-wrap">
            <div class="mail-title">
                <h2>PENGADUAN !!!</h2>
                <div class="view-mail-action">
                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                    <a class="compose-draft-bt" href="javascript:window.print()"><i class="fa fa-print"></i> Print</a>
                    <a class="compose-discard-bt" href="#"><i class="fa fa-trash-o"></i> Trash</a>
                </div>
            </div>
            <!--<div class="main-title-hd">
                <h3>Subject: <span class="main-title-view">Our Mailing Box system too much advance.</span></h3>
            </div>!-->
            <div class="view-author-mail">
                <span>Dari : <span class="view-mail-email"><?php echo $detail['nama'] ?></span></span>
                <span class="view-mail-date"><?php echo $detail['date_created'] ?></span>
                <br/>
                <span>No Telfon : <?php echo $detail['no_hp'] ?></span>
                <br/>
                <span>Email : <?php echo $detail['email'] ?></span>
            </div>
            <div class="view-mail-content">
                <h3>Hello Admin</h3>
                <p>
                  <?php echo $detail['permasalahan'] ?>
                </p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="all-attachment-area">
                        <ul class="attachment-menu-view">
                            <li><a href="#"><i class="fa fa-paperclip"></i> attachments </a>
                            </li>
                            <li><a href="#"><i class="fa fa-level-down"></i> Download all </a>
                            </li>
                            <li><a href="#"><i class="fa fa-file-image-o" aria-hidden="true"></i> View all images </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="view-mail-file-list">
                        <div class="view-file-in">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="file-type-view">
                            <h5><a href="#">Document-file.doc</a></h5>
                            <p>Added: jun 18, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="view-mail-file-list">
                        <div class="view-file-in">
                            <i class="fa fa-file-image-o"></i>
                        </div>
                        <div class="file-type-view">
                            <h5><a href="#">Document-image.jpg</a></h5>
                            <p>Added: jun 18, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="view-mail-file-list">
                        <div class="view-file-in">
                            <i class="fa fa-file-video-o" aria-hidden="true"></i>
                        </div>
                        <div class="file-type-view">
                            <h5><a href="#">Document-Video.mpv</a></h5>
                            <p>Added: jun 18, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="view-mail-file-list">
                        <div class="view-file-in">
                            <i class="fa fa-file-archive-o" aria-hidden="true"></i>
                        </div>
                        <div class="file-type-view">
                            <h5><a href="#">Document-achive.zip</a></h5>
                            <p>Added: jun 18, 2018</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="view-mail-reply-list">
                        <ul class="view-mail-forword">
                            <li><a href="#"><i class="fa fa-reply"></i> Reply</a>
                            </li>
                            <li><a href="#"><i class="fa fa-reply"></i> Forward</a>
                            </li>
                            <li><a class="compose-draft-bt" href="javascript:window.print()"><i class="fa fa-print"></i> Print</a>
                            </li>
                            <li><a class="compose-discard-bt" href="#"><i class="fa fa-trash-o"></i> Remove</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
