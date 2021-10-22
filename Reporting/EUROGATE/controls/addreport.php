
<?php
require('zdze8efzedzdeezd/de5.php');

$asset=$_POST['asset'];
$subasset=$_POST['subasset'];
$assetid=$_POST['assetid'];
$material=$_POST['material'];
$equip=$_POST['equip'];
$uv=$_POST['uv'];
$currenttype=$_POST['currenttype'];
$currentt=$_POST['currentt'];
$witnss=$_POST['witnss'];
$mfv=$_POST['mfv'];
$prdspace=$_POST['prdspace'];
$demagnet=$_POST['demagnet'];
$magnitdelay=$_POST['magnitdelay'];
$revealer=$_POST['revealer'];
$lightu=$_POST['lightu'];
$lightt=$_POST['lightt'];
$brightt=$_POST['brightt'];
$controltype=$_POST['controltype'];

  $addrev = $cdb->prepare("INSERT INTO report VALUES ('', '$controltype', '$asset', '$assetid', '$subasset', '$equip', '$material', '$uv', '$currenttype', '$currentt', '$witnss', '$mfv', '$prdspace', '$demagnet', '$magnitdelay', '$revealer', '$lightu', '$lightt', '$brightt', '', '', NOW(), '', '', '', '', '', '')");
  $addrev->execute();
  if ($addrev===false) {
  	echo "ERROR";
  }else {
   	$resrev=$addrev->get_result();
   	header("Refresh:0;");
   } 

?>

