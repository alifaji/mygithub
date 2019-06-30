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
			Master Data member
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
			<li class="active">Data member</li>
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
										<i class="fa fa-plus"></i> Add member</button>
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
										<th>Memberr Name</th>
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
									foreach ($data_member as $id_c) { 
                                        //$no++;
                                    //if($id_k->id==3){
										?>
										<tr>
											<td><?php echo $no += 1?></td>
											<td><?php echo $id_c->member_nama; ?></td>
											<td><?php echo $id_c->member_username; ?></td>
											<td><?php echo $id_c->member_password; ?></td>
											<td><?php echo $id_c->member_alamat; ?></td>
											<td><?php echo $id_c->member_email; ?></td>
											<td><?php echo $id_c->member_telp; ?></td>
											<td>
												<a href="#" onclick="edit_member(<?php echo $id_c->id_member; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
													<i class="fa fa-edit"></i> Edit</a>&nbsp
													<a href="<?php echo site_url('Admin/Master/User/C_member/deleteMember/'.$id_c->id_member) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a>
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

		<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog modal-xs">
				<div class="modal-content">
					<div class="modal-header" align="center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span></button>
							<h4 class="modal-title text-center">
							Edit Data member</h4>
						</div>

						<!-- Begin # DIV Form -->
						<div id="div-forms">

							<!-- Begin # Login Form -->
							<form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_member/editMember");?>" method="post">
								<div class="modal-body">
									<div class="form-group" >
										<input type="hidden" class="form-control" id="id_member" placeholder="" name="id_member" readonly value="">
									</div>
									<div class="form-group has-feedback">
										<label>Name</label>
										<input class="form-control" placeholder="Full Name" type="text" name="nama_member" id="nama_member" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Username</label>
										<input class="form-control" placeholder="Username" type="text" name="username_member" id="username_member" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Password</label>
										<input class="form-control" placeholder="Password" type="password" name="password_member" id="password_member" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Address</label>
										<textarea class="form-control" placeholder="alamat lengkap" required="" name="alamat_member" id="alamat_member"></textarea>
									</div>
									<div class="form-group has-feedback">
										<label>E-Mail</label>
										<input class="form-control" placeholder="email" type="email" name="email_member" id="email_member" required="">
									</div>
									<div class="form-group has-feedback">
										<label>Telephone</label>
										<input class="form-control" placeholder="telpon" type="text" name="telp_member" id="telp_member" required="">
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
						Add Data member</h4>
					</div>

					<!-- Begin # DIV Form -->
					<div id="div-forms">

						<!-- Begin # Login Form -->
						<form id="login-form" action ="<?php echo site_url("Admin/Master/User/C_member/insertMember");?>" method="post">
							<div class="modal-body">
								<div class="form-group has-feedback">
									<label>Name</label>
									<input class="form-control" placeholder="Full Name" type="text" name="nama_member" required="">
								</div>
								<div class="form-group has-feedback">
									<label>Username</label>
									<input class="form-control" placeholder="Username" type="text" name="username_member" required="">
								</div>
								<div class="form-group has-feedback">
									<label>Password</label>
									<input class="form-control" placeholder="Password" type="password" name="password_member" required="">
								</div>
								<div class="form-group has-feedback">
									<label>Address</label>
									<textarea class="form-control" placeholder="your address" required="" name="alamat_member"></textarea>
								</div>
								<div class="form-group has-feedback">
									<label>E-Mail</label>
									<input class="form-control" placeholder="email" type="email" name="email_member" required="">
								</div>
								<div class="form-group has-feedback">
									<label>Telephone</label>
									<input class="form-control" placeholder="telpon" type="text" name="telp_member" required="">
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
		<script>
			function edit_member(id) {
				$.ajax({
					url: "<?php echo base_url("Admin/Master/User/C_member/detailMember/")?>"+id,
					type: "POST",
					success: function(data) {
						var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_member").val(hasil.member_id);
                        $("#nama_member").val(hasil.member_nama);
                        $("#username_member").val(hasil.member_username);
                        $("#password_member").val(hasil.member_password);
                        $("#alamat_member").val(hasil.member_alamat);
                        $("#email_member").val(hasil.member_email);
                        $("#telp_member").val(hasil.member_telp);

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