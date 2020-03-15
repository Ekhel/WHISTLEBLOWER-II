<script src="<?php echo base_url()?>assets/backend/js/jquery-1.11.3.min.js"></script>

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

                            <li><span class="bread-blod">Distrik</span>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area mg-b-15">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <?php echo $this->session->flashdata('create');?>
        <?php echo $this->session->flashdata('update');?>
        <?php echo $this->session->flashdata('delete');?>
        <div class="sparkline13-list shadow-reset">
          <div class="sparkline13-hd">
              <div class="main-sparkline13-hd">

                  <h4><i class="fa fa-list"></i> Data<span class="table-project-n"></span> Distrik</h4>
                  <div class="sparkline13-outline-icon">
                    <span><a href="#createdistrik" data-toggle="modal" title="Tambah Distrik" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
                  </div>
              </div>
          </div>
          <div class="sparkline12-graph">
            <div class="static-table-list">
              <table class="small table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Distrik</th>
                    <th>Ka Distrik</th>
                    <th>Sek Distrik</th>
                    <th>Kontak</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach($distrik as $i){?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td class="text-uppercase"><?php echo $i->distrik ?></td>
                      <td><?php echo $i->kadis ?></td>
                      <td><?php echo $i->sekdis ?></td>
                      <td><?php echo $i->no_kontak ?></td>
                      <td>
                        <a class="btn btn-default btn-xs" type="button" title="Edit" href="#updatedistrik" data-toggle="modal" onclick="update_distrik(
                          '<?php echo $i->id_distrik ?>',
                          '<?php echo $i->distrik ?>',
                          '<?php echo $i->kadis ?>',
                          '<?php echo $i->sekdis ?>',
                          '<?php echo $i->no_kontak ?>',
                        )"><i class="fa fa-edit"></i></a>
                        <a href="<?php echo base_url()?>data_master/delete_distrik/<?php echo $i->id_distrik ?>" class="btn btn-xs btn-danger" title="Hapus"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="createdistrik" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Tambah Distrik</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('distrik/c-distrik'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="updatedistrik" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Update Distrik </h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('distrik/u-distrik'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function update_distrik(id_distrik,distrik,kadis,sekdis,no_kontak){
    $('#xid_distrik').val(id_distrik);
    $('#xdistrik').val(distrik);
    $('#xkadis').val(kadis);
    $('#xsekdis').val(sekdis);
    $('#xno_kontak').val(no_kontak);
  }
</script>
