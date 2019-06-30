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
      Master Data Barberman
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
      <li class="active">Data Barberman</li>
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
                    <i class="fa fa-plus"></i> Add Barberman</button>
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
                    <th>No</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Status</th>
                    <th>Cabang</th>
                    <th>Kursi</th>
                    <th>Ready</th>
                    <th>ACTION</th>
                  </tr>

                </thead>
                <tbody>
                  <?php
                  $no=0;
                  foreach ($data_barber as $id_a) { 
                                        //$no++;
                                    //if($id_k->id==3){
                    ?>
                    <tr>
                      <td><?php echo $no += 1?></td>
                      <td><?php echo $id_a->barberman_nama; ?></td>
                      <td><?php echo $id_a->barberman_telp; ?></td>
                      <td><?php echo $id_a->barberman_status; ?></td>
                      <td><?php echo $id_a->barberman_cabang; ?></td>
                      <td><?php echo $id_a->barberman_kursi; ?></td>
                      <td>
                        <?php
                          if($id_a->barberman_ready == "Yes"){
                          ?>
                            <center>
                            <!--
                            <span style="background-color: #80ffff;color: #ffffff;padding: 5px;">
                              <span style="color: #000000;padding: 5px;"><?php echo $id_c->campaign_status; ?></span>
                            </span>
                            -->
                            <span class="label label-success" style="text-transform: uppercase;">
                            <?php echo $id_a->barberman_ready; ?>
                          </span>
                            </center>
                          <?php
                          }else {
                          ?>
                            <center>
                            <!--
                            <span style="background-color: #4fc13e;color: #ffffff;padding: 5px;">
                              <span style="color: #000000;padding: 5px;"><?php echo $id_c->campaign_status; ?></span>
                            </span>
                            -->
                            <span class="label label-default" style="text-transform: uppercase;">
                            <?php echo $id_a->barberman_ready; ?>
                          </span>
                            </center>
                          <?php
                          }
                          ?>  
                      </td>  
                      <td>
                        <a href="#" onclick="edit_barberman(<?php echo $id_a->id_barberman; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                          <i class="fa fa-edit"></i> Edit</a>&nbsp
                          <a href="<?php echo site_url('Admin/Master/User/C_barberman/deleteBarberman/'.$id_a->id_barberman) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
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
                Edit Data Barberman</h4>
              </div>

              <!-- Begin # DIV Form -->
              <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_barberman/editBarberman");?>" method="post">
                  <div class="modal-body">
                    <div class="form-group" >
                      <input type="hidden" class="form-control" id="id_barberman" placeholder="" name="id_barberman" readonly value="">
                    </div>
                    <div class="form-group has-feedback">
                      <label>Name</label>
                      <input class="form-control" placeholder="Full Name" type="text" required="" name="nama_barberman" id="nama_barberman">
                    </div>
                    <div class="form-group has-feedback">
                      <label>E-Mail</label>
                      <input class="form-control" placeholder="E-Mail" type="email" name="email_barberman" id="email_barberman" required>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Telephone</label>
                      <input class="form-control" placeholder="Phone Number" type="text" name="telp_barberman" id="telp_barberman" required>
                    </div>
                    <div class="form-group has-feedback">
                        <label>Address</label>
                        <input class="form-control" placeholder="Address" type="text" name="alamat_barberman" id="alamat_barberman" required>
                    </div>
                    <div class="form-group has-feedback">
                        <label>Status</label>
                        <input class="form-control" placeholder="Status" type="text" name="status_barberman" id="status_barberman" required>
                    </div>
                    <div class="form-group has-feedback">
                        <label>Cabang</label>
                        <select class="form-control" name="cabang_barberman" id="cabang_barberman" required>
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
                    <div class="form-group has-feedback">
                        <label>Kursi</label>
                        <select class="form-control" name="kursi_barberman" id="kursi_barberman" required>
                          <option value="1">Kursi 1</option>
                          <option value="2">Kursi 2</option>
                          <option value="3">Kursi 3</option>
                          <option value="4">Kursi 4</option>
                          <option value="5">Kursi 5</option>
                        </select>
                    </div>
                    <div class="form-group has-feedback">
                        <label>Ready</label>
                        <select class="form-control" name="ready_barberman" id="ready_barberman" required>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
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
                  Add Data Owner</h4>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                  <!-- Begin # Login Form -->
                  <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_barberman/insertBarberman");?>" method="post">
                    <div class="modal-body">
                      <div class="form-group has-feedback">
                        <label>Name</label>
                        <input class="form-control" placeholder="Full Name" type="text" required="" name="nama_barberman">
                      </div>
                      <div class="form-group has-feedback">
                        <label>E-Mail</label>
                        <input class="form-control" placeholder="E-Mail" type="email" name="email_barberman" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Telephone</label>
                        <input class="form-control" placeholder="Phone Number" type="text" name="telp_barberman" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Address</label>
                        <input class="form-control" placeholder="Address" type="text" name="alamat_barberman" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Status</label>

                        <input class="form-control" placeholder="Status" type="text" name="status_barberman" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Cabang</label>
                        <select class="form-control" name="cabang_barberman">
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
                      <div class="form-group has-feedback">
                        <label>Kursi</label>
                        <select class="form-control" name="kursi_barberman">
                          <option value="1">Kursi 1</option>
                          <option value="2">Kursi 2</option>
                          <option value="3">Kursi 3</option>
                          <option value="4">Kursi 4</option>
                          <option value="5">Kursi 5</option>
                        </select> 
                      </div>
                      <div class="form-group has-feedback">
                        <label>Ready</label>
                        <select class="form-control" name="ready_barberman">
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
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
            function edit_barberman(id) {
              $.ajax({
                url: "<?php echo base_url("Admin/Master/User/C_barberman/detailBarberman/")?>"+id,
                type: "POST",
                success: function(data) {
                  var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_barberman").val(hasil.id_barberman);
                        $("#nama_barberman").val(hasil.barberman_nama);
                        $("#email_barberman").val(hasil.barberman_email);
                        $("#telp_barberman").val(hasil.barberman_telp);
                        $("#alamat_barberman").val(hasil.barberman_alamat);
                        $("#status_barberman").val(hasil.barberman_status);
                        $("#cabang_barberman").val(hasil.barberman_cabang);
                        $("#kursi_barberman").val(hasil.barberman_kursi);
                        $("#ready_barberman").val(hasil.barberman_ready);

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