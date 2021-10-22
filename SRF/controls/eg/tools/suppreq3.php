
<?php
require('../zdfzfzef/de5.php');


	

  $supp3=$_POST['suppeg3'];
$toolid13=$_POST['toolideg13'];
$suppid13=$_POST['suppideg13'];


  $addreq3 = "INSERT INTO srf_tools_request VALUES ('', '$toolid13', '" . $toolid13 . "', '" . $supp3 . "', '21', '" . $suppid13 . "', NOW(), 'not approved')";
 
$resordr3 = mysqli_query($cdb,$addreq3) ;
$checkr3 = mysqli_fetch_array($resordr3);
if(isset($check3))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>