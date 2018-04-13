<?php
include 'dbh_link.php';

$id_nummer = strtoupper($_POST['bg_id']);
$bg_vnm = $_POST['bg_vnm'];
$bg_anm = $_POST['bg_anm'];
$bg_geb = $_POST['bg_geb'];
$bg_geb_pl = $_POST['bg_geb_pl'];
$bg_ad = $_POST['bg_ad'];
$bg_ad_num = $_POST['bg_ad_num'];
$bg_dis = $_POST['bg_dis'];
$bg_ges = $_POST['bg_ges'];
$bg_burgstaat = $_POST['bg_burgstaat'];
$bg_regdatum = $_POST['bg_regdatum'];


$sql = "INSERT INTO burger_info (id_nummer, bg_vnm, bg_anm, bg_geb, bg_geb_pl, bg_ad, bg_ad_num, bg_dis, bg_ges, bg_burgstaat, bg_regdatum)
        VALUES ('$id_nummer', '$bg_vnm', '$bg_anm', '$bg_geb', '$bg_geb_pl','$bg_ad','$bg_ad_num','$bg_dis','$bg_ges','$bg_burgstaat','$bg_regdatum')";
$result = $con->query($sql);

header("Location: index.php")





 ?>
