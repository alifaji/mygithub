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
            Master Data Item
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
            <li class="active">Data Item</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-input">
                                        <i class="fa fa-plus"></i> Add Item</button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-restock">
                                            <i class="fa fa-plus"></i> Restock</button>
                                        </div>
                                    </div>
                                    <!-- ./col -->


                                </div>
                            </div>

                            <!-- /.box-header -->
                            <div class="box-body" style="overflow-x: auto">
                                <?php echo $this->session->flashdata('pesan')?>
                                <p><b>TABEL PRODUCT</b></p>
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead style="background-color: #81CFE0">
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>item Name</center></th>
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
                                                <td><center><?php echo $id_p->item_nama; ?></center></td>
                                                <td><center>Rp. <?php echo $id_p->item_harga; ?></center></td>
                                                <td><center>
                                                    <?php
                                                    if($id_p->item_jumlah <= "3"){
                                                        ?>
                                                        <span class="label label-danger" style="text-transform: uppercase;">
                                                            <?php echo $id_p->item_jumlah; ?>
                                                        </span>
                                                        <?php
                                                    } else{
                                                        ?>
                                                        <?php echo $id_p->item_jumlah; ?>
                                                        <?php
                                                    }
                                                    ?>
                                                </center></td>
                                                <td><center>
                                                    <a href="#" onclick="edit_item(<?php echo $id_p->id_item; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                                                        <i class="fa fa-edit"></i> Edit</a>&nbsp
                                                        <a href="<?php echo site_url('Admin/Master/Data/C_item/deleteitem/'.$id_p->id_item) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a> </center></td>
                                                    </tr>
                                                    <?php 
                                                } ?>
                                            </tbody>
                                            <tfoot>

                                            </tfoot>
                                        </table>

                                    </div>
                                    <div class="box-body" style="overflow-x: auto">
                                        <p><b>TABEL TREATMENT</b></p>
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead style="background-color: #81CFE0">
                                                <tr>
                                                    <th><center>No</center></th>
                                                    <th><center>item Name</center></th>
                                                    <th><center>Price</center></th>
                                                    <th><center>ACTION</center></th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <?php
                                                $no=0;
                                                foreach ($data_treatment as $id_p) { 
                                                    ?>
                                                    <tr>
                                                        <td><center><?php echo $no += 1?></center></td>
                                                        <td><center><?php echo $id_p->item_nama; ?></center></td>
                                                        <td><center>Rp. <?php echo $id_p->item_harga; ?></center></td>
                                                        <td><center>
                                                            <a href="#" onclick="edit_item(<?php echo $id_p->id_item; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-sunting">
                                                                <i class="fa fa-edit"></i> Edit</a>&nbsp
                                                                <a href="<?php echo site_url('Admin/Master/Data/C_item/deleteitem/'.$id_p->id_item) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a> </center></td>
                                                            </tr>
                                                            <?php 
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
                        <div class="modal fade" id="modal-sunting" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xs">
                                <div class="modal-content">
                                    <div class="modal-header" align="center">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title text-center">
                                        Edit Data item</h4>
                                    </div>

                                    <!-- Begin # DIV Form -->
                                    <div id="div-forms">

                                        <!-- Begin # Login Form -->
                                        <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_item/editItem");?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group" >
                                                    <input type="hidden" class="form-control" id="id_item" placeholder="" name="id_item" readonly value="">
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <label>item Name : </label>
                                                    <input class="form-control" placeholder="Masukkan nama item" type="text" required="" name="nama_item" id="nama_item">
                                                </div>

                                                <div class="form-group has-feedback">
                                                    <label>item Price :</label>
                                                    <input class="form-control" placeholder="Harga" type="number" name="harga_item" id="harga_item" required="">
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <label>item Jenis :</label>
                                                    <select class="form-control" name="jenis_item" id="jenis_item" required>
                                                      <option value="Treatment">Treatment</option>
                                                      <option value="Product">Product</option>
                                                  </select>
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

                    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-xs">
                            <div class="modal-content">
                                <div class="modal-header" align="center">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title text-center">
                                    Edit Data item</h4>
                                </div>

                                <!-- Begin # DIV Form -->
                                <div id="div-forms">

                                    <!-- Begin # Login Form -->
                                    <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_item/editItem");?>" method="post">
                                        <div class="modal-body">
                                            <div class="form-group" >
                                                <input type="hidden" class="form-control" id="id_item" placeholder="" name="id_item" readonly value="">
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label>item Name : </label>
                                                <input class="form-control" placeholder="Masukkan nama item" type="text" required="" name="nama_item" id="nama_item">
                                            </div>

                                            <div class="form-group has-feedback">
                                                <label>item Price :</label>
                                                <input class="form-control" placeholder="Harga" type="number" name="harga_item" id="harga_item" required="">
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label>item Jenis :</label>
                                                <select class="form-control" name="jenis_item" id="jenis_item" required>
                                                  <option value="Treatment">Treatment</option>
                                                  <option value="Product">Product</option>
                                              </select>
                                          </div>
                                          <div class="form-group has-feedback">
                                            <label>item Stock : </label>
                                            <input class="form-control" placeholder="Masukkan jumlah item" type="text" required="" name="jumlah_item" id="jumlah_item">
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
                                Add Data item</h4>
                            </div>

                            <!-- Begin # DIV Form -->
                            <div id="div-forms">

                                <!-- Begin # Login Form -->
                                <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_item/insertItem");?>" method="post">
                                    <div class="modal-body">

                                        <div class="form-group has-feedback">
                                            <label>item Name : </label>
                                            <input class="form-control" placeholder="Masukkan nama item" type="text" required=""name="nama_item">
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label>item Price :</label>
                                            <input class="form-control" placeholder="Harga" type="number" name="harga_item" required="">
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label>item Jenis :</label>
                                            <select class="form-control" name="jenis_item" required>
                                              <option value="Treatment">Treatment</option>
                                              <option value="Product">Product</option>
                                          </select>
                                      </div>
                                      <div class="form-group has-feedback">
                                        <label>item Stock :  </label>
                                        <small>note : input 0 for treatment</small>
                                        <input class="form-control" placeholder="Masukkan jumlah item" type="text" name="jumlah_item">
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
            
            <div class="modal fade" id="modal-restock" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-header" align="center">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span></button>
                                <h4 class="modal-title text-center">
                                Restock</h4>
                            </div>

                            <!-- Begin # DIV Form -->
                            <div id="div-forms">

                                <!-- Begin # Login Form -->
                                <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_item/kirim_product");?>" method="post">
                                    <div class="modal-body">

                                    <div class="form-group has-feedback">
                                <label>Product / Treatment : </label>
                                <select class="form-control" name="item" id="item" placeholder="Select Sales" >
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
                                        <label>item Stock :  </label>
                                        <small>note : input 0 for treatment</small>
                                        <input class="form-control" placeholder="Masukkan jumlah item" type="text" name="jumlah" id = "jumlah" required ="">
                                    </div>
                                    <div class="form-group has-feedback">
                                            <label>Masukan Email Anda :</label>
                                            <input class="form-control" placeholder="Masukan Email Anda " type="email" name="my_email" required="">
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label>Masukan Password Anda :</label>
                                            <input class="form-control" placeholder="Masukan Password Anda " type="password" name="my_password" required="">
                                        </div>
                                        
                                        <div class="form-group has-feedback">
                                            <label>Masukan Email Tujuan :</label>
                                            <input class="form-control" placeholder="Masukan Email Tujuan " type="email" name="to_email" required="">
                                        </div>
                                    <div class="form-group has-feedback">
                                    <a href="#" onclick="add_cart()" class="btn btn-xs btn-success">
                                        <i class=""></i> Submit</a>                                           </div>
                                           <div class="form-group has-feedback">
                                        <h4>Shopping Cart</h4>
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Produk</th>
                                                        <th>Jenis</th>
                                                        <th>Harga</th>
                                                        <th>Qty</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="detail_cart">
                                
                                                </tbody>
                                                
                                            </table>
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
                function edit_item(id) {
                    $.ajax({
                        url: "<?php echo base_url("Admin/Master/Data/C_item/detailItem/")?>"+id,
                        type: "POST",
                        success: function(data) {
                            var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#modal-edit #id_item").val(hasil.id_item);
                        $("#modal-edit #nama_item").val(hasil.item_nama);
                        $("#modal-edit #jumlah_item").val(hasil.item_jumlah);
                        $("#modal-edit #harga_item").val(hasil.item_harga);
                        $("#modal-edit #jenis_item").val(hasil.item_jenis);
                        $("#modal-sunting #id_item").val(hasil.id_item);
                        $("#modal-sunting #nama_item").val(hasil.item_nama);
                        $("#modal-sunting #harga_item").val(hasil.item_harga);
                        $("#modal-sunting #jenis_item").val(hasil.item_jenis);

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
        function add_cart() {
            $('#modal-restock #detail_cart').load("<?php echo site_url("Admin/Master/Data/C_item/load_cart"); ?>");

        var e = document.getElementById("item");
        var strUser = e.options[e.selectedIndex].value;
        var jumlah   = $('#jumlah').val();
        $.ajax({

            url: '<?php echo site_url("Admin/Master/Data/C_item/add_restock"); ?>',
            type:"POST",
            data:
            {
            'id_item': strUser,
            'jumlah_item': jumlah
            }
            
            });
        }
        $('#modal-restock #detail_cart').load("<?php echo site_url("Admin/Master/Data/C_item/load_cart"); ?>");
        $(document).ready(function(){
            $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : '<?php echo site_url("Admin/Master/Data/C_item/hapus_cart"); ?>',
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
      

});
            </script>