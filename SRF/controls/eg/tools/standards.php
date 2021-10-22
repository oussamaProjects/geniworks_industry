
<?php
require('../zdfzfzef/de5.php');

$standard=$_POST['standardeg'];
$resid=$_POST['tideg'];
$act1=$_POST['actualeg'];
$gap=$act1-$standard;

  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $standard . "', '".$gap."', NOW(), '21')";
  $upData = "UPDATE work_tools_eg SET wtl_standard = '" . $standard . "', wtl_quantity = '" . $act1 . "', wtl_last_update= NOW() WHERE wtl_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>