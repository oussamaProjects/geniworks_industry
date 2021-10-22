<?php
session_start();

if(isset($_SESSION['nmu']) && ($_SESSION['passu'])&& (($_SESSION['uat']=='admin'))) 
{


require('../controls/zdfzfzef/de5.php');
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

require('../controls/zdfzfzef/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM srf_tools_request WHERE str_owner='31' AND str_status='approved'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respsrf=$showpsrf->get_result();
  if (mysqli_num_rows($respsrf)!=0) { 

$pdf->AddPage();

$pdf->SetFont('arial','B',14);

$pdf->Cell(40,40,$pdf->Image('header.png',0,3.5,-300), 0,'C',true);
$pdf->Cell(189 ,40,'',0,1);

// $pdf->Cell(130 ,5, 'GENIWORKS.COM',0,0);
// $pdf->Cell(59 ,5,'Supply Request Form',0,1);
$pdf->Cell(55 ,5,'',0,0,1);
$pdf->Cell(75 ,5,'SRF / Bon De Commande N#007',0,0,1);
$pdf->Cell(65 ,5,'',0,1,1,0);
$pdf->Cell(189 ,0,'',0,1);

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


$pdf->Cell(189 ,10,'',0,1);


// $pdf->Cell(100 ,5,'Bill To',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Company Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Adress]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Phone]',0,1);

// $pdf->Cell(189 ,10,'',0,1);

 $pdf->SetFillColor(200,200,200);



$pdf->Cell(72 ,5,'Company Stamp and Signature',0,0,1);
$pdf->Cell(28 ,5,'QRCode',0,0,1);
$pdf->Cell(90 ,5,'Papillon a joindre en cas de besoin',0,1,1,0);

$pdf->Cell(189 ,1,'',0,1);

$pdf->Cell(63 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(20 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(30 ,5,'N Serie',1,0,'C',1);
$pdf->Cell(30 ,5,'Date',1,0,'C',1);
$pdf->Cell(30 ,5,'SRF User',1,1,'C',1);



$pdf->Cell(100 ,10,'',0,0);
$pdf->Cell(30 ,10,'',1,0);
$pdf->Cell(30 ,10,date("jS M Y"),1,0);
$pdf->Cell(30 ,10,$showusersrf[3],1,1,'C');




$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);


$pdf->Cell(63 ,5,'General Manager',1,0,'C',1);
$pdf->Cell(64 ,5,'Senior Office Manager',1,0,'C',1);
$pdf->Cell(63 ,5,'Accounting Manager',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(63 ,10,'Signature : ',1,0);
$pdf->Cell(64 ,10,'Signature : ',1,0);
$pdf->Cell(63 ,10,'Signature : ',1,1);

$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);

$pdf->SetFont('Arial','B',10);

$pdf->Cell(15 ,5,'SRF N#',1,0,1,1);
$pdf->Cell(15 ,5,'007',1,1,1,0);



$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5, iconv('UTF-8', 'ISO-8859-2', 'Informations propriétaire: MM-DE'),1,0);
$pdf->Cell(63 ,5,iconv('UTF-8', 'ISO-8859-2', 'Date Réglement:'),1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'ID',1,0);
$pdf->Cell(63 ,5,'Mode',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Contrat N',1,0);
$pdf->Cell(63 ,5,'...',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Autre Info',1,1);


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);

$pdf->Cell(35 ,5,'Ref',1,0,'C',1);
$pdf->Cell(55 ,5,'Description',1,0,'C',1);
$pdf->Cell(25 ,5,'Supplier',1,0,'C',1);
$pdf->Cell(10 ,5,'Qty',1,0,'C',1);
$pdf->Cell(25 ,5,'Unit',1,0,'C',1);
$pdf->Cell(15 ,5,'U.P',1,0,'C',1);
$pdf->Cell(25 ,5,'Amount',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$total_price = 0;
while ($showpsrf=$respsrf->fetch_row()) {


$pdf->Cell(35 ,5,$showpsrf[1],1,0);


$findtoolp=$cdb->prepare("SELECT * FROM work_tools_de WHERE wtl_internal_id='".$showpsrf[2]."'");
$findtoolp->execute();
if ($findtoolp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findtoolp->get_result();
?><?php while ($showfp=$resfindp->fetch_row()) {  
  $total_price += $showpsrf[3]*$showfp[9];


$pdf->Cell(55 ,5,$showfp[2],1,0);

}}
$pdf->Cell(25 ,5,$showpsrf[5],1,0);
$pdf->Cell(10 ,5,$showpsrf[3],1,0,'C');
$pdf->Cell(25 ,5,'-',1,0);


$findtoolp=$cdb->prepare("SELECT * FROM work_tools_de WHERE wtl_internal_id='".$showpsrf[2]."'");
$findtoolp->execute();
if ($findtoolp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findtoolp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 




  
$pdf->Cell(15 ,5, number_format($showfp[9],2),1,0,'R');
}}


$findtoolp=$cdb->prepare("SELECT * FROM work_tools_de WHERE wtl_internal_id='".$showpsrf[2]."'");
$findtoolp->execute();
if ($findtoolp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findtoolp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 


                               
$pdf->Cell(25 ,5,number_format($showpsrf[3]*$showfp[9],2),1,1,'R');
}}
}

$pdf->Cell(189 ,5,'',0,1);

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Subtolal',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format($total_price,2),1,1,'R');

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Taxable',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,'20%',1,1,'R');



$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Tolal Due',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format(($total_price*1.2),2),1,1,'R');



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);



$pdf->Cell(20 ,5,'Total HT',1,0,'C',1);

$pdf->Cell(25 ,5,'Total TVA',1,0,'C',1);
$pdf->Cell(35 ,5,'Net A Payer',1,1,'C',1);

$pdf->SetFont('Arial','',12);




$pdf->Cell(20 ,5,'',1,0);

$pdf->Cell(25 ,5,'',1,0);
$pdf->Cell(35 ,5,number_format(($total_price*1.2),2),1,1,'R');


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',12);
$pdf->Cell(189 ,10,iconv('UTF-8', 'ISO-8859-2', "Arréter le présent SRF a la somme de :"),1,1);

}
}

