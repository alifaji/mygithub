<!DOCTYPE html>
<?php
include 'header_pelanggan.php';
include 'slidebar_pelanggan.php';


?>
<html>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Report Transaksi
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-database"></i> Report </a></li>
			<li class="active">Transaksi</li>
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
										<th>Nama Pelanggan</th>
										<th>Total Pembayaran</th>
										<th>Report Service</th>
										<th>Report Making</th>
										<th>Report Tanggal</th>
										<th>Detail</th>

										
									</tr>

								</thead>
								<tbody>
									<?php
									$no=0;
									foreach ($data_pelanggan as $id_c) {
										if($this->session->userdata('nama') == $id_c->pelanggan_username){ 
                                        //$no++;
                                    //if($id_k->id==3){
										?>
										<tr>
											<td><?php echo $no += 1?></td>
											<td><?php echo $id_c->pelanggan_nama; ?></td>
											<td><?php echo $id_c->report_pemasukkan; ?></td>
											<td><?php echo $id_c->report_service; ?></td>
											<td><?php echo $id_c->report_making; ?></td>
											<td><?php echo $id_c->report_tanggal; ?></td>
											<td><a href="<?php echo site_url("Customer/C_myhistory/detail_history?id=".$id_c->id_pelanggan."&id2=".$id_c->report_tanggal);?>" type="button" class="btn btn-primary">View Details</a></td>
											</tr>
											<?php 
					                  //}
					              //else{
					              //}
										} 
									}?>
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
		<?php include('footer_pelanggan.php');?>

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