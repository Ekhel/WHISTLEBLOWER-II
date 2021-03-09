<div class="basic-login-form-ad">
    <div class="row">
        <div class="col-lg-12">
            <div class="all-form-element-inner">
                <form action="<?php echo base_url()?>pengaduan/kembali_aduan" method="post">
                    <div class="form-group-inner">
                        <div class="col-lg-12">
                            <label> Masukan Alasan Pengembalian Aduan :</label>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="col-lg-12">
                            <input type="hidden" name="id_aduan" value="<?php echo $detail['id_aduan'] ?>">
                            <textarea name="ket" cols="10" class="form-control" rows="5"></textarea>
                            <br />
                            <input type="submit" class="btn btn-primary" value="Kembalikan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>