
<?php
require('../zdfzfzef/de5.php');


	

  $suppoid11=$_POST['suppoidtc311'];
$ppeid14=$_POST['ppeidtc3o11'];
$suppo1=$_POST['supptc3o1'];
$addcommento=$_POST['addcommenttc3op'];
$paymop=$_POST['paymtc3op'];



  $addreq4 = "INSERT INTO srf_ppe_request VALUES ('', '$ppeid14', '" . $ppeid14 . "', '" . $suppo1 . "', '32', '" . $suppoid11. "', NOW(), 'not approved', '$paymop', '$addcommento')";
 
$resordr4 = mysqli_query($cdb,$addreq4) ;
$checkr4 = mysqli_fetch_array($resordr4);
if(isset($checkr4))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>