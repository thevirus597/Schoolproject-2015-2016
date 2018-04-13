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
  $geslacht = $row['bg_ges'];
  $staat = $row['bg_burgstaat'];
  $registratie = $row['bg_regdatum'];


}}
mysqli_close();



$pdf=new FPDF('L','mm',array(148,210));

$pdf->AddPage();
$pdf->Image('cbb-logo.png', 10, -20, 210, 210);
$pdf->SetFont( 'Arial',  'I', 21 );
$pdf -> Cell(190,10,'BUREAU VAN BURGERZAKEN',0,0,'C');
$pdf->Ln(1);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf-> Line($x + 190, 20, $y, 20);


$pdf->SetFont( 'Arial',  'B', 14 );
$pdf->SetXY($x - 10, $y + 10);
$pdf -> Cell(210,10,'BEWIJS VOOR HET AANVRAGEN VAN EEN RIJBEWIJS',0,0,'C');



$pdf->SetFont( 'Arial', '', 12 );

$col1="identifiteitsnummer";
$pdf->SetXY($x, $y + 20);
$pdf->MultiCell(50, 10, $col1 , 1, 1);
$pdf->SetXY($x + 50, $y + 20);
$col1a=$id_nummer;
$pdf->MultiCell(63, 10, $col1a, 0);

$col2="Geslacht";
$pdf->SetXY($x + 100, $y + 20 );
$pdf->MultiCell(50, 10, $col2 , 1, 1);
$pdf->SetXY($x + 150, $y + 20);
$col2a=$geslacht;
$pdf->MultiCell(20, 10, $col2a, 0);

$col3="Naam";
$pdf->SetXY($x, $y + 31);
$pdf->MultiCell(50, 10, $col3, 1, 1);
$pdf->SetXY($x+ 50, $y + 31);
$col3a=$anaam;
$pdf->MultiCell(50, 10, $col3a, 0);


$col4="Voornaam";
$pdf->SetXY($x, $y + 42);
$pdf->MultiCell(50, 10, $col4, 1, 1);
$pdf->SetXY($x+ 50, $y + 42);
$col4a=$vnaam;
$pdf->MultiCell(50, 10, $col4a, 0);

$col5="geboortedatum";
$pdf->SetXY($x, $y + 53);
$pdf->MultiCell(50, 10, $col5, 1, 1);
$pdf->SetXY($x+ 50, $y + 53);
$col5a=$geb;
$pdf->MultiCell(25, 10, $col5a, 0);

$col6="Te";
$pdf->SetXY($x + 140, $y + 53);
$pdf->MultiCell(10, 10, $col6 , 1, 1);
$pdf->SetXY($x + 150, $y + 53);
$col6a=$plaats;
$pdf->MultiCell(30, 10, $col6a, 0);

$col9="Burgelijke Staat";
$pdf->SetXY($x , $y + 64);
$pdf->MultiCell(50, 10, $col9, 1, 1);
$pdf->SetXY($x + 50, $y + 64);
$col9a= $staat;
$pdf->MultiCell(50, 10, $col9a, 0);

//als de persoon gehuwd is dan zal er nog een vak bijkomen

if (strlen($staat) < 8) { //gehuwd bestaat uit 6 karakters
  $col12 = "Echtgenoot(e)";
  $pdf->SetXY($x+100 , $y + 64);
  $pdf->MultiCell(50, 10, $col12, 1, 1);
  $pdf->SetXY($x + 150 , $y + 64);
  $col12a= 'test';
  $pdf->MultiCell(50, 10, $col12a, 0);
}

$col7="Adress";
$pdf->SetXY($x, $y + 75);
$pdf->MultiCell(50, 10, $col7, 1, 1);
$pdf->SetXY($x+ 50, $y + 75);
$col7a=$adress;
$pdf->MultiCell(50, 10, $col7a, 0);

$col11="Nr";
$pdf->SetXY($x + 140, $y + 75);
$pdf->MultiCell(10, 10, $col11, 1, 1);
$pdf->SetXY($x+ 150, $y + 75);
$col11a=$adress_nummer;
$pdf->MultiCell(50, 10, $col11a, 0);

$col8="Datum van Afgifte";
$pdf->SetXY($x + 100, $y + 86);
$pdf->MultiCell(50, 10, $col8, 1, 1);
$pdf->SetXY($x+ 150, $y + 86);
$col8a= date("Y/m/d");
$pdf->MultiCell(50, 10, $col8a, 0);

$col10="registratie Datum";
$pdf->SetXY($x, $y + 86);
$pdf->MultiCell(50, 10, $col10, 1, 1);
$pdf->SetXY($x+ 50, $y + 86);
$col10a= $registratie;
$pdf->MultiCell(50, 10, $col10a, 0);

$col13="leges";
$pdf->SetXY($x, $y + 100);
$pdf->MultiCell(50, 10, $col13, 0, 1);
$pdf->SetXY($x+ 50, $y + 100);
$col13a= "SRD 1;";
$pdf->MultiCell(50, 10, $col13a, 0);

$col14="Kwitantie Nummer";
$pdf->SetXY($x, $y + 106);
$pdf->MultiCell(50, 10, $col14, 0, 1);
$pdf->SetXY($x+ 50, $y + 106);
$col14a= "..................";
$pdf->MultiCell(50, 10, $col14a, 0);

$col14="HET HOOFD VAN BUREAU BURGERZAKEN";
$pdf->SetXY($x + 100, $y + 106);
$pdf->MultiCell(90, 10, $col14, 0, 1);
$pdf->SetXY($x+ 50, $y + 106);


$pdf->Ln(0);
$pdf->Output();


 ?>
