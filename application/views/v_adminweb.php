<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $judul ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="description" content="<?php if(isset($desc)) echo $desc; ?>"/>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/select2/dist/css/select2.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/skins/_all-skins.min.css');?>">
  <!-- Toast -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/bower_components/toast/jquery.toast.min.css');?>"/>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
  /*th{
    background: #3c8dbc;;
    color: #fff;
  }*/
  td{
    border:1px solid #dddddd;
  }
  </style>        
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="license();">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>W</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Win</b>Taris</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Tes</a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- MENU TAMBAHAN -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php if($this->session->userdata('user_foto') == ""){ ?>
              <img src="<?php echo base_url('assets/img/avatar.png');?>" class="user-image" alt="User Image">
            <?php } else { ?>
              <img src="<?php echo base_url('assets/foto/user/'.$this->session->userdata('user_foto'));?>" class="user-image" alt="User Image">
            <?php } ?>
              <span class="hidden-xs"><?php echo $this->session->userdata('user_nama');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <?php if($this->session->userdata('user_foto') == ""){ ?>
                <img src="<?php echo base_url('assets/img/avatar.png');?>" class="img-circle" alt="User Image">
              <?php } else { ?>
                <img src="<?php echo base_url('assets/foto/user/'.$this->session->userdata('user_foto'));?>" class="img-circle" alt="User Image">
              <?php } ?>
                <p>
                  <?php echo $this->session->userdata('user_nama');?>
                  <small>Admin Wintaris</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url('user');?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('logout');?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
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
          <?php if($this->session->userdata('user_foto') == ""){ ?>
            <img src="<?php echo base_url('assets/img/avatar.png');?>" class="img-circle" alt="User Image">
          <?php } else { ?>
            <img src="<?php echo base_url('assets/foto/user/'.$this->session->userdata('user_foto'));?>" class="img-circle" alt="User Image">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('user_nama');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree" id="nav">
        <li class="header">MAIN NAVIGATION</li>
        <?php
        include "menu_web.php";
        ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        <?php echo $jenis; ?>
        <small><?php echo $desc; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $jenis; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="container-fluid">
        <?php 
        include "main_web.php";
        
        ?>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs" id="hidden-xs"></div>
    <strong>Copyright &copy; <?= date('Y') ?> <a href="https://ilmucoding.com">Ilmucoding.com</a> </strong> All rights reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/admin/bower_components/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/admin/bower_components/js/bootstrap.min.js')?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/admin/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/admin/dist/js/demo.js');?>"></script>
<!-- CK Editor -->
<script src="<?php echo base_url('assets/admin/bower_components/ckeditor/ckeditor.js');?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/admin/bower_components/select2/dist/js/select2.full.min.js');?>"></script>
<!-- Toast -->
<script type="text/javascript" src="<?php echo base_url('assets/admin/bower_components/toast/jquery.toast.min.js');?>"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(function(){
      $('#nav a[href~="' +location.href +'"]').parents('li').addClass('active');
    });
  });
</script>
<?php $this->load->view('toast_admin'); ?>
<!-- page script -->
<script>
  $(function () {
    // Data Table
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
    // Select 2
    $('.select2').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('.select3').select2({
      placeholder: "------ Pilih ------",
    })
    $('.select4').select2({
      placeholder: "------ Pilih ------",
    })
    $('.select5').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('.select6').select2({
      placeholder: "------ Pilih ------",
    })
    $('.select7').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('.select8').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('.select9').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('.select10').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('#select1').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('#select2').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('#select3').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('#select4').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('#select5').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    $('#select6').select2({
      placeholder: "------ Pilih ------",
      dropdownParent:$("#ModalAdd")
    })
    //Date picker
    $('#datepicker1').datepicker({
      autoclose: true,
    })
    $('#datepicker2').datepicker({
      autoclose: true,
    })
    $('#datepicker3').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    })
    $('#datepicker4').datepicker({
      autoclose: true
    })
    $('#datepicker5').datepicker({
      autoclose: true
    })
    $('#datepicker6').datepicker({
      autoclose: true
    })
    // CK Editor
    CKEDITOR.replace('editor1')
    CKEDITOR.replace('editor2')
  })
</script>
<script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function () {
    Pace.restart()
  })
</script>
</body>
</html>
