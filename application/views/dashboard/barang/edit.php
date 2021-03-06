<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Kategori Baru</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <?php foreach ($barang as $value) : ?>
                    <form class="form-horizontal form-label-left" action="<?php echo base_url('barang/update/' . $value->id); ?>" method="POST">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Barang</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" placeholder="0000000000" name="kode_brg" value="<?php echo $value->kode_brg; ?>" style="text-transform:uppercase" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Barang</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_brg" value="<?php echo $value->nama_brg; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kategori *</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <select class="form-control" id="select-kategori">
                                    <?php 
                                    $kode_kat = substr($value->kode_brg, 0, 3);
                                    foreach ($kategories as $kategori) : 
                                    ?>
                                        <option value="<?php echo $kategori->kode_kat; ?>" <?php echo $kode_kat === $kategori->kode_kat ? 'selected' : ''; ?>><?php echo $kategori->kategori; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Qty</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="number" class="form-control" placeholder="Qty" name="qty" value="<?php echo $value->qty; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Beli</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control harga" name="harga_beli" value="<?php echo $value->harga_beli; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga Jual</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control harga" name="harga_jual" value="<?php echo $value->harga_jual; ?>" required>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $this->load->view('dashboard/js');
?>