
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GoodFellas | Registrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>GoodFellas</b>app</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"></p>
      <p class="login-box-msg">Register a new membership</p>
    <form action="<?php echo site_url("C_registrasi/registrasi");?>" method="post">
      <p class="text-danger"><?php echo $this->session->flashdata('pesan');?></p>
       <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full Name" name="name" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Address" name="address" required>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="E-mail" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Telephone" name="telephone" required>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label> 
              <a href="<?php echo site_url("C_login/index")?>">I already have a account </a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<div class="modal fade" id="modal-recovery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <div class="modal-header" align="center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                  <h4 class="modal-title text-center">
                  Recovery Account</h4>
                </div>

                <!-- Begin # DIV Form -->
                <div id="div-forms">

                  <!-- Begin # Login Form -->
                  <form id="login-form" action ="<?php echo site_url("Admin/C_campaign/insertCampaign");?>" method="post">
                    <div class="modal-body">
                      <div class="form-group has-feedback">
                  <label>Username : </label>
                  <input class="form-control" placeholder="Username" type="text" name="username" required="">
                </div>
                <div class="form-group has-feedback">
                  <label>Telephone : </label>
                  <input class="form-control" placeholder="Nomor Ponsel" type="text" name="Telephone" required="">
                </div>
                <div class="form-group has-feedback">
                  <label>E-Mail</label>
                  <input class="form-control" placeholder="email" type="email" name="email_customer" required="">
                </div>
                      
                      
                      
                    <!--
                    <div class="input-group">
                      <input class="form-control timepicker" type="text">

                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                    </div>
                  -->
                  

                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-location-arrow"></i> Send</button>
                  </div>

                </form>
                <!-- End # Login Form -->

              </div>
            </div>
          </div>
        </div>
      </div>

<!-- jQuery 3 -->
<script type="text/javascript" src="<?php echo base_url()."assets/";?>bower_components/particles/particles.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>bower_components/particles/demo/js/app.js"></script>
<script src="<?php echo base_url()."assets/";?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url()."assets/";?>plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>
