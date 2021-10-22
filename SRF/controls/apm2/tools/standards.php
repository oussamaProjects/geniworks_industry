
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standard12'];
$resid=$_POST['tid12'];


$act1=$_POST['actual12'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '0', NOW(), '12')";
  $upData = "UPDATE work_tools_apm2 SET wtl_standard = '" . $quantity . "', wtl_quantity = '" . $act1 . "', wtl_last_update= NOW() WHERE wtl_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>