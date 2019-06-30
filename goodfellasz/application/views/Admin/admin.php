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
      Master Data Admin
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
      <li class="active">Data Admin</li>
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
                    <i class="fa fa-plus"></i> Add Admin</button>
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
                  foreach ($data_admin as $id_a) { 
                                        //$no++;
                                    //if($id_k->id==3){
                    ?>
                    <tr>
                      <td><?php echo $no += 1?></td>
                      <td><?php echo $id_a->admin_nama; ?></td>
                      <td><?php echo $id_a->admin_username; ?></td>
                      <td><?php echo $id_a->admin_email; ?></td>
                      <td><?php echo $id_a->admin_telp; ?></td>
                      <td><?php echo $id_a->alamat_admin; ?></td>
                      <td>
                        <a href="#" onclick="edit_admin(<?php echo $id_a->admin_id; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                          <i class="fa fa-edit"></i> Edit</a>&nbsp
                          <a href="<?php echo site_url('Admin/Master/User/C_admin/deleteAdmin/'.$id_a->admin_id) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
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
                Edit Data admin</h4>
              </div>

              <!-- Begin # DIV Form -->
              <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_admin/editAdmin");?>" method="post">
                  <div class="modal-body">
                    <div class="form-group" >
                      <input type="hidden" class="form-control" id="id_admin" placeholder="" name="id_admin" readonly value="">
                    </div>
                    <div class="form-group has-feedback">
                      <label>Username</label>
                      <input class="form-control" placeholder="Username" type="text" name="username_admin" id="username_admin" required>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Password</label>
                      <input class="form-control" placeholder="Password" type="password" name="password_admin" id="password_admin" required>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Name</label>
                      <input class="form-control" placeholder="Full Name" type="text" required="" name="nama_admin" id="nama_admin">
                    </div>
                    <div class="form-group has-feedback">
                      <label>E-Mail</label>
                      <input class="form-control" placeholder="E-Mail" type="email" name="email_admin" id="email_admin" required>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Telephone</label>
                      <input class="form-control" placeholder="Phone Number" type="text" name="telp_admin" id="telp_admin" required>
                    </div>
                    <div class="form-group has-feedback">
                        <label>Address</label>
                        <input class="form-control" placeholder="Address" type="text" name="alamat_admin" id="alamat_admin" required>
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
                  Add Data admin</h4>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                  <!-- Begin # Login Form -->
                  <form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_admin/insertAdmin");?>" method="post">
                    <div class="modal-body">
                      <div class="form-group has-feedback">
                        <label>Username</label>
                        <input class="form-control" placeholder="username" type="text" name="username_admin" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Password</label>
                        <input class="form-control" placeholder="password" type="password" name="password_admin" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Name</label>
                        <input class="form-control" placeholder="Full Name" type="text" required="" name="nama_admin">
                      </div>
                      <div class="form-group has-feedback">
                        <label>E-Mail</label>
                        <input class="form-control" placeholder="E-Mail" type="email" name="email_admin" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Telephone</label>
                        <input class="form-control" placeholder="Phone Number" type="text" name="telp_admin" required>
                      </div>
                      <div class="form-group has-feedback">
                        <label>Address</label>
                        <input class="form-control" placeholder="Address" type="text" name="alamat_admin" required>
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
            function edit_admin(id) {
              $.ajax({
                url: "<?php echo base_url("Admin/Master/User/C_admin/detailAdmin/")?>"+id,
                type: "POST",
                success: function(data) {
                  var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_admin").val(hasil.admin_id);
                        $("#username_admin").val(hasil.admin_username);
                        $("#password_admin").val(hasil.admin_password);
                        $("#nama_admin").val(hasil.admin_nama);
                        $("#email_admin").val(hasil.admin_email);
                        $("#telp_admin").val(hasil.admin_telp);
                        $("#alamat_admin").val(hasil.alamat_admin);

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