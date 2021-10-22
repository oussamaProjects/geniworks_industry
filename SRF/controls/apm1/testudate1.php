<?php
$quantity=$_POST['quantity'];
$resid=$_POST['resid'];
$rgap=$_POST['rgap'];
require('zdfzfzef/de5.php');
$upgp=$cdb->prepare("INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '11')");
$upgp->execute();
if ($upgp===false) {
  echo "We Have Problem In Equipment Data Export Issue!";
}
else{
  $upgpr=$upgp->get_result();
  echo "<meta http-equiv='refresh' content='0;'>";
}
?>