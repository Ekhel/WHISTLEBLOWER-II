<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>pengaduan/teruskan_administrasi" method="post">
                    <input type="hidden" name="id_aduan" value="<?php echo $detail['id_aduan'] ?>">
                    <div class="form-group-inner">
                        <div class="col-lg-2">
                            <input type="submit" class="btn btn-primary" value="Teruskan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>