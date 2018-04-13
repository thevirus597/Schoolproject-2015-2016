<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Identify Me</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1.1, maximum-scale=2, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

<style>



</style>


</head>
<body>
<div id="wrapper">
<div class="login-box">
<div class="login-logo">

<div class="logo">
<img src="dist/img/bove.png" class= "img-responsive center-block" ></br>
</div>

<div class="logo2">
<img src="dist/img/CBB_logo.png" class= "img-responsive center-block" ></br>
</div>

</div>



  <!-- /.login-logo -->
  <div class="login-box-body">



    <center>
      <p class="btn-lg">Log in</p>
    </center>

     <form action="login_process.php" method="POST">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="id_nummer" placeholder="ID-Nummer" maxlength="8">
        <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pwd" placeholder="Wachtwoord" >
        <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
      </div>

      <?php
       if (isset($_GET['error'])) {
         echo "Incorrect username or password";       }
       ?>

      <div class="row">
        <div class="col-xs-8">
         <button type="submit" name="login" class="btn btn-success btn-block btn-raised btn-normal">Log In</button>

        </div>
        <!-- /.col -->
        <div class="col-xs-4">
        </div>
        <!-- /.col -->
      </div>
      <div>
      <br />

</div>
      <center>
        <div>
        <br>
        <img src="dist/img/qr.png" alt="QR-Code" height="130" width="130">      <br>

          <a href="qrcode/scanner.php" class="text-center">Log in met QR-CODE</a>
        </div>
          <br>
        <a href="register.php" class="text-center">Register a new membership</a>

      </center>




    </form>
    </div>
</div>
</body>
</html>
