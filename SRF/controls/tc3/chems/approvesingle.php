
<?php
require('../zdfzfzef/de5.php');
$apriddechems = $_POST['apridtc3chems'];
  $apprData = "UPDATE srf_chemicals_request SET str_status = 'approved' WHERE str_owner = '32' AND str_id=$apriddechems";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>