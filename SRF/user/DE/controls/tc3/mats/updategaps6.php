
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantitytc36'];
$resid=$_POST['residtc3'];


$rgap=$_POST['gaptc36'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '32')";
  $upData = "UPDATE work_materials_tc3 SET wmt_quantity = '" . $quantity . "', wmt_last_update= NOW() WHERE wmt_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>