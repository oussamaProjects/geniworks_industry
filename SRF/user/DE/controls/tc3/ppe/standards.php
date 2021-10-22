
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standardtc31p'];
$resid=$_POST['tidtc3p'];


$act1=$_POST['actualtc31p'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '11')";
  $upData = "UPDATE work_ppe_apm1 SET wppe_standard = '" . $quantity . "', wppe_quantity = '" . $act1 . "', wppe_last_update= NOW() WHERE wppe_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>