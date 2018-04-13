
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Identify|Me</title>
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
<style>

</style>


  </head>

<body>







<div class="register-box">
  <div class="register-logo">
  <div class="logo1">
<img src="dist/img/bove.png" class= "img-responsive center-block" ></br>
</div>

<div class="logo3">
<img src="dist/img/CBB_logo.png" class= "img-responsive center-block" ></br>
</div>

  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registreer een nieuwe account</p>

    <form action="reg_process.php" method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="voornaam" placeholder="Voornaam">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control"  name="achternaam" placeholder="Familienaam">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
      <input type="text" class="form-control"  name="id_nummer" placeholder="ID-Nummer" maxlength="8">
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pwd" placeholder="Wachtwoord">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="r_pwd" placeholder="Retype wachtwoord">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="  btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

      
      </br>
      <a href="index.php" class="text-center">Ik heb al een account</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
</div>
</body>

</html>
