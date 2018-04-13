<?php
  include 'dbh_link.php';

  if (isset($_GET['edited'])) {
    $sql=  mysqli_query($con, "SELECT * FROM burger_info WHERE id ='{$_GET['id']}'");
    while($row=  mysqli_fetch_array($sql))
    {

      $id = $_GET['id'];
      $id_nummer =  $row['id_nummer'];
      $bg_vnm =  $row['bg_vnm'];
      $bg_anm =  $row['bg_anm'];
      $bg_geb =  $row['bg_geb'] ;
      $bg_geb_pl =  $row['bg_geb_pl'] ;
      $bg_ad =  $row['bg_ad'] ;
      $bg_ad_num =  $row['bg_ad_num'] ;
      $bg_dis =  $row['bg_dis'] ;
      $bg_ges =  $row['bg_ges'] ;
      $bg_burgstaat =  $row['bg_burgstaat'] ;
      $bg_regdatum =  $row['bg_regdatum'] ;
    }
}

if (isset($_POST['bg_update'])) {

  $id = $_POST['id'];
  $id_nummer =  $_POST['bg_id'];
  $bg_vnm =  $_POST['bg_vnm'];
  $bg_anm =  $_POST['bg_anm'];
  $bg_geb =  $_POST['bg_geb'] ;
  $bg_geb_pl =  $_POST['bg_geb_pl'] ;
  $bg_ad =  $_POST['bg_ad'] ;
  $bg_ad_num =  $_POST['bg_ad_num'] ;
  $bg_dis =  $_POST['bg_dis'] ;
  $bg_ges =  $_POST['bg_ges'] ;
  $bg_burgstaat =  $_POST['bg_burgstaat'] ;
  $bg_regdatum =  $_POST['bg_regdatum'] ;



    $sql =mysqli_query($con, "UPDATE burger_info
            SET id_nummer='$id_nummer',
                bg_vnm='$bg_vnm',
                bg_anm='$bg_anm',
                bg_geb='$bg_geb',
                bg_geb_pl='$bg_geb_pl',
                bg_ad='$bg_ad',
                bg_ad_num='$bg_ad_num',
                bg_dis='$bg_dis',
                bg_ges='$bg_ges',
                bg_burgstaat='$bg_burgstaat',
                bg_regdatum='$bg_regdatum'
            WHERE id ='{$_POST['id']}'");

      header("Location: index.php");
    }



 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
      <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          ID<br><input type="text" name="id" value="<?php echo $id ?>"><br>
          ID-Nummer <br><input type="text" name="bg_id" value="<?php echo $id_nummer ?>"><br>
          <br>
          Voornaam <br><input type="text" name="bg_vnm" value="<?php echo $bg_vnm ?>"><br>
          <br>
          Achternaam <br><input type="text" name="bg_anm" value="<?php echo $bg_anm ?>"><br>
          <br>
          Geboortedatum <br><input type="date" name="bg_geb" value="<?php echo $bg_geb ?>"><br>
          <br>
          Geboorte Plaats <br><select name="bg_geb_pl" value="<?php echo $bg_geb_pl ?>">
                    <option value="Paramaribo">Paramaribo</option>
                    <option value="Wanica">Wanica</option>
                    <option value="Brokopondo">Brokopondo</option>
                    <option value="Commewijne">Commewijne</option>
                    <option value="Coronie">Coronie</option>
                    <option value="Nickerie">Nickerie</option>
                    <option value="Para">Para</option>
                    <option value="Saramacca">Saramacca</option>
                    <option value="Sipaliwini">Sipaliwini</option>
                  </select><br>
          adres <br><input type="text" name="bg_ad" value="<?php echo $bg_ad ?>"><br>
          <br>
          adres Nummer <br><input type="text" name="bg_ad_num" value="<?php echo $bg_ad_num ?>"><br>
          <br>
          Distrikt <br><select name="bg_dis" value="<?php echo $bg_dis ?>">
                    <option value="Paramaribo">Paramaribo</option>
                    <option value="Wanica">Wanica</option>
                    <option value="Brokopondo">Brokopondo</option>
                    <option value="Commewijne">Commewijne</option>
                    <option value="Coronie">Coronie</option>
                    <option value="Nickerie">Nickerie</option>
                    <option value="Para">Para</option>
                    <option value="Saramacca">Saramacca</option>
                    <option value="Sipaliwini">Sipaliwini</option>
                  </select><br>
          <br>
          Geslacht <br><select name="bg_ges" value="<?php echo $bg_ges ?>">
                    <option value="M">Man</option>
                    <option value="V">Vrouw</option>
                  </select><br>
          Burgelijke Staat <br><input type="text" name="bg_burgstaat" value="<?php echo $bg_burgstaat ?>"><br>
          <br>
          Registratie Datum <br><input type="date" name="bg_regdatum" value="<?php echo $bg_regdatum ?>"><br>
          <br>
          <button type="sumbit" name="bg_update">Update</button>
      </form>
   </body>
 </htmbg
