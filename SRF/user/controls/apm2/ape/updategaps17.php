
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantitya117'];
$resid=$_POST['resida117'];
$rgap=$_POST['gapa117'];

  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '12')";
  $upData = "UPDATE work_ape_apm2 SET wape_quantity = '" . $quantity . "', wape_last_update= NOW() WHERE wape_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>