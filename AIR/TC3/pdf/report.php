<?php 
header('Content-Type: text/html; charset=ISO-8859-1');



require('fpdf.php');

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
$pdf->SetFont('arial','B',14);

$pdf->Cell(40,40,$pdf->Image('header.png',0,0,-300), 0,'C',true);
$pdf->Cell(189 ,30,'',0,1);

// $pdf->Cell(130 ,5, 'GENIWORKS.COM',0,0);
// $pdf->Cell(59 ,5,'Supply Request Form',0,1);

$pdf->SetFont('Arial','B',16);



require('../controls/zdfzfzef/de5.php');
$showpsrf=$cdb->prepare("SELECT * FROM asset_clean_inspection WHERE acij_owner	='11' LIMIT 1");
$showpsrf->execute();
if ($showpsrf===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $respsrf=$showpsrf->get_result();





$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(63 ,5,'',0,0);
$pdf->Cell(63 ,5,'Asset Inspection Record',0,0);
$pdf->Cell(63 ,5,'',0,1);
$pdf->Cell(189 ,2,'',0,1);
$pdf->Cell(189 ,0,'',1,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(189 ,2,'',0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(30 ,5,'AIR N',0,0);
$pdf->Cell(34 ,5,'',0,1);
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(30 ,5,'Date',0,0);
$pdf->Cell(34 ,5,'[17/06/2019]',0,1);
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(30 ,5,'Inspected By',0,0);
$pdf->Cell(34 ,5,'Otmane',0,1);





while ($showpsrf=$respsrf->fetch_row()) {


$pdf->Cell(189 ,3,'',0,1);
$pdf->Cell(100 ,5,'Asset : STS',0,1);

$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(10 ,0,'',0,1);
$pdf->Cell(10 ,5,'Sub-Asset : Back Reach',0,1);


$pdf->Cell(189 ,10,'',0,1);

 $pdf->SetFillColor(200,200,200);




$pdf->Cell(189 ,5,'',0,1);


$pdf->SetFillColor(200,200,200);




$pdf->Cell(189 ,70,'',0,1);

$pdf->Image('../img/assets/img305.jpg',10,90,60,0,'JPG');
$pdf->Image('../img/assets/img305.jpg',75,90,60,0,'JPG');
$pdf->Image('../img/assets/img305.jpg',139,90,60,0,'JPG');

$pdf->Cell(189 ,30,'',0,1);


$pdf->SetFillColor(200,200,200);
$pdf->SetFont('Arial','',12);


$pdf->Cell(63 ,20,'Actions :',1,0);
$pdf->Cell(63 ,20,'Actions :',1,0);
$pdf->Cell(63 ,20,'Actions :',1,1);


$pdf->Cell(189,5,'',0,1);

}
}





//output the result
$pdf->Output();  

?>