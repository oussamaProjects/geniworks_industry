
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standardapm1c'];
$resid=$_POST['tidapm1c'];


$act1=$_POST['actualapm1c'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '11')";
  $upData = "UPDATE work_chemicals_apm1 SET wch_standard = '" . $quantity . "', wch_quantity = '" . $act1 . "', wch_last_update= NOW() WHERE wch_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>