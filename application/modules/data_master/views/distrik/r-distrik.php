<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <div class="breadcome-heading">
                            <form role="search" class="">
                              <input type="text" placeholder="Search..." class="form-control">
                              <a href=""><i class="fa fa-search"></i></a>
                            </form>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
                  <h4>Data<span class="table-project-n"></span> Distrik</h4>
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
                        <a class="btn btn-default btn-xs" type="button" title="Edit" href="#updatedistrik" data-toggle="modal" onclick="update(
                          '<?php echo $i->id_distrik ?>',
                          '<?php echo $i->distrik ?>',
                          '<?php echo $i->kadis ?>',
                          '<?php echo $i->sekdis ?>',
                          '<?php echo $i->no_kontak ?>',
                        )"><i class="fa fa-edit"></i></a>
                        <a href="#delete_stock" class="btn btn-xs btn-danger" data-toggle="modal" data-id="<?php echo $i->id_distrik ?>" title="Hapus Item"><i class="fa fa-trash"></i></a>
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
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Tambah Distrik</h4>
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