require('../controls/zdfzfzef/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM srf_materials_request WHERE str_owner='31' AND str_status='approved'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respsrf=$showpsrf->get_result();
  if (mysqli_num_rows($respsrf)!=0) { 

$pdf->AddPage();

$pdf->SetFont('arial','B',14);

$pdf->Cell(40,40,$pdf->Image('header.png',0,3.5,-300), 0,'C',true);
$pdf->Cell(189 ,40,'',0,1);

$pdf->Cell(55 ,5,'',0,0,1);
$pdf->Cell(75 ,5,'SRF / Bon De Commande N#007',0,0,1);
$pdf->Cell(65 ,5,'',0,1,1,0);
$pdf->Cell(189 ,0,'',0,1);


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


$pdf->Cell(189 ,10,'',0,1);


// $pdf->Cell(100 ,5,'Bill To',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Company Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Adress]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Phone]',0,1);

// $pdf->Cell(189 ,10,'',0,1);

 $pdf->SetFillColor(200,200,200);



$pdf->Cell(72 ,5,'Company Stamp and Signature',0,0,1);
$pdf->Cell(28 ,5,'QRCode',0,0,1);
$pdf->Cell(90 ,5,'Papillon a joindre en cas de besoin',0,1,1,0);

$pdf->Cell(189 ,1,'',0,1);

$pdf->Cell(63 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(20 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(30 ,5,'N Serie',1,0,'C',1);
$pdf->Cell(30 ,5,'Date',1,0,'C',1);
$pdf->Cell(30 ,5,'SRF User',1,1,'C',1);



$pdf->Cell(100 ,10,'',0,0);
$pdf->Cell(30 ,10,'',1,0);
$pdf->Cell(30 ,10,date("jS M Y"),1,0);
$pdf->Cell(30 ,10,$showusersrf[3],1,1,'C');


$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);


$pdf->Cell(63 ,5,'General Manager',1,0,'C',1);
$pdf->Cell(64 ,5,'Senior Office Manager',1,0,'C',1);
$pdf->Cell(63 ,5,'Accounting Manager',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(63 ,10,'Signature : ',1,0);
$pdf->Cell(64 ,10,'Signature : ',1,0);
$pdf->Cell(63 ,10,'Signature : ',1,1);

$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);

$pdf->SetFont('Arial','B',10);

$pdf->Cell(15 ,5,'SRF N#',1,0,1,1);
$pdf->Cell(15 ,5,'007',1,1,1,0);



$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5, iconv('UTF-8', 'ISO-8859-2', 'Informations propriétaire: MM-DE'),1,0);
$pdf->Cell(63 ,5,iconv('UTF-8', 'ISO-8859-2', 'Date Réglement:'),1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'ID',1,0);
$pdf->Cell(63 ,5,'Mode',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Contrat N',1,0);
$pdf->Cell(63 ,5,'...',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Autre Info',1,1);


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);

$pdf->Cell(35 ,5,'Ref',1,0,'C',1);
$pdf->Cell(55 ,5,'Description',1,0,'C',1);
$pdf->Cell(25 ,5,'Supplier',1,0,'C',1);
$pdf->Cell(10 ,5,'Qty',1,0,'C',1);
$pdf->Cell(25 ,5,'Unit',1,0,'C',1);
$pdf->Cell(15 ,5,'U.P',1,0,'C',1);
$pdf->Cell(25 ,5,'Amount',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$total_price = 0;
while ($showpsrf=$respsrf->fetch_row()) {


$pdf->Cell(35 ,5,$showpsrf[1],1,0);


$findmatp=$cdb->prepare("SELECT * FROM work_materials_de WHERE wmt_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
?><?php while ($showfp=$resfindp->fetch_row()) {  
  $total_price += $showpsrf[3]*$showfp[9];


$pdf->Cell(55 ,5,$showfp[2],1,0);

}}
$pdf->Cell(25 ,5,$showpsrf[5],1,0);
$pdf->Cell(10 ,5,$showpsrf[3],1,0,'C');
$pdf->Cell(25 ,5,'-',1,0);


$findmatp=$cdb->prepare("SELECT * FROM work_materials_de WHERE wmt_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 




  
$pdf->Cell(15 ,5, number_format($showfp[9],2),1,0,'R');
}}


$findmatp=$cdb->prepare("SELECT * FROM work_materials_de WHERE wmt_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 


                               
$pdf->Cell(25 ,5,number_format($showpsrf[3]*$showfp[9],2),1,1,'R');
}}
}

$pdf->Cell(189 ,5,'',0,1);

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Subtolal',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format($total_price,2),1,1,'R');

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Taxable',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,'20%',1,1,'R');



$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Tolal Due',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format(($total_price*1.2),2),1,1,'R');



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);



$pdf->Cell(20 ,5,'Total HT',1,0,'C',1);

$pdf->Cell(25 ,5,'Total TVA',1,0,'C',1);
$pdf->Cell(35 ,5,'Net A Payer',1,1,'C',1);

$pdf->SetFont('Arial','',12);




$pdf->Cell(20 ,5,'',1,0);

$pdf->Cell(25 ,5,'',1,0);
$pdf->Cell(35 ,5,number_format(($total_price*1.2),2),1,1,'R');


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',12);
$pdf->Cell(189 ,10,iconv('UTF-8', 'ISO-8859-2', "Arréter le présent SRF a la somme de :"),1,1);

}
}


