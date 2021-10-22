
<?php
require('../zdfzfzef/de5.php');


	

  $supp3=$_POST['supptc33'];
$toolid13=$_POST['toolidtc313'];
$suppid13=$_POST['suppidtc313'];


  $addreq3 = "INSERT INTO srf_tools_request VALUES ('', '$toolid13', '" . $toolid13 . "', '" . $supp3 . "', '32', '" . $suppid13 . "', NOW(), 'not approved')";
 
$resordr3 = mysqli_query($cdb,$addreq3) ;
$checkr3 = mysqli_fetch_array($resordr3);
if(isset($check3))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>