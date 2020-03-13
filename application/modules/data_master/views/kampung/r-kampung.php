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
                                <li><span class="bread-blod">Kampung</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area mg-b-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php echo $this->session->flashdata('create');?>
                <?php echo $this->session->flashdata('edit');?>
                <?php echo $this->session->flashdata('delete');?>
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Data <span class="table-project-n">Kampung</span></h1>
                            <div class="sparkline13-outline-icon">
                                <span><a href="#createkampung" title="Tambah Data" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                              <select class="form-control">
                                <option value="">Export Basic</option>
                                <option value="all">Export All</option>
                                <option value="selected">Export Selected</option>
                              </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                      <th data-field="no">No</th>
                                      <th data-field="distrik">Distrik</th>
                                      <th data-field="kampung">Kampung</th>
                                      <th data-field="kakampung">Ka Kampung</th>
                                      <th data-field="sekam">Sekam</th>
                                      <th data-field="kontak">Kontak</th>
                                      <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($kampung as $item){?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->distrik ?></td>
                                    <td><?php echo $item->kampung ?></td>
                                    <td><?php echo $item->kepala_kamp ?></td>
                                    <td><?php echo $item->sekam ?></td>
                                    <td><?php echo $item->kontak ?></td>
                                    <td>
                                      <a class="btn btn-default btn-xs" type="button" title="Edit" href="#updatekampung" data-toggle="modal" onclick="update(
                                        '<?php echo $item->id_kampung ?>',
                                        '<?php echo $item->id_distrik ?>',
                                        '<?php echo $item->kampung ?>',
                                        '<?php echo $item->kepala_kamp ?>',
                                        '<?php echo $iitem->sekam ?>',
                                        '<?php echo $item->kontak ?>',
                                      )"><i class="fa fa-edit"></i></a>
                                      <a href="#delete_stock" class="btn btn-xs btn-danger" data-toggle="modal" data-id="<?php echo $item->id_kampung ?>" title="Hapus Item"><i class="fa fa-trash"></i></a>
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

<div class="modal fade" id="createkampung" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-edit"></i> Tambah Kampung</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('kampung/c-kampung'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
