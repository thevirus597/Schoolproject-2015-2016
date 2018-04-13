<?php
include 'dbh_link.php';

if(isset($_POST['bg_srch_btn'])){    //trigger button click

  $search=$_POST['txt_bg_search'];

  $query=mysqli_query($con,"SELECT * FROM burger_info WHERE bg_vnm LIKE '%{$search}%' ORDER BY id DESC ");

?>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>ID_Nummer</th>
      <th>Voornaam</th>
      <th>Achternaam</th>
      <th>Geboorte Datum</th>
      <th>Geboorte Plaats</th>
      <th>Address</th>
      <th>Address Nummer</th>
      <th>Distrikt</th>
      <th>Geslacht</th>
      <th>Burgelijke Staat</th>
      <th>Registratie Datum</th>
    </tr>
    <tr>
    <?php
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
    ?>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['id_nummer']; ?></td>
    <td><?php echo $row['bg_vnm']; ?></td>
    <td><?php echo $row['bg_anm']; ?></td>
    <td><?php echo $row['bg_geb'] ;?></td>
    <td><?php echo $row['bg_geb_pl'] ;?></td>
    <td><?php echo $row['bg_ad'] ;?></td>
    <td><?php echo $row['bg_ad_num'] ;?></td>
    <td><?php echo $row['bg_dis'] ;?></td>
    <td><?php echo $row['bg_ges'] ;?></td>
    <td><?php echo $row['bg_burgstaat'] ;?></td>
    <td><?php echo $row['bg_regdatum'] ;?></td>
    </tr>
    <form class="" action="index.php" method="post">
      <button type="submit" name="button">RETURN TO MAIN DATABASE</button>
      <br>
      <br>
      <br>
    </form>

<?php
}
}else{
    echo "No employee Found<br><br>";
  }

}


mysql_close();
    ?>
