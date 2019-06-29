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
			<?php foreach ($data_salescustom as $key) {
				?> 
				Report Sales <?php echo $key->campaign_sales; 
				break; 

			}
			?> 
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-star"></i> Campaign </a></li>
			<li class="active">History</li>
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
							<!--
							<div class="col-lg-2 col-xs-6">
								<label>&nbsp</label>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-input">
										<i class="fa fa-plus"></i> Add Campaign</button>
									</div>
								</div>
							-->


							<div class="col-lg-12">
								<a href="<?php echo base_url("movement/showTable");?>">
									<button type="submit" class="btn btn-default pull-right">
										<i class="fa fa-sign-in"> Back To Report/Sales</i>
									</button>
								</a>
							</div>

						</div>
					</div>

					<!-- /.box-header -->
					<div class="box-body" style="overflow-x: auto">
						<table id="example1" class="table table-bordered table-striped">
							<thead style="background-color: #81CFE0">
								<tr>
									<th rowspan="2"><center>No</center></th>
									<th rowspan="2"><center>Custommer Name</center></th>
									<th colspan="4"><center>Campaign</center></th>
								</tr>
								<tr>
									<th><center>Client</center></th>
									<th><center>In Progress</center></th>
									<th><center>Pending</center></th>
									<th><center>Close</center></th>
								</tr>

							</thead>
							<tbody>
								<?php
								// print_r($data_salescustom);
								$no=0;
								foreach ($data_salescustom as $id_t) { 
                                        //$no++;
									?>
									<tr>
										<td><center><?php echo $no += 1?></center></td>
										<td><center><?php echo $id_t->customer_nama; ?></center></td>
										<td><center><?php echo $id_t->Client; ?></center></td>
										<td><center><?php echo $id_t->InProgress; ?></center></td>
										<td><center><?php echo $id_t->Pending; ?></center></td>
										<td><center>
											<?php echo $id_t->Close; ?>
										</center></td>
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
					Edit Data Campaign</h4>
				</div>

				<!-- Begin # DIV Form -->
				<div id="div-forms">

					<!-- Begin # Login Form -->
					<form id="login-form">
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label>Customer :</label>
										<select class="form-control" name="Sales">
											<option value="1">Hanif</option>
											<option value="2">Alif</option>
											<option value="3">Jali</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label>Sales :</label>
										<select class="form-control" name="Sales" placeholder="pilih sales">
											<option value="" disabled="" selected="">pilih :</option>
											<option value="1">Suparman</option>
											<option value="2">Wonder</option>
										</select>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label>Tanggal</label>
										<input class="form-control" placeholder="" type="date">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label>Jam</label>
										<input class="form-control" placeholder="" type="time">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label>Product :</label>
										<select class="form-control" name="Sales">
											<option value="1">Samsung S8</option>
											<option value="2">ROG</option>
											<option value="3">MacBook</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group has-feedback">
										<label>Status :</label>
										<select class="form-control" name="Sales">
											<option value="1">Client</option>
											<option value="2">In progress</option>
											<option value="3">pending</option>
											<option value="4">Close</option>
										</select>
									</div>
								</div>
							</div>




							<div class="form-group has-feedback">
								<label>Tanggapan</label>
								<textarea class="form-control" placeholder="Tanggapan Client" required=""></textarea>
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

	<div class="modal fade" id="modal-input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-xs">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span></button>
						<h4 class="modal-title text-center">
						Tambah Data Campaign</h4>
					</div>

					<!-- Begin # DIV Form -->
					<div id="div-forms">

						<!-- Begin # Login Form -->
						<form id="login-form">
							<div class="modal-body">
								<div class="form-group has-feedback">
									<label>Customer :</label>
									<select class="form-control" name="Sales">
										<option value="1">Hanif</option>
										<option value="2">Alif</option>
										<option value="3">Jali</option>
									</select>
								</div>
								<div class="form-group has-feedback">
									<label>Sales :</label>
									<select class="form-control" name="Sales">
										<option value="1">Suparman</option>
										<option value="2">Wonder</option>
									</select>
								</div>
								<div class="form-group has-feedback">
									<label>Product :</label>
									<select class="form-control" name="Sales">
										<option value="1">Samsung S8</option>
										<option value="2">ROG</option>
										<option value="3">MacBook</option>
									</select>
								</div>
								<div class="form-group has-feedback">
									<label>Tanggal</label>
									<input class="form-control" placeholder="" type="date">
								</div>
								<div class="form-group has-feedback">
									<label>Jam</label>
									<input class="form-control" placeholder="" type="time">
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