require('../controls/zdfzfzef/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM srf_chemicals_request WHERE str_owner='31' AND str_status='approved'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respsrf=$showpsrf->get_result();
  if (mysqli_num_rows($respsrf)!=0) { 

$pdf->AddPage();

$pdf->SetFont('arial','B',14);

$pdf->Cell(40,40,$pdf->Image('header.png',0,3.5,-300), 0,'C',true);
$pdf->Cell(189 ,40,'',0,1);

$pdf->Cell(55 ,5,'',0,0,1);
$pdf->Cell(75 ,5,'SRF / Bon De Commande N#007',0,0,1);
$pdf->Cell(65 ,5,'',0,1,1,0);
$pdf->Cell(189 ,0,'',0,1);


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


$pdf->Cell(189 ,10,'',0,1);


// $pdf->Cell(100 ,5,'Bill To',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Company Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Adress]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Phone]',0,1);

// $pdf->Cell(189 ,10,'',0,1);

 $pdf->SetFillColor(200,200,200);



$pdf->Cell(72 ,5,'Company Stamp and Signature',0,0,1);
$pdf->Cell(28 ,5,'QRCode',0,0,1);
$pdf->Cell(90 ,5,'Papillon a joindre en cas de besoin',0,1,1,0);

$pdf->Cell(189 ,1,'',0,1);

$pdf->Cell(63 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(20 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(30 ,5,'N Serie',1,0,'C',1);
$pdf->Cell(30 ,5,'Date',1,0,'C',1);
$pdf->Cell(30 ,5,'SRF User',1,1,'C',1);



$pdf->Cell(100 ,10,'',0,0);
$pdf->Cell(30 ,10,'',1,0);
$pdf->Cell(30 ,10,date("jS M Y"),1,0);
$pdf->Cell(30 ,10,$showusersrf[3],1,1,'C');


$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);


$pdf->Cell(63 ,5,'General Manager',1,0,'C',1);
$pdf->Cell(64 ,5,'Senior Office Manager',1,0,'C',1);
$pdf->Cell(63 ,5,'Accounting Manager',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(63 ,10,'Signature : ',1,0);
$pdf->Cell(64 ,10,'Signature : ',1,0);
$pdf->Cell(63 ,10,'Signature : ',1,1);

$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);

$pdf->SetFont('Arial','B',10);

$pdf->Cell(15 ,5,'SRF N#',1,0,1,1);
$pdf->Cell(15 ,5,'007',1,1,1,0);


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5, iconv('UTF-8', 'ISO-8859-2', 'Informations propriétaire: MM-DE'),1,0);
$pdf->Cell(63 ,5,iconv('UTF-8', 'ISO-8859-2', 'Date Réglement:'),1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'ID',1,0);
$pdf->Cell(63 ,5,'Mode',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Contrat N',1,0);
$pdf->Cell(63 ,5,'...',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Autre Info',1,1);


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);

$pdf->Cell(35 ,5,'Ref',1,0,'C',1);
$pdf->Cell(55 ,5,'Description',1,0,'C',1);
$pdf->Cell(25 ,5,'Supplier',1,0,'C',1);
$pdf->Cell(10 ,5,'Qty',1,0,'C',1);
$pdf->Cell(25 ,5,'Unit',1,0,'C',1);
$pdf->Cell(15 ,5,'U.P',1,0,'C',1);
$pdf->Cell(25 ,5,'Amount',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$total_price = 0;
while ($showpsrf=$respsrf->fetch_row()) {


$pdf->Cell(35 ,5,$showpsrf[1],1,0);


$findmatp=$cdb->prepare("SELECT * FROM work_chemicals_de WHERE wch_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
?><?php while ($showfp=$resfindp->fetch_row()) {  
  $total_price += $showpsrf[3]*$showfp[9];


$pdf->Cell(55 ,5,$showfp[2],1,0);

}}
$pdf->Cell(25 ,5,$showpsrf[5],1,0);
$pdf->Cell(10 ,5,$showpsrf[3],1,0,'C');
$pdf->Cell(25 ,5,'-',1,0);


$findmatp=$cdb->prepare("SELECT * FROM work_chemicals_de WHERE wch_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 




  
$pdf->Cell(15 ,5, number_format($showfp[9],2),1,0,'R');
}}


$findmatp=$cdb->prepare("SELECT * FROM work_chemicals_de WHERE wch_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 


                               
$pdf->Cell(25 ,5,number_format($showpsrf[3]*$showfp[9],2),1,1,'R');
}}
}

$pdf->Cell(189 ,5,'',0,1);

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Subtolal',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format($total_price,2),1,1,'R');

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Taxable',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,'20%',1,1,'R');



$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Tolal Due',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format(($total_price*1.2),2),1,1,'R');



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);



$pdf->Cell(20 ,5,'Total HT',1,0,'C',1);

$pdf->Cell(25 ,5,'Total TVA',1,0,'C',1);
$pdf->Cell(35 ,5,'Net A Payer',1,1,'C',1);

$pdf->SetFont('Arial','',12);




$pdf->Cell(20 ,5,'',1,0);

$pdf->Cell(25 ,5,'',1,0);
$pdf->Cell(35 ,5,number_format(($total_price*1.2),2),1,1,'R');


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',12);
$pdf->Cell(189 ,10,iconv('UTF-8', 'ISO-8859-2', "Arréter le présent SRF a la somme de :"),1,1);

}
}

