
<?php
require('../zdfzfzef/de5.php');
$apridapm1tool = $_POST['apridapm1tool'];
  $apprData = "UPDATE srf_tools_request SET str_status = 'approved' WHERE str_owner = '11' AND str_id=$apridapm1tool";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>