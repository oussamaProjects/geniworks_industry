<?php
require('zdze8efzedzdeezd/de5.php');

$processrep=$_POST['processrep'];
$specrep=$_POST['specrep'];
$acceptancerep=$_POST['acceptancerep'];
$resultrep=$_POST['resultrep'];
$idrep=$_POST['idrep'];

$assetchos=$_POST['assetchos'];
$idassetchos=$_POST['idassetchos'];
$subassetchos=$_POST['subassetchos'];

$uvvalup =$_POST['uvvalup'];
$uvtypeup =$_POST['uvtypeup'];
$witnsup = $_POST['witnsup'];
$mfvup = $_POST['mfvup'];
$prspaceup = $_POST['prspaceup'];
$demagup = $_POST['demagup'];
$demagndeup = $_POST['demagndeup'];
$revealerup = $_POST['revealerup'];
$lightp = $_POST['lightp'];
$artifiup = $_POST['artifiup'];
$brightup = $_POST['brightup'];
$addehandmark=$_POST['addehandmark'];
if (!empty($addehandmark)) {
   	$addhm = $cdb->prepare("INSERT ignore INTO asset_handmark VALUES ('', '$addehandmark', '$assetchos', '$idassetchos', '$subassetchos', '$idrep')");
  	  $addhm->execute();
  	  if ($addhm===false) {
  	  	echo "ERROR";
  	  }else {
  	  	$reshm=$addhm->get_result();
  	  	header("Refresh:0");
  	  }
  	}
  ?>