<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin'))) 
{


require('../controls/zdze8efzedzdeezd/de5.php');
$srfuser=$cdb->prepare("SELECT * FROM user WHERE u_username='".$_SESSION['nmu']."' AND u_password='".$_SESSION['passu']."'");
$srfuser->execute();
if ($srfuser===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $ressrfu=$srfuser->get_result();
  while ($showusersrf=$ressrfu->fetch_row()) {
    
  
?>
<?php 
header('Content-Type: text/html; charset=ISO-8859-1');



require('fpdf.php');
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm





$pdf = new FPDF('P','mm','A4');
$idr=$_GET['id_r'];
require('../controls/zdze8efzedzdeezd/de5.php');
$selreport=$cdb->prepare("SELECT * FROM report WHERE rprt_id='$idr'");
$selreport->execute();
if ($selreport===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $resreport=$selreport->get_result();
  if (mysqli_num_rows($resreport)!=0) { 
while ($showreport=$resreport->fetch_row()) {
$pdf->AddPage();

$pdf->SetFont('arial','B',10);

$pdf->Cell(40,40,$pdf->Image('header.png',0,3.5,-300), 0,'C',true);
$pdf->Cell(189 ,35,'',0,1);

// $pdf->Cell(130 ,5, 'GENIWORKS.COM',0,0);
// $pdf->Cell(59 ,5,'Supply Request Form',0,1);
if ($showreport[1]=='MT') { 
$pdf->setFillColor(184,204,228); 
$pdf->Cell(160 ,12,"PROCES VERBAL D'EXAMEN PAR MAGNETOSCOPIE ",1,0,"C",1);



}
elseif($showreport[1]=='VT') { 
	$pdf->setFillColor(184,204,228); 
$pdf->Cell(160 ,12,"PROCES VERBAL D'EXAMEN VISUEL",1,0,'C',1);
}
else{ 
	$pdf->setFillColor(184,204,228); 
$pdf->Cell(160 ,12,"PROCES VERBAL D'EXAMEN PAR ULTRASONS",1,0,'C',1);
}
$pdf->SetFont('arial','B',8);
$pdf->Cell(30 ,12,date($showreport[21]),1,0,'C');
$pdf->SetX($pdf->GetX() - 115);
$pdf->SetFont('arial','',9);

if ($showreport[1]=='MT') { 
$pdf->Cell(10 ,20,"MAGNETIC PARTICLE EXAMINATION TEST REPORT ",0,0,"C",0);
}
elseif($showreport[1]=='VT') { 
$pdf->Cell(10 ,20,"VISUAL EXAMINATION TEST REPORT ",0,0,"C",0);
}
else{ 

$pdf->Cell(10 ,20,"ULTRASONIC EXAMINATION TEST REPORT ",0,0,"C",0);
}

$pdf->SetFont('arial','B',8);
$pdf->Cell(189 ,12,'',0,1);
$pdf->SetFont('arial','',8);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Client / Customer',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'EUROGATE SA',1,0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Rapport N# / Report N',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'CND R'.$showreport[1].'-EGT/'.$showreport[3].'/LA00'.$showreport[0].' ',1,1,1);

$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Affaire / Project',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'Control',1,0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Commande / Order',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'00'.$showreport[0].' ',1,1,1);

$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Sujet / Subject',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,$showreport[3],1,0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Plan / Dwg',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'',1,1,1);


$pdf->Cell(189 ,5,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(184,204,228);
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Photos preuve / Proof Pictures"),1,0,'C',1);

$pdf->Cell(189 ,10,'',0,1);


$selpic=$cdb->prepare("SELECT * FROM report_pic WHERE rertp_report_id='$idr' LIMIT 1 OFFSET 0");
$selpic->execute();
if ($selpic===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respic=$selpic->get_result();
  if (mysqli_num_rows($respic)!=0) { 
while ($showpic=$respic->fetch_row()) {
	$image1 = "../$showpic[2]";
	$pdf->Cell(90 ,60,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 60),1,0);
}
}
elseif(mysqli_num_rows($respic)==0) { 
	$pdf->Cell(90 ,60,'',1,0);
}
}

$pdf->Cell(10 ,60,'',0,0);
$selpic=$cdb->prepare("SELECT * FROM report_pic WHERE rertp_report_id='$idr' LIMIT 1 OFFSET 1");
$selpic->execute();
if ($selpic===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respic=$selpic->get_result();
  if (mysqli_num_rows($respic)!=0) { 
while ($showpic=$respic->fetch_row()) {
	$image1 = "../$showpic[2]";
	$pdf->Cell(90 ,60,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 60),1,1);
}
}
elseif (mysqli_num_rows($respic)==0) { 
	$pdf->Cell(90 ,60,'',1,1);
}
}



$pdf->Cell(189 ,5,'',0,1);

$selpic=$cdb->prepare("SELECT * FROM report_pic WHERE rertp_report_id='$idr' LIMIT 1 OFFSET 2");
$selpic->execute();
if ($selpic===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respic=$selpic->get_result();
  if (mysqli_num_rows($respic)!=0) { 
while ($showpic=$respic->fetch_row()) {

	$image1 = "../$showpic[2]";
	$pdf->Cell(90 ,60,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 60),1,0);
}
}
elseif(mysqli_num_rows($respic)==0) { 
	$pdf->Cell(90 ,60,'',1,0);
}
}


$pdf->Cell(10 ,60,'',0,0);
$selpic=$cdb->prepare("SELECT * FROM report_pic WHERE rertp_report_id='$idr' LIMIT 1 OFFSET 3");
$selpic->execute();
if ($selpic===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respic=$selpic->get_result();
  if (mysqli_num_rows($respic)!=0) { 
while ($showpic=$respic->fetch_row()) {

	$image1 = "../$showpic[2]";
	$pdf->Cell(90 ,60,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 60),1,1);
}
}
elseif(mysqli_num_rows($respic)==0) { 
	$pdf->Cell(90 ,60,'',1,1);
}
}




