
<?php
require('../zdfzfzef/de5.php');


	

  $supp4=$_POST['supp212p'];
$toolid14=$_POST['toolid212p'];
$suppid14=$_POST['suppid212p'];
$addcommentp=$_POST['addcommentp22'];
$paymmp=$_POST['paymmp22'];



  $addreq4 = "INSERT INTO srf_ppe_request VALUES ('', '$toolid14$suppid14', '" . $toolid14 . "', '" . $supp4 . "', '21', '" . $suppid14 . "', NOW(), 'not approved', '$paymmp', '$addcommentp')";
 
$resordr4 = mysqli_query($cdb,$addreq4) ;
$checkr4 = mysqli_fetch_array($resordr4);
if(isset($checkr4))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>