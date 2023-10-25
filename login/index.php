<?php
include "../app/config.php"
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo APP_NAME; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL; ?>/public/templeates/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo $URL; ?>/public/templeates/index2.html"><b>SISTEMA DE INGRESO</b></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <div style="text-align: center;">
          <img src="<?php echo $URL; ?>/public/images/logo1.jpg" style="width: 32%;" alt="Inicio de sesion">
      </div>
      <p class="login-box-msg">Ingresa tus datos</p>

      <form action="<?php echo $URL;?>/app/controllers/login/controller_login.php" method="post">
        <label for="">Correo electronico</label>
        <div class="input-group mb-1">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <label for="">Contraseña</label>
        <div class="input-group mb-0">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
         <hr>
         <button type="submit" class="btn btn-primary mb-1" style="width: 100%">Ingresar</button>
         <a href="" class="btn btn-secondary mt-1" style="width: 100%">Cancelar</a>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $URL; ?>/public/templeates/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $URL; ?>/public/templeates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $URL; ?>/public/templeates/dist/js/adminlte.min.js"></script>
</body>
</html>