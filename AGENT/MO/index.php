
<?php


session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin'))) 
{

// if(isset($_COOKIE['visit']) && $_COOKIE['visit'] == "true"){
//     echo 'cookie set, welcome back';
// }else{
//     echo 'cookie not set, welcome new user';
//     setcookie("visit", "true", time()+60*60*24*600);
// }

?>

<?php
require('../controls/zdze8efzedzdeezd/de5.php');
$idexp=$_GET['idexp'];

$reqndf=$cdb->prepare("SELECT * FROM expences WHERE exp_id='$idexp'");
$reqndf->execute();
if ($reqndf===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resndf=$reqndf->get_result();
    while ($showndf=$resndf->fetch_row()) {

$useri=$_SESSION['nmu'];

$reqacc=$cdb->prepare("SELECT * FROM user WHERE u_username='$useri'");
$reqacc->execute();
if ($reqacc===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resacc=$reqacc->get_result();
    while ($showacc=$resacc->fetch_row()) {


$reqag=$cdb->prepare("SELECT * FROM agents WHERE ag_id='$showndf[1]'");
$reqag->execute();
if ($reqag===false) {
  echo "We Have Problem In Data Export!";
}
else{
  $resag=$reqag->get_result();
    while ($showagexp=$resag->fetch_row()) {




$end = strtotime($showndf[4]); // or your date as well
$start = strtotime($showndf[3]);
$datediff = $end - $start;


        ?>
<?php 
header('Content-Type: text/html; charset=ISO-8859-1');



require('fpdf.php');
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm





$pdf = new FPDF('P','mm','A4');



	$unchecked = "unchecked.png";
$checked = "checked.png";
$SIGNA = "SIGNA.jfif";


$pdf->AddPage("");
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->SetFont('arial','B',14);

$pdf->Cell(40,40,$pdf->Image('Entete-2020.png',10,3,-323), 0,'C',true);
$pdf->Cell(189 ,16,'',0,1);






$pdf->SetFont('arial','B',9);
$pdf->Cell(189 ,12,'',0,1);
$pdf->setFillColor(222, 235, 250);
$pdf->Cell(42 ,5,'Edition',1,0,'C',1);
$pdf->Cell(20 ,5,iconv('UTF-8', 'ISO-8859-2', "Vérification"),1,0,'C',1);
$pdf->Cell(18 ,5,iconv('UTF-8', 'ISO-8859-2', "Validation"),1,0,'C',1);
$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', "Diffusion"),1,0,'C',1);
$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', "Date"),1,0,'C',1);
$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', "ID Document"),1,0,'C',1);
$pdf->Cell(18 ,5,iconv('UTF-8', 'ISO-8859-2', "Statut"),1,0,'C',1);
$pdf->Cell(20 ,5,iconv('UTF-8', 'ISO-8859-2', "Pages"),1,1,'C',1);

$pdf->SetFont('arial','',10);

$pdf->Cell(42 ,5,'Fatima charif chaair maair',1,0,1);
$pdf->Cell(20 ,5,'',1,0,1);
$pdf->Cell(18 ,5,'',1,0,1);
$pdf->Cell(24 ,5,'',1,0,1);
$pdf->Cell(24 ,5,'',1,0,1);
$pdf->Cell(24 ,5,'',1,0,1);
$pdf->Cell(18 ,5,'',1,0,1);
$pdf->Cell(20 ,5,iconv('UTF-8', 'ISO-8859-2', "1/1"),1,1,'C',0);

$pdf->SetFont('arial','B',9);
$pdf->Cell(52 ,5,'Date de controle du document',1,0,'C',1);
$pdf->Cell(18 ,5,'',1,0,'C',0);
$pdf->Cell(48 ,5,'Date de publication',1,0,'C',1);
$pdf->Cell(24 ,5,'',1,0,'C',0);
$pdf->Cell(24 ,5,'Langue',1,0,'C',1);
$pdf->Cell(24 ,5,'FR',1,1,'C',0);

$pdf->Cell(52 ,5,'Titre de document',1,0,'C',1);

$pdf->Cell(66 ,5,'ORDRE DE MISSION',1,0,'C',0);
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "No°"),1,0,'C',1);
$pdf->SetFont('arial','',8);
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "MO00".$showagexp[0]),1,0,'C',0);
$pdf->SetFont('arial','B',9);
$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', "Version"),1,0,'C',1);
$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', "1.0"),1,1,'C',0);


$pdf->Cell(189 ,5,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(184,204,228);
$pdf->Cell(190 ,10,iconv('UTF-8', 'ISO-8859-2', "RESERVE AU MISSIONNAIRE"),1,0,'C',1);

$pdf->Cell(189 ,10,'',0,1);

	







$pdf->setFillColor(184,204,228); 





$pdf->setFillColor(184,204,228); 

$pdf->SetFont('Arial','B',10);


$pdf->Cell(189 ,0,'',0,1);



$pdf->SetFont('Arial','',10);
$pdf->SetFont('Arial','B',10);

$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Nom et Prénom"),1,0);

$pdf->SetFont('Arial','',10);
$pdf->Cell(150 ,5,iconv('UTF-8', 'ISO-8859-2', $showagexp[1]),1,1);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Fonction"),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(150 ,5,iconv('UTF-8', 'ISO-8859-2', $showagexp[6]),1,1);




$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Département"),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20 ,5,iconv('UTF-8', 'ISO-8859-2', "Production"),0,0);

if ($showagexp[5]=="Production") {
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "QHSE"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(10 ,5,iconv('UTF-8', 'ISO-8859-2', "CMC"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "RH"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "A&F"),0,0);
$pdf->Cell(32 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}
elseif ($showagexp[5]=="QHSE") {


$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);

$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "QHSE"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(10 ,5,iconv('UTF-8', 'ISO-8859-2', "CMC"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "RH"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "A&F"),0,0);
$pdf->Cell(32 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}
elseif ($showagexp[5]=="CMC") {


$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);

$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "QHSE"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(10 ,5,iconv('UTF-8', 'ISO-8859-2', "CMC"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "RH"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "A&F"),0,0);
$pdf->Cell(32 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}
elseif ($showagexp[5]=="RH") {


$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);

$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "QHSE"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(10 ,5,iconv('UTF-8', 'ISO-8859-2', "CMC"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "RH"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "A&F"),0,0);
$pdf->Cell(32 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}
elseif ($showagexp[5]=="DAF") {


$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);

$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "QHSE"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(10 ,5,iconv('UTF-8', 'ISO-8859-2', "CMC"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "RH"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(8 ,5,iconv('UTF-8', 'ISO-8859-2', "A&F"),0,0);
$pdf->Cell(32 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}

$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(224, 224, 224); 
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Objet de la mission (joindre un justificatif : invitation, programme, etc.)"),1,0,'C',1);
$pdf->setFillColor(184,204,228);
$pdf->Cell(189 ,5,'',0,1);


$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Lieu de départ"),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(150 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,1);


$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Destination"),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "National"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "International"),0,0);
$pdf->Cell(98 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
$pdf->SetFont('Arial','B',10);

$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Ville ou region"),1,0);

$pdf->SetFont('Arial','',10);
$pdf->Cell(150 ,5,iconv('UTF-8', 'ISO-8859-2', $showndf[17]),1,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Motif de déplacement"),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(150 ,5,iconv('UTF-8', 'ISO-8859-2', $showndf[2]),1,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Date de départ"),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(55 ,5,iconv('UTF-8', 'ISO-8859-2', $showndf[3]),1,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Date de retour"),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(55 ,5,iconv('UTF-8', 'ISO-8859-2', $showndf[4]),1,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Heure de départ prevu"),1,0);
$pdf->SetFont('Arial','',10);

$pdf->Cell(55 ,5,iconv('UTF-8', 'ISO-8859-2', $showndf[28]),1,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Heure de retour prevu"),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(55 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,1);

$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(224, 224, 224); 
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Frais relatifs a la mission"),1,0,'C',1);
$pdf->setFillColor(184,204,228);
$pdf->Cell(189 ,5,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "OM avec frais"),1,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(75 ,5,iconv('UTF-8', 'ISO-8859-2', "Prise en charge"),1,0);
$pdf->Cell(75 ,5,iconv('UTF-8', 'ISO-8859-2', "Par"),1,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "OM sans frais"),1,0);
$pdf->SetFont('Arial','',10);

if ($showndf[27]=="Parcial") {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Totale"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Partielle"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}
if ($showndf[27]=="Total") {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Totale"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Partielle"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}
if ($showndf[27]=="") {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Totale"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Partielle"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}

$pdf->Cell(26 ,5,iconv('UTF-8', 'ISO-8859-2', "|	missionnaire"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(18 ,5,iconv('UTF-8', 'ISO-8859-2', "entreprise"),0,0);
$pdf->Cell(17 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');

$pdf->Cell(189 ,0,'',0,1);


$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(224, 224, 224); 
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Frais pris en charge avant le depart faisant l'objet d'une réservation"),1,0,'C',1);

$pdf->Cell(189 ,5,'',0,1);
$pdf->setFillColor(184,204,228); 
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Date de réservation"),1,0,1);

$pdf->Cell(189 ,5,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(224, 224, 224);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Voyage"),1,0,'C',1);
$pdf->setFillColor(184,204,228);
$pdf->SetFont('Arial','',10);

if ($showndf[24]=="VOL") {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Avion"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Bateau"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "	train"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "Autre"),0,0);
$pdf->Cell(34 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}
elseif ($showndf[24]=="CRUSE") {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Avion"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Bateau"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', " train"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "Autre"),0,0);
$pdf->Cell(34 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}

elseif ($showndf[24]=="TGV") {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Avion"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Bateau"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', " train"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "Autre"),0,0);
$pdf->Cell(34 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}

elseif (($showndf[24]=="Other")||($showndf[23]=="")) {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Avion"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Bateau"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', " train"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "Autre"),0,0);
$pdf->Cell(34 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
}

$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(224, 224, 224);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Séjour"),1,0,'C',1);
$pdf->setFillColor(184,204,228);
$pdf->SetFont('Arial','',10);

if (((($showndf[21]=="yes")&&($showndf[5]=!""))||(($showndf[21]=="1")&&($showndf[22]=="Hotel")))) {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Hotel"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Logement"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(76 ,5,iconv('UTF-8', 'ISO-8859-2', ""),'R', 1, 'R');
}


elseif (($showndf[21]=="yes")&&($showndf[22]=="Housing")) {
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Hotel"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Logement"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(76 ,5,iconv('UTF-8', 'ISO-8859-2', ""),'R', 1, 'R');
}

else{
$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "Hotel"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Logement"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(76 ,5,iconv('UTF-8', 'ISO-8859-2', ""),'R', 1, 'R');
}

$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(95 ,15,iconv('UTF-8', 'ISO-8859-2', "Signature du missionnaire"),1,0,'C',0);
$pdf->Cell(95 ,15,iconv('UTF-8', 'ISO-8859-2', "Signature du DG/DT"),1,1,'C',0);

$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "* Numéro de billet d'avion, de ticket de train, etc."),1,0,1);
$pdf->Cell(189 ,5,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(184,204,228);
$pdf->Cell(190 ,10,iconv('UTF-8', 'ISO-8859-2', "RESERVE AU DEPARTEMENT ADMINISTRATIF"),1,0,'C',1);

$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Ordre de mission no°"),1,0,1);
$pdf->Cell(189 ,5,'',0,1);
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Remboursement des frais au retour de la mission (joindre TOUT les justificatifs)"),1,1,'C',0);
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "SI l'itinéraire prévu de la mission a été modifié a l'aller/retour, indiquer lieu, date et heure et le motif)"),1,1,'C',0);

$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(224, 224, 224); 
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Frais de transport"),1,0,'C',1);
$pdf->setFillColor(184,204,228);
$pdf->Cell(189 ,5,'',0,1);
$pdf->SetFont('Arial','',10);

$pdf->Cell(45 ,5,iconv('UTF-8', 'ISO-8859-2', "Vehicule personnel"),'L', 0, 'L');
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->SetFont('Arial','',10);

$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Taxi"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
if ($showndf[24]=="VOL") {
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "Avion"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}
else{
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "Avion"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}

$pdf->Cell(15 ,5,iconv('UTF-8', 'ISO-8859-2', "	Parking"),0,0);
$pdf->Cell(26 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
if (($showndf[20]=="yes")||($showndf[20]=="1")) {
$pdf->Cell(45 ,5,iconv('UTF-8', 'ISO-8859-2', "Vehicule professionnel"),'L', 0, 'L');
$pdf->Cell(15 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}
else{
$pdf->Cell(45 ,5,iconv('UTF-8', 'ISO-8859-2', "Vehicule professionnel"),'L', 0, 'L');
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}
$pdf->SetFont('Arial','',10);
$pdf->Cell(40 ,5,iconv('UTF-8', 'ISO-8859-2', "Transport en commun"),0,0);
$pdf->Cell(15 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);

if ($showndf[24]=="TGV") {
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "Train"),0,0);
$pdf->Cell(23 ,5,$pdf->Image($checked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}
else {
$pdf->Cell(12 ,5,iconv('UTF-8', 'ISO-8859-2', "Train"),0,0);
$pdf->Cell(23 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
}

$pdf->Cell(14 ,5,iconv('UTF-8', 'ISO-8859-2', "Péage"),0,0);
$pdf->Cell(26 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');

$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(224, 224, 224); 
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Frais de séjour"),1,0,'C',1);
$pdf->setFillColor(184,204,228);
$pdf->Cell(189 ,5,'',0,1);

$pdf->Cell(45 ,5,iconv('UTF-8', 'ISO-8859-2', "Nombre de nuitées"),1,0);

$pdf->Cell(45 ,5,iconv('UTF-8', 'ISO-8859-2', "Nombre de repas"),1,0);

$pdf->Cell(100 ,5,iconv('UTF-8', 'ISO-8859-2', "Autre frais"),1,1);


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(45 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0);

$pdf->Cell(30 ,5,iconv('UTF-8', 'ISO-8859-2', "Frais de collogue"),0,0);
$pdf->Cell(23 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),0,0);
$pdf->Cell(25 ,5,iconv('UTF-8', 'ISO-8859-2', "Frais de VISA"),0,0);
$pdf->Cell(22 ,5,$pdf->Image($unchecked, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Date"),1,0,1);

$pdf->Cell(189 ,5,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(224, 224, 224); 

$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Signature du missionnaire"),1,0,'C',1);
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Signature du DAF"),1,0,'C',1);
$pdf->Cell(66 ,5,iconv('UTF-8', 'ISO-8859-2', "Signature du responsable comptable"),1,1,'C',1);
$pdf->Cell(62 ,25,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'C',0);

$image_format = strtolower(pathinfo($_FILES['jfif']['SIGNA'], PATHINFO_EXTENSION));
$pdf->Image($SIGNA,150,25,50,20,$image_format);


$pdf->Cell(32 ,5,$pdf->Image($SIGNA, $pdf->GetX(), $pdf->GetY(),4.5,4.5),'R', 1, 'R');
$pdf->Cell(62 ,25,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'C',0);
$pdf->Cell(66 ,25,iconv('UTF-8', 'ISO-8859-2', ""),1,1,'C',0);







$pdf->Cell(189 ,4,'',0,1);
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(0,3,iconv('UTF-8', 'ISO-8859-2', 'Ce document est la propriété exclusive de Geniworks Industry.'),0,1,'C',0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(0,3,iconv('UTF-8', 'ISO-8859-2', 'Il ne peut etre communiqué ou dévulgué a des tiers sans son autorisation écrite préalable.'),0,1,'C',0);













$pdf->Output(); 




 }}}}}}?>



<?php
}

else {
    header("location:../login.php");
}
?>