<?php
include 'dbh_link.php';

if (isset($_GET['deleted'])) {
$con=  mysqli_query($con, "DELETE FROM stu_info WHERE stu_nr ='{$_GET['id']}'");
}
if ($con) {
  header("Location: index.php");
}

 ?>
