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
                            <li><a href="#">Data Master</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="<?php echo base_url()?>data_master/distrik">Distrik</a> <span class="bread-slash">/</span>
                            </li>
                            <li><span class="bread-blod">Hapus</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="button-adminpro-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="button-ad-wrap shadow-reset nt-mg-b-30">
          <div class="alert-title">
              <h2><strong>Hapus !!!</strong></h2>
              <br/>
              <p class="alert alert-warning">
                <strong>PERINGATAN !! :</strong><br/>
                Apakah Anda Yakin Ingin Menghapus Distrik ini ??? <br/>
                Dengan Menghapus Distrik Anda akan Menghapus Semua data kampung yang Berelasi dengan Distrik ini : <br/>
              </p>

              <hr/>
              <form class="" action="<?php echo base_url()?>data_master/delete_distrik_proses" method="post">
                <input type="hidden" name="id_distrik" value="<?php echo $detail['id_distrik'] ?>">
                <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Distrik</label>
                      </div>
                      <div class="col-lg-9">
                        <input name="distrik" type="text" readonly="true" value="<?php echo $detail['distrik'] ?>" class="form-control" />
                      </div>
                  </div>
               </div>
                <div class="form-group-inner">
                   <div class="row">
                     <div class="col-lg-2">
                     </div>
                     <div class="col-lg-6">
                       <input type="submit" class="btn btn-primary" value="Hapus" />
                       <a href="<?php echo base_url()?>data_master/distrik" type="button" class="btn btn-default"> Batal</a>
                     </div>
                     <div class="col-lg-1">

                     </div>
                   </div>
               </div>
              </form>
          </div>
          <hr/>
        </div>
      </div>
    </div>
  </div>
</div>
