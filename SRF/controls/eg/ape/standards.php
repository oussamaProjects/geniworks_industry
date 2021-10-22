
<?php
require('../zdfzfzef/de5.php');


	

$quantity=$_POST['standardega'];
$resid=$_POST['tidega'];
$act1=$_POST['actualega'];

  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '21')";
  $upData = "UPDATE work_ape_eg SET wape_standard = '" . $quantity . "', wape_quantity = '" . $act1 . "', wape_last_update= NOW() WHERE wape_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>