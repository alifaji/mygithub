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
            Data My Point
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
            <li class="active">Data Point</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="box">
            <div class="col-lg-4 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-person"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"> Name : USER 1</span>
                    <span class="progress-number"> Point :<b>7</b>/15 </span>
                    <span class="info-box-number"> Saldo : Rp.35,000</span>
                </div>
            <!-- /.info-box-content -->
            </div>
          <!-- /.info-box -->
            </div>
            <div class="col-lg-8 col-xs-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                            <p class="text-center">
                            <h3 class="box-title">Progress Bars & How To Get Point</h3>
                            </p>
                    </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <div class="progress-group">
                        <span class="progress-text">Your Progress Point :</span>
                        <span class="progress-number">46 <small>%</small></span>

                    <div class="progress active">
                      <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="15" style="width: 46%"></div>
                    </div>
                  </div>
                  <div class="progress-group">
                      <span class="progress-text"> How To Get Point :</span>
                      <p>
                        <i class="fa fa-check-square"></i>
                          Syarat pertama untuk dapat mengumpulkan point adalah menjadi<code>Member</code>.
                      </p>
                      <p>
                        <i class="fa fa-check-square"></i>
                          Setiap melakukan treatment potong rambut akan mendapatkan <code>1 point</code>.
                      </p>
                      <p>
                        <i class="fa fa-check-square"></i>
                          Setiap melakukan treatment selain potong rambut dengan minimal harga <code>Rp.50.000</code>. akan mendapatkan <code>1 point</code>.
                      </p>
                      <p>
                        <i class="fa fa-check-square"></i>
                          Setiap melakukan pembelian pomade dengan harga berapapun akan mendapatkan <code>1 point</code>.
                      </p>
                      <p>
                        <i class="fa fa-check-square"></i>
                          Setiap <code>15 point</code>. akan mendapatkan penambahan saldo sebanyak <code> Rp. 50.000</code>. dan point akan dirubah menjadi <code>0 point</code> atau progress point akan menjadi <code>0 <small>%</small></code>
                      </p>
                  </div>
                   
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
            </div>
        </div>
        


    </section>
</div>
    <!-- Main content -->

            <!-- /.row -->
<?php include('footer.php');?>

            <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xs">
                    <div class="modal-content">
                        <div class="modal-header" align="center">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title text-center">
                            Edit Data Treatment</h4>
                        </div>

                        <!-- Begin # DIV Form -->
                        <div id="div-forms">

                            <!-- Begin # Login Form -->
                            <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_treatment/editTreatment");?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group" >
                                        <input type="hidden" class="form-control" id="id_treatment" placeholder="" name="id_treatment" readonly value="">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Treatment Name : </label>
                                        <input class="form-control" placeholder="Masukkan nama Treatment" type="text" required="" name="nama_treatment" id="nama_treatment">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Treatment Price :</label>
                                        <input class="form-control" placeholder="Harga" type="number" name="harga_treatment" id="harga_treatment" required="">
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
                            Add Data Treatment</h4>
                        </div>

                        <!-- Begin # DIV Form -->
                        <div id="div-forms">

                            <!-- Begin # Login Form -->
                            <form id="login-form" action ="<?php echo site_url("Admin/Master/Data/C_treatment/insertTreatment");?>" method="post">
                                <div class="modal-body">
                                    
                                    <div class="form-group has-feedback">
                                        <label>treatment Name : </label>
                                        <input class="form-control" placeholder="Masukkan nama Treatment" type="text" required=""name="nama_treatment">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Treatment Price :</label>
                                        <input class="form-control" placeholder="Harga" type="number" name="harga_treatment" required="">
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
                function edit_treatment(id) {
                    $.ajax({
                        url: "<?php echo base_url("Admin/Master/Data/C_treatment/detailTreatment/")?>"+id,
                        type: "POST",
                        success: function(data) {
                            var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_treatment").val(hasil.id_treatment);
                        $("#nama_treatment").val(hasil.treatment_nama);
                        $("#harga_treatment").val(hasil.treatment_harga);

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