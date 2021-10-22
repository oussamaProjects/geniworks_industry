
<?php
require('../zdfzfzef/de5.php');
$apriddeppe = $_POST['apridtc3ppe'];
  $apprData = "UPDATE srf_ppe_request SET str_status = 'approved' WHERE str_owner = '32' AND str_id=$apriddeppe";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>