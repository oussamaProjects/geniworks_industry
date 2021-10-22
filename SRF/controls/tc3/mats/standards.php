
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standardtc31m'];
$resid=$_POST['tidtc3m'];


$act1=$_POST['actual1m'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '32')";
  $upData = "UPDATE work_materials_tc3 SET wmt_standard = '" . $quantity . "', wmt_quantity = '" . $act1 . "', wmt_last_update= NOW() WHERE wmt_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>