
<?php
require('../zdfzfzef/de5.php');

$agentid=$_POST['agentid'];

  $apprData = "UPDATE agents SET ag_name = '$upname', ag_phone ='$upphone', ag_adress ='$upadress1' WHERE ag_id = '$agentid'";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>