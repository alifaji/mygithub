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
            Master Data promo
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
            <li class="active">Data promo</li>
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
                                        <i class="fa fa-plus"></i> Add promo</button>
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
                                        <th><center>Isi Promo</center></th>
                                        <th><center>Mulai Promo</center></th>
                                        <th><center>Akhir Promo</center></th>
                                        <th><center>Tujuan Promo</center></th>
                                        <th><center>ACTION</center></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $no=0;
                                    foreach ($data_promo as $id_p) { 
                                        //$no++;
                                    //if($id_k->id==3){
                                        ?>
                                        <tr>
                                            <td><center><?php echo $no += 1?></center></td>
                                            <td><center><?php echo $id_p->promo_isi; ?></center></td>
                                            <td><center><?php echo $id_p->promo_mulai; ?></center></td>
                                            <td><center><?php echo $id_p->promo_akhir; ?></center></td>
                                            <td><center><?php echo $id_p->promo_tujuan; ?></center></td>
                                            <td><center>
                                                <a href="#" onclick="edit_promo(<?php echo $id_p->id_promo; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                                                    <i class="fa fa-edit"></i> Edit</a>&nbsp
                                                    <a href="<?php echo site_url('Admin/Master/Data/C_promo/deletePromo/'.$id_p->id_promo) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a> </center></td>
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
                            Edit Data promo</h4>
                        </div>

                        <!-- Begin # DIV Form -->
                        <div id="div-forms">

                            <!-- Begin # Login Form -->
                            <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_promo/editPromo");?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group" >
                                        <input type="hidden" class="form-control" id="id_promo" placeholder="" name="id_promo" readonly value="">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>promo isi : </label>
                                        <textarea class="form-control" placeholder="isi promo" required="" name="isi_promo" id="isi_promo"></textarea>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Mulai Promo :</label>
                                        <input class="form-control" placeholder="" type="date" name="mulai_promo" id="mulai_promo" required="">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Akhir Promo :</label>
                                        <input class="form-control" placeholder="" type="date" name="akhir_promo" id="akhir_promo" required="">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Tujuan :</label>
                                        <select class="form-control" name="tujuan_promo" id="tujuan_promo" required>
                                            <option value="Semua">Semua Member</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
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

            <div class="modal fade" id="modal-input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xs">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title text-center">
                            Add Data promo</h4>
                        </div>

                        <!-- Begin # DIV Form -->
                        <div id="div-forms">

                            <!-- Begin # Login Form -->
                            <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_promo/insertPromo");?>" method="post">
                                <div class="modal-body">
                                    
                                    <div class="form-group has-feedback">
                                        <label>promo isi : </label>
                                        <textarea class="form-control" placeholder="isi promo" required="" name="isi_promo"></textarea>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Mulai Promo :</label>
                                        <input class="form-control" placeholder="" type="date" name="mulai_promo" required="">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Akhir Promo :</label>
                                        <input class="form-control" placeholder="" type="date" name="akhir_promo" required="">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Tujuan :</label>
                                        <select class="form-control" name="tujuan_promo" required>
                                            <option value="Semua">Semua Member</option>
                                            <option value="01">Januari</option>
                                            <option value="02">Februari</option>
                                            <option value="03">Maret</option>
                                            <option value="04">April</option>
                                            <option value="05">Mei</option>
                                            <option value="06">Juni</option>
                                            <option value="07">Juli</option>
                                            <option value="08">Agustus</option>
                                            <option value="09">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
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

            <script>
                function edit_promo(id) {
                    $.ajax({
                        url: "<?php echo base_url("Admin/Master/Data/C_promo/detailPromo/")?>"+id,
                        type: "POST",
                        success: function(data) {
                            var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_promo").val(hasil.id_promo);
                        $("#isi_promo").val(hasil.promo_isi);
                        $("#mulai_promo").val(hasil.promo_mulai);
                        $("#akhir_promo").val(hasil.promo_akhir);
                        $("#tujuan_promo").val(hasil.promo_tujuan);

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