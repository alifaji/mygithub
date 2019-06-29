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
            Master Data Pelanggan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
            <li class="active">Data Pelanggan</li>
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
                                        <i class="fa fa-plus"></i> Add Pelanggan</button>
                                    </div>
                                </div>
                                <!-- ./col -->


                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body" style="overflow-x: auto">
                            <?php echo $this->session->flashdata('pesan')?>
                            <p><b>TABEL pelanggan</b></p>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="background-color: #81CFE0">
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>pelanggan Name</center></th>
                                        <th><center>Username</center></th>
                                        <th><center>Address</center></th>
                                        <th><center>E-Mail</center></th>
                                        <th><center>Telephone</center></th>
                                        <th><center>ACTION</center></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $no=0;
                                    foreach ($data_customer as $id_p) { 
                                        //$no++;
                                    //if($id_k->id==3){
                                        ?>
                                        <tr>
                                            <td><center><?php echo $no += 1?></center></td>
                                            <td><center><?php echo $id_p->pelanggan_nama; ?></center></td>
                                            <td><center><?php echo $id_p->pelanggan_username; ?></center></td>
                                            <td><center><?php echo $id_p->pelanggan_alamat; ?></center></td>
                                            <td><center><?php echo $id_p->pelanggan_email; ?></center></td>
                                            <td><center><?php echo $id_p->pelanggan_telp; ?></center></td>
                                            <td><center>
                                                <a href="#" onclick="edit_pelanggan(<?php echo $id_p->id_pelanggan; ?>)" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-verification">
                                                    <i class="fa fa-check"></i> Verification</a>&nbsp
                                                    <a href="#" onclick="edit_pelanggan(<?php echo $id_p->id_pelanggan; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                                                        <i class="fa fa-edit"></i> Edit</a>&nbsp
                                                        <a href="<?php echo site_url('Admin/Master/User/C_pelanggan/deletePelanggan/'.$id_p->id_pelanggan) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a> </center></td>
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
                                    <div class="box-body" style="overflow-x: auto">
                                        <p><b>TABEL MEMBER</b></p>
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead style="background-color: #81CFE0">
                                                <tr>
                                                    <th><center>No</center></th>
                                                    <th><center>Member Name</center></th>
                                                    <th><center>Username</center></th>
                                                    <th><center>Address</center></th>
                                                    <th><center>E-Mail</center></th>
                                                    <th><center>Telephone</center></th>
                                                    <th><center>Point</center></th>
                                                    <th><center>Saldo</center></th>
                                                    <th><center>ACTION</center></th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <?php
                                                $no=0;
                                                foreach ($data_member as $id_p) { 
                                        //$no++;
                                    //if($id_k->id==3){
                                                    ?>
                                                    <tr>
                                                        <td><center><?php echo $no += 1?></center></td>
                                                        <td><center><?php echo $id_p->pelanggan_nama; ?></center></td>
                                                        <td><center><?php echo $id_p->pelanggan_username; ?></center></td>
                                                        <td><center><?php echo $id_p->pelanggan_alamat; ?></center></td>
                                                        <td><center><?php echo $id_p->pelanggan_email; ?></center></td>
                                                        <td><center><?php echo $id_p->pelanggan_telp; ?></center></td>
                                                        <td><center><?php echo $id_p->pelanggan_point; ?></center></td>
                                                        <td><center>Rp. <?php echo $id_p->pelanggan_saldo; ?></center></td>
                                                        <td><center>
                                                            <a href="#" onclick="edit_pelanggan(<?php echo $id_p->id_pelanggan; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                                                                <i class="fa fa-edit"></i> Edit</a>&nbsp
                                                                <a href="<?php echo site_url('Admin/Master/User/C_pelanggan/deletePelanggan/'.$id_p->id_pelanggan) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a> </center></td>
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
                        <div class="modal fade" id="modal-verification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-xs">
                                <div class="modal-content">
                                    <div class="modal-header" align="center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title text-center">
                                            Verification Custommer to Member</h4>
                                        </div>

                                        <!-- Begin # DIV Form -->
                                        <div id="div-forms">

                                            <!-- Begin # Login Form -->
                                            <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_pelanggan/verificationPelanggan");?>" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group" >
                                                        <input type="hidden" class="form-control" id="id_pelanggan" placeholder="" name="id_pelanggan" readonly value="">
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <label>Tanggal Lahir :</label>
                                                        <input class="form-control" placeholder="" type="date" name="tanggal_pelanggan" required="">
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <label>Kode GoodFellas :</label>
                                                        <input class="form-control" placeholder="Masukkan Kode Member" type="text" name="kode_pelanggan" required="">
                                                    </div>
                                                    <div class="form-group has-feedback">
                                                        <input type="hidden" class="form-control" placeholder="" name="tipe_pelanggan" readonly value="Member">
                                                    </div>

                                <!--
                                <div class="form-group has-feedback">
                                    <label>Sales :</label>
                                    <select class="form-control" name="Sales">
                                        <option value="1">Suparman</option>
                                        <option value="2">Wonder</option>
                                    </select>
                                </div>
                            -->
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
                    Edit Data pelanggan</h4>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                    <!-- Begin # Login Form -->
                    <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_pelanggan/editPelanggan");?>" method="post">
                        <div class="modal-body">
                            <div class="form-group" >
                                <input type="hidden" class="form-control" id="id_pelanggan" placeholder="" name="id_pelanggan" readonly value="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Name</label>
                                <input class="form-control" placeholder="Full Name" type="text" name="nama_pelanggan" id="nama_pelanggan" required="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Password</label>
                                <input class="form-control" placeholder="Password" type="password" name="password_pelanggan" id="password_pelanggan" required="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Address</label>
                                <textarea class="form-control" placeholder="alamat lengkap" required="" name="alamat_pelanggan" id="alamat_pelanggan"></textarea>
                            </div>
                            <div class="form-group has-feedback">
                                <label>E-Mail</label>
                                <input class="form-control" placeholder="email" type="email" name="email_pelanggan" id="email_pelanggan" required="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Telephone</label>
                                <input class="form-control" placeholder="telpon" type="text" name="telp_pelanggan" id="telp_pelanggan" required="">
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
                    Add Data pelanggan</h4>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                    <!-- Begin # Login Form -->
                    <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_pelanggan/insertPelanggan");?>" method="post">
                        <div class="modal-body">

                            <div class="form-group has-feedback">
                                <label>Name</label>
                                <input class="form-control" placeholder="Full Name" type="text" name="nama_pelanggan" required="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Username</label>
                                <input class="form-control" placeholder="Username" type="text" name="username_pelanggan" required="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Password</label>
                                <input class="form-control" placeholder="Password" type="password" name="password_pelanggan" required="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Address</label>
                                <textarea class="form-control" placeholder="your address" required="" name="alamat_pelanggan"></textarea>
                            </div>
                            <div class="form-group has-feedback">
                                <label>E-Mail</label>
                                <input class="form-control" placeholder="email" type="email" name="email_pelanggan" required="">
                            </div>
                            <div class="form-group has-feedback">
                                <label>Telephone</label>
                                <input class="form-control" placeholder="telpon" type="text" name="telp_pelanggan" required="">
                            </div>
                            <div class="form-group has-feedback">
                                <input type="hidden" class="form-control" placeholder="" name="tipe_pelanggan" readonly value="Customer">
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
    function edit_pelanggan(id) {
        $.ajax({
            url: "<?php echo base_url("Admin/Master/User/C_pelanggan/detailPelanggan/")?>"+id,
            type: "POST",
            success: function(data) {
                var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#modal-edit #id_pelanggan").val(hasil.id_pelanggan);
                        $("#modal-edit #nama_pelanggan").val(hasil.pelanggan_nama);
                        $("#modal-edit #password_pelanggan").val(hasil.pelanggan_password);
                        $("#modal-edit #alamat_pelanggan").val(hasil.pelanggan_alamat);
                        $("#modal-edit #email_pelanggan").val(hasil.pelanggan_email);
                        $("#modal-edit #telp_pelanggan").val(hasil.pelanggan_telp);
                        $("#modal-verification #id_pelanggan").val(hasil.id_pelanggan);

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