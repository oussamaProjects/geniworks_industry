
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantityu18'];
$resid=$_POST['resid18'];


$rgap=$_POST['gapu18'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '31')";
  $upData = "UPDATE work_ape_de SET wape_quantity = '" . $quantity . "', wape_last_update= NOW() WHERE wape_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>