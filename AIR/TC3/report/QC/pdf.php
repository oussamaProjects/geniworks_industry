<?php
include("mpdf.php");
$mpdf = new mPDF('utf-8',    // mode - default ''
     '',    // format - A4, for example, default ''
     0,     // font size - default 0
     '',    // default font family
     15,    // margin_left
     15,    // margin right
     55,     // margin top
     15,    // margin bottom
     5,     // margin header
     5,     // margin footer
     'L');  // L - landscape, P - portrait
$mpdf->useOddEven = 1;
$html = '
<html>
<head>
<style>
@page {
  size: auto;
  odd-header-name: html_myHeader2;
  even-header-name: html_myHeader2;
  odd-footer-name: html_myFooter1;
  even-footer-name: html_myFooter1;
}
</style>
</head>
<body>
<htmlpageheader name="myHeader2" style="display:none">
<div style="border-bottom: 1px solid #000000; font-weight: bold;  font-size: 10pt;">
header      
</div>
</htmlpageheader>
<htmlpagefooter name="myFooter1" style="display:none">
<div style="border-top: 1px solid #000000; font-weight: bold; font-size:10pt;">
this is  <b>footer</b>
</div>
</htmlpagefooter>
example php looping : <br/>';
for($i = 1; $i <= 30 ; $i ++){
$html .=  $i . '<br/>';
}
$html .=  '</body></html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>