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
      Master Data Owner
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
      <li class="active">Data Owner</li>
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
                    <i class="fa fa-plus"></i> Add Owner</button>
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
                    <th>Username</th>
                    <th>E-Mail</th>
                    <th>telephone</th>
                    <th>Address</th>
                    <th>ACTION</th>
                  </tr>

                </thead>
                <tbody>
                  <?php
                  $no=0;
                  foreach ($data_owner as $id_a) { 
                                        //$no++;
                                    //if($id_k->id==3){
                    ?>
                    <tr>
                      <td><?php echo $no += 1?></td>
                      <td><?php echo $id_a->owner_nama; ?></td>
                      <td><?php echo $id_a->owner_username; ?></td>
                      <td><?php echo $id_a->owner_email; ?></td>
                      <td><?php echo $id_a->owner_telp; ?></td>
                      <td><?php echo $id_a->owner_alamat; ?></td>
                      <td>
                        <a href="#" onclick="edit_owner(<?php echo $id_a->id_owner; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                          <i class="fa fa-edit"></i> Edit</a>&nbsp
                          <a href="<?php echo site_url('Admin/Master/User/C_owner/deleteOwner/'.$id_a->id_owner) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
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
                Edit Data Owner</h4>
              </div>

              <!-- Begin # DIV Form -->
              <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_owner/editOwner");?>" method="post">
                  <div class="modal-body">
                    <div class="form-group" >
                      <input type="hidden" class="form-control" id="id_owner" placeholder="" name="id_owner" readonly value="">
                    </div>
                    <div class="form-group has-feedback">
                      <label>Username</label>
                      <input class="form-control" placeholder="Username" type="text" name="username_owner" id="username_owner" required>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Password</label>
                      <input class="form-control" placeholder="Password" type="password" name="password_owner" id="password_owner" required>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Name</label>
                      <input class="form-control" placeholder="Full Name" type="text" required="" name="nama_owner" id="nama_owner">
                    </div>
                    <div class="form-group has-feedback">
                      <label>E-Mail</label>
                      <input class="form-control" placeholder="E-Mail" type="email" name="email_owner" id="email_owner" required>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Telephone</label>
                      <input class="form-control" placeholder="Phone Number" type="text" name="telp_owner" id="telp_owner" required>
                    </div>
                    <div class="form-group has-feedback">
                        <label>Address</label>
                        <input class="form-control" placeholder="Address" type="text" name="alamat_owner" id="alamat_owner" required>
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
                  <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_owner/insertOwner");?>" method="post">
                    <div class="modal-body">
                      <div class="form-group has-feedback">
                        <label>Username</label>
                        <input class="form-control" placeholder="username" type="text" name="username_owner" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Password</label>
                        <input class="form-control" placeholder="password" type="password" name="password_owner" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Name</label>
                        <input class="form-control" placeholder="Full Name" type="text" required="" name="nama_owner">
                      </div>
                      <div class="form-group has-feedback">
                        <label>E-Mail</label>
                        <input class="form-control" placeholder="E-Mail" type="email" name="email_owner" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Telephone</label>
                        <input class="form-control" placeholder="Phone Number" type="text" name="telp_owner" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Address</label>
                        <input class="form-control" placeholder="Address" type="text" name="alamat_owner" required>
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
            function edit_owner(id) {
              $.ajax({
                url: "<?php echo base_url("Admin/Master/User/C_owner/detailOwner/")?>"+id,
                type: "POST",
                success: function(data) {
                  var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_owner").val(hasil.id_owner);
                        $("#username_owner").val(hasil.owner_username);
                        $("#password_owner").val(hasil.owner_password);
                        $("#nama_owner").val(hasil.owner_nama);
                        $("#email_owner").val(hasil.owner_email);
                        $("#telp_owner").val(hasil.owner_telp);
                        $("#alamat_owner").val(hasil.owner_alamat);

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