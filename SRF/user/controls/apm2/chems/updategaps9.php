
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantityc19'];
$resid=$_POST['residc19'];


$rgap=$_POST['gapc19'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '12')";
  $upData = "UPDATE work_chemicals_apm2 SET wch_quantity = '" . $quantity . "', wch_last_update= NOW() WHERE wch_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>