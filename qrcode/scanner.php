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


#videoStream {
    display: none;
    border: 2px solid;
}



</style>


</head>
<body>
<div id="wrapper">
<div class="scanner-box">
<div class="scanner-logo">

<div class="logo">
<img src="dist/img/bove.png" class= "img-responsive center-block" ></br>
</div>



</div>




  <div class="scanner-box-body">


    <center>
      <p class="btn-lg">Houdt uw QR code voor uw camera.</p>
    </center>


    <div class="select">
        <label for="videoSource"></label><select id="videoSource" hidden ></select>
    </div>

    <video id="videoStream" muted autoplay></video>

    <canvas id="qr-canvas"></canvas>

</div>
</div>

<script type="text/javascript" src="lib/jsqrcode/grid.js"></script>
<script type="text/javascript" src="lib/jsqrcode/version.js"></script>
<script type="text/javascript" src="lib/jsqrcode/detector.js"></script>
<script type="text/javascript" src="lib/jsqrcode/formatinf.js"></script>
<script type="text/javascript" src="lib/jsqrcode/errorlevel.js"></script>
<script type="text/javascript" src="lib/jsqrcode/bitmat.js"></script>
<script type="text/javascript" src="lib/jsqrcode/datablock.js"></script>
<script type="text/javascript" src="lib/jsqrcode/bmparser.js"></script>
<script type="text/javascript" src="lib/jsqrcode/datamask.js"></script>
<script type="text/javascript" src="lib/jsqrcode/rsdecoder.js"></script>
<script type="text/javascript" src="lib/jsqrcode/gf256poly.js"></script>
<script type="text/javascript" src="lib/jsqrcode/gf256.js"></script>
<script type="text/javascript" src="lib/jsqrcode/decoder.js"></script>
<script type="text/javascript" src="lib/jsqrcode/qrcode.js"></script>
<script type="text/javascript" src="lib/jsqrcode/findpat.js"></script>
<script type="text/javascript" src="lib/jsqrcode/alignpat.js"></script>
<script type="text/javascript" src="lib/jsqrcode/databr.js"></script>


<script type="text/javascript" src="lib/jquery-2.1.3.min.js"></script>
<script src="js/generateQR.js"></script>
<script src="js/getUserMedia.js"></script>
<script src="js/scanQR.js"></script>







</body>
</html>
