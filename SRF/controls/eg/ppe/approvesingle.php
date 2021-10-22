
<?php
require('../zdfzfzef/de5.php');
$apridegppe = $_POST['apridegppe'];
  $apprData = "UPDATE srf_ppe_request SET str_status = 'approved' WHERE str_owner = '21' AND str_id=$apridegppe";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>