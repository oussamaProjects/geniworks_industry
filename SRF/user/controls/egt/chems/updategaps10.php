
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantity10'];
$resid=$_POST['resid'];


$rgap=$_POST['gap10'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '21')";
  $upData = "UPDATE work_chemicals_eg SET wch_quantity = '" . $quantity . "', wch_last_update= NOW() WHERE wch_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>