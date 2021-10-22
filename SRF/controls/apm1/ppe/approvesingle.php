
<?php
require('../zdfzfzef/de5.php');
$apridapm1ppe = $_POST['apridapm1ppe'];
  $apprData = "UPDATE srf_ppe_request SET str_status = 'approved' WHERE str_owner = '11' AND str_id=$apridapm1ppe";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>