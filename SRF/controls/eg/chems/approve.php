
<?php
require('../zdfzfzef/de5.php');

  $apprData = "UPDATE srf_chemicals_request SET str_status = 'approved' WHERE str_owner = '21'";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>