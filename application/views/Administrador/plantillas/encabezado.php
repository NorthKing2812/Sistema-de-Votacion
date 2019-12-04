
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sistema de Votacion</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('asseut/AdminLTE-3.0.0/')?>dist/css/adminlte.min.css">
<!--leaflet-->
<link rel="stylesheet" href="<?=base_url('asseut/leaflet/')?>leaflet.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<script>
$(document).on('ready',function(){
  // filter numeric
  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
});
</script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Tablas" class="nav-link">Inicio</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?=base_url('asseut/AdminLTE-3.0.0/')?>dist/img/avatar.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">Roberto Herrera</span>
        </a>
</li>
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
