<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GoodFellas | APP</title>
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
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url("Welcome/tampil_dasboard");?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>GoodFellas</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url()."assets/";?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <?php 
          if($this->session->userdata('status')=="login_customer"){
          $CI =& get_instance();
          $CI->load->model('M_pelanggan');
                
          $temp =  $this->m_pelanggan->get_data();
          $count =0;
          foreach($temp as $data){
            if($data->pelanggan_username == $this->session->userdata('nama')){
              $count++;
            }
          }
            ?>
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo $count ?></span>
            </a>
          
            <ul class="dropdown-menu">
            
              <li class="header">You have <?php echo $count ?> messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                <?php foreach ($temp as $key ) {
                  if($key->pelanggan_username == $this->session->userdata('nama')){
                    $count++;
              ?>
                  <li><!-- start message -->
                    <a href="#">
                    <div class="pull-left">
                        <img src="<?php echo base_url()."assets/";?>dist/img/pesan.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                      <?php echo $key->pelanggan_nama ;?>
                        <small><i class="fa fa-clock-o"></i> <?php echo $key->report_tanggal ;?> </small>
                      </h4>
                      <p>   <?php echo $key->report_item ;?></p>

                    </a>
                  </li>
                  <!-- end message -->
                  <?php 
            
          } } ?>
                  
             
                </ul>
              </li>
              <li class="footer"><a href="<?php echo site_url("Customer/C_myhistory/index");?>">See All Messages</a></li>
            </ul>
          </li>
          <?php } ?>
         
        </ul>
        <div style="margin-right: 20px; padding-top: 5px;" class="pull-right">
<a href="<?php echo site_url("C_login/logout");?>">
<button type="submit" class="btn btn-default"><i class="fa fa-sign-out"
  > Logout</i></button>
</a>
</div>
      </div>
    </nav>




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





    <!--  </div> //nutup div atas
    -->
    </nav>

  </header>
