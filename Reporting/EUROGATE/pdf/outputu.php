<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin')) || (($_SESSION['uat']=='user'))) 
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
$pdf->SetAutoPageBreak(TRUE, 0);
$pdf->SetFont('arial','B',10);

$pdf->Cell(40,40,$pdf->Image('onestopfactory.png',6,3,-320), 0,'C',true);
$pdf->Cell(189 ,38,'',0,1);

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
$pdf->Cell(30 ,12,"10/09/2019",1,0,'C');
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
$pdf->Cell(35 ,5,'Rapport N# / Report N#',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'CND R'.$showreport[1].'-EGT-'.$showreport[3].'-00'.$showreport[0].' ',1,1,1);

$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Affaire / Project',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,iconv('UTF-8', 'ISO-8859-2', "CND DE 4 STS ET 10 RTG - Accés facile"),1,0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Commande / Order',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'3620190629',1,1,1);

$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Sujet / Subject',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,$showreport[2].''.$showreport[3],1,0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Plan / Dwg',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'',1,1,1);


$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(184,204,228);
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Matériel Examiné / Inspected Material"),1,0,'C',1);

$pdf->Cell(189 ,5,'',0,1);

if ($showreport[2]=='QC') {
if ($showreport[4]=='01') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-1.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='02') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-2.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='03') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-3.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='04') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-4.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='05') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-5.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='06') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-6.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='07') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-7.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='08') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-8.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='09') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-9.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='010') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-10.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,"L");
}
elseif ($showreport[4]=='011') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-11.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='012') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-12.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='013') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-13.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='014') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-14.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='014') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-14.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='015') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-15.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='016') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-16.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='017') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-17.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='018') {
	$image1 = "../controls/img/sub/Annexe 02 _Point d'Inspection Structure-18.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
else{
	
	$pdf->SetTextColor(255,0,0);
	$pdf->Cell(190 ,36,'No Area Selected!',1,0,'C');
	$pdf->SetTextColor(0,0,0);
}


}

