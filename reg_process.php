<?php
include 'dbh.php';


$first = $_POST['voornaam'];
$last = $_POST['achternaam'];
$pwd = $_POST['pwd'];
$r_pwd = $_POST['r_pwd'];
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
if(empty($r_pwd)){
header("Location: ../test/register.php?error=empty");
exit();
}
if(empty($id_nummer)){
header("Location: ../test/register.php?error=empty");
exit();
}
if ($pwd !== $r_pwd) {
	header("Location: ../test/register.php?error=match");
	exit();
}
if (strlen($id_nummer) !== 8) {
	header("Location: ../test/register.php?error=short");
	exit();
}
else{
	$sql = "SELECT id_nummer FROM user_info WHERE id_nummer = '$id_nummer' ";
	$result = $conn ->query($sql);
	$idnmrcheck = mysqli_num_rows($result);
		if ($idnmrcheck > 0) {
			header("Location: ../test/register.php?error=idnmr");
			exit();
		}else {
			//password encryption
			$enc_pwd = password_hash($pwd, PASSWORD_DEFAULT);
			$sql = "INSERT INTO user_info (id_nummer,pwd,voornaam,achternaam)
			VALUES ('$id_nummer','$enc_pwd','$first','$last')";

			$result = $conn->query($sql);

		header('Location: index.php');
	}
}

?>
