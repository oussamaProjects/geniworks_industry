
<?php
require('../zdfzfzef/de5.php');
$apridegchems = $_POST['apridegchems'];
  $apprData = "UPDATE srf_chemicals_request SET str_status = 'approved' WHERE str_owner = '21' AND str_id=$apridegchems";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>