if ($showreport[2]=='RTG') {
if ($showreport[4]=='01' || $showreport[4]=='trolley') {
	$image1 = "../controls/img/sub/rtg/trolley.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='02-1' || $showreport[4]=='GIRDER') {
	$image1 = "../controls/img/sub/rtg/girder.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='02-2' || $showreport[4]=='GIRDER : Welds on the side plates') {
	$image1 = "../controls/img/sub/rtg/Welds-on-the-side-plates.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='02-3' || $showreport[4]=='GIRDER :Welds of the rail and rail and Top') {
	$image1 = "../controls/img/sub/rtg/Girder-Welds-of-the-rail-and-rail-and-Top-Plate.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}

elseif ($showreport[4]=='02-4' || $showreport[4]=='GIRDER :Assembling welds on the frame') {
	$image1 = "../controls/img/sub/rtg/Girder-Assembling-welds-on-the-frame.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='02-5' || $showreport[4]=='COLUMN') {
	$image1 = "../controls/img/sub/rtg/columns.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='02-6' || $showreport[4]=='COLUMN: End Beams') {
	$image1 = "../controls/img/sub/rtg/columns-end-beam.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='02-7' || $showreport[4]=='Sill Beam') {
	$image1 = "../controls/img/sub/rtg/Sill-Beam.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='08' || $showreport[4]=='Sill Beam: Welding of wheel forks') {
	$image1 = "../controls/img/sub/rtg/Sill-Beam-Welding-of-wheel-forks.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='01-2' || $showreport[4]=='Drum') {
	$image1 = "../controls/img/sub/rtg/drums.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,"L");
}
elseif ($showreport[4]=='01-3' || $showreport[4]=='Drum :Shaft and Flange') {
	$image1 = "../controls/img/sub/rtg/Drum-Shaft-and-Flange.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}
elseif ($showreport[4]=='04' || $showreport[4]=='Rope adjustment screws') {
	$image1 = "../controls/img/sub/rtg/Rope-adjustment-screws.png";
	$pdf->Cell(190 ,36,$pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 169),1,0,'C');
}

else{
	
	$pdf->SetTextColor(255,0,0);
	$pdf->Cell(190 ,36,'No Area Selected!',1,0,'C');
	$pdf->SetTextColor(0,0,0);
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


$pdf->Cell(189 ,36,'',0,1);




$pdf->setFillColor(184,204,228); 





$pdf->setFillColor(184,204,228); 

$pdf->SetFont('Arial','B',10);


$pdf->Cell(189 ,0,'',0,1);



$pdf->SetFont('Arial','',10);

$pdf->Cell(35 ,5,iconv('UTF-8', 'ISO-8859-2', "Matériel / Material"),1,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(27 ,5,$showreport[28],1,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(75 ,5,iconv('UTF-8', 'ISO-8859-2', "Etat de surface / Surface Condition"),1,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(53 ,5,$showreport[41],1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(35 ,5,'Stage',1,0);
$pdf->Cell(27 ,5,'',1,0);
$pdf->Cell(75 ,5,iconv('UTF-8', 'ISO-8859-2', "Température de la piece / Part Temperature"),1,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(53 ,5,$showreport[42],1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Zone controlée / Examinated Area"),1,0);
$pdf->SetFont('Arial','B',10);
$selsub=$cdb->prepare("SELECT * FROM sub_asset_eg WHERE saeg_internal_id='$showreport[4]'");
$selsub->execute();
if ($selsub===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $ressub=$selsub->get_result();
  if (mysqli_num_rows($ressub)!=0) { 
while ($showsub=$ressub->fetch_row()) {
if ($showreport[2]=='QC') {
if ($showreport[4]=="01") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-1)",1,1);
}
if ($showreport[4]=="02") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-2)",1,1);
}
if ($showreport[4]=="03") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-3)",1,1);
}
if ($showreport[4]=="04") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-4)",1,1);
}
if ($showreport[4]=="05") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-5)",1,1);
}
if ($showreport[4]=="06") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-6)",1,1);
}
if ($showreport[4]=="07") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-7)",1,1);
}
if ($showreport[4]=="08") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-8)",1,1);
}
if ($showreport[4]=="09") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-9)",1,1);
}
if ($showreport[4]=="10") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-10)",1,1);
}
if ($showreport[4]=="011") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-11)",1,1);
}
if ($showreport[4]=="012") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-12)",1,1);
}
if ($showreport[4]=="013") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-13)",1,1);
}
if ($showreport[4]=="014") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-14)",1,1);
}
if ($showreport[4]=="015") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-15)",1,1);
}
if ($showreport[4]=="016") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-16)",1,1);
}
if ($showreport[4]=="017") {
	$pdf->Cell(128 ,5,"".$showsub[1]."(0-17)",1,1);
}
if ($showreport[4]=="018") {
	$pdf->Cell(128 ,5,"".$showsub[1]." (0-18)",1,1);
}

if ($showreport[4]=="02-1") {
	$pdf->Cell(128 ,5,"".$showsub[1]." (02-1)",1,1);
}

}

