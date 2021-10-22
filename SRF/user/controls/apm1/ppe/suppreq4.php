
<?php
require('../zdfzfzef/de5.php');


	

  $supp4=$_POST['suppu1p'];
$toolid14=$_POST['toolidu1p'];
$suppid14=$_POST['suppidu1p'];
$addcommentp=$_POST['addcommentpu'];
$paymmp=$_POST['paymmpu'];



  $addreq4 = "INSERT INTO srf_ppe_request VALUES ('', '$toolid14$suppid14', '" . $toolid14 . "', '" . $supp4 . "', '11', '" . $suppid14 . "', NOW(), 'not approved', '$paymmp', '$addcommentp')";
 
$resordr4 = mysqli_query($cdb,$addreq4) ;
$checkr4 = mysqli_fetch_array($resordr4);
if(isset($checkr4))
{
    echo "Working";

  } else {
    echo "Not working";
  }


?>