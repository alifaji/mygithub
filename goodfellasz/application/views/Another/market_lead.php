<!DOCTYPE html>
<?php
include 'header.php';
include 'slidebar.php';

?>
    <html>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!--<section class="content-header">
      <h1>
        Master Data Karyawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-database"></i> Master data</a></li>
        <li class="active">Data Karyawan</li>
      </ol>
    </section> -->

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
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#modal-input1">
                                            <i class="fa fa-trash"></i> Delete</button>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-xs-6">
                                    <label>&nbsp</label>
                                    <div class="form-group">
                                        <a href="#" class="btn btn-success pull-right"><i class="fa fa-print"></i> Print Formulir</a>

                                        <label>&nbsp</label>

                                        <a href="#" class="btn btn-default pull-right " style="margin-right:5px"><i class="fa fa-print"></i> Print Adjusment</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body table-responsive" style="overflow-x: auto">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead style="background-color: #81CFE0">
                                    <tr>

                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>NAMA</th>
                                        <th>JABATAN</th>
                                        <th>ALAMAT</th>
                                        <th>NO TELP</th>
                                        <th>UPAH TETAP / HARI</th>
                                        <th>ACTION</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>098731</td>
                                        <td>Suparman</td>
                                        <td>Mekanik</td>
                                        <td>Cikarang Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>512512</td>
                                        <td>Budi</td>
                                        <td>K3 Kebersihan</td>
                                        <td>Bekasi Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>512512</td>
                                        <td>Bima</td>
                                        <td>Direktur</td>
                                        <td>Jakarta Selatan</td>
                                        <td>08135123612</td>
                                        <td>10000000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>512512</td>
                                        <td>Hilman</td>
                                        <td>K3 Kebersihan</td>
                                        <td>Bekasi Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>098731</td>
                                        <td>Paiman</td>
                                        <td>Advisor</td>
                                        <td>Jakarta Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>098731</td>
                                        <td>Paiman</td>
                                        <td>Advisor</td>
                                        <td>Jakarta Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>098731</td>
                                        <td>Paiman</td>
                                        <td>Advisor</td>
                                        <td>Jakarta Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>098731</td>
                                        <td>Paiman</td>
                                        <td>Advisor</td>
                                        <td>Jakarta Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>098731</td>
                                        <td>Paiman</td>
                                        <td>Advisor</td>
                                        <td>Jakarta Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>098731</td>
                                        <td>Paiman</td>
                                        <td>Advisor</td>
                                        <td>Jakarta Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>098731</td>
                                        <td>Paiman</td>
                                        <td>Advisor</td>
                                        <td>Jakarta Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>098731</td>
                                        <td>Paiman</td>
                                        <td>Advisor</td>
                                        <td>Jakarta Barat</td>
                                        <td>08135123612</td>
                                        <td>100000</td>
                                        <td><a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal-input"><i class="fa fa-edit"></i> Edit</a>&nbsp<a href="#" class="btn btn-xs btn-danger "><i class="glyphicon glyphicon-remove"></i> Delete</a></td>
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

            <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <?php include('footer.php');?>
        <div class="modal fade" id="modal-input" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xs">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <img class="" id="img_logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </div>

                    <!-- Begin # DIV Form -->
                    <div id="div-forms">

                        <!-- Begin # Login Form -->
                        <form id="login-form">
                            <center>
                                <h3><i class="fa fa-user"></i> Edit Karyawan</h3></center>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nik</label>
                                    <input class="form-control" placeholder="Nik" type="number">
                                </div>
                                <div class="form-group has-feedback">
                                    <label>Nama</label>
                                    <input class="form-control" placeholder="Nama Lengkap" type="text">
                                </div>
                                <div class="form-group has-feedback">
                                    <label>Jabatan</label>
                                    <select class="form-control" name="jabatan">
                                        <option value="1">Direktur</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Staff</option>
                                        <option value="4">Advisor</option>
                                        <option value="5">Mekanik</option>
                                        <option value="6">K3 Kebersihan</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <label>Alamat</label>
                                    <input class="form-control" placeholder="alamat" type="text">
                                </div>
                                <div class="form-group has-feedback">
                                    <label>No Telp</label>
                                    <input class="form-control" placeholder="No Telp" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Upah Tetap</label>
                                    <input class="form-control" placeholder="upah tetap" type="number">
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
                        <img class="" id="img_logo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </div>

                    <!-- Begin # DIV Form -->
                    <div id="div-forms">

                        <!-- Begin # Login Form -->
                        <form id="login-form">
                            <center>
                                <h3><i class="fa fa-user"></i> Add Karyawan</h3></center>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nik</label>
                                    <input class="form-control" placeholder="Nik" type="number">
                                </div>
                                <div class="form-group has-feedback">
                                    <label>Nama</label>
                                    <input class="form-control" placeholder="Nama Lengkap" type="text">
                                </div>
                                <div class="form-group has-feedback">
                                    <label>Jabatan</label>
                                    <select class="form-control" name="jabatan">
                                        <option value="1">Direktur</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Staff</option>
                                        <option value="4">Advisor</option>
                                        <option value="5">Mekanik</option>
                                        <option value="6">K3 Kebersihan</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <label>Alamat</label>
                                    <input class="form-control" placeholder="alamat" type="text">
                                </div>
                                <div class="form-group has-feedback">
                                    <label>No Telp</label>
                                    <input class="form-control" placeholder="No Telp" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Upah Tetap</label>
                                    <input class="form-control" placeholder="upah tetap" type="number">
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