
<?php
require('../zdfzfzef/de5.php');

$standard=$_POST['standardde31'];
$resid=$_POST['tidde31'];
$act1=$_POST['actualde31'];


  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $standard . "', '0', NOW(), '31')";
  $upData = "UPDATE work_tools_de SET wtl_standard = '" . $standard . "', wtl_quantity = '" . $act1 . "', wtl_last_update= NOW() WHERE wtl_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>