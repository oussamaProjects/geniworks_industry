
<?php
require('../zdfzfzef/de5.php');
$apridapm1chems = $_POST['apridapm1chems'];
  $apprData = "UPDATE srf_chemicals_request SET str_status = 'approved' WHERE str_owner = '11' AND str_id=$apridapm1chems";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>