require('../controls/zdfzfzef/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM srf_ppe_request WHERE str_owner='31' AND str_status='approved'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respsrf=$showpsrf->get_result();
  if (mysqli_num_rows($respsrf)!=0) { 

$pdf->AddPage();

$pdf->SetFont('arial','B',14);

$pdf->Cell(40,40,$pdf->Image('header.png',0,3.5,-300), 0,'C',true);
$pdf->Cell(189 ,40,'',0,1);

$pdf->Cell(55 ,5,'',0,0,1);
$pdf->Cell(75 ,5,'SRF / Bon De Commande N#007',0,0,1);
$pdf->Cell(65 ,5,'',0,1,1,0);
$pdf->Cell(189 ,0,'',0,1);


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


$pdf->Cell(189 ,10,'',0,1);


// $pdf->Cell(100 ,5,'Bill To',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Company Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Adress]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Phone]',0,1);

// $pdf->Cell(189 ,10,'',0,1);

 $pdf->SetFillColor(200,200,200);



$pdf->Cell(72 ,5,'Company Stamp and Signature',0,0,1);
$pdf->Cell(28 ,5,'QRCode',0,0,1);
$pdf->Cell(90 ,5,'Papillon a joindre en cas de besoin',0,1,1,0);

$pdf->Cell(189 ,1,'',0,1);

$pdf->Cell(63 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(20 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(30 ,5,'N Serie',1,0,'C',1);
$pdf->Cell(30 ,5,'Date',1,0,'C',1);
$pdf->Cell(30 ,5,'SRF User',1,1,'C',1);



$pdf->Cell(100 ,10,'',0,0);
$pdf->Cell(30 ,10,'',1,0);
$pdf->Cell(30 ,10,date("jS M Y"),1,0);
$pdf->Cell(30 ,10,$showusersrf[3],1,1,'C');


$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);


$pdf->Cell(63 ,5,'General Manager',1,0,'C',1);
$pdf->Cell(64 ,5,'Senior Office Manager',1,0,'C',1);
$pdf->Cell(63 ,5,'Accounting Manager',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(63 ,10,'Signature : ',1,0);
$pdf->Cell(64 ,10,'Signature : ',1,0);
$pdf->Cell(63 ,10,'Signature : ',1,1);

$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);

$pdf->SetFont('Arial','B',10);

$pdf->Cell(15 ,5,'SRF N#',1,0,1,1);
$pdf->Cell(15 ,5,'007',1,1,1,0);


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5, iconv('UTF-8', 'ISO-8859-2', 'Informations propriétaire: MM-DE'),1,0);
$pdf->Cell(63 ,5,iconv('UTF-8', 'ISO-8859-2', 'Date Réglement:'),1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'ID',1,0);
$pdf->Cell(63 ,5,'Mode',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Contrat N',1,0);
$pdf->Cell(63 ,5,'...',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Autre Info',1,1);


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);

$pdf->Cell(35 ,5,'Ref',1,0,'C',1);
$pdf->Cell(55 ,5,'Description',1,0,'C',1);
$pdf->Cell(25 ,5,'Supplier',1,0,'C',1);
$pdf->Cell(10 ,5,'Qty',1,0,'C',1);
$pdf->Cell(25 ,5,'Unit',1,0,'C',1);
$pdf->Cell(15 ,5,'U.P',1,0,'C',1);
$pdf->Cell(25 ,5,'Amount',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$total_price = 0;
while ($showpsrf=$respsrf->fetch_row()) {


$pdf->Cell(35 ,5,$showpsrf[1],1,0);


$findmatp=$cdb->prepare("SELECT * FROM work_ppe_de WHERE wppe_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
?><?php while ($showfp=$resfindp->fetch_row()) {  
  $total_price += $showpsrf[3]*$showfp[9];


$pdf->Cell(55 ,5,$showfp[2],1,0);

}}
$pdf->Cell(25 ,5,$showpsrf[5],1,0);
$pdf->Cell(10 ,5,$showpsrf[3],1,0,'C');
$pdf->Cell(25 ,5,'-',1,0);


$findmatp=$cdb->prepare("SELECT * FROM work_ppe_de WHERE wppe_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 




  
$pdf->Cell(15 ,5, number_format($showfp[9],2),1,0,'R');
}}


$findmatp=$cdb->prepare("SELECT * FROM work_ppe_de WHERE wppe_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 


                               
$pdf->Cell(25 ,5,number_format($showpsrf[3]*$showfp[9],2),1,1,'R');
}}
}

$pdf->Cell(189 ,5,'',0,1);

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Subtolal',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format($total_price,2),1,1,'R');

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Taxable',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,'20%',1,1,'R');



$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Tolal Due',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format(($total_price*1.2),2),1,1,'R');



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);



$pdf->Cell(20 ,5,'Total HT',1,0,'C',1);

$pdf->Cell(25 ,5,'Total TVA',1,0,'C',1);
$pdf->Cell(35 ,5,'Net A Payer',1,1,'C',1);

$pdf->SetFont('Arial','',12);




$pdf->Cell(20 ,5,'',1,0);

$pdf->Cell(25 ,5,'',1,0);
$pdf->Cell(35 ,5,number_format(($total_price*1.2),2),1,1,'R');


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',12);
$pdf->Cell(189 ,10,iconv('UTF-8', 'ISO-8859-2', "Arréter le présent SRF a la somme de :"),1,1);

}
}

