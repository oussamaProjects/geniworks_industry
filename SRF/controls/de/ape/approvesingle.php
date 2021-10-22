
<?php
require('../zdfzfzef/de5.php');
$apridape = $_POST['apridape'];
  $apprData = "UPDATE srf_ape_request SET str_status = 'approved' WHERE str_owner = '31' AND str_id=$apridape";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>