<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Default | APP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>plugins/timepicker/bootstrap-timepicker.min.css">
  
  <link rel="stylesheet" type="text/css" href="
    https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="
    https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/";?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url("Welcome/tampil_dasboard");?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Default</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url()."assets/";?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


        <div class = ""  style ="margin-left:900px;color:white;margin-top:15px;">
<div id="clock"></div>
		<script type="text/javascript">
		<!--
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);

		function showTime() {

		    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
			var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
			var date = new Date();
			var day = date.getDate();
			var month = date.getMonth();
			var thisDay = date.getDay(),
			    thisDay = myDays[thisDay];
			var yy = date.getYear();
			var year = (yy < 1000) ? yy + 1900 : yy;

		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		    let jam = "";
		    jam+="<span>"+curr_hour+":"+curr_minute+":"+curr_second+"</span>&emsp;";
		    jam+="<span>"+thisDay+" "+day+" "+months[month]+" "+year+"</span>";

		    $("#clock").html(jam);
// 		 document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }


// 		function checkTime(i) {
// 		    if (i < 10) {
// 		        i = "0" + i;
// 		    }
// 		    return i;
// 		}
// 		setInterval(showTime, 500);
		//-->
		</script>

		<!-- Menampilkan Hari, Bulan dan Tahun -->





      </div>

    </nav>

  </header>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()."assets/";?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p></p>
        <a href="<?php echo base_url()."assets/";?>#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"></li>
      <!--
      <li class="">
        <a href="<?php echo base_url("movement/tampil_dasboard");?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
    -->
      <li class="">
        <a href="<?php echo base_url("movement/showReport");?>">
          <i class="fa fa-area-chart"></i> <span>Report</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("movement/showCampaign");?>">
          <i class="fa fa-star"></i> <span>Campaign</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("movement/showClosing");?>">
          <i class="fa fa-lock"></i> <span>Closing</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      

      <li class="treeview">
        <a href="">
          <i class="fa fa-database"></i>
          <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url("movement/tampil_customer");?>"><i class="fa fa-circle-o"></i>Master Data Customer</a></li>
          <li><a href="<?php echo base_url("movement/showProduct");?>"><i class="fa fa-circle-o"></i>Master Data Product</a></li>
          <li><a href="<?php echo base_url("movement/showCategory");?>"><i class="fa fa-circle-o"></i>Master Data Category</a></li>
          <li><a href="<?php echo base_url("movement/showStatus");?>"><i class="fa fa-circle-o"></i>Master Data Status</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-user"></i>
          <span>Master User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu"> 
          <li><a href="<?php echo base_url("movement/tampil_sales");?>"><i class="fa fa-circle-o"></i>Master Data Sales</a></li>
          <li><a href="<?php echo base_url("movement/showAdmin");?>"><i class="fa fa-circle-o"></i>Master Data Admin</a></li>
        </ul>
      </li>
      <!--<li class="treeview">
        <a href="#">
          <i class="fa fa-gears"></i>
          <span>Konfigurasi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url("movement/Konfigurasi");?>"><i class="fa fa-circle-o"></i>Konfigurasi Data</a></li>
          <li><a href="<?php echo base_url("movement/konfigurasi_libur");?>"><i class="fa fa-circle-o"></i>Konfigurasi Libur</a></li>
        </ul>

      </li> -->

     <!-- <li class="">
        <a href="<?php echo base_url("movement/market");?>">
          <i class="fa fa-star"></i> <span>market lead</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li> -->
      <li class="">
        <a href="<?php echo base_url("movement/index");?>">
          <i class="fa fa-power-off"></i> <span>Logout</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>



  </section>
  <!-- /.sidebar -->
</aside>

<div class="contens"><?= $contents ?></div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 <a href="http://smartsoftstudio.com/">Smartsoft Studio</a>.</strong> All rights
    reserved.
  </footer>


<!-- Control Sidebar -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/";?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()."assets/";?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/";?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url()."assets/";?>bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url()."assets/";?>bower_components/morris.js/morris.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()."assets/";?>bower_components/chart.js/Chart.js"></script>
<script src="<?php echo base_url()."assets/";?>bower_components/chart.js/utils.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/";?>bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."assets/";?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()."assets/";?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."assets/";?>bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()."assets/";?>bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url()."assets/";?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url()."assets/";?>bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url()."assets/";?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()."assets/";?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."assets/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."assets/";?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/";?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/";?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."assets/";?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/";?>dist/js/demo.js"></script>
<script src="<?php echo base_url()."assets/";?>bower_components/datatables.net-bs/js/dataTables.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script>

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

</script>
</body>
</html>
