
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantityueg12'];
$resid=$_POST['residueg12'];


$rgap=$_POST['gapueg12'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '21')";
  $upData = "UPDATE work_ppe_eg SET wppe_quantity = '" . $quantity . "', wppe_last_update= NOW() WHERE wppe_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>