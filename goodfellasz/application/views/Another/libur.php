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
        KONFIGURASI HARU LIBUR NASIONAL
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gear"></i> Konfigurasi </a></li>
        <li class="active">Konfigurasi hari libur</li>
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
<div class = "form-group">
<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-input1">
<i class="fa fa-plus"></i> Tambah Hari Libur</button>
</div>
</div>


  </div>
                  </div>

            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: auto">
              <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color: #81CFE0">
                  <tr>

                  <th>NO</th>
								<th>Tanggal Mulai</th>
								<th>Tanggal berakhir</th>
  								<th>Keterangan</th>
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>
									<tr>
									<td>1.</td>
									<td>17-08-2018</td>
									<td>17-08-2018</td>
									<td>Hari kemerdekaan republik indonesia</td>
									<td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i>Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class=""></i> Delete</a></td>
								</tr>
								<tr>
									<td>2.</td>
									<td>22-08-2018</td>
									<td>22-08-2018</td>
									<td>Idul adha</td>
									<td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i>Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class=""></i> Delete</a></td>
								</tr>
								<tr>
									<td>3.</td>
									<td>11-09-2018</td>
									<td>11-09-2018</td>
									<td>Tahun Baru Hijriah</td>
									<td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i>Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class=""></i> Delete</a></td>
								</tr>
								<tr>
									<td>4.</td>
									<td>20-11-2018</td>
									<td>20-11-2018</td>
									<td>Maulid nabi muhammad</td>
									<td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i>Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class=""></i> Delete</a></td>
								</tr>
								<tr>
									<td>5.</td>
									<td>24-12-2018</td>
									<td>25-12-2018</td>
									<td>Natal</td>
									<td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i>Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class=""></i> Delete</a></td>
								</tr>


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

              <div class="modal fade" id="modal-input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        	<div class="modal-dialog modal-xs">
    			<div class="modal-content">
    				<div class="modal-header" align="center">
    					<img class="" id="img_logo" >
    					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    					</button>
    				</div>

                    <!-- Begin # DIV Form -->
                    <div id="div-forms">

                        <!-- Begin # Login Form -->
                        <form id="login-form">
                          <center><h3><i class="fa fa-calendar-minus-o"></i> Edit Hari Libur</h3></center>
    		                <div class="modal-body">
    				    		
    				    		<div class="form-group">
                				<label>Pilih tanggal dari :</label>
                				<div class="input-group date">
                  					<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                  					</div>
                  				<input class="form-control" id="datepicker" type="date">
                				</div>
                <!-- /.input group -->
             				 </div>
                                    <div class="form-group">
                				<label>Sampai tanggal :</label>
                				<div class="input-group date">
                  					<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                  					</div>
                  				<input class="form-control" id="datepicker" type="date">
                				</div>
                <!-- /.input group -->
             				 </div>
                                    
                                  
                              <div class="form-group has-feedback" >
                                <label>Keterangan</label>
                                  <textarea class="form-control" placeholder=""></textarea>
                                  
                            </div>

                      <div class="modal-footer">
                         <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                         <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                      </div>


                        </form>
                        <!-- End # Login Form -->


                    </div>
                        </div>
                          </div>
                </div>
                    </div>


                    <div class="modal fade" id="modal-input1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-xs">
                <div class="modal-content">
                  <div class="modal-header" align="center">
                    <img class="" id="img_logo" >
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                  </div>

                          <!-- Begin # DIV Form -->
                          <div id="div-forms">

                              <!-- Begin # Login Form -->
                              <form id="login-form">
                          <center><h3><i class="fa fa-calendar-minus-o"></i> Tambah Hari Libur nasional</h3></center>
    		                <div class="modal-body">
    				    		
    				    		<div class="form-group">
                				<label>Pilih tanggal dari :</label>
                				<div class="input-group date">
                  					<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                  					</div>
                  				<input class="form-control" id="datepicker" type="date">
                				</div>
                <!-- /.input group -->
             				 </div>
                                    <div class="form-group">
                				<label>Sampai tanggal :</label>
                				<div class="input-group date">
                  					<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                  					</div>
                  				<input class="form-control" id="datepicker" type="date">
                				</div>
                <!-- /.input group -->
             				 </div>
                                    
                                  
                              <div class="form-group has-feedback" >
                                <label>Keterangan</label>
                                  <textarea class="form-control" placeholder=""></textarea>
                                  
                            </div>

                      <div class="modal-footer">
                         <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                         <button type="button" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>
                      </div>


                        </form>
                              <!-- End # Login Form -->


                          </div>
                              </div>
                                </div>
                      </div>
                          </div>
