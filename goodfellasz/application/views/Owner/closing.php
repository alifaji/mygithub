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
			Closing
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-lock"></i> Closing </a></li>
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

							<!-- ./col -->
							<div class="col-lg-2 col-xs-6">
								<label>&nbsp</label>
								<!--
								<div class="form-group">
									<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-input">
										<i class="fa fa-plus"></i> Add Campaign</button>
									</div>
								-->
							</div>

						</div>
					</div>

					<!-- /.box-header -->
					<div class="box-body" style="overflow-x: auto">
						<?php echo $this->session->flashdata('pesan')?>
						<table id="example1" class="table table-bordered table-striped">
							<thead style="background-color: #81CFE0">
								<tr>
									<th><center>No</center></th>
									<th><center>Sales Name</center></th>
									<th><center>Custommer Name</center></th>
									<th><center>Product</center></th>
									<th><center>Date</center></th>
									<th><center>Status</center></th>
									<th><center>ACTION</center></th>
								</tr>

							</thead>
							<tbody>
								<?php
								$no=0;
								foreach ($data_campaign as $id_c) { 
                                        //$no++;
									if($id_c->campaign_status == "Close"){
										?>
										<tr>
											<td><center><?php echo $no += 1?></center></td>
											<td><center><?php echo $id_c->campaign_sales; ?></center></td>
											<td><center><?php echo $id_c->customer_nama; ?></center></td>
											<td><center><?php echo $id_c->campaign_product; ?></center></td>
											<td><center><?php echo $id_c->campaign_date; ?></center>
												<center> <?php echo $id_c->campaign_time; ?></center>
											</td>
											<td>
												<center>
													<!--
													<span style="background-color: #e44e1b;color: #ffffff;padding: 5px;">
														<span style="color: #ffffff;padding: 5px;"><?php echo $id_c->campaign_status; ?></span>
													</span>
													-->
													<span class="label label-default" style="text-transform: uppercase;">
														<?php echo $id_c->campaign_status; ?>
													</span>
												</center>
											</td>
											<td>
												<center>
													<a href="#" onclick="proses_history(<?php echo $id_c->campaign_id; ?>)" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-edit">
														<i class="fa fa-edit"></i> edit</a>
													</center>
												</td>
											</tr>
											<?php 
										}
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
						Edit Data Closing</h4>
					</div>

					<!-- Begin # DIV Form -->
					<div id="div-forms">

						<!-- Begin # Login Form -->
						<form id="login-form" action ="<?php echo site_url("Admin/C_closing/editClosing");?>" method="post">
							<div class="modal-body">
								<div class="form-group" >
									<input type="hidden" class="form-control" id="id_campaign" placeholder="" name="id_campaign" readonly value="">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label>Customer ID : </label>
											<input type="text" class="form-control" id="customer_nama" placeholder="" name="customer_nama" readonly value="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label>Sales : </label>
											<input type="text" class="form-control" id="sales_nama" placeholder="" name="sales_nama" readonly value="">
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label>Date : </label>
											<input type="text" class="form-control" id="date_campaign" placeholder="" name="date_campaign" readonly value="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label>Time : </label>
											<input type="text" class="form-control" id="time_campaign" placeholder="" name="time_campaign" readonly value="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label>Product : </label>
											<input type="text" class="form-control" id="product_nama" placeholder="" name="product_nama" readonly value="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label>Status : </label>
											<select class="form-control" name="status_campaign" id="status_campaign" placeholder="Pilih Status" required>
												<option value="" disabled selected>Pilih Status :</option>
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
								<div class="form-group has-feedback">
									<label>Respond :</label>
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
			<script>
				function proses_history(id) {
					$.ajax({
						url: "<?php echo base_url("Admin/C_closing/detailClosing/")?>"+id,
						type: "POST",
						success: function(data) {
							var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_campaign").val(hasil.campaign_id);
                        $("#customer_nama").val(hasil.campaign_customer);
                        $("#sales_nama").val(hasil.campaign_sales);
                        $("#date_campaign").val(hasil.campaign_date);
                        $("#time_campaign").val(hasil.campaign_time);
                        $("#product_nama").val(hasil.campaign_product);
                        //$('option[value="' + hasil.campaign_customer + '"]')
                        //.attr('selected', true);
                        //$('option[value="' + hasil.campaign_sales + '"]')
                        //.attr('selected', true);
                        //$("#date_campaign").val(hasil.campaign_date);
                        //$("#time_campaign").val(hasil.campaign_time);
                        //$('option[value="' + hasil.campaign_product + '"]')
                        //.attr('selected', true);
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