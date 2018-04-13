<?php
session_start();
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CBB Main</title>
    </head>
    <body>
        <?php

        include 'dbh_link.php';

          $sql=  mysqli_query($con, "SELECT * FROM burger_info ORDER BY id DESC");
       ?>
       <div>

         <form class="" action="bg_search.php" method="post">
           <input type="text" name="txt_bg_search" value="">
           <button type="submit" name="bg_srch_btn">Search</button>
         </form>

       </div>

        <div>
            <td>Burger Database</td>
              <table border="1">
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

                    <th class="">
                      <a href="stud_add.html">Burger Toevoegen</a>
                    </th>

                </tr>

            <?php

                 while($row=  mysqli_fetch_array($sql))
                 {
                     ?>
                <tr>
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
                    <td>
                      <a href="bg_edit.php?edited=1&id=<?php echo $row['id']; ?>">EDIT</a>
                    </td>
                </tr>
            <?php
                 }
                 ?>
                 </table>
                </div>
        </body>
    </html>
