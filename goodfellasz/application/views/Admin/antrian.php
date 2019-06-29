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
      Data Antrian 
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
      <li class="active">Data Antrian</li>
    </ol>
  </section>
  <section class="content">
    <div class="box-header">
      <div class="row">
        <form action="<?=site_url('Admin/C_antrian/get_antrian')?>" method="post" id="antrian">

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
            <button type="submit" class="btn btn-primary" form="antrian">Cari</button>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4" style ="padding-left:50px;padding-right:50px">
        <div class="col-4" style ="padding-left:50px;padding-right:50px">

          </div>
          <?php 
          $no=1;
          foreach ($data_barberman as $id_c) {
            if($id_c->barberman_ready == "Yes"){ 
              ?>
        <div class="col-4">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3><?php echo $id_c->barberman_kursi; ?></h3>
                    <?php
                    echo $id_c->barberman_nama;
                    echo "<br>";echo $id_c->barberman_status ;
                    echo "<br>";
                    echo "Tersedia";
                    echo "<br>";echo $id_c->barberman_cabang ;
                    

                    ?>
                    <p>



                    </p>

                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="#" onclick="tambah_antrian(<?php echo $id_c->id_barberman; ?>)" class="small-box-footer" data-toggle="modal" data-target="#modal-input">Add Queue <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              <?php } 
              else {
                ?>
        <div class="col-4 ">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3><?php echo $id_c->barberman_kursi; ?></h3>
                      <?php
                      echo $id_c->barberman_nama;
                      echo "<br>";echo $id_c->barberman_status ;
                      echo "<br>";
                      echo " Tidak Tersedia"; echo "<br>";echo $id_c->barberman_cabang ;
                      ?>
                      <p>



                      </p>

                    </div>
                    <div class="icon">
                      <i class="ion ion-person"></i>
                    </div>
                    <a href="#" class="small-box-footer">Add Queue <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                  <?php
                }?>
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Tabel Antrian</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tbody>
                        <tr>
                          <th style="width: 10px">no</th>
                          <th>User</th>
                          <th>Time</th>
                          <th>Status</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                        <?php 
                        $no = 1;
                        foreach ($antrian as $val) {
                          if($id_c->barberman_kursi == $val->antrian_kursi && $id_c->barberman_cabang == $val->antrian_cabang){
                            ?>
                            <tr>
                              <td> <?php echo $no++ ?></td>
                              <td> <?php echo $val->pelanggan_nama ?></td>
                              <td> <?php echo $val->antrian_jam ?></td>
                              <td> 
                                <?php if($val->antrian_status == "pending") {
                                  ?>
                                  <span class="label label-warning" style="text-transform: uppercase;">                            
                                    <?php echo $val->antrian_status ?>
                                  </span>
                                  <?php 
                                }
                                else{
                                  ?>
                                  <span class="label label-success" style="text-transform: uppercase;">                            
                                    <?php echo $val->antrian_status ?>
                                  </span>
                                  <?php
                                }?>

                              </td>
                              <td>
                                <?php if ($this->session->userdata('status')=="login_admin") {?>
                                  <a href="#" onclick="edit_antrian(<?php echo $val->id_antrian; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                                   <i class="fa fa-edit"></i> Edit</a>&nbsp
                                   <a href="<?php echo site_url('Admin/C_antrian/delete_antrian/'.$val->id_antrian) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                                 <?php } ?>
                               </td>

                             </tr>
                             <?php
                           }
                         }
                         ?>
                       </tbody>
                     </table>
                   </div>
                   <!-- /.box-body -->
                 </div>
               </div>
             <?php  } ?>


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
              Edit Data Antrian</h4>
            </div>

            <!-- Begin # DIV Form -->
            <div id="div-forms">

              <!-- Begin # Login Form -->
              <form id="login-form" action ="<?php echo site_url("Admin/C_antrian/edit_antrian");?>" method="post">
                <div class="modal-body">
                  <div class="form-group has-feedback">
                    <input type="hidden" class="form-control" id="id_antrian" placeholder="" name="id_antrian" readonly >
                  </div>
                  <div class="form-group has-feedback">
                    <label>Nama User :</label>
                    <input class="form-control" placeholder="Nama User" type="text" name="nama_user" id="nama_user" required="">
                  </div>
                  <div class="form-group has-feedback">
                    <label>Time :</label>
                    <small>Ex :10:00 AM / 10:00 PM</small>
                    <input class="form-control timepicker" placeholder="" type="time" min="10:00" max="21:00" required=""name="time" id="time">
                  </div>
                  <div class="form-group has-feedback">
                    <label>status</label>
                    <select class="form-control" name="status">
                      <option value="pending">Pending</option>
                      <option value="process">Process</option>
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
                Add Queue</h4>
              </div>

              <!-- Begin # DIV Form -->
              <div id="div-forms">

                <!-- Begin # Login Form -->
                <form id="login-form" action ="<?php echo site_url("Admin/C_antrian/insert_antrian");?>" method="post">
                  <div class="modal-body">
                    <div class="form-group has-feedback" >
                      <input type="hidden" class="form-control" id="id_barberman" placeholder="" name="id_barberman" >
                    </div>
                    <div class="form-group has-feedback" >
                      <input type="hidden" class="form-control" id="cabang" placeholder="" name="cabang" >
                    </div>
                    <div class="form-group has-feedback" >
                      <input type="hidden" class="form-control" id="no_kursi" placeholder="" name="no_kursi" >
                    </div>
                    <div class="form-group has-feedback">
                      <label>Nama User :</label>
                      <select class="form-control" name ="pelanggan">
                      <option value="" disabled selected>Pilih  :</option>
                        <?php
                        foreach ($pelanggan as $key ) {
                          ?>
                          <option value ="<?php echo $key->id_pelanggan ?>">
                            <?php echo $key->pelanggan_nama; ?>     
                          </option>
                          <?php
                        }
                        ?>
                      </select>

                    </div>
                    <div class="form-group has-feedback">
                      <label>Time : </label>
                      <small>Ex :10:00 AM / 10:00 PM</small>
                      <input class="form-control timepicker" placeholder="" type="time" min="10:00" max="21:00" required=""name="time">
                    </div>
                    <!--
                     <div class="form-group has-feedback">
                            <label>Cabang</label>
                            <select class="form-control" name="cabang">
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

        <script>
          function tambah_data(id,di,ni) {
            var idn = id;
            var id = di;
            var on = ni;
            
          }
          function tambah_antrian(id){
            $.ajax({
             url: "<?php echo site_url("Admin/C_antrian/detail_barberman/")?>"+id,
             type: "POST",
             success: function(data) {
              var hasil = jQuery.parseJSON(data);
              console.log(hasil);
              $("#modal-input #id_barberman").val(hasil.id_barberman);
              $("#modal-input #cabang").val(hasil.barberman_cabang);
              $("#modal-input #no_kursi").val(hasil.barberman_kursi);
            }
          });
          }
          function edit_antrian(id){
            $.ajax({
             url: "<?php echo site_url("Admin/C_antrian/detail_antrian/")?>"+id,
             type: "POST",
             success: function(data) {
              var hasil = jQuery.parseJSON(data);
              console.log(hasil);
              $("#modal-edit #id_antrian").val(hasil.id_antrian);
              $("#modal-edit #time").val(hasil.antrian_jam);
              $("#modal-edit #status").val(hasil.antrian_status);
              $("#modal-edit #nama_user").val(hasil.id_pelanggan);
              var x = (hasil.id_siswa);
              get_data(x);

            }
          });
          }
        </script>