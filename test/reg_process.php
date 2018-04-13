<?php
include 'dbh.php';


$first = $_POST['voornaam'];
$last = $_POST['achternaam'];
$pwd = $_POST['pwd'];
$id_nummer = strtoupper($_POST['id_nummer']);

if(empty($first)){
header("Location: ../test/register.php?error=empty");
exit();
}
if(empty($last)){
header("Location: ../test/register.php?error=empty");
exit();
}
if(empty($pwd)){
header("Location: ../test/register.php?error=empty");
exit();
}
if(empty($id_nummer)){
header("Location: ../test/register.php?error=empty");
exit();
}
else{
	$sql = "SELECT id_nummer FROM User_info WHERE id_nummer = '$id_nummer' ";
	$result = $conn ->query($sql);
	$idnmrcheck = mysqli_num_rows($result);
		if ($idnmrcheck > 0) {
			header("Location: ../test/register.php?error=idnmr");
			exit();
		}else {
			$sql = "INSERT INTO User_info (id_nummer,pwd,voornaam,achternaam)
			VALUES ('$id_nummer','$pwd','$first','$last')";

			$result = $conn->query($sql);

		header('Location: index.html');
	}
}

?>