elseif ($showreport[2]=='RTG') {
if ($showreport[4]=='01' || $showreport[4]=='trolley') {
$pdf->Cell(128 ,5,"".$showsub[1]." (01)",1,1);
}
elseif ($showreport[4]=='02-1' || $showreport[4]=='GIRDER') {
$pdf->Cell(128 ,5,"".$showsub[1]." (02-1)",1,1);
}
elseif ($showreport[4]=='02-2' || $showreport[4]=='GIRDER : Welds on the side plates') {
$pdf->Cell(128 ,5,"".$showsub[1]." (02-2)",1,1);
}
elseif ($showreport[4]=='02-3' || $showreport[4]=='GIRDER :Welds of the rail and rail and Top') {
$pdf->Cell(128 ,5,"".$showsub[1]." (02-3)",1,1);
}

elseif ($showreport[4]=='02-4' || $showreport[4]=='GIRDER :Assembling welds on the frame') {
$pdf->Cell(128 ,5,"".$showsub[1]." (02-4)",1,1);
}
elseif ($showreport[4]=='02-5' || $showreport[4]=='COLUMN') {
$pdf->Cell(128 ,5,"".$showsub[1]." (02-5)",1,1);
}
elseif ($showreport[4]=='02-6' || $showreport[4]=='COLUMN: End Beams') {
$pdf->Cell(128 ,5,"".$showsub[1]." (02-6)",1,1);
}
elseif ($showreport[4]=='02-7' || $showreport[4]=='Sill Beam') {
$pdf->Cell(128 ,5,"".$showsub[1]." (02-7)",1,1);
}
elseif ($showreport[4]=='08' || $showreport[4]=='Sill Beam: Welding of wheel forks') {
$pdf->Cell(128 ,5,"".$showsub[1]." (08)",1,1);
}
elseif ($showreport[4]=='01-2' || $showreport[4]=='Drum') {
$pdf->Cell(128 ,5,"".$showsub[1]." (01-2)",1,1);
}
elseif ($showreport[4]=='01-3' || $showreport[4]=='Drum :Shaft and Flange') {
$pdf->Cell(128 ,5,"".$showsub[1]." (01-3)",1,1);
}
elseif (($showreport[4]=='04' || $showreport[4]=='Rope adjustment screws') && ($showreport[2]=='RTG')) {
$pdf->Cell(128 ,5,"".$showsub[1]." (04)",1,1);
}

}

}}
}

$pdf->SetFont('Arial','B',9);


$pdf->Cell(189 ,0,'',0,1);

$pdf->setFillColor(184,204,228); 
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Procédure / Process"),1,0,'c',1);
$pdf->Cell(66 ,5,iconv('UTF-8', 'ISO-8859-2', "Specification utilisé / Used Specification"),1,0,'c',1);
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Criteres D'acceptation / Acceptance"),1,1,'c',1);

$pdf->Cell(62 ,10,$showreport[44],1,0,'C');
$pdf->Cell(66 ,10,$showreport[45],1,0,'C');
$pdf->Cell(62 ,10,$showreport[46],1,1,'c');

$pdf->Cell(189 ,0,'',0,1);


$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Apareillage / Equipment Used"),1,0,'C',1);

