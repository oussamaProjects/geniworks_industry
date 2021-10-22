
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standardapm1m'];
$resid=$_POST['apm1mid'];


$act1=$_POST['actualapm1m'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '11')";
  $upData = "UPDATE work_materials_apm1 SET wmt_standard = '" . $quantity . "', wmt_quantity = '" . $act1 . "', wmt_last_update= NOW() WHERE wmt_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>