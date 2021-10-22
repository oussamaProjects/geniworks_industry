
<?php
require('../zdfzfzef/de5.php');
$apridapm1mats = $_POST['apridapm1mats'];
  $apprData = "UPDATE srf_materials_request SET str_status = 'approved' WHERE str_owner = '11' AND str_id=$apridapm1mats";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>