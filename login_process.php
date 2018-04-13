<?php
  session_start();
  include 'dbh.php';
  if(isset($_POST['login'])){

    $id = strtoupper($_POST['id_nummer']);
    $pwd = $_POST['pwd'];


    
      $sql = "SELECT * FROM user_info WHERE id_nummer='$id' AND pwd='$pwd'";
      $result = $conn->query($sql);}

      if (!$row = mysqli_fetch_assoc($result)){
        header("Location: index.php?error=empty");
        exit();
      }//id_nummer te kort
      elseif (strlen($id) !== 8) {
        header("Location: index.php?error=empty");
        exit();
      }
      else {
      $_SESSION['id'] = $row['id'];
      header('Location: home.php?id='.$id);
      }
    
  

  if(isset($_POST['register'])){
    header('Location: register.php');
    }

?>
