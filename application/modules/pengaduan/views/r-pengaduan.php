<br/>
<section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <div class="search-wrapper">
            <h3>Form Pengaduan Masyarakat</h3>
            <br/>
            <?php echo $this->session->flashdata('create');?>
            <br/>
            <form class="search-form" action="<?php echo base_url()?>pengaduan/create_aduan" method="post">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Pengadu">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="no_hp" class="form-control" placeholder="No Telfon/Handphone Pelapor">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="email" name="email" class="form-control" placeholder="Email Pelapor">
                </div>
              </div>
              <div class="form-group">
                <select name="id_kategori">
                  <option value="1">Keuangan Kampung</option>
                  <option value="2">Keuangan Distrik</option>
                </select>
              </div>
              <div class="form-group">
                <select name="id_distrik">
                  <option value="1">Sentani</option>
                  <option value="2">Demta</option>
                </select>
              </div>
              <div class="form-group">
                <select name="id_kampung">
                  <option value="1">Puay</option>
                  <option value="2">Bukisi</option>
                </select>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <textarea name="permasalahan" rows="10" cols="100" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="text" name="terlapor" class="form-control" placeholder="Terlapor">
                </div>
              </div>
              <div class="form-group">
                <button class="button border-0 mt-3" type="submit">KIRIM ADUAN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
