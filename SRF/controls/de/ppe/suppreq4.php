
<?php
require('../zdfzfzef/de5.php');


	

  $suppoid11=$_POST['suppoid11'];
$ppeid14=$_POST['ppeido11'];
$suppo1=$_POST['suppo1'];
$addcommento=$_POST['addcommentop'];
$paymop=$_POST['paymop'];



  $addreq4 = "INSERT INTO srf_ppe_request VALUES ('', '$ppeid14', '" . $ppeid14 . "', '" . $suppo1 . "', '31', '" . $suppoid11. "', NOW(), 'not approved', '$paymop', '$addcommento')";
 
$resordr4 = mysqli_query($cdb,$addreq4) ;
$checkr4 = mysqli_fetch_array($resordr4);
if(isset($checkr4))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>