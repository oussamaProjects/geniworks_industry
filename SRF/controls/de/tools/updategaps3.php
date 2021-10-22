
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantityde3'];
$resid=$_POST['residde'];


$rgap=$_POST['gapde3'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '31')";
  $upData = "UPDATE work_tools_de SET wtl_quantity = '" . $quantity . "', wtl_last_update= NOW() WHERE wtl_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>