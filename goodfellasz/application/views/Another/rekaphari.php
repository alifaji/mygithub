<?php include('header.php');?>
<?php include('slidebar.php');?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        REKAP DATA PER HARI
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()."assets/";?>#"><i class="fa fa-edit"></i> Rekap absen & kalkulasi gaji</a></li>
        <li class="active">Rekap data harian</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="row">

                <!-- ./col -->
                <div class="col-lg-2 col-xs-6">
                         <div class="form-group">
                				<label>Pilih tanggal:</label>
                				<div class="input-group date">
                  					<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                  					</div>
                  				<input class="form-control pull-right" id="datepicker" type="date">
                				</div>
                <!-- /.input group -->
             				 </div>
                </div>
                <div class="col-lg-2 col-xs-6"style="margin-left:50px">
                <label>&nbsp</label>
              <div class = "form-group">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-filter"></i> Filter Data</button>
</div>
</div>
         <div class="col-lg-7 col-xs-2"style="margin-left:40px">
              <label>&nbsp</label>
         <div class = "form-group">
       <a href="#" class="btn btn-success pull-right"><i class="fa fa-download"></i> Simpan Excel</a>

              <label>&nbsp</label>

       <a href="#" class="btn btn-default pull-right " style = "margin-right:5px"><i class="fa fa-print"></i> Print</a>
</div>
</div>
</div>




                  </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead style="background-color: #81CFE0">
                <tr>
                  <th><center>No</center></th>
                  <th><center>AC-NO</center></th>
                  <th><center>Nama</center></th>
                  <th><center>Tanggal</center></th>
                  <th><center>Clock-In</center></th>
                  <th><center>Clock-Out</center></th>
                  <th><center>OT time</center></th>
                  <th><center>Department</center></th>
                  <th><center>TimeTable</center></th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                	<td>1.</td>
                	<td>10001</td>
                	<td>Wahyudi</td>
                	<td>10/05/2018</td>
                	<td>08.11</td>
                	<td>17.01</td>
                	<td></td>
                	<td>Staff Jagat</td>
                	<td>Normal</td>
                	<td>
                		<a href="#" class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#upload-modal" ><i class="fa fa-upload"></i> Upload</a>
                	</td>

                </tr>
                <tr>
                	<td>2.</td>
                	<td>10001</td>
                	<td>Anwar</td>
                	<td>10/05/2018</td>
                	<td>08.15</td>
                	<td>17.02</td>
                	<td></td>
                	<td>Staff Jagat</td>
                	<td>Normal</td>
                	<td>
                		<a href="#" class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#upload-modal" ><i class="fa fa-upload"></i> Upload</a>
                	</td>

                </tr>
                <tr>
                	<td>3.</td>
                	<td>10001</td>
                	<td>Budi</td>
                	<td>10/05/2018</td>
                	<td>07.50</td>
                	<td>20.05</td>
                	<td>03.05</td>
                	<td>Staff Jagat</td>
                	<td>Normal</td>
                	<td>
                		<a href="#" class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#upload-modal" ><i class="fa fa-upload"></i> Upload</a>
                	</td>

                </tr>
                <tr>
                	<td>4.</td>
                	<td>10001</td>
                	<td>Santoso</td>
                	<td>10/05/2018</td>
                	<td>07.58</td>
                	<td></td>
                	<td></td>
                	<td>Staff Jagat</td>
                	<td style="background-color: #F7CA18"><i class="fa fa-warning"></i> Warning</td>
                	<td>
                		<a href="#" class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#upload-modal" ><i class="fa fa-upload"></i> Upload</a>
                	</td>

                </tr>
                <tr>
                	<td>5.</td>
                	<td>10001</td>
                	<td>Choirul</td>
                	<td>10/05/2018</td>
                	<td>07.50</td>
                	<td>21.05</td>
                	<td>04.05</td>
                	<td>Staff Jagat</td>
                	<td>Normal</td>
                	<td>
                		<a href="#" class="btn btn-info btn-xs" role="button" data-toggle="modal" data-target="#upload-modal" ><i class="fa fa-upload"></i> Upload</a>
                	</td>

                </tr>
            	</tbody>
            	<tfoot style="background-color: #F5D76E">
                <tr>

                </tr>
                </tfoot>
              </table>

            </div>
          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


  	</div>

  </section>
  	</div>
  <?php include('footer.php');?>
    <!-- /.content -->
        <div class="modal fade" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        	<div class="modal-dialog modal-md">
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
        <center><h3><i class="fa fa-file"></i> File Adjustment</h3></center>
    	<div class="modal-body">
    		<div class="form-group">
				<label>Nama :</label>
					<input name="" value="" class="form-control disabled" disabled="" type="text">
            <div class="form-group">
				<label>Keterangan :</label>
				    <textarea class="form-control" name="Keterangan" required=""></textarea>
			</div>
            <div class="form-group">
				<label>Saksi :</label>
				    <input name="plat" value="" class="form-control" type="text">
			</div>
            <div class="form-group">
                  <label for="exampleInputFile">Masukkan file pendukung : </label>
                  <input id="exampleInputFile" type="file">
                </div>
        </div>
    	<div class="modal-footer">
            <div>
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
               <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>

    	</div>
    </form>
                        <!-- End # Login Form -->

</div>

               </div>

            <!-- /.box-body -->
          	</div>
        </div>
          </div>


  <!-- /.content-wrapper -->
