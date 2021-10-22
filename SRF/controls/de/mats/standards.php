
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standarddem1'];
$resid=$_POST['tiddem1'];


$act1=$_POST['actualdem1'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '31')";
  $upData = "UPDATE work_materials_de SET wmt_standard = '" . $quantity . "', wmt_quantity = '" . $act1 . "', wmt_last_update= NOW() WHERE wmt_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>