<!DOCTYPE html>
<?php
include 'header.php';
include 'slidebar.php';

?>
<html>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data Product
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
            <li class="active">Data Product</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <div class="row">

                            <!-- ./col -->
                            <div class="col-lg-2 col-xs-6">
                                <label>&nbsp</label>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-input">
                                        <i class="fa fa-plus"></i> Add Product</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body" style="overflow-x: auto">
                            <?php echo $this->session->flashdata('pesan')?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="background-color: #81CFE0">
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>Product Name</center></th>
                                        <th><center>Price</center></th>
                                        <th><center>Stock</center></th>
                                        <th><center>ACTION</center></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $no=0;
                                    foreach ($data_product as $id_p) { 
                                        //$no++;
                                    //if($id_k->id==3){
                                        ?>
                                        <tr>
                                            <td><center><?php echo $no += 1?></center></td>
                                            <td><center><?php echo $id_p->product_nama; ?></center></td>
                                            <td><center><?php echo $id_p->product_harga; ?></center></td>
                                            <td><center><?php echo $id_p->product_jumlah; ?></center></td>
                                            <td><center>
                                                <a href="#" onclick="edit_product(<?php echo $id_p->product_id; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                                                    <i class="fa fa-edit"></i> Edit</a>&nbsp
                                                    <a href="<?php echo site_url('Admin/Master/Data/C_product/deleteProduct/'.$id_p->product_id) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a> </center></td>
                                                </tr>
                                                <?php 
                                            //}
                                        //else{
                                        //}
                                            } ?>
                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>

                                </div>
                            </div>
                            <!-- /.box-body -->

                        </div>
                        <!-- /.box -->

                    </div>
                </div>

                <!-- /.col -->

            </section>

            <!-- /.row -->
            <?php include('footer.php');?>

            <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xs">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title text-center">
                            Edit Data Product</h4>
                        </div>

                        <!-- Begin # DIV Form -->
                        <div id="div-forms">

                            <!-- Begin # Login Form -->
                            <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_product/editProduct");?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group" >
                                        <input type="hidden" class="form-control" id="id_product" placeholder="" name="id_product" readonly value="">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Product Name : </label>
                                        <input class="form-control" placeholder="Masukkan nama Product" type="text" required="" name="nama_product" id="nama_product">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Product Stock : </label>
                                        <input class="form-control" placeholder="Masukkan jumlah Product" type="text" required="" name="jumlah_product" id="jumlah_product">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Product Price :</label>
                                        <input class="form-control" placeholder="Harga" type="number" name="harga_product" id="harga_product" required="">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                                    </div>

                                </form>
                                <!-- End # Login Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xs">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title text-center">
                            Add Data Product</h4>
                        </div>

                        <!-- Begin # DIV Form -->
                        <div id="div-forms">

                            <!-- Begin # Login Form -->
                            <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_product/insertProduct");?>" method="post">
                                <div class="modal-body">
                                    
                                    <div class="form-group has-feedback">
                                        <label>Product Name : </label>
                                        <input class="form-control" placeholder="Masukkan nama Product" type="text" required=""name="nama_product">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Product Stock : </label>
                                        <input class="form-control" placeholder="Masukkan jumlah Product" type="text" required=""name="jumlah_product">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Product Price :</label>
                                        <input class="form-control" placeholder="Harga" type="number" name="harga_product" required="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                                    </div>

                                </form>
                                <!-- End # Login Form -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function edit_product(id) {
                    $.ajax({
                        url: "<?php echo base_url("Admin/Master/Data/C_product/detailProduct/")?>"+id,
                        type: "POST",
                        success: function(data) {
                            var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_product").val(hasil.product_id);
                        $("#nama_product").val(hasil.product_nama);
                        $("#jumlah_product").val(hasil.product_jumlah);
                        $("#harga_product").val(hasil.product_harga);

                        /*
                        $("#alamat_perusahaan").val(hasil.alamat_perusahaan);
                        $("#email_perusahaan").val(hasil.email_perusahaan);
                        $(':radio[value="' + hasil.status_pemilik + '"]').prop("checked", true);
                        $(':radio[value="' + hasil.daerah + '"]').prop("checked", true);
                        $('#provinsi_perusahaan option:contains('+hasil.provinsi+')').prop('selected',true);
                        
                        let provinsi = $("#provinsi_perusahaan").val();
                        getKabupaten(provinsi);
                    
                        $('#kota_perusahaan option:contains('+hasil.kota+')').prop('selected',true);
                        let kota = $("#kota_perusahaan").val();
                        getKecamatan(kota);
                        
                        $('#kecamatan_perusahaan option:contains('+hasil.kecamatan+')').prop('selected',true);
                        let desa = $("#kecamatan_perusahaan").val();
                        getDesa(desa);
                        
                        $('#desa_perusahaan option:contains('+hasil.desa+')').prop('selected',true);
                                                    
                        $("#pos_perusahaan").val(hasil.kode_pos);
                        $("#telp_perusahaan").val(hasil.telepon);
                        $("#fax_perusahaan").val(hasil.fax);
                        */
                    }
                });
                }
            </script>