require('../controls/zdfzfzef/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM srf_ape_request WHERE str_owner='31' AND str_status='approved'");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}


else{
  $respsrf=$showpsrf->get_result();
  if (mysqli_num_rows($respsrf)!=0) { 

$pdf->AddPage();

$pdf->SetFont('arial','B',14);

$pdf->Cell(40,40,$pdf->Image('header.png',0,3.5,-300), 0,'C',true);
$pdf->Cell(189 ,40,'',0,1);

$pdf->Cell(55 ,5,'',0,0,1);
$pdf->Cell(75 ,5,'SRF / Bon De Commande N#007',0,0,1);
$pdf->Cell(65 ,5,'',0,1,1,0);
$pdf->Cell(189 ,0,'',0,1);


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


$pdf->Cell(189 ,10,'',0,1);


// $pdf->Cell(100 ,5,'Bill To',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Company Name]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Adress]',0,1);

// $pdf->Cell(10 ,5,'',0,0);
// $pdf->Cell(90 ,5,'[Phone]',0,1);

// $pdf->Cell(189 ,10,'',0,1);

 $pdf->SetFillColor(200,200,200);



$pdf->Cell(72 ,5,'Company Stamp and Signature',0,0,1);
$pdf->Cell(28 ,5,'QRCode',0,0,1);
$pdf->Cell(90 ,5,'Papillon a joindre en cas de besoin',0,1,1,0);

$pdf->Cell(189 ,1,'',0,1);

$pdf->Cell(63 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(20 ,15,'',1,0,1);
$pdf->Cell(8.5 ,15,'',0,0,1);
$pdf->Cell(30 ,5,'N Serie',1,0,'C',1);
$pdf->Cell(30 ,5,'Date',1,0,'C',1);
$pdf->Cell(30 ,5,'SRF User',1,1,'C',1);



$pdf->Cell(100 ,10,'',0,0);
$pdf->Cell(30 ,10,'',1,0);
$pdf->Cell(30 ,10,date("jS M Y"),1,0);
$pdf->Cell(30 ,10,$showusersrf[3],1,1,'C');


$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);


$pdf->Cell(63 ,5,'General Manager',1,0,'C',1);
$pdf->Cell(64 ,5,'Senior Office Manager',1,0,'C',1);
$pdf->Cell(63 ,5,'Accounting Manager',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$pdf->Cell(63 ,10,'Signature : ',1,0);
$pdf->Cell(64 ,10,'Signature : ',1,0);
$pdf->Cell(63 ,10,'Signature : ',1,1);

$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);

$pdf->SetFont('Arial','B',10);

$pdf->Cell(15 ,5,'SRF N#',1,0,1,1);
$pdf->Cell(15 ,5,'007',1,1,1,0);



$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5, iconv('UTF-8', 'ISO-8859-2', 'Informations propriétaire: MM-DE'),1,0);
$pdf->Cell(63 ,5,iconv('UTF-8', 'ISO-8859-2', 'Date Réglement:'),1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'ID',1,0);
$pdf->Cell(63 ,5,'Mode',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Contrat N',1,0);
$pdf->Cell(63 ,5,'...',1,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(127 ,5,'Autre Info',1,1);


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);

$pdf->Cell(35 ,5,'Ref',1,0,'C',1);
$pdf->Cell(55 ,5,'Description',1,0,'C',1);
$pdf->Cell(25 ,5,'Supplier',1,0,'C',1);
$pdf->Cell(10 ,5,'Qty',1,0,'C',1);
$pdf->Cell(25 ,5,'Unit',1,0,'C',1);
$pdf->Cell(15 ,5,'U.P',1,0,'C',1);
$pdf->Cell(25 ,5,'Amount',1,1,'C',1);

$pdf->SetFont('Arial','',12);

$total_price = 0;
while ($showpsrf=$respsrf->fetch_row()) {


$pdf->Cell(35 ,5,$showpsrf[1],1,0);


$findmatp=$cdb->prepare("SELECT * FROM work_ape_de WHERE wape_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
?><?php while ($showfp=$resfindp->fetch_row()) {  
  $total_price += $showpsrf[3]*$showfp[9];


$pdf->Cell(55 ,5,$showfp[2],1,0);

}}
$pdf->Cell(25 ,5,$showpsrf[5],1,0);
$pdf->Cell(10 ,5,$showpsrf[3],1,0,'C');
$pdf->Cell(25 ,5,'-',1,0);


$findmatp=$cdb->prepare("SELECT * FROM work_ape_de WHERE wape_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 




  
$pdf->Cell(15 ,5, number_format($showfp[9],2),1,0,'R');
}}


$findmatp=$cdb->prepare("SELECT * FROM work_ape_de WHERE wape_internal_id='".$showpsrf[2]."'");
$findmatp->execute();
if ($findmatp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $resfindp=$findmatp->get_result();
 while ($showfp=$resfindp->fetch_row()) { 


                               
$pdf->Cell(25 ,5,number_format($showpsrf[3]*$showfp[9],2),1,1,'R');
}}
}

$pdf->Cell(189 ,5,'',0,1);

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Subtolal',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format($total_price,2),1,1,'R');

$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Taxable',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,'20%',1,1,'R');



$pdf->Cell(120 ,5,'',0,0);
$pdf->Cell(30 ,5,'Tolal Due',0,0);
$pdf->Cell(15 ,5,'MAD',1,0);
$pdf->Cell(25 ,5,number_format(($total_price*1.2),2),1,1,'R');



$pdf->SetFont('Arial','B',12);

$pdf->SetFillColor(200,200,200);



$pdf->Cell(20 ,5,'Total HT',1,0,'C',1);

$pdf->Cell(25 ,5,'Total TVA',1,0,'C',1);
$pdf->Cell(35 ,5,'Net A Payer',1,1,'C',1);

$pdf->SetFont('Arial','',12);




$pdf->Cell(20 ,5,'',1,0);

$pdf->Cell(25 ,5,'',1,0);
$pdf->Cell(35 ,5,number_format(($total_price*1.2),2),1,1,'R');


$pdf->Cell(189 ,5,'',0,1);



$pdf->SetFont('Arial','',12);
$pdf->Cell(189 ,10,iconv('UTF-8', 'ISO-8859-2', "Arréter le présent SRF a la somme de :"),1,1);

}
}
//output the result
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