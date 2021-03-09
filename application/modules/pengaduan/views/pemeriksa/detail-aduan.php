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
        <div class="col-lg-8">
            <div id="viewmail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message">
                <div class="view-mail-wrap">
                    <div class="mail-title">
                        <h2>PENGADUAN !!!</h2>
                        <div class="view-mail-action">
                            
                        </div>
                    </div>
                    <hr />
                    <!--<div class="main-title-hd">
                        <h3>Subject: <span class="main-title-view">Our Mailing Box system too much advance.</span></h3>
                    </div>!-->
                    <div class="view-author-mail">
                        <span class="view-mail-date">Tanggal : <?php echo $detail['date_created'] ?></span>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="col-sm-1">DARI</td>
                                    <td> : <strong> <?php echo $detail['nama'] ?> </strong> </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1">TELFON</td>
                                    <td> : <?php echo $detail['no_hp'] ?></td>
                                </tr>
                                <tr>
                                    <td class="col-sm-1">EMAIL</td>
                                    <td> : <?php echo $detail['email'] ?></td>
                                </tr>
                            </tbody>
                            
                        </table>
                        <!--<span>Dari : <span class="view-mail-email"><?php echo $detail['nama'] ?></span></span>
                        
                        <br/>
                        <span>No Telfon : <?php echo $detail['no_hp'] ?></span>
                        <br/>
                        <span>Email : <?php echo $detail['email'] ?></span>!-->
                    </div>
                    <hr />
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
                                    <?php if ($detail['status_administrasi'] != 1){?>
                                        <li><a class="compose-draft-bt" href="#kembali" data-toggle="modal"><i class="fa fa-backward"></i> Kembalikan Ke Pengadu</a></li>
                                        <li><a class="compose-success-bt" href="#teruskan" data-toggle="modal"><i class="fa fa-forward"></i> Teruskan Ke Administrsi</a></li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div id="viewmail" class="tab-pane fade in animated zoomInDown shadow-reset custom-inbox-message">
                <div class="view-mail-wrap">
                    <div class="mail-title">
                        <h4>Status Aduan</h4>
                        <div class="view-mail-action">
                            
                        </div>
                        <hr/>
                    </div>
                    <br />
                    <?php foreach($status as $item){
                        $keterangan = $item->ket;
                    ?>
                    <div class="author-permissio-wrap shadow-reset">
                        <div class="author-per-img">
                            <a href="#"><img src="<?php echo base_url()?>assets/backend/img/icon/<?php echo $item->icon ?>" alt="" />
                            </a>
                            <div class="author-per-content">
                                <br />
                                <text><?php echo $item->status_aduan ?></text> <br />
                                <text>Tanggal : <?php echo $item->tanggal ?></text>

                                <?php if($item->id_ket_status == 3){?>
                                    <!--<a id="group1" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group" href="#">Admin</a>!-->
                                    <a class="label label-warning" data-toggle="modal" href="#keterangan" title="Alasan dikembalikan !"><i class="fa fa-info"></i></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <br />
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="modal fade" id="teruskan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-forward"></i> Teruskan Aduan ke administrasi</h4>
			</div>
			<div class="modal-body">
                <label class="alert alert-success">ANDA AKAN MENERUSKAN PENGADUAN INI KE BAG. ADMINISTRASI GUNA MEMBUAT DISPOSISI ?</label>
                <?php $this->load->view('pemeriksa/teruskan'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="kembali" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-backward"></i> Kembalikan Aduan</h4>
			</div>
			<div class="modal-body">
                <label class="alert alert-warning">ANDA AKAN MENGEMBALIKAN ADUAN INI KE PENGADU ?</label>
                <?php $this->load->view('pemeriksa/kembali'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="keterangan" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-backward"></i> Alasan Aduan dikembalikan !!</h4>
			</div>
			<div class="modal-body">
                <label class="alert alert-warning"><?php echo $keterangan ?></label>
                <?php $this->load->view('pemeriksa/kembali'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>