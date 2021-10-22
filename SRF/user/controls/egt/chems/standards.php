
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standard2c'];
$resid=$_POST['tid2c'];


$act1=$_POST['actual2c'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '21')";
  $upData = "UPDATE work_chemicals_eg SET wch_standard = '" . $quantity . "', wch_quantity = '" . $act1 . "', wch_last_update= NOW() WHERE wch_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>