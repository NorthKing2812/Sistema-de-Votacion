<?php $base= base_url('asseut/AdminLTE-3.0.0/');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- base_url() = http://localhost/ventas_ci/-->

  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=$base?>plugins/font-awesome/css/font-awesome.min.css">
<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$base?>dist/css/AdminLTE.min.css">

</head>
<body class="hold-transition login-page">
<div id="particles-js"></div>
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Sistema de votacion</b></a>
  </div>

                   
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicia Seccion</p>
      <form action="<?= base_url('index.php/auth/login')?>" method="post">
                
      <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Usuario" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope">@</span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
            </form>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
       
<!-- jQuery  -->
<script src="<?=$base?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=$base?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?=base_url('asseut/AdminLTE-3.0.0/')?>plugins/toastr/toastr.min.js"></script>

<script>
   <?php if($this->session->flashdata("error")){
                    echo "
                      $(document).Toasts('create', {
                        title: 'Error',
                        class: 'bg-danger', 
                        autohide: true,
                        delay: 750,
                        body: '{$this->session->flashdata("error")}'
                      })
                    ";                                            
                                        }?>
</script>
</body>
</html>
