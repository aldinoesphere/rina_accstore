<!-- page content -->
<div class="right_col" role="main">
    <?php if ($this->session->flashdata('notification')) : ?>
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong><?php echo $this->session->flashdata('notification'); ?></strong>
            </div>
        </div>
    <?php elseif($this->session->flashdata('error_notification')) : ?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong><?php echo $this->session->flashdata('notification'); ?></strong>
            </div>
        </div>
    <?php endif; ?>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Laporan Penjualan</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="all_finalist" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <!-- <th>Tanggal</th> -->
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Qty</th>
                            <th>Harga Pokok</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($semua_penjualan as $penjualan) : 
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <!-- <td><?php echo idTimeFormat($penjualan->tanggal); ?></td> -->
                            <td><?php echo $penjualan->kode_brg; ?></td>
                            <td><?php echo $penjualan->nama_brg; ?></td>
                            <td><?php echo $penjualan->qty; ?></td>
                            <td><?php echo $penjualan->harga_pokok; ?></td>
                            <td><?php echo $penjualan->total; ?></td>
                        </tr>
                        <?php 
                            $no++;
                            endforeach; 
                        ?>
                    </tbody>
                </table>
                <div class="col-md-6 col-sm-12 pull-right">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th><h3>Total</h3></th>
                                <td><h3 class="total"><?php echo idr_format($total); ?></h3></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Filter Laporan</small></h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="control-group">
                    <form class="form-horizontal" action="<?php echo base_url('laporan/penjualan'); ?>" method="POST">
                        <div class="controls">
                            Start Date
                            <div class="form-group">
                                <div class='input-group date' id='startDate'>
                                    <input type='text' name="start_date" value="<?php echo $start_date; ?>" class="form-control" />
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="controls">
                            End Date
                            <div class="form-group">
                                <div class='input-group date' id='endDate'>
                                    <input type='text' name="end_date" value="<?php echo $end_date; ?>" class="form-control" />
                                    <span class="input-group-addon">
                                       <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <input type="submit" value="Filter" class="btn btn-success btn-lg" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $this->load->view('dashboard/js');
?>