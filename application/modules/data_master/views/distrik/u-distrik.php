<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>data_master/update_distrik_proses" method="post">
                  <div class="form-group-inner">
                   <div class="row">
                       <div class="col-lg-2">
                           <label class="login2 pull-right pull-right-pro">Distrik</label>
                       </div>
                       <div class="col-lg-9">
                         <input type="hidden" name="id_distrik" id="xid_distrik" class="form-control">
                         <input type="text" name="distrik" id="xdistrik" class="form-control">
                       </div>
                   </div>
                 </div>
                 <div class="form-group-inner">
                  <div class="row">
                      <div class="col-lg-2">
                          <label class="login2 pull-right pull-right-pro">Ka Distrik</label>
                      </div>
                      <div class="col-lg-9">
                        <input type="text" name="kadis" id="xkadis" class="form-control">
                      </div>
                  </div>
                </div>
                <div class="form-group-inner">
                 <div class="row">
                     <div class="col-lg-2">
                         <label class="login2 pull-right pull-right-pro">Sek Dis</label>
                     </div>
                     <div class="col-lg-9">
                       <input type="text" name="sekdis" id="xsekdis" class="form-control">
                     </div>
                 </div>
               </div>
               <div class="form-group-inner">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="login2 pull-right pull-right-pro">Kontak</label>
                    </div>
                    <div class="col-lg-9">
                      <input type="text" name="no_kontak" id="xno_kontak" class="form-control">
                    </div>
                </div>
              </div>
              <div class="form-group-inner">
               <div class="row">
                 <div class="col-lg-2">
                 </div>
                 <div class="col-lg-2">
                   <input type="submit" class="btn btn-primary" value="Update">
                 </div>
               </div>
             </div>
        </form>
    </div>
</div>
