
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standarddec31'];
$resid=$_POST['tiddec31'];


$act1=$_POST['actualdec31'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '31')";
  $upData = "UPDATE work_chemicals_de SET wch_standard = '" . $quantity . "', wch_quantity = '" . $act1 . "', wch_last_update= NOW() WHERE wch_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>