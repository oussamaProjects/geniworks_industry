
<?php
require('../zdfzfzef/de5.php');
$apriddetool = $_POST['apriddetool'];
  $apprData = "UPDATE srf_tools_request SET str_status = 'approved' WHERE str_owner = '31' AND str_id=$apriddetool";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>