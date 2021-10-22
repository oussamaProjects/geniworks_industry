
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standard11p'];
$resid=$_POST['tidp1'];


$act1=$_POST['actual1p'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '12')";
  $upData = "UPDATE work_ppe_apm2 SET wppe_standard = '" . $quantity . "', wppe_quantity = '" . $act1 . "', wppe_last_update= NOW() WHERE wppe_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>