
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

$markaup=$_POST['markaup'];
$markbup=$_POST['markbup'];
$markcup=$_POST['markcup'];
$markdup=$_POST['markdup'];
$markaue=$_POST['markeup'];
$markfup=$_POST['markfup'];
$markgup=$_POST['markgup'];
$markhup=$_POST['markhup'];
$markiup=$_POST['markiup'];
$markjup=$_POST['markjup'];
$markkup=$_POST['markkup'];

$verdictaup=$_POST['verdictaup'];
$verdictbup=$_POST['verdictbup'];
$verdictcup=$_POST['verdictcup'];
$verdictdup=$_POST['verdictdup'];
$verdicteup=$_POST['verdicteup'];
$verdictfup=$_POST['verdictfup'];
$verdictgup=$_POST['verdictgup'];
$verdicthup=$_POST['verdicthup'];
$verdictiup=$_POST['verdictiup'];
$verdictjup=$_POST['verdictjup'];
$verdictkup=$_POST['verdictkup'];

if (!empty($addehandmark)) {
   	$addhm = $cdb->prepare("INSERT ignore INTO asset_handmark VALUES ('', '$addehandmark', '$assetchos', '$idassetchos', '$subassetchos', '$idrep')");
  	  $addhm->execute();
  	  if ($addhm===false) {
  	  	echo "ERROR";
  	  }else {
  	  	$reshm=$addhm->get_result();
  	  }
  	}
  $updatrev = $cdb->prepare("UPDATE report SET rprt_subasset='$subassetchos', rprt_specification='$specrep', rprt_procces='$processrep', rprt_acceptance='$acceptancerep', rprt_result='$resultrep', rprt_current_value='$uvvalup', rprt_current_type='$uvtypeup', rprt_wtnss='$witnsup', rprt_mfv	='$mfvup', rprt_prd_space='$prspaceup',  rprt__demagnet='$demagup', rprt_magnet_delay='$demagndeup', rprtrevealer='$revealerup', rprt_light_used='$lightp', rprt_artificial_light='$artifiup', rprt_brightness='$brightup', rprt_marka='$markaup', rprt_markb='$markbup', rprt_markc='$markcup', rprt_markd='$markdup', rprt_marke='$markeup', rprt_markf='$markfup', rprt_markg='$markgup', rprt_markh='$markhup', rprt_marki='$markiup', rprt_marki='$markiup', rprt_markj='$markjup', rprt_markk='$markkup', rprt_verdicta='$verdictaup', rprt_verdictb='$verdictbup', rprt_verdictc='$verdictcup', rprt_verdictd='$verdictdup', rprt_verdicte='$verdicteup', rprt_verdictf='$verdictfup', rprt_verdictg='$verdictgup', rprt_verdicth='$verdicthup', rprt_verdicti='$verdictiup', rprt_verdictj='$verdictjup', rprt_verdictk='$verdictkup' WHERE rprt_id='$idrep'");


  $updatrev->execute();


  if ($updatrev===false) {
  	echo "ERROR";
  }else {
  	
   	
   	  
  	$resrep=$updatrev->get_result();

   	?>
   	<meta http-equiv="refresh" content="0;" />
   	<?php
   } 

?>