$pdf->Cell(189 ,5,'',0,1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Apareil UT marque / UT unit Maker : "),'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(33 ,5,$showreport[27],0,0);
$pdf->SetFont('Arial','',9);

$pdf->Cell(63 ,5,'Type / Type','L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(32 ,5,$showreport[27],'R',1);


$pdf->SetFont('Arial','',9);

$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Date vérification /Checking Date : "),'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(33 ,5,'- - - - / - - / - -',0,0);
$pdf->SetFont('Arial','',9);

$pdf->Cell(63 ,5,'Identification / ID','L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(32 ,5,' A00218092307','R',1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Bloc de réference / Reference Block : "),'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(33 ,5,'V1',0,0);
$pdf->SetFont('Arial','',9);

$pdf->Cell(63 ,5,"Valable jusqu'au / Valid Until ",'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(32 ,5,' - - - - / - - / - -','R',1);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Bloc d'étalonnage /Calibration Block: "),'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(33 ,5,'V1',0,0);
$pdf->SetFont('Arial','',9);

$pdf->Cell(63 ,5,"Couplant / Couplant : ",'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(32 ,5,' cole a froid','R',1);



$pdf->Cell(189 ,0,'',0,1);


$pdf->Cell(190 ,5,"Etalonnage / Calibration",1,1,'C',1);
$pdf->SetFont('Arial','',9);


$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', "Traducteur"),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "Numéro"),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "Marque "),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "Onde"),1,0,'c');

$pdf->Cell(27 ,5,iconv('UTF-8', 'ISO-8859-2', "Angle théorique"),1,0,'c');
$pdf->Cell(18 ,5,iconv('UTF-8', 'ISO-8859-2', "Angle réel"),1,0,'c');
$pdf->Cell(22 ,5,iconv('UTF-8', 'ISO-8859-2', "Fréquence"),1,0,'c');
$pdf->Cell(30 ,5,iconv('UTF-8', 'ISO-8859-2', "Dim. piezo"),1,1,'c');


$pdf->Cell(24 ,5,"0",1,0,'c');
$pdf->Cell(23 ,5,"1809030",1,0,'c');
$pdf->Cell(23 ,5,"",1,0,'c');
$pdf->Cell(23 ,5,"OL",1,0,'c');

$pdf->Cell(27 ,5,"0",1,0,'c');
$pdf->Cell(18 ,5,"0",1,0,'c');
$pdf->Cell(22 ,5,"2,5 Mhz",1,0,'c');
$pdf->Cell(30 ,5,"20mm",1,1,'c');

$pdf->Cell(24 ,5,"",1,0,'c');
$pdf->Cell(23 ,5,"1807106",1,0,'c');
$pdf->Cell(23 ,5,"",1,0,'c');
$pdf->Cell(23 ,5,"OT",1,0,'c');

$pdf->Cell(27 ,5,"60",1,0,'c');
$pdf->Cell(18 ,5,"60",1,0,'c');
$pdf->Cell(22 ,5,"4 Mhz",1,0,'c');
$pdf->Cell(30 ,5,"8x9",1,1,'c');

$pdf->Cell(24 ,5,"70",1,0,'c');
$pdf->Cell(23 ,5,"1801353",1,0,'c');
$pdf->Cell(23 ,5,"",1,0,'c');
$pdf->Cell(23 ,5,"OT",1,0,'c');

$pdf->Cell(27 ,5,"70",1,0,'c');
$pdf->Cell(18 ,5,"71",1,0,'c');
$pdf->Cell(22 ,5,"4 Mhz",1,0,'c');
$pdf->Cell(30 ,5,"8x9",1,1,'c');



$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190 ,5,"Traducteurs / Probes",1,1,'C',1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', "Bloc utilisé"),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "Prof. Trou"),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "Vitesse M/s"),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "Echelle"),1,0,'c');

$pdf->Cell(19 ,5,iconv('UTF-8', 'ISO-8859-2', "Ecran%"),1,0,'c');
$pdf->Cell(18 ,5,iconv('UTF-8', 'ISO-8859-2', "Amplitude"),1,0,'c');
$pdf->Cell(30 ,5,iconv('UTF-8', 'ISO-8859-2', "Trnsfrt d'attenuation"),1,0,'c');
$pdf->Cell(30 ,5,iconv('UTF-8', 'ISO-8859-2', "Seuil de Notation"),1,1,'c');


$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', "V1"),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "1mm"),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "3250"),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', "50"),1,0,'c');

$pdf->Cell(19 ,5,iconv('UTF-8', 'ISO-8859-2', "80"),1,0,'c');
$pdf->Cell(18 ,5,iconv('UTF-8', 'ISO-8859-2', "85"),1,0,'c');
$pdf->Cell(30 ,5,iconv('UTF-8', 'ISO-8859-2', "+6db"),1,0,'c');
$pdf->Cell(30 ,5,iconv('UTF-8', 'ISO-8859-2', "40%"),1,1,'c');

$pdf->Cell(24 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'c');
$pdf->Cell(23 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'c');

$pdf->Cell(19 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'c');
$pdf->Cell(18 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'c');
$pdf->Cell(30 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,0,'c');
$pdf->Cell(30 ,5,iconv('UTF-8', 'ISO-8859-2', ""),1,1,'c');





$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('Arial','B',9);

$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', 'Résultats / Results'),1,0,'C',1);

$pdf->Cell(189 ,5,'',0,1);

//$pdf->Cell(190 ,22,$showreport[25],1,1,'C');
$pdf->SetFont('Arial','',9);
$pdf->Cell(31 ,5,iconv('UTF-8', 'ISO-8859-2', "Repére / Mark"),1,0,'c');
$pdf->Cell(31 ,5,iconv('UTF-8', 'ISO-8859-2', "Verdict / Verdict"),1,0,'c');
$pdf->Cell(33 ,5,iconv('UTF-8', 'ISO-8859-2', "Observations"),1,0,'c');

$pdf->Cell(33 ,5,iconv('UTF-8', 'ISO-8859-2', "Repére / Mark"),1,0,'c');
$pdf->Cell(33 ,5,iconv('UTF-8', 'ISO-8859-2', "Verdict / Verdict"),1,0,'c');
$pdf->Cell(29 ,5,iconv('UTF-8', 'ISO-8859-2', "Observations"),1,1,'c');




if ($showreport[5]!=''){

$pdf->Cell(31 ,5,$showreport[5],1,0,'C');
$pdf->Cell(31 ,5,$showreport[6],1,0,'C');
$pdf->Cell(33 ,5,$showreport[59],1,0,'C');

}

elseif($showreport[5]==''){
	
	
	$pdf->Cell(31 ,5,'-',1,0,'C');

	$pdf->Cell(31 ,5,'-',1,0,'C');
	$pdf->Cell(33 ,5,'-',1,0,'C');
}





  if ($showreport[7]!=''){

$pdf->Cell(33 ,5,$showreport[7],1,0,'C');
$pdf->Cell(33 ,5,$showreport[8],1,0,'C');
$pdf->Cell(29 ,5,$showreport[60],1,1,'C');

}

elseif($showreport[9]==''){
	
	$pdf->Cell(33 ,5,'-',1,0,'C');
	
$pdf->Cell(33 ,5,'-',1,0,'C');
$pdf->Cell(29 ,5,'-',1,1,'C');
}



if ($showreport[9]!=''){ 

$pdf->Cell(31 ,5,$showreport[9],1,0,'C');
$pdf->Cell(31 ,5,$showreport[10],1,0,'C');
$pdf->Cell(33 ,5,$showreport[61],1,0,'C');

}
elseif($showreport[9]==''){
	
	$pdf->Cell(31 ,5,'-',1,0,'C');
	
$pdf->Cell(31 ,5,'-',1,0,'C');
$pdf->Cell(33 ,5,'-',1,0,'C');
}



if ($showreport[11]!=''){ 

$pdf->Cell(33 ,5,$showreport[11],1,0,'C');
$pdf->Cell(33 ,5,$showreport[12],1,0,'C');
$pdf->Cell(29 ,5,$showreport[62],1,1,'C');

}
elseif($showreport[11]==''){
	
	$pdf->Cell(33 ,5,'-',1,0,'C');
	
$pdf->Cell(33 ,5,'-',1,0,'C');
$pdf->Cell(29 ,5,'-',1,1,'C');
}



if ($showreport[13]!=''){  

$pdf->Cell(31 ,5,$showreport[13],1,0,'C');
$pdf->Cell(31 ,5,$showreport[14],1,0,'C');
$pdf->Cell(33 ,5,$showreport[63],1,0,'C');

}elseif($showreport[13]==''){

	$pdf->Cell(31 ,5,'-',1,0,'C');
	$pdf->SetTextColor(0,0,0);
$pdf->Cell(31 ,5,'-',1,0,'C');
$pdf->Cell(33 ,5,'-',1,0,'C');
}




  if ($showreport[15]!=''){ 

$pdf->Cell(33 ,5,$showreport[15],1,0,'C');
$pdf->Cell(33 ,5,$showreport[16],1,0,'C');
$pdf->Cell(29 ,5,$showreport[64],1,1,'C');

}elseif($showreport[15]==''){
	
	$pdf->Cell(33 ,5,'-',1,0,'C');
	$pdf->SetTextColor(0,0,0);
$pdf->Cell(33 ,5,'-',1,0,'C');
$pdf->Cell(29 ,5,'-',1,1,'C');
}




  if ($showreport[17]!=''){ 

$pdf->Cell(31 ,5,$showreport[17],1,0,'C');
$pdf->Cell(31 ,5,$showreport[18],1,0,'C');
$pdf->Cell(33 ,5,$showreport[65],1,0,'C');

}
elseif($showreport[17]==''){
	
	$pdf->Cell(31 ,5,'-',1,0,'C');
	$pdf->SetTextColor(0,0,0);
$pdf->Cell(31 ,5,'-',1,0,'C');
$pdf->Cell(33 ,5,'-',1,0,'C');
}




  if ($showreport[19]!=''){ 

$pdf->Cell(33 ,5,$showreport[19],1,0,'C');
$pdf->Cell(33 ,5,$showreport[20],1,0,'C');
$pdf->Cell(29 ,5,$showreport[66],1,1,'C');

}elseif($showreport[19]==''){
	
	$pdf->Cell(33 ,5,'-',1,0,'C');
	$pdf->SetTextColor(0,0,0);
$pdf->Cell(33 ,5,'-',1,0,'C');
$pdf->Cell(29 ,5,'-',1,1,'C');
}







$pdf->setFillColor(184,204,228); 
$pdf->Cell(62 ,5,'Controleur(s) / Technician(s)',1,0,'C',1);
$pdf->Cell(66 ,5,iconv('UTF-8', 'ISO-8859-2', 'Vérificateur / Verificator'),1,0,'C',1);
$pdf->Cell(62 ,5,'Client / Customer',1,1,'C',1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(42 ,5,iconv('UTF-8', 'ISO-8859-2', "Date du contrôle / Test date:"),'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20 ,5,date('m/d/y', strtotime($showreport[43])),0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(49 ,5,iconv('UTF-8', 'ISO-8859-2', "Date vérification / Verifying date:"),'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17 ,5,' / / ','R',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(42 ,5,'Date /Date:','L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20 ,5,' / / ','R',1);


$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Nom / Name:Ali ELMARHAT"),'L',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(66 ,5,iconv('UTF-8', 'ISO-8859-2', "Nom / Name: Ali ELMARHAT"),'L',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,'Nom / Name: EUROGATE','L',0);
$pdf->Cell(0 ,5,'','R',1);

$pdf->SetFont('Arial','',9);

$pdf->Cell(31 ,5,'UT Niveau : ','L',0);
$pdf->Cell(31 ,5,'MT Niveau : ','R',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(31 ,5,'UT Niveau :','L',0);
$pdf->Cell(35 ,5,'MT Niveau :','R',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,'',0,0);
$pdf->Cell(0 ,5,'','R',1);


$pdf->Cell(62 ,10,'Visa :','L',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(66 ,10,'Visa :','L',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,10,'Visa :','L',0);
$pdf->Cell(0 ,10,'','R',1);

$pdf->Cell(62 ,0,'',1,0);
$pdf->Cell(66 ,0,'',1,0);
$pdf->Cell(62 ,0,'',1,1);








$pdf->Cell(189 ,4,'',0,1);
 $pdf->SetFont('Arial','',8);
$pdf->Cell(0,3,iconv('UTF-8', 'ISO-8859-2', 'Ce document est la propriété exclusive de Geniworks Industry.'),0,1,'C',0);
$pdf->Cell(0,3,iconv('UTF-8', 'ISO-8859-2', 'Il ne peut etre communiqué ou dévulgué a des tiers sans son autorisation écrite préalable.'),0,1,'C',0);
}}}




$selpics=$cdb->prepare("SELECT * FROM report WHERE rprt_id='$idr'");
$selpics->execute();
if ($selpics===false) {
  echo "We Have Problem In Data Export Issue!";
}


else{
  $respics=$selpics->get_result();
  if (mysqli_num_rows($respics)!=0) {



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

$pdf->Cell(40,40,$pdf->Image('onestopfactory.png',6,3,-320), 0,'C',true);
$pdf->Cell(189 ,38,'',0,1);

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
$pdf->Cell(30 ,12,"10/09/2019",1,0,'C');
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
$pdf->Cell(35 ,5,'Rapport N# / Report N#',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'CND R'.$showreport[1].'-EGT-'.$showreport[3].'-00'.$showreport[0].' ',1,1,1);

$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Affaire / Project',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,iconv('UTF-8', 'ISO-8859-2', "CND DE 4 STS ET 10 RTG - Accés facile"),1,0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Commande / Order',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'3620190629',1,1,1);

$pdf->Cell(189 ,0,'',0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Sujet / Subject',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,$showreport[2].''.$showreport[3],1,0,1);
$pdf->SetFont('arial','B',8);
$pdf->Cell(35 ,5,'Plan / Dwg',1,0,1);
$pdf->SetFont('arial','',8);
$pdf->Cell(60 ,5,'',1,1,1);


$pdf->Cell(189 ,5,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->setFillColor(184,204,228);
$pdf->Cell(190 ,5,iconv('UTF-8', 'ISO-8859-2', "Photos témoin / Witness Pictures"),1,0,'C',1);

$pdf->Cell(189 ,10,'',0,1);



$image1 = "../controls/img/assets/EG/$showreport[48]";
	$pdf->Cell(90 ,60, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 90,60), 1, 0, 'C', 0);


$pdf->Cell(10 ,60,'',0,0);










  if ($showreport[52]) { 

	$image2 = "../controls/img/assets/EG/$showreport[52]";
	$pdf->Cell(90 ,60, $pdf->Image($image2, $pdf->GetX(), $pdf->GetY(), 90,60), 1, 1, 'C');

}
else{ 
	$pdf->Cell(90 ,60,'',1,1);
}

$pdf->Cell(189 ,2,'',0,1);

$pdf->Cell(90 ,5,'1- Comment: '.$showreport[55],1,0);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'2- Comment: '.$showreport[56],1,1);

$pdf->Cell(189 ,5,'',0,1);






  if ($showreport[53]) { 

	$image3 = "../controls/img/assets/EG/$showreport[53]";
	$pdf->Cell(90 ,60,$pdf->Image($image3, $pdf->GetX(), $pdf->GetY(), 90,60),1,0,'C');

}
else{ 
	$pdf->Cell(90 ,60,'',1,0);
}



$pdf->Cell(10 ,60,'',0,0);





  if ($showreport[54]) { 

	$image4 = "../controls/img/assets/EG/$showreport[54]";
	$pdf->Cell(90 ,60,$pdf->Image($image4, $pdf->GetX(), $pdf->GetY(), 90,60),1,1,'C');
}
else { 
	$pdf->Cell(90 ,60,'',1,1);
}



$pdf->Cell(189 ,2,'',0,1);

$pdf->Cell(90 ,5,'3- Comment: '.$showreport[57],1,0);
$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,'4- Comment: '.$showreport[58],1,1);




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
$pdf->Cell(42 ,5,iconv('UTF-8', 'ISO-8859-2', "Date du contrôle / Test date:"),'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20 ,5,date('m/d/y', strtotime($showreport[43])),0,0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(49 ,5,iconv('UTF-8', 'ISO-8859-2', "Date vérification / Verifying date:"),'L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(17 ,5,' / / ','R',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(42 ,5,'Date /Date:','L',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20 ,5,' / / ','R',1);


$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,iconv('UTF-8', 'ISO-8859-2', "Nom / Name:Ali ELMARHAT"),'L',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(66 ,5,iconv('UTF-8', 'ISO-8859-2', "Nom / Name: Ali ELMARHAT"),'L',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,'Nom / Name: EUROGATE','L',0);
$pdf->Cell(0 ,5,'','R',1);

$pdf->SetFont('Arial','',9);

$pdf->Cell(31 ,5,'UT Niveau :','L',0);
$pdf->Cell(31 ,5,'MT Niveau :','R',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(31 ,5,'UT Niveau :','L',0);
$pdf->Cell(35 ,5,'MT Niveau :','R',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,5,'',0,0);
$pdf->Cell(0 ,5,'','R',1);


$pdf->Cell(62 ,10,'Visa :','L',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(66 ,10,'Visa :','L',0);

$pdf->SetFont('Arial','',9);
$pdf->Cell(62 ,10,'Visa :','L',0);
$pdf->Cell(0 ,10,'','R',1);

$pdf->Cell(62 ,0,'',1,0);
$pdf->Cell(66 ,0,'',1,0);
$pdf->Cell(62 ,0,'',1,1);

$pdf->Cell(189 ,4,'',0,1);
 $pdf->SetFont('Arial','',8);
$pdf->Cell(0,3,iconv('UTF-8', 'ISO-8859-2', 'Ce document est la propriété exclusive de Geniworks Industry.'),0,1,'C',0);
$pdf->Cell(0,3,iconv('UTF-8', 'ISO-8859-2', 'Il ne peut etre communiqué ou dévulgué a des tiers sans son autorisation écrite préalable.'),0,1,'C',0);
}}}

 

















}
}






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