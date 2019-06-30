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
			Master Data Customer
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
			<li class="active">Data Customer</li>
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
										<i class="fa fa-plus"></i> Add Customer</button>
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
										<th>Custommer Name</th>
										<th>Username</th>
										<th>Password</th>
										<th>Address</th>
										<th>E-Mail</th>
										<th>Telephone</th>
										<th>ACTION</th>
									</tr>

								</thead>
								<tbody>
									<?php
									$no=0;
									foreach ($data_customer as $id_c) { 
                                        //$no++;
                                    //if($id_k->id==3){
										?>
										<tr>
											<td><?php echo $no += 1?></td>
											<td><?php echo $id_c->customer_nama; ?></td>
											<td><?php echo $id_c->customer_username; ?></td>
											<td><?php echo $id_c->customer_password; ?></td>
											<td><?php echo $id_c->customer_alamat; ?></td>
											<td><?php echo $id_c->customer_email; ?></td>
											<td><?php echo $id_c->customer_telp; ?></td>
											<td>
												<a href="#" onclick="edit_customer(<?php echo $id_c->customer_id; ?>)" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-verification">
													<i class="fa fa-check"></i> Verification</a>&nbsp
												<a href="#" onclick="edit_customer(<?php echo $id_c->customer_id; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
													<i class="fa fa-edit"></i> Edit</a>&nbsp
													<a href="<?php echo site_url('Admin/Master/User/C_customer/deleteCustomer/'.$id_c->customer_id) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a>
												</td>
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
		<div class="modal fade" id="modal-verification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-xs">
				<div class="modal-content">
					<div class="modal-header" align="center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span></button>
							<h4 class="modal-title text-center">
							Verification Custommer to Member</h4>
						</div>

						<!-- Begin # DIV Form -->
						<div id="div-forms">

							<!-- Begin # Login Form -->
							<form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_customer/verificationCustomer");?>" method="post">
								<div class="modal-body">
									<div class="form-group" >
										<input type="hidden" class="form-control" id="id_customer" placeholder="" name="id_customer" readonly value="">
									</div>
									<div class="form-group has-feedback">
										<input class="form-control" placeholder="Full Name" type="hidden" name="nama_customer" id="nama_customer" readonly value="">
									</div>
									<div class="form-group has-feedback">
										<input class="form-control" placeholder="Username" type="hidden" name="username_customer" id="username_customer" readonly value="">
									</div>
									<div class="form-group has-feedback">
										<input class="form-control" placeholder="Password" type="hidden" name="password_customer" id="password_customer" readonly value="">
									</div>
									<div class="form-group has-feedback">
										<textarea style="display:none;"class="form-control" placeholder="alamat lengkap" type="hidden" readonly value="" name="alamat_customer" id="alamat_customer"></textarea>
									</div>
									<div class="form-group has-feedback">
										<input class="form-control" placeholder="email" type="hidden" name="email_customer" id="email_customer" readonly value="">
									</div>
									<div class="form-group has-feedback">
										<input class="form-control" placeholder="telpon" type="hidden" name="telp_customer" id="telp_customer" readonly value="">
									</div>
									<div class="form-group has-feedback">
										<label>Tanggal Lahir :</label>
										<input class="form-control" placeholder="" type="date" name="tanggal_customer" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Kode GoodFellas :</label>
										<input class="form-control" placeholder="Masukkan Kode Member" type="text" name="kode_customer" required="">
									</div>
								<!--
								<div class="form-group has-feedback">
									<label>Sales :</label>
									<select class="form-control" name="Sales">
										<option value="1">Suparman</option>
										<option value="2">Wonder</option>
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
		<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-xs">
				<div class="modal-content">
					<div class="modal-header" align="center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span></button>
							<h4 class="modal-title text-center">
							Edit Data Customer</h4>
						</div>

						<!-- Begin # DIV Form -->
						<div id="div-forms">

							<!-- Begin # Login Form -->
							<form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_customer/editCustomer");?>" method="post">
								<div class="modal-body">
									<div class="form-group" >
										<input type="hidden" class="form-control" id="id_customer" placeholder="" name="id_customer" readonly value="">
									</div>
									<div class="form-group has-feedback">
										<label>Name</label>
										<input class="form-control" placeholder="Full Name" type="text" name="nama_customer" id="nama_customer" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Username</label>
										<input class="form-control" placeholder="Username" type="text" name="username_customer" id="username_customer" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Password</label>
										<input class="form-control" placeholder="Password" type="password" name="password_customer" id="password_customer" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Address</label>
										<textarea class="form-control" placeholder="alamat lengkap" required="" name="alamat_customer" id="alamat_customer"></textarea>
									</div>
									<div class="form-group has-feedback">
										<label>E-Mail</label>
										<input class="form-control" placeholder="email" type="email" name="email_customer" id="email_customer" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Telephone</label>
										<input class="form-control" placeholder="telpon" type="text" name="telp_customer" id="telp_customer" required="">
									</div>
								<!--
								<div class="form-group has-feedback">
									<label>Sales :</label>
									<select class="form-control" name="Sales">
										<option value="1">Suparman</option>
										<option value="2">Wonder</option>
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

	<div class="modal fade" id="modal-input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-xs">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span></button>
						<h4 class="modal-title text-center">
						Add Data Customer</h4>
					</div>

					<!-- Begin # DIV Form -->
					<div id="div-forms">

						<!-- Begin # Login Form -->
						<form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_customer/insertCustomer");?>" method="post">
							<div class="modal-body">
								<div class="form-group has-feedback">
									<label>Name</label>
									<input class="form-control" placeholder="Full Name" type="text" name="nama_customer" required="">
								</div>
								<div class="form-group has-feedback">
									<label>Username</label>
									<input class="form-control" placeholder="Username" type="text" name="username_customer" required="">
								</div>
								<div class="form-group has-feedback">
									<label>Password</label>
									<input class="form-control" placeholder="Password" type="password" name="password_customer" required="">
								</div>
								<div class="form-group has-feedback">
									<label>Address</label>
									<textarea class="form-control" placeholder="your address" required="" name="alamat_customer"></textarea>
								</div>
								<div class="form-group has-feedback">
									<label>E-Mail</label>
									<input class="form-control" placeholder="email" type="email" name="email_customer" required="">
								</div>
								<div class="form-group has-feedback">
									<label>Telephone</label>
									<input class="form-control" placeholder="telpon" type="text" name="telp_customer" required="">
								</div>
									<!--
									<div class="form-group has-feedback">
										<label>Sales :</label>
										<select class="form-control" name="Sales">
											<option value="1">Suparman</option>
											<option value="2">Wonder</option>
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
	</div>
</div>
		<script>
			function edit_customer(id) {
				$.ajax({
					url: "<?php echo base_url("Admin/Master/User/C_customer/detailCustomer/")?>"+id,
					type: "POST",
					success: function(data) {
						var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#modal-edit #id_customer").val(hasil.customer_id);
                        $("#modal-edit #nama_customer").val(hasil.customer_nama);
                        $("#modal-edit #username_customer").val(hasil.customer_username);
                        $("#modal-edit #password_customer").val(hasil.customer_password);
                        $("#modal-edit #alamat_customer").val(hasil.customer_alamat);
                        $("#modal-edit #email_customer").val(hasil.customer_email);
                        $("#modal-edit #telp_customer").val(hasil.customer_telp);
                        $("#modal-verification #id_customer").val(hasil.customer_id);
                        $("#modal-verification #nama_customer").val(hasil.customer_nama);
                        $("#modal-verification #username_customer").val(hasil.customer_username);
                        $("#modal-verification #password_customer").val(hasil.customer_password);
                        $("#modal-verification #alamat_customer").val(hasil.customer_alamat);
                        $("#modal-verification #email_customer").val(hasil.customer_email);
                        $("#modal-verification #telp_customer").val(hasil.customer_telp);
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