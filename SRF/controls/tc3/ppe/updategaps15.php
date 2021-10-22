
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantitytc3ppea15'];
$resid=$_POST['residtc3ppea15'];


$rgap=$_POST['gaptc3ppea15'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '32')";
  $upData = "UPDATE work_ppe_tc3 SET wppe_quantity = '" . $quantity . "', wppe_last_update= NOW() WHERE wppe_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>