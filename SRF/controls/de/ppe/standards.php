
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standarddep31'];
$resid=$_POST['tiddep31'];


$act1=$_POST['actualdep31'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '31')";
  $upData = "UPDATE work_ppe_de SET wppe_standard = '" . $quantity . "', wppe_quantity = '" . $act1 . "', wppe_last_update= NOW() WHERE wppe_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>