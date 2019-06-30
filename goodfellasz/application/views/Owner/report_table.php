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
			Report / Sales
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-star"></i> Report Table </a></li>
			<li class="active">Home</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">

				<div class="box">
					<div class="box-header">
						<div class="row">

							<!-- ./col 
							<div class="col-lg-2 col-xs-6">
								<label>&nbsp</label>
								<div class="form-group">
									<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-input">
										<i class="fa fa-plus"></i> Add Campaign</button>
									</div>
								</div>-->

							</div>
						</div>

						<!-- /.box-header -->
						<div class="box-body" style="overflow-x: auto">
							<?php echo $this->session->flashdata('pesan')?>
							<table id="example1" class="table table-bordered table-striped">
								<thead style="background-color: #81CFE0">
									<tr>
										<th rowspan="2"><center>No</center></th>
										<th rowspan="2"><center>Sales Name</center></th>
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
									$no=0;
									foreach ($data_table as $id_t) { 
                                        //$no++;
									?>
											<tr>
												<td><center><?php echo $no += 1?></center></td>
												<td><center><a href="<?php echo site_url('Admin/C_reportsales/index/'.$id_t->campaign_sales) ?>"><?php echo $id_t->campaign_sales; ?></a></center></td>
													<td><center><?php echo $id_t->Client; ?></center></td>
													<td><center><?php echo $id_t->InProgress; ?></center></td>
													<td><center><?php echo $id_t->Pending; ?></center></td>
													<td><center>
														<?php echo $id_t->Close; ?>
													</center></td>
												</tr>
												<?php 
											
                                        //else{
                                        //}
										} ?>

												<!-- color for pending
												<span style="background-color: #b1980a;color: #ffffff;padding: 5px;">
													<span style="color: #ffffff;padding: 5px;">pending	</span>
												</span>
											-->
											

											<!-- color for in progress
												<span style="background-color: #4fc13e;color: #ffffff;padding: 5px;">
													<span style="color: #ffffff;padding: 5px;">In Progress</span>
												</span>
											-->
											

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
								Proses Data Campaign</h4>
							</div>

							<!-- Begin # DIV Form -->
							<div id="div-forms">

								<!-- Begin # Login Form -->
								<form id="login-form" action ="<?php echo site_url("Admin/C_campaign/editCampaign");?>" method="post">
									<div class="modal-body">
										<div class="form-group" >
											<input type="hidden" class="form-control" id="id_campaign" placeholder="" name="id_campaign" readonly value="">
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group has-feedback">
													<label>Customer ID : </label>
													<input type="text" class="form-control" id="customer_nama" placeholder="" name="customer_nama" readonly value="" required="">
													<!--
													<select class="form-control" name="customer_nama" id="customer_nama" placeholder="Select Customer" required readonly value="" disabled="">
														<option value="" disabled selected>Select Customer :</option>
														<?php 
														foreach ($data_customer as $row_customer) {
															?>
															<option value="<?php echo $row_customer->customer_nama;?>">
																<?php echo $row_customer->customer_nama; ?>
															</option>
														<?php } ?>
													</select>
												-->
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<label>Sales : </label>
												<select class="form-control" name="sales_nama" id="sales_nama" placeholder="Select Sales" required>
													<option value="" disabled selected>Select Sales :</option>
													<?php 
													foreach ($data_sales as $row_sales) {
														?>
														<option value="<?php echo $row_sales->sales_nama;?>">
															<?php echo $row_sales->sales_nama; ?>
														</option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<label>Product : </label>
												<select class="form-control" name="product_nama" id="product_nama" placeholder="Select Product" required>
													<option value="" disabled selected>Select Product :</option>
													<?php 
													foreach ($data_product as $row_product) {
														?>
														<option value="<?php echo $row_product->produk_nama;?>">
															<?php echo $row_product->produk_nama; ?>
														</option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<label>Status : </label>
												<select class="form-control" name="status_campaign" id="status_campaign" placeholder="Select Status" required>
													<option value="" disabled selected>Select Status :</option>
													<?php 
													foreach ($data_status as $row_status) {
														?>
														<option value="<?php echo $row_status->status_nama;?>">
															<?php echo $row_status->status_nama; ?>
														</option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<label>Date</label>
												<input class="form-control" placeholder="" type="date" name="date_campaign" id="date_campaign" required="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group has-feedback">
												<label>Time</label>
												<input class="form-control" placeholder="" type="time" name="time_campaign" id="time_campaign" required="">
											</div>
										</div>
									</div>
									<div class="form-group has-feedback">
										<label>Respond</label>
										<textarea class="form-control" placeholder="Tanggapan Client" required="" name="tanggapan_campaign" id="tanggapan_campaign"></textarea>
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
								Add Data Campaign</h4>
							</div>

							<!-- Begin # DIV Form -->
							<div id="div-forms">

								<!-- Begin # Login Form -->
								<form id="login-form" action ="<?php echo site_url("Admin/C_campaign/insertCampaign");?>" method="post">
									<div class="modal-body">
										<div class="form-group has-feedback">
											<label>Customer : </label>
											<select class="form-control select2" name="customer_nama" placeholder="Select Customer" required>
												<option value="" disabled selected>Select Customer :</option>
												<?php 
												foreach ($data_customer as $row_customer) {
													?>
													<option value="<?php echo $row_customer->customer_id;?>">
														<?php echo $row_customer->customer_nama; ?>
													</option>
												<?php } ?>
											</select>
										</div>
										<div class="form-group has-feedback">
											<label>Sales : </label>
											<select class="form-control" name="sales_nama" placeholder="Select Sales" required>
												<option value="" disabled selected>Select Sales :</option>
												<?php 
												foreach ($data_sales as $row_sales) {
													?>
													<option value="<?php echo $row_sales->sales_nama;?>">
														<?php echo $row_sales->sales_nama; ?>
													</option>
												<?php } ?>
											</select>
										</div>
										<div class="form-group has-feedback">
											<label>Product : </label>
											<select class="form-control" name="product_nama" placeholder="Select Product" required>
												<option value="" disabled selected>Select Product :</option>
												<?php 
												foreach ($data_product as $row_product) {
													?>
													<option value="<?php echo $row_product->produk_nama;?>">
														<?php echo $row_product->produk_nama; ?>
													</option>
												<?php } ?>
											</select>
										</div>
										<div class="form-group has-feedback">
											<label>Date</label>
											<input class="form-control" placeholder="" type="date" name="date_campaign" required="">
										</div>
										<!--
										<div class="input-group">
											<input class="form-control timepicker" type="text">

											<div class="input-group-addon">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									-->
									<div class="form-group has-feedback">
										<label>Time</label>
										<input class="form-control" placeholder="" type="time" name="time_campaign">
									</div>

									<div class="form-group" >
										<input type="hidden" class="form-control" id="status_campaign" placeholder="" name="status_campaign" readonly value="Client">
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
				function proses_campaign(id) {
					$.ajax({
						url: "<?php echo base_url("Admin/C_campaign/detailCampaign/")?>"+id,
						type: "POST",
						success: function(data) {
							var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_campaign").val(hasil.campaign_id);
                        $("#customer_nama").val(hasil.campaign_customer);
                        //$('option[value="' + hasil.campaign_customer + '"]')
                        //.attr('selected', true);
                        $('option[value="' + hasil.campaign_sales + '"]')
                        .attr('selected', true);
                        //$("#date_campaign").val(hasil.campaign_date);
                        //$("#time_campaign").val(hasil.campaign_time);
                        $('option[value="' + hasil.campaign_product + '"]')
                        .attr('selected', true);
                        $('option[value="' + hasil.campaign_status + '"]')
                        .attr('selected', true);

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

			