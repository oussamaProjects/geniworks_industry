
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantityeg1'];
$resid=$_POST['resideg'];


$rgap=$_POST['gapeg1'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '21')";
  $upData = "UPDATE work_tools_eg SET wtl_quantity = '" . $quantity . "', wtl_last_update= NOW() WHERE wtl_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>