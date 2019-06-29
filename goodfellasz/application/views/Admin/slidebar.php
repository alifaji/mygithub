<?php 
if($this->session->userdata('status')=="login_owner"){


?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()."assets/";?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p style="text-transform: capitalize;"><?php echo $this->session->userdata("nama");  ?></p>
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
    
      <li class="">
        <a href="<?php echo base_url("movement/showReport");?>">
          <i class="fa fa-area-chart"></i> <span>Report</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      
      <li class="treeview">
        <a href="">
          <i class="fa fa-bar-chart"></i>
          <span>Report</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu"> 
          <li><a href="<?php echo base_url("movement/showReport");?>"><i class="fa fa-circle-o"></i>Report Graphic</a></li>
          <li><a href="<?php echo base_url("movement/showTable");?>"><i class="fa fa-circle-o"></i>Report Table</a></li>
        </ul>
      </li>
      -->
      <li class="">
        <a href="<?php echo base_url("movement/showClosing");?>">
          <i class="fa fa-bar-chart"></i> <span>Graphic</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("movement/showClosing");?>">
          <i class="fa fa-file"></i> <span>Report</span>
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
          <li><a href="<?php echo base_url("movement/tampil_customer");?>"><i class="fa fa-circle-o"></i>Master Data Admin</a></li>
          <li><a href="<?php echo base_url("movement/showProduct");?>"><i class="fa fa-circle-o"></i>Master Data Owner</a></li>
          <li><a href="<?php echo base_url("movement/showCategory");?>"><i class="fa fa-circle-o"></i>Master Data Barberman</a></li>
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

      </li> 

      <li class="">
        <a href="<?php echo site_url("C_login/logout");?>">
          <i class="fa fa-power-off"></i> <span>Logout</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
     -->


  </section>
  <!-- /.sidebar -->
</aside>
<?php 
}else if($this->session->userdata('status')=="login_admin"){


?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url()."assets/";?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p style="text-transform: capitalize;"><?php echo $this->session->userdata("nama");  ?></p>
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
    
      <li class="">
        <a href="<?php echo base_url("movement/showReport");?>">
          <i class="fa fa-area-chart"></i> <span>Report</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      -->
      <li class="">
        <a href="<?php echo base_url("movement/showAntrian");?>">
          <i class="fa fa-list"></i> <span>Queue</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("movement/showPembayaran");?>">
          <i class="fa fa-money"></i> <span>Payment</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("movement/showPelanggan");?>">
          <i class="fa fa-check"></i> <span>Verification</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("movement/showPoint");?>">
          <i class="fa fa-star"></i> <span>My Point</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("movement/showPromo");?>">
          <i class="fa fa-star"></i> <span>Promo</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("movement/showItem");?>">
          <i class="fa fa-bank"></i> <span>Inventory</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
      <li class="">
        <a href="<?php echo base_url("Admin/C_report");?>">
          <i class="fa fa-file"></i> <span>Report</span>
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
          <li><a href="<?php echo base_url("movement/showAdmin");?>"><i class="fa fa-circle-o"></i>Master Data Admin</a></li>
          <li><a href="<?php echo base_url("movement/showOwner");?>"><i class="fa fa-circle-o"></i>Master Data Owner</a></li>
          <li><a href="<?php echo base_url("movement/showBarberman");?>"><i class="fa fa-circle-o"></i>Master Data Barberman</a></li>
          <li><a href="<?php echo base_url("movement/showCustomer");?>"><i class="fa fa-circle-o"></i>Master Data customer</a></li>
          <li><a href="<?php echo base_url("movement/showMember");?>"><i class="fa fa-circle-o"></i>Master Data member</a></li>
          <li><a href="<?php echo base_url("movement/showHairstyle");?>"><i class="fa fa-circle-o"></i>Master Data hairstyle</a></li>
          <li><a href="<?php echo base_url("movement/showTreatment");?>"><i class="fa fa-circle-o"></i>Master Data treatment</a></li>
          <li><a href="<?php echo base_url("movement/showCabang");?>"><i class="fa fa-circle-o"></i>Master Data cabang</a></li>
          
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

      </li> 

      <li class="">
        <a href="<?php echo site_url("C_login/logout");?>">
          <i class="fa fa-power-off"></i> <span>Logout</span>
          <span class="pull-right-container">
            <i class=""></i>
          </span>
        </a>

      </li>
     -->


  </section>
  <!-- /.sidebar -->
</aside>
<?php 
} else{
  redirect('C_login/index');
  }
 ?>