<?php

$id = "";
$nik = "";
foreach ($cutiku->result() as $obj){

  $id = $obj->id;
  $nik = $obj->nik;

}
?>

<?php

$cuti = "";
$status = "";
foreach ($cutiid->result() as $obj){

  $cuti = $obj->stok_cuti;
  $status = $obj->status;


}
?>

<?php 
$stok="";
                    foreach ($terakhir->result() as $obj1) {
                    $stok = $obj1->stok_cuti;
                    
                  }
                  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker-standalone.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/radio.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata("nik"); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata("nik"); ?> - RPL 1
                  <small>ADMIN</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#"></a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>c_login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nik"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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

      <li>
          <a href="<?php echo base_url(); ?>C_dashboard/index/<?php echo $this->session->userdata('nik'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>

        <li class="active">
          <?php if($this->session->userdata('level') == 1){ ?>
        <a href="<?php echo base_url(); ?>C_dashboard/cutinik/<?php echo $this->session->userdata('nik'); ?>">
        <?php }else{ ?>
          <a href="<?php echo base_url(); ?>C_dashboard/user">
        <?php } ?>
            <i class="fa fa-user"></i> <span>
              <?php if($this->session->userdata('level') == 1){     
            echo "Cuti";
          }else{

            echo "Buat Akun";
          }
          ?>
            </span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">input</small>
            </span>
          </a>
        </li>
      
        
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- ISI KONTEN -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pegawai
        <small>PT Apaya</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>User</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- FORM INPUT  -->
      <div class="col-md-7">
      <div class="box box-info">
            <div class="box-header with-border"> 
              <h3 class="box-title"> Masukan Cuti </h3>
            </div>
            <?php if($stok == null){ ?>
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>C_dashboard/inputcuti">
              <div class="box-body">

                  <input type="hidden" name="op" value="<?php echo $op='tambah' ?>" class="form-control">
                  <input type="hidden" name="nik_pegawai" value="<?php echo $this->session->userdata('nik'); ?>" class="form-control">
                  <input type="hidden" name="id_pegawai" value="<?php echo $id; ?>" class="form-control">

              <div class="form-group">
                  <div class="col-sm-3">
                        <label class="control-label">Dari Tanggal</label>
                    </div>
                  <div class='input-group col-sm-8 date' id='datetimepicker1'>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input name="mulai" type="text" class="form-control" />
                  </div>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker1').datetimepicker();
                          });
                      </script>
                </div>

                <div class="form-group">
                  <div class="col-sm-3">
                        <label class="control-label">Sampai Tanggal</label>
                    </div>
                  <div class='input-group col-sm-8 date' id='datetimepicker2'>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input name="akhir" type="text" class="form-control" />
                  </div>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker2').datetimepicker();
                          });
                      </script>
                </div>

                <input type="hidden" name="stok" value="
                <?php 
                    foreach ($terakhir->result() as $obj1) {
                    $stok = $obj1->stok_cuti;
                    echo $stok;
                  }
                  ?>" class="form-control">

                    <?php if($cekdata > 0){ ?>
                          <input type="hidden" value="<?php 
                        foreach ($terakhir->result() as $obj1) {
                          $stok = $obj1->stok_cuti;
                          echo $stok;
                        }
                        ?>" name="stok"> 
                    </label>
                    <?php }else{ ?>  
                          <input type="hidden" value="12" name="stok"> 
                <?php } ?></div>
    
                <div class="form-group">
                    <div class="col-sm-3">
                          <label style="padding-left: 12px" class="control-label">Alasan</label>
                    </div>
                  <div class="input-group col-sm-8">        
                      <input name="alasan" type="text" class="form-control" placeholder="Alasan">
                  </div>
                </div>

                <input type="hidden" name="status" value="0" class="form-control">

                <div class="box-footer">
                
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
              </div>
            </div>
          </form>
        <?php }elseif ($stok > 0) { ?>
          <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>C_dashboard/inputcuti">
              <div class="box-body">

                  <input type="hidden" name="op" value="<?php echo $op='tambah' ?>" class="form-control">
                  <input type="hidden" name="nik_pegawai" value="<?php echo $this->session->userdata('nik'); ?>" class="form-control">
                  <input type="hidden" name="id_pegawai" value="<?php echo $id; ?>" class="form-control">

              <div class="form-group">
                  <div class="col-sm-3">
                        <label class="control-label">Dari Tanggal</label>
                    </div>
                  <div class='input-group col-sm-8 date' id='datetimepicker1'>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input name="mulai" type="text" class="form-control" />
                  </div>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker1').datetimepicker();
                          });
                      </script>
                </div>

                <div class="form-group">
                  <div class="col-sm-3">
                        <label class="control-label">Sampai Tanggal</label>
                    </div>
                  <div class='input-group col-sm-8 date' id='datetimepicker2'>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input name="akhir" type="text" class="form-control" />
                  </div>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker2').datetimepicker();
                          });
                      </script>
                </div>

                <input type="hidden" name="stok" value="
                <?php 
                    foreach ($terakhir->result() as $obj1) {
                    $stok = $obj1->stok_cuti;
                    echo $stok;
                  }
                  ?>" class="form-control">

                    <?php if($cekdata > 0){ ?>
                          <input type="hidden" value="<?php 
                        foreach ($terakhir->result() as $obj1) {
                          $stok = $obj1->stok_cuti;
                          echo $stok;
                        }
                        ?>" name="stok"> 
                    </label>
                    <?php }else{ ?>  
                          <input type="hidden" value="12" name="stok"> 
                <?php } ?></div>
    
                <div class="form-group">
                    <div class="col-sm-3">
                          <label style="padding-left: 12px" class="control-label">Alasan</label>
                    </div>
                  <div class="input-group col-sm-8">        
                      <input name="alasan" type="text" class="form-control" placeholder="Alasan">
                  </div>
                </div>

                <input type="hidden" name="status" value="0" class="form-control">

                <div class="box-footer">
                
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
              </div>
            </div>
          </form>
          <?php }else{ ?>

          <div class="box-header with-border"> 
              <h3 class="box-title"> Sisa Cuti Anda Sudah Habis </h3>
            </div><BR>
            <center><div class="btn btn-sık"><span>HABIS!</span></div><br></center></br>
          </div></div>

        <?php } ?>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">History Cuti Anda</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nik</th>
                  <th>Nama</th>
                  <th>Dari Tanggal</th>
                  <th>Sampai Tanggal</th>
                  <th>Jumlah Cuti</th>
                  <th>Sisa Cuti/Th</th>
                  <th>Alasan</th>
                </tr>
                  <?php
                  $no=0;
                  foreach ($cutiid->result() as $obj1) {
                    $no++; 
                 ?> 
                <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $obj1->nik; ?></td>  
                      <td><?php echo $obj1->nama; ?></td>   
                      <td><?php echo date( 'd F Y', strtotime($obj1->mulai)); ?></td> 
                      <td><?php echo date( 'd F Y', strtotime($obj1->akhir)); ?></td>   
                      <td><?php

                      $dt1 = date_create($obj1->mulai);
                      $dt2 = date_create($obj1->akhir);

                      $range = date_diff($dt1,$dt2);
                        echo $range->format('%d Hari');
                      ?></td>

                      <td><?php echo $obj1->stok_cuti; ?> Hari</td>  
                      <td><?php echo $obj1->alasan; ?></td>  

                </tr>
                <?php
                  }
                ?>
                </thead>
                
              </table>
              <div class="box-footer clearfix pagination pagination-sm no-margin">
              <?php
                echo $this->pagination->create_links();
              ?>
              <div class="box-footer clearfix">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>admin/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>admin/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>admin/bower_components/moment/min/moment.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>admin/bower_components/fastclick/lib/fastclick.js"></script>

<script src="<?php echo base_url(); ?>admin/bower_components/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>admin/dist/js/demo.js"></script>
<script type="text/javascript">
                          $(function () {
                              $('#datetimepicker1').datetimepicker();
                          });
</script>
<script type="text/javascript">
                          $(function () {
                              $('#datetimepicker2').datetimepicker();
                          });
</script>
</body>
</html>
