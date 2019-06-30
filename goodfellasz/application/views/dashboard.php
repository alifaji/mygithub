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
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard "></i> Dashboard </a></li>
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
              <!--
              <div class="col-lg-2 col-xs-6">
                <label>&nbsp</label>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-input">
                    <i class="fa fa-plus"></i> Add Campaign</button>
                  </div>
                </div>
              -->

              <!--
              <div class="col-lg-12">
                <a href="<?php echo base_url("movement/showCampaign");?>">
                <button type="submit" class="btn btn-default pull-right">
                  <i class="fa fa-sign-in"> Kembali ke Campaign</i>
                </button>
                </a>
              </div>
            -->

          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body" style="overflow-x: auto">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><center>Campaign VS Closing</center></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="canvas" style="height: 230px; width: 510px;" width="510" height="230"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>

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
    <script>
      var barChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
          label: 'Status',
          backgroundColor: window.chartColors.red,
          borderWidth: 1,
          data: [
          '35',
          '37',
          '40',
          '21',
          '50',
          '55',
          '43'
          ]
        }
        /*
        , {
          label: 'Closing',
          backgroundColor: window.chartColors.grey,
          yAxisID: 'y-axis-2',
          data: [
          ]
        }] */

      };
      window.onload = function() {
        var ctx = document.getElementById('canvas').getContext('2d');
        window.myBar = new Chart(ctx, {
          type: 'bar',
          data: barChartData,
          options: {
            responsive: true,
            title: {
              display: true,
              text: 'All status'
            },
            tooltips: {
              mode: 'index',
              intersect: true
            },
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero: true
                },
              type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
              display: true,
              position: 'left',
              id: 'y-axis-1',
            }, {
              type: 'linear', // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
              display: true,
              position: 'right',
              id: 'y-axis-2',
              gridLines: {
                drawOnChartArea: false
              }
            }],
          }
        }
      });
      };

  /*document.getElementById('randomizeData').addEventListener('click', function() {
    barChartData.datasets.forEach(function(dataset) {
    dataset.data = dataset.data.map(function() {
        return randomScalingFactor();
        });
      });
      window.myBar.update(); 
    }
    );*/
  </script>