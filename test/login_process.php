<?php
session_start();
include 'dbh.php';
if(isset($_POST['login'])){

  $id = strtoupper($_POST['id_nummer']);
  $pwd = $_POST['pwd'];

  $sql = "SELECT * FROM User_info WHERE id_nummer='$id' AND pwd='$pwd'";
  $result = $conn->query($sql);

  if (!$row = mysqli_fetch_assoc($result)){
      $message ="you're username or password is incorrect";

  } else {
    $_SESSION['id'] = $row['id'];
    header('Location: home.html');

  }}

if(isset($_POST['register'])){
  header('Location: register.php');
  }

?>
