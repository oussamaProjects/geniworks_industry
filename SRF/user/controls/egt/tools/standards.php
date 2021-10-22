
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standardt22'];
$resid=$_POST['tidt22'];


$act1=$_POST['actual2t2'];

$upData = "UPDATE work_tools_eg SET wtl_standard = '" . $quantity . "', wtl_quantity = '" . $act1 . "', wtl_last_update= NOW() WHERE wtl_internal_id = '" . $resid . "'";
 $gapf=$quantity-$act1;
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '$gapf', NOW(), '21')";
 
  
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>