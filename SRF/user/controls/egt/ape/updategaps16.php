
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantitya216'];
$resid=$_POST['resida216'];
$rgap=$_POST['gapa216'];

  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '21')";
  $upData = "UPDATE work_ape_eg SET wape_quantity = '" . $quantity . "', wape_last_update= NOW() WHERE wape_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>