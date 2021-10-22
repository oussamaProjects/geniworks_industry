
<?php
require('../zdfzfzef/de5.php');
$apriddemats = $_POST['apridtc3mats'];
  $apprData = "UPDATE srf_materials_request SET str_status = 'approved' WHERE str_owner = '32' AND str_id=$apriddemats";
$resultap = mysqli_query($cdb,$apprData) ;
$check = mysqli_fetch_array($resultap);
if(isset($check))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>