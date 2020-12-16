<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Selamat datang di aplikasi inventaris barang - Wintaris</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/css/AdminLTE.min.css');?>">

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
    <a href="../../index2.html"><b>Win</b>Taris</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Login untuk mengakses data.</p>
    <?php if(isset($error)) { echo $error; } ?>
    <?php if(isset($pesan)) { echo $pesan; } ?>
    <form action="<?php echo base_url('login/log');?>" method="post" id="form">
      <div class="form-group has-feedback">
        <?php 
          $username = array('name' => 'ws_user', 'class' => 'form-control', 'placeholder' => 'Username', 'required');
          echo form_input($username); ?>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          <?php echo form_error('ws_user', '<font style="color: red;">','</font>'); ?>
      </div>
      <div class="form-group has-feedback">
        <?php 
          $password = array('name' => 'ws_pass', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Password');
          echo form_input($password); ?>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          <?php echo form_error('ws_pass', '<font style="color: red;">','</font>'); ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/admin/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/admin/bower_components/js/bootstrap.min.js')?>"></script>

</body>
</html>
