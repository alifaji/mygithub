<?php include('header.php');?>
<?php include('slidebar.php');?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        REKAP DATA PER BULAN
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()."assets/";?>#"><i class="fa fa-edit"></i> Rekap absen & kalkulasi gaji</a></li>
        <li class="active">Rekap data Bulanan</li>
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
                <div class="col-lg-2 col-xs-4">
                         <div class="form-group">
                				<label>Pilih tanggal dari :</label>
                				<div class="input-group date">
                  					<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                  					</div>
                  				<input class="form-control pull-right" id="datepicker" type="date">
                				</div>
                <!-- /.input group -->
             				 </div>
                </div>
                <div class="col-lg-2 col-xs-4" style="margin-left:50px">
                         <div class="form-group">
                				<label>Sampai tanggal:</label>
                				<div class="input-group date">
                  					<div class="input-group-addon">
                    					<i class="fa fa-calendar"></i>
                  					</div>
                  				<input class="form-control pull-right" id="datepicker" type="date">
                				</div>
                <!-- /.input group -->
             				 </div>
                </div>
                <div class="col-lg-2 col-xs-2"style="margin-left:50px">
                <label>&nbsp</label>
              <div class = "form-group">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-filter"></i> Filter Data</button>
</div>
</div>
         <div class="col-lg-4 col-xs-4"style="margin-left:80px" >
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
              <table id="example1" class="table table-bordered table-striped">
                <thead style="background-color: #81CFE0">
                <tr>
                  <th rowspan="2"><center>No</center></th>
                  <th rowspan="2"><center>Nama</center></th>
                  <th rowspan="2"><center>Jabatan</center></th>
                  <th rowspan="2"><center>Periode / Tgl Masuk </center></th>
                  <th colspan="7"><center>Perhitungan</center></th>
                  <th rowspan="2"><center>Dibayarkan</center></th>
                </tr>
                <tr>
                	<th><center>Hari Masuk</center></th>
                	<th><center>Upah Tetap/Hr</center></th>
                	<th><center>Jumlah</center></th>
                	<th colspan="2"><center>Lembur Hr Libur Nasional</center></th>
                	<th><center>Lembur Harian > 17.00 WIB</center></th>
                	<th><center>Jumlah</center></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                	<td>1.</td>
                	<td>martono</td>
                	<td>K3 & Kebersihan</td>
                	<td>26 Maret S/D 12 April</td>
                	<td>24</td>
                	<td>70.000</td>
                	<td>1.680.000</td>
                	<td>12</td>
                	<td>8.750</td>
                	<td>10</td>
                	<td>105.000</td>
                	<td>1.785.000</td>
                </tr>
                <tr>
                	<td>2.</td>
                	<td>Firman</td>
                	<td>K3 & Kebersihan</td>
                	<td>26 Maret S/D 12 April</td>
                	<td>27</td>
                	<td>70.000</td>
                	<td>1.890.000</td>
                	<td>26</td>
                	<td>8.750</td>
                	<td>10</td>
                	<td>227.000</td>
                	<td>2.117.000</td>
                </tr>
                <tr>
                	<td>3.</td>
                	<td>Ajat</td>
                	<td>K3 & Kebersihan</td>
                	<td>26 Maret S/D 12 April</td>
                	<td>18</td>
                	<td>70.000</td>
                	<td>1.260.000</td>
                	<td>26</td>
                	<td>8.750</td>
                	<td>10</td>
                	<td>227.000</td>
                	<td>1.487.000</td>
                </tr>
                <tr>
                	<td>4.</td>
                	<td>Asep</td>
                	<td>K3 & Kebersihan</td>
                	<td>26 Maret S/D 12 April</td>
                	<td>32</td>
                	<td>70.000</td>
                	<td>2.240.000</td>
                	<td>26</td>
                	<td>8.750</td>
                	<td>8</td>
                	<td>70.000</td>
                	<td>2.310.000</td>
                </tr>
                <tr>
                	<td>5.</td>
                	<td>Agus</td>
                	<td>K3 & Kebersihan</td>
                	<td>26 Maret S/D 12 April</td>
                	<td>24</td>
                	<td>70.000</td>
                	<td>1.680.000</td>
                	<td>26</td>
                	<td>8.750</td>
                	<td>18</td>
                	<td>157.000</td>
                	<td>1.837.000</td>
                </tr>

            	</tbody>
            	<tfoot style="background-color: #F5D76E">
                <tr>
                	<th colspan="11"><center>TOTAL</center></th>
                	<td>8.323.212</td>
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
    <!-- /.content -->

  <!-- /.content-wrapper -->
<?php include('footer.php');?>
