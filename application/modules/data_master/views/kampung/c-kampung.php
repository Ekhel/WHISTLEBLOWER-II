<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>data_master/create_kampung_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Distrik</label>
                       </div>
                       <div class="col-lg-9">
                         <select name="id_distrik" class="form-control">
                           <option value="">-- Pilih --</option>
                            <?php
                            foreach($distrik as $dis => $val)
                            {?>
                            <option value="<?php echo $val->id_distrik;?>"><?php echo $val->distrik; ?></option>
                            <?php
                            }?>
                         </select>
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Kampung</label>
                      </div>
                      <div class="col-lg-9">
                        <input type="text" name="kampung" class="form-control">
                      </div>
                  </div>
                </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Kepala</label>
                     </div>
                     <div class="col-lg-9">
                       <input type="text" name="kepala_kamp" class="form-control">
                     </div>
                 </div>
                </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Sekretaris</label>
                     </div>
                     <div class="col-lg-9">
                       <input type="text" name="sekam" class="form-control">
                     </div>
                 </div>
                </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="login2 pull-right pull-right-pro">Kontak</label>
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="kontak" class="form-control">
                    </div>
                </div>
              </div>
              <div class="form-group-inner">
               <div class="row">
                 <div class="col-lg-2">
                 </div>
                 <div class="col-lg-2">
                   <input type="submit" class="btn btn-primary" value="Simpan">
                 </div>
               </div>
             </div>
        </form>
    </div>
</div>
