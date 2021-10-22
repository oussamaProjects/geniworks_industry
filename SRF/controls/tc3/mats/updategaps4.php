
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantitymattc34'];
$resid=$_POST['residmattc34'];


$rgap=$_POST['gapmattc34'];
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