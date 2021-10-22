
<?php
require('../zdfzfzef/de5.php');
$apridtc3ape = $_POST['apridtc3ape'];
  $apprData = "UPDATE srf_ape_request SET str_status = 'approved' WHERE str_owner = '32' AND str_id=$apridtc3ape";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>