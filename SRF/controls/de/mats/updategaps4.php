
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantitymatde4'];
$resid=$_POST['residmatde4'];


$rgap=$_POST['gapmatde4'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '31')";
  $upData = "UPDATE work_materials_de SET wmt_quantity = '" . $quantity . "', wmt_last_update= NOW() WHERE wmt_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>