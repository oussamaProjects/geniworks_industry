
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantitytc32'];
$resid=$_POST['residtc3'];


$rgap=$_POST['gaptc32'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '32')";
  $upData = "UPDATE work_tools_tc3 SET wtl_quantity = '" . $quantity . "', wtl_last_update= NOW() WHERE wtl_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>