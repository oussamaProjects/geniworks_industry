
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standard11a'];
$resid=$_POST['tida1'];


$act1=$_POST['actual11a'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '12')";
  $upData = "UPDATE work_ape_apm2 SET wape_standard = '" . $quantity . "', wape_quantity = '" . $act1 . "', wape_last_update= NOW() WHERE wape_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>