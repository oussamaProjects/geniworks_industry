
<?php
require('controls/zdze8efzedzdeezd/de5.php');

$iduser=$_SESSION['nmu'];
$expid=$_POST['expid'];



  $archexp=$cdb->prepare("UPDATE expences SET exp_status='archived', exp_updated=NOW(), exp_updated_by='$iduser' WHERE exp_id='$expid'");
  $archexp->execute();
  if ($archexp===false) {
  	echo "ops! something happend. try later or contact us.";
  }else{
  	$resexp=$archexp->get_result();
  }
?>
<meta http-equiv="refresh" content="0;" />


