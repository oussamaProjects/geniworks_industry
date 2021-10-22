
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['standard2m'];
$resid=$_POST['tid2m'];


$act1=$_POST['actual2m'];

$upData = "UPDATE work_materials_eg SET wmt_standard = '" . $quantity . "', wmt_quantity = '" . $act1 . "', wmt_last_update= NOW() WHERE wmt_internal_id = '" . $resid . "'";
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