
<?php
require('../zdfzfzef/de5.php');


	

  $quantity=$_POST['quantitym27'];
$resid=$_POST['residm27'];


$rgap=$_POST['gapm27'];
  $addData = "INSERT INTO resources_gaps_frequency VALUES ('', '" . $resid . "', '" . $quantity . "', '" . $rgap . "', NOW(), '21')";
  $upData = "UPDATE work_materials_eg SET wmt_quantity = '" . $quantity . "', wmt_last_update= NOW() WHERE wmt_internal_id = '" . $resid . "'";
$result = mysqli_query($cdb,$addData) && mysqli_query($cdb,$upData);
$check = mysqli_fetch_array($result);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>