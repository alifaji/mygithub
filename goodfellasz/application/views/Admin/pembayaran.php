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
            Master Data Pembayaran
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
            <li class="active">Data Progress</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <div class="row">
                            <form action="<?=site_url('Admin/C_pembayaran/get_pembayaran')?>" method="post" id="pembayaran">

                              <div class="col-md-2">
                                <select class="form-control" name ="cabang">
                                  <option value="" disabled selected>Pilih  :</option>
                                  <?php
                                  foreach ($cabang as $key ) {
                                    ?>
                                    <option value ="<?php echo $key->cabang_nama ?>">
                                      <?php echo $key->cabang_nama; ?>     
                                  </option>
                                  <?php
                              }
                              ?>
                          </select>
                      </div>
                      <div class="col-md-2">
                        <button type="submit" class="btn btn-primary" form="pembayaran">Cari</button>

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
                            <th><center>Username</center></th>
                            <th><center>Cabang</center></th>
                            <th><center>No Kursi</center></th>
                            <th><center>ACTION</center></th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($data_antrian as $id_p) { 
                                        //$no++;
                                    //if($id_k->id==3){
                            ?>
                            <tr>
                                <td><center><?php echo $no += 1?></center></td>
                                <td><center><?php echo $id_p->pelanggan_nama; ?></center></td>
                                <td><center><?php echo $id_p->antrian_cabang; ?></center></td>
                                <td><center><?php echo $id_p->antrian_kursi; ?></center></td>
                                <td><center>
                                    <a href="#" onclick="edit_product(<?php echo $id_p->id_pelanggan; ?>)" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-edit">
                                        <i class="fa fa-money"></i> Bayar</a> </center></td>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" align="center">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title text-center">
                Pembayaran</h4>
            </div>

            <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" action ="<?php echo site_url("Admin/C_pembayaran/pembayaran");?>" method="post">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6">
                               <div class="form-group has-feedback">
                                <label>Product / Treatment : </label>
                                <select class="form-control" name="item" id="item" placeholder="Select Sales" required>
                                    <option value="" disabled selected>Select Item :</option>
                                    <?php 
                                    foreach ($data_item as $row_item) {
                                        ?>
                                        <option value="<?php echo $row_item->id_item;?>">
                                            <?php echo $row_item->item_nama; ?>
                                        </option>
                                    <?php } ?>

                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <label>Diskon: </label>
                                <input class="form-control" placeholder="" type="number" name="diskon" id="diskon" required ="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Saldo: </label>
                                <input class="form-control" placeholder="" type="number" name="saldo" id="saldo" required ="">
                            </div>
                            <div class="form-group has-feedback" id ="item3">
                                
                            </div>
                            <a href="#" onclick="add_cart()" class="btn btn-xs btn-success">
                                        <i class="fa fa-money"></i> Submit</a>

                                        <div class="form-group has-feedback">
                                        <h4>Shopping Cart</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">
 
                </tbody>
                 
            </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                <input class="form-control" placeholder="" type="hidden" required=""  name="id_pelanggan" id="id_pelanggan">
                                <input class="form-control" placeholder="" type="hidden" required=""  name="email_pelanggan" id="email_pelanggan">

                                    <div class="form-group has-feedback">
                                        <label>Nama Pelanggan: </label>
                                        <input class="form-control" placeholder="" type="text" required=""  name="nama_pelanggan" id="nama_pelanggan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label>Tipe Pelanggan: </label>
                                        <input class="form-control" placeholder="" type="text" required=""  name="tipe_pelanggan" id="tipe_pelanggan">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label>Point: </label>
                                        <input class="form-control" placeholder="" type="number" name="point_pelanggan" id="point_pelanggan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label>Saldo: </label>
                                        <input class="form-control" placeholder="" type="number" name="saldo_pelanggan" id="saldo_pelanggan">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label>Service By: </label>
                                        <select class="form-control" name="barberman" id="barberman" placeholder="Select Sales" required>
                                    <option value="" disabled selected>Select Item :</option>
                                    <?php 
                                    foreach ($data_barberman as $row_item) {
                                        ?>
                                        <option value="<?php echo $row_item->barberman_nama;?>">
                                            <?php echo $row_item->barberman_nama; ?>
                                        </option>
                                    <?php } ?>

                                </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label>Report By: </label>
                                        <input class="form-control" placeholder="" type="text" required=""  name="admin" id="admin">
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                </div>

            </form>
            <!-- End # Login Form -->

        </div>


        <!-- Begin # DIV Form -->

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
            url: "<?php echo site_url("Admin/C_pembayaran/get_data_pelanggan/")?>"+id,
            type: "POST",
            success: function(data) {
                var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        $("#modal-edit #id_pelanggan").val(hasil.id_pelanggan);
                        
                        $("#modal-edit #nama_pelanggan").val(hasil.pelanggan_nama);
                        $("#modal-edit #tipe_pelanggan").val(hasil.pelanggan_tipe);
                        $("#modal-edit #point_pelanggan").val(hasil.pelanggan_point);
                        $("#modal-edit #saldo_pelanggan").val(hasil.pelanggan_saldo);
                        $("#modal-edit #email_pelanggan").val(hasil.pelanggan_email);

                    
                    }
                });
    }
    function add_cart() {
        $('#modal-edit #detail_cart').load("<?php echo site_url("Admin/C_pembayaran/load_cart"); ?>");
        var e = document.getElementById("item");
        var strUser = e.options[e.selectedIndex].value;
        var qty   = $('#item2').val();
        var saldo   = $('#saldo').val();
        var diskon   = $('#diskon').val();
        var tipe_pelanggan   = $('#tipe_pelanggan').val();

        $.ajax({

            url: '<?php echo site_url("Admin/C_pembayaran/add_item"); ?>',
            type:"POST",
            data:
            {
            'id': strUser,
            'qty': qty,
            'saldo':saldo,
            'diskon':diskon,
            'tipe_pelanggan':tipe_pelanggan
            }
            
            });
        }
        $('#modal-edit #detail_cart').load("<?php echo site_url("Admin/C_pembayaran/load_cart"); ?>");


    $(document).ready(function(){
        $('#modal-edit #item').on('change',function(){
            var id=$(this).val();

            $.ajax({
                url : '<?php echo site_url("Admin/C_pembayaran/get_data_item"); ?>',
                type : "POST",
                data : {id_item: id},
                dataType : "text",
                success: function(data){
                  $('#modal-edit #item3').html(data);
                  
                }
          
            });
        });
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : '<?php echo site_url("Admin/C_pembayaran/hapus_cart"); ?>',
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
      

});

        

</script>