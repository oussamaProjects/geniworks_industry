
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantity15'];
$resid=$_POST['resid15'];


$rgap=$_POST['gap15'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '11')";
  $upData = "UPDATE work_ppe_apm1 SET wppe_quantity = '" . $quantity . "', wppe_last_update= NOW() WHERE wppe_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>