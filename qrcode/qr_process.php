<?php
include '../dbh.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];


}else{
	echo "Connectie mislukt";
}
$sql = mysqli_query($conn, "SELECT * FROM user_info WHERE id_nummer = '$id' ");

if(mysqli_num_rows($sql)>0){
	while($row = mysqli_fetch_array($sql)){
		header("Location: ../home.php?id=" . $id);
	}
}else{
	echo "Gebruik AUB een bestaande QR-Code";
}
?>
