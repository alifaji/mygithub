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
            Master Data Hairstyle
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-database"></i> Master data </a></li>
            <li class="active">Data Hairstyle</li>
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
                                        <i class="fa fa-plus"></i> Add Hairstyle</button>
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
                                        <th><center>No</center></th>
                                        <th><center>Hairstyle Name</center></th>
                                        <th><center>Face Type</center></th>
                                        <th><center>Hair Type</center></th>
                                        <th><center>Long Hair</center></th>
                                        <th><center>Foto</center></th>
                                        <th><center>ACTION</center></th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php
                                    $no=0;
                                    foreach ($data_hairstyle as $id_p) { 
                                        //$no++;
                                    //if($id_k->id==3){
                                        ?>
                                        <tr>
                                            <td><center><?php echo $no += 1?></center></td>
                                            <td><center><?php echo $id_p->hairstyle_nama; ?></center></td>
                                            <td><center><?php echo $id_p->tipe_wajah; ?></center></td>
                                            <td><center><?php echo $id_p->tipe_rambut; ?></center></td>
                                            <td><center><?php echo $id_p->panjang_rambut; ?></center></td>
                                            <td>
                                                 <a href="#gambar<?=$id_p->id_hairstyle?>" data-toggle="modal" ><span class="label label-primary"><i class="fa fa-eye"></i> Show</span></a>
                                                 <div class="modal fade" id="gambar<?=$id_p->id_hairstyle?>">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title"><?=$id_p->hairstyle_nama?></h4>
                                                            </div>
                                                        <div class="modal-body">
                                                            <img src="<?php echo base_url(); ?>uploads/<?=$id_p->hairstyle_foto?>" alt="" width="100%">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><center>
                                                <a href="#" onclick="edit_hairstyle(<?php echo $id_p->id_hairstyle; ?>)" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-edit">
                                                    <i class="fa fa-edit"></i> Edit</a>&nbsp
                                                    <a href="<?php echo site_url('Admin/Master/Data/C_hairstyle/deleteHairstyle/'.$id_p->id_hairstyle) ?>" class="btn btn-xs btn-danger " onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')"><i class="glyphicon glyphicon-remove"></i> Delete</a> </center></td>
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
                            Edit Data hairstyle</h4>
                        </div>

                        <!-- Begin # DIV Form -->
                        <div id="div-forms">

                            <!-- Begin # Login Form -->
                            <?php echo form_open_multipart("Admin/Master/Data/C_hairstyle/editHairstyle");?>

                                <div class="modal-body">
                                    <div class="form-group" >
                                        <input type="hidden" class="form-control" id="id_hairstyle" placeholder="" name="id_hairstyle" readonly value="">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>hairstyle Name : </label>
                                        <input class="form-control" placeholder="Masukkan nama hairstyle" type="text" required="" name="nama_hairstyle" id="nama_hairstyle">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>face type : </label>
                                        <select class="form-control" name="tipe_wajah" id="tipe_wajah">
                                            <option value="Oblong Face">Oblong Face</option>
                                            <option value="Oval Face">Oval Face</option>
                                            <option value="Square Facee">Square Face</option>
                                            <option value="Round Face">Round Face</option>
                                            <option value="Heart Face">Heart Face</option>
                                            <option value="Triangle Face">Triangle Face</option>
                                            <option value="Diamond Face">Diamond Face</option>
                                        </select>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Hair type : </label>
                                        <select class="form-control" name="tipe_rambut" id="tipe_rambut">
                                            <option value="Lurus">Lurus</option>
                                            <option value="Keriting">Keriitng</option>
                                        </select>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Long Hair : </label>
                                        <select class="form-control" name="panjang_rambut" id="panjang_rambut">
                                            <option value="1-5 cm">1-5 cm</option>
                                            <option value="5-10 cm">5-10 cm</option>
                                            <option value="10-20 cm">10-20 cm</option>
                                            <option value="20-30 cm">20-30 cm</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto :</label>
                                        <input type="file" name="file" value="" id="file" class="form-control">
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
                            Add Data hairstyle</h4>
                        </div>

                        <!-- Begin # DIV Form -->
                        <div id="div-forms">

                            <!-- Begin # Login Form -->
                            <?php echo form_open_multipart("Admin/Master/Data/C_hairstyle/insertHairstyle");?>
                                <div class="modal-body">
                                    
                                    <div class="form-group has-feedback">
                                        <label>hairstyle Name : </label>
                                        <input class="form-control" placeholder="Masukkan nama hairstyle" type="text" required=""name="nama_hairstyle">
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Face Type: </label>
                                        <select class="form-control" name="tipe_wajah">
                                            <option value="Oblong Face">Oblong Face</option>
                                            <option value="Oval Face">Oval Face</option>
                                            <option value="Square Facee">Square Face</option>
                                            <option value="Round Face">Round Face</option>
                                            <option value="Heart Face">Heart Face</option>
                                            <option value="Triangle Face">Triangle Face</option>
                                            <option value="Diamond Face">Diamond Face</option>
                                        </select> 
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Hair Type: </label>
                                        <select class="form-control" name="tipe_rambut">
                                            <option value="Lurus">Lurus</option>
                                            <option value="Keriting">Keriitng</option>
                                        </select> 
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Long Hair: </label>
                                        <select class="form-control" name="panjang_rambut">
                                            <option value="1-5 cm">1-5 cm</option>
                                            <option value="5-10 cm">5-10 cm</option>
                                            <option value="10-20 cm">10-20 cm</option>
                                            <option value="20-30 cm">20-30 cm</option>
                                        </select> 
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label>Upload Gambar : </label>
                                        <input class="form-control" placeholder="" type="file" required="" name="file">
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
                function edit_hairstyle(id) {
                    $.ajax({
                        url: "<?php echo base_url("Admin/Master/Data/C_hairstyle/detailHairstyle/")?>"+id,
                        type: "POST",
                        success: function(data) {
                            var hasil = jQuery.parseJSON(data);
                        //console.log("hasil");
                        
                        $("#id_hairstyle").val(hasil.id_hairstyle);
                        $("#nama_hairstyle").val(hasil.hairstyle_nama);
                        $("#tipe_wajah").val(hasil.tipe_wajah);
                        $("#tipe_rambut").val(hasil.tipe_rambut);
                        $("#panjang_rambut").val(hasil.panjang_rambut);
                        $("#file").val(hasil.hairstyle_foto);

                        /*
                        $("#alamat_perusahaan").val(hasil.alamat_perusahaan);
                        $("#email_perusahaan").val(hasil.email_perusahaan);
                        $(':radio[value="' + hasil.status_pemil
                        $('#kota_perusahaan option:conik + '"]').prop("checked", true);
                        $(':radio[value="' + hasil.daerah + '"]').prop("checked", true);
                        $('#provinsi_perusahaan option:contains('+hasil.provinsi+')').prop('selected',true);
                        
                        let provinsi = $("#provinsi_perusahaan").val();
                        getKabupaten(provinsi);
                    tains('+hasil.kota+')').prop('selected',true);
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