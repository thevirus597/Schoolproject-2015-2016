<?php
require('../fpdf181/fpdf.php') ;
include '../dbh.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
$sql = mysqli_query($conn, "SELECT * FROM burger_info WHERE id_nummer = '$id'");

if(mysqli_num_rows($sql)>0){
while($row = mysqli_fetch_array($sql)) {
  $id_nummer = $row['id_nummer'];
  $vnaam = $row['bg_vnm'];
  $anaam = $row['bg_anm'];
  $geb = $row['bg_geb'];
  $plaats = $row['bg_geb_pl'];
  $adress = $row['bg_ad'];
  $adress_nummer = $row['bg_ad_num'];
  $distrikt = $row['bg_dis'];
  $geslacht = $row['bg_ges'];
  $staat = $row['bg_burgstaat'];
  $registratie = $row['bg_regdatum'];


}}
mysqli_close();



$pdf=new FPDF('L','mm',array(75,210));

$pdf->AddPage();

$pdf->Image('cbb-logo.png', 170, 30, 40, 40);

$pdf->SetFont( 'Arial',  'B'.'U', 11 );
$pdf -> Cell(0,0,'BEWIJS VAN INSCHRIJVING IN HET BEVOLKINGSREGISTER',0,0,'C');
$pdf->SetFont( 'Arial', '', 11 );
$pdf->Ln(1);
$x = $pdf->GetX();
$y = $pdf->GetY();


$col1 = "naam: ";
$pdf->SetXY($x, $y + 2);
$pdf->MultiCell(30, 10, $col1 , 1, 0);
$col1a = $anaam;
$pdf->SetXY($x, $y + 2);
$pdf->MultiCell(50, 10, $col1a , 0, 0);


$col2 = "Voornaam:";
$pdf->SetXY($x, $y + 12);
$pdf->MultiCell(30, 10, $col2 , 1 , 0);
$col2a = $vnaam;
$pdf->SetXY($x, $y + 12);
$pdf->MultiCell(55, 10, $col2a , 0, 0);

$col3 = "ID:";
$pdf->SetXY($x + 70, $y + 12);
$pdf->MultiCell(20, 10, $col3 , 1 , 0);
$col3a = $id_nummer;
$pdf->SetXY($x+ 70, $y + 12);
$pdf->MultiCell(50, 10, $col3a , 0, 0);

$col4 = "geboortedatum: ";
$pdf->SetXY($x, $y + 22);
$pdf->MultiCell(30, 10, $col4 , 1 , 0);
$col4a = $geb;
$pdf->SetXY($x, $y + 22);
$pdf->MultiCell(55, 10, $col4a , 0, 0);

$col5 = "Plaats: ";
$pdf->SetXY($x + 70, $y + 22);
$pdf->MultiCell(30, 10, $col5 , 1 , 0);
$col5a = $plaats;
$pdf->SetXY($x+ 70, $y + 22);
$pdf->MultiCell(55, 10, $col5a , 0, 0);

$col6 = "Woonplaats: ";
$pdf->SetXY($x, $y + 32);
$pdf->MultiCell(30, 10, $col6 , 1 , 0);
$col6a = $distrikt;
$pdf->SetXY($x, $y + 32);
$pdf->MultiCell(55, 10, $col6a , 0, 0);








$pdf->Ln(0);
$pdf->Output();


 ?>
