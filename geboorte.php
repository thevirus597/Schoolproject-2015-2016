<?php
  include 'dbh.php';


  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }else {
    echo "conn noet mogelijk";
  }

  $sql = mysqli_query($conn, "SELECT * FROM user_info WHERE id_nummer = '$id'");
  while ($row = mysqli_fetch_array($sql)) {
    $voornaam = $row['voornaam'];
    $achternaam = $row['achternaam'];
  }
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Het Centraal Bureau voor Burgerzaken Suriname.</title>

    <!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1.1, maximum-scale=2, user-scalable=no" name="viewport">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style>
.button {
    background-color: #7BE0AD;
    border: none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button1 {
    background-color: #7BE0AD;
    color: black;
    border: 2px solid #4D4D4D;
}
</style>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>

                <div style="color: #7BE0AD;
              padding: 15px 50px 5px 50px;
              float: left;
              font-size: 16px;">

              <?php
                echo $voornaam ." ". $achternaam;
              ?>
              </div>
  <div style="color: #7BE0AD;
padding: 20px 50px 5px 50px;
float: right;
font-size: 16px;">


<form action="logout.php">

  <button type="submit" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-log-out"></span> Log out
          </button>
</form>
 </div>

        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/CBBlogo.png" class="user-image img-responsive"/>
					</li>

                    <li>
                        <a   href="home.php?id=<?php echo $id ?>"><i></i>Home</a>
                    </li>
                     <li>
                        <a  href="uitreksel.php?id=<?php echo $id ?>"<i ></i>Uitreksel</a>
                    </li>
                    <li>
                        <a   href="rijbewijs.php?id=<?php echo $id ?>"<i ></i>Aanvraag Rijbewijs</a>
                    </li>
						   <li  >
                        <a class="active-menu"  href="geboorte.php?id=<?php echo $id ?>"<i ></i>Geboorte akte</a>
                    </li>
                      <li  >
                        <a  href="nationaliteit.php?id=<?php echo $id ?>"<i ></i>Nationaliteits verklaring</a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Geboorte akte.</h2>

                     <div class="geboorte">
                     <img src="Fdoc/gakte.png" class= "img-responsive center-block" ></br>
                     </div>

                     <a href="docs/geboorteakte.php?id=<?php echo $id ?>" class="btng btn-info btn-lg">
                               <span class="glyphicon glyphicon-download-alt"></span> Download
                             </a>
                    </div>
                </div>

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