$pdf->SetFont('Arial','',12);

// $pdf->Cell(130 ,5,'[Street Adress]',0,0);
// $pdf->Cell(59 ,5,'',0,1);

// $pdf->Cell(130 ,5,'[TANGIER, MOROCCO, 90000]',0,0);
// $pdf->Cell(25 ,5,'Date',0,0);
// $pdf->Cell(34 ,5,'[17/06/2019]',0,1);


// $pdf->Cell(130 ,5,'Phone [+1234567890]',0,0);
// $pdf->Cell(25 ,5,'SRF #',0,0);
// $pdf->Cell(34 ,5,'[1234567]',0,1);

// $pdf->Cell(130,5,'FAX [+1234567]',0,0);
// $pdf->Cell(25,5,'Customer ID',0,0);
// $pdf->Cell(34,5,'[123456789]',0,1);


$pdf->Cell(189 ,5,'',0,1);




$pdf->setFillColor(184,204,228); 





$pdf->setFillColor(184,204,228); 

$pdf->SetFont('Arial','B',10);


$pdf->Cell(189 ,0,'',0,1);



$pdf->setFillColor(184,204,228); 
$pdf->Cell(62 ,5,'Controleur(s) / Technician(s)',1,0,'C',1);
$pdf->Cell(66 ,5,iconv('UTF-8', 'ISO-8859-2', 'Vérificateur / Verificator'),1,0,'C',1);
$pdf->Cell(62 ,5,'Client / Customer',1,1,'C',1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(42 ,5,iconv('UTF-8', 'ISO-8859-2', "Date du contrôle / Test date:"),1,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20 ,5,date('m/d/y', strtotime($showreport[21])),1,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(49 ,5,iconv('UTF-8', 'ISO-8859-2', "Date vérification / Verifying date:"),1,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17 ,5,' / / ',1,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(42 ,5,'Date /Date:',1,0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20 ,5,' / / ',1,1);


$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Nom / Name:"),1,0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(66 ,5,iconv('UTF-8', 'ISO-8859-2', "Nom / Name:"),1,0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,'Nom / Name:',1,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,6,iconv('UTF-8', 'ISO-8859-2', ""),1,0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(66 ,6,iconv('UTF-8', 'ISO-8859-2', ""),1,0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,6,'',1,1);

$pdf->Cell(62 ,6,'Visa :',1,0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(66 ,6,'Visa :',1,0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,6,'Visa :',1,1);



$pdf->Cell(189 ,4,'',0,1);
 $pdf->SetFont('Arial','',8);
$pdf->Cell(0,3,iconv('UTF-8', 'ISO-8859-2', 'Ce document est la propriété exclusive de Geniworks Industry.'),0,1,'C',0);
$pdf->Cell(0,3,iconv('UTF-8', 'ISO-8859-2', 'Il ne peut etre communiqué ou dévulgué a des tiers sans son autorisation écrite préalable.'),0,1,'C',0);
}}}

$pdf->Output();  

}
}

?>
<?php
}
else {
   header("location:../../login.php");
}

?>