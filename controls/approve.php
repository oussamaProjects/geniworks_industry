
<?php
require('../zdfzfzef/de5.php');

  $apprData = "UPDATE srf_ppe_request SET str_status = 'archived' WHERE str_owner = '11